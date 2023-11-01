<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RolesPrivilegesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentHistoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WalletController;

Route::match(['get', 'post'], 'login', [EmployeeController::class, 'loginProcess'])->name('login.process');

Route::middleware(['loginAuth'])->group(function () {

    /* =====[ Dashboard ]===== */
    Route::get('dashboard-page', [EmployeeController::class, 'dashboardPage'])->name('dashboard.home');
    Route::get('dashboard-vendor', [EmployeeController::class, 'vendor_dashboard'])->name('dashboard.vendor');

    /* =====[ Employee Management ]===== */
    Route::match(['get', 'post'], 'employee-list', [EmployeeController::class, 'employeeList'])->name('list.employee');
    Route::match(['get', 'post'], 'employee-new', [EmployeeController::class, 'employeeNew'])->name('new.employee');
    Route::match(['get', 'post'], 'employee-edit/{id}', [EmployeeController::class, 'employeeEdit'])->name('edit.employee');
    Route::match(['get', 'post'], 'employee-action', [EmployeeController::class, 'employeeAction'])->name('action.employee');
    Route::post('states', [EmployeeController::class, 'statesList'])->name('states.ajax');
    Route::post('cities', [EmployeeController::class, 'CitiesList'])->name('cities.ajax');


    /* =====[ Department and Privileges ]===== */
    Route::get('department-list', [RolesPrivilegesController::class, 'rolesList'])->name('list.roles');
    Route::match(['get', 'post'], 'department-new', [RolesPrivilegesController::class, 'rolesNew'])->name('new.roles');
    Route::match(['get', 'post'], 'department-edit/{id}', [RolesPrivilegesController::class, 'rolesEdit'])->name('edit.roles');
    Route::match(['get', 'post'], 'department-remove/{id}', [RolesPrivilegesController::class, 'rolesRemove'])->name('remove.roles');
    Route::match(['get', 'post'], 'privileges/{id}', [RolesPrivilegesController::class, 'privilegesList'])->name('privileges');


    /* =====[ Customer Management ]===== */
    Route::get('customer-list', [CustomerController::class, 'customersList'])->name('list.customers');
    Route::match(['get', 'post'], 'customer-new', [CustomerController::class, 'customerNew'])->name('new.customer');
    Route::match(['get', 'post'], 'customer-edit/{id}', [CustomerController::class, 'customerEdit'])->name('edit.customer');
    Route::match(['get', 'post'], 'customer-remove/{id}', [CustomerController::class, 'customersRemove'])->name('remove.customer');


    /* =====[ Hospital Management ]===== */
    Route::match(['get', 'post'], 'vendor-new-setup', [HospitalController::class, 'vendorNewSetup'])->name('vendor.new.setup');
    Route::match(['get', 'post'], 'vendor-new-step-01/{token}', [HospitalController::class, 'vendorNewToken01'])->name('vendor.new.step.01');


    /* =====[ Vendor Management ]===== */
    Route::get('labs-list', [ClientsController::class, 'labsList'])->name('labs.list');
    Route::get('labs-diagnosis-csv', [ClientsController::class, 'labsDiagnosisCsv'])->name('labs.diagnosis.csv');


    Route::match(['get', 'post'], 'vendor-new-path-lab', [VendorController::class, 'vendorNewPathLab'])->name('vendor.new.path.lab');
    // Route::match(['get', 'post'], 'vendor-new-path-lab-list', [VendorController::class, 'vendorNewPathLabList'])->name('vendor.new.path.lab');
    Route::match(['get', 'post'], 'vendor-new-radiology-diagnostics', [VendorController::class, 'vendorNewRadiologyDiagnostics'])->name('vendor.new.radiology.diagnostics');
    Route::match(['get', 'post'], 'vendor-new-hospitals-others', [VendorController::class, 'vendorNewHospitalsOthers'])->name('vendor.new.hospitals.others');
    Route::match(['get', 'post'], 'vendor-new-doctors-other', [VendorController::class, 'vendorNewDoctorsOther'])->name('vendor.new.doctors.other');
    Route::match(['get', 'post'], 'vendor-new-healthcare-professionals', [VendorController::class, 'vendorNewHealthcareProfessionals'])->name('vendor.new.healthcare.professionals');
    Route::match(['get', 'post'], 'vendor-new-htm-consumables-suplliers', [VendorController::class, 'vendorNewHtmConsumablesSuplliers'])->name('vendor.new.htm.consumables.suplliers');


    /* =====[ Client Management ]===== */
    Route::get('labs-diagnostics-list', [ClientsController::class, 'labsDiagnosticsList'])->name('labs.diagnostics.list');
    Route::get('list-end-custumers', [ClientsController::class, 'listendCustumers'])->name('list.end.custumers');
    Route::get('end-custumers', [ClientsController::class, 'endCustumers'])->name('end.custumers');
    Route::get('list-business-clients', [ClientsController::class, 'businessClientslist'])->name('list.business.clients');
    Route::get('business-clients', [ClientsController::class, 'businessClients'])->name('business.clients');


    /* =====[ Packages Management ]===== */
    Route::get('packages-list', [ClientsController::class, 'packagesList'])->name('packages.list');
    Route::get('create-diagnostics-packages', [ClientsController::class, 'createDiagnosticsPackages'])->name('create.diagnostics.packages');

    /* =====[ Order Management ]===== */

    Route::get('order-end-customer', [OrderController::class, 'end_customer_order'])->name('order.end.customer');
    Route::get('order-business-clients', [OrderController::class, 'business_clients_order'])->name('order.business.clients');
    Route::get('view-order-business-clients', [OrderController::class, 'business_clients_order_view'])->name('order.view.business.clients');
    Route::get('assign-lab', [OrderController::class, 'assign_lab'])->name('assign.lab');
    Route::get('assign-lab-form', [OrderController::class, 'assign_lab_form'])->name('assignlab.form');
    Route::post('pushData-to-lab', [OrderController::class, 'send_data_to_lab'])->name('sendData.labAPI');
    Route::get('lab-data', [OrderController::class, 'data_from_lab'])->name('lab.data');
    /* =====[ Payment History ]===== */

    Route::get('payment-end-customer', [PaymentHistoryController::class, 'end_customer_payment'])->name('payment.end.customer');
    Route::get('payment-business-clients', [PaymentHistoryController::class, 'business_clients_payment'])->name('payment.business.clients');
    
    /* =====[ Settings ]===== */

    Route::get('setting', [SettingController::class, 'index'])->name('setting.home');

    /* =====[ Wallet Details ]===== */

    Route::match(['get', 'post'], 'wallet-details/{id}', [WalletController::class, 'wallet_details'])->name('wallet.details');
    Route::match(['get', 'post'], 'add-wallet', [WalletController::class, 'add_money_in_wallet'])->name('wallet.addmoney');
    //Route::match(['get', 'post'], 'wallet-return', [WalletController::class, 'return_payment'])->name('wallet.returnurl');
    //Route::post('wallet-return', [WalletController::class, 'return_payment'])->name('wallet.returnurl');
    
});
//Route::get('/return_payment', [WalletController::class, 'return_payment']);
Route::match(['get', 'post'], '/return_payment', [WalletController::class, 'return_payment']);

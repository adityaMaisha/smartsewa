<?php

namespace App\Http\Controllers;

use Excel;
use App\Models\countries;
use Illuminate\Http\Request;
use App\Models\VendorPathLab;
use App\Imports\DiagnosticsImport;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{

    public function vendorNewPathLab(Request $request)
    {
        try {

            if ($request->isMethod('post')) {

                $validator = Validator::make($request->all(), [
                    'vendor_name' => 'required|string',
                    'head_name' => 'required|string',
                    'services' => 'required|string',
                    'address' => 'required|string',
                    'employee_profile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'mobile_number' => 'required|digits:10',
                    'email_id' => 'required|email',
                    'country' => 'required',
                    'state' => 'required',
                    'city' => 'required',
                    'office_email' => 'required|email',
                    'password' => 'required|min:8',
                    'contact_person_name' => 'nullable|string',
                    'contact_per_mobile' => 'required|digits:10',
                    'adhaar_card_number' => 'required|digits:12',
                    'pan_card_number' => 'required|regex:/[A-Z]{5}[0-9]{4}[A-Z]{1}/',
                    'gst_number' => 'required|string',
                    'registration_docs' => 'file|max:2048',
                    'upload_pan_card_attachment' => 'file|max:2048',
                    'gst_certificate' => 'file|max:2048',
                    'upload_other_documents' => 'file|max:2048',
                    'employee_bank_name' => 'required|string',
                    'bank_account_holder_name' => 'required|string',
                    'bank_account_type' => 'required|in:saving,current',
                    'bank_account_number' => 'required|digits_between:5,20',
                    'confirm_account_number' => 'required|numeric',
                    'bank_ifsc_code' => 'required|string',
                    'bank_branch' => 'required|string',
                    'reference_name' => 'nullable|string',
                ]);

                if ($validator->fails()) {
                    if ($request->ajax()) {
                        return response()->json(['success' => false, 'errors' => $validator->errors(), 'message' => $validator->errors()->first()]);
                    } else {
                        return redirect()->back()->withErrors($validator)->withInput();
                    }
                }

                $vendor = new VendorPathLab([
                    'vendor_id' => 'VEN_'.strtoupper(uniqid()),
                    'vendor_name' => $request->input('vendor_name', NULL),
                    'head_name' => $request->input('head_name', NULL),
                    'services' => $request->input('services', NULL),
                    'address' => $request->input('address', NULL),
                    'mobile_number' => $request->input('mobile_number', NULL),
                    'email_id' => $request->input('email_id', NULL),
                    'country' => $request->input('country', NULL),
                    'state' => $request->input('state', NULL),
                    'city' => $request->input('city', NULL),
                    'office_email' => $request->input('office_email', NULL),
                    'password' => Hash::make($request->input('password', NULL)), // Securely hash the password
                    'contact_person_name' => $request->input('contact_person_name', NULL),
                    'contact_per_mobile' => $request->input('contact_per_mobile', NULL),
                    'adhaar_card_number' => $request->input('adhaar_card_number', NULL),
                    'pan_card_number' => $request->input('pan_card_number', NULL),
                    'gst_number' => $request->input('gst_number', NULL),
                    'employee_bank_name' => $request->input('employee_bank_name', NULL),
                    'bank_account_holder_name' => $request->input('bank_account_holder_name', NULL),
                    'bank_account_type' => $request->input('bank_account_type', NULL),
                    'bank_account_number' => $request->input('bank_account_number', NULL),
                    'confirm_account_number' => $request->input('confirm_account_number', NULL),
                    'bank_ifsc_code' => $request->input('bank_ifsc_code', NULL),
                    'bank_branch' => $request->input('bank_branch', NULL),
                    'reference_name' => $request->input('reference_name', NULL),
                    'vendor_status' => 'active',
                    'created_at' => date('Y-m-d H:i:s') ?? NULL,
                    'updated_at' => date('Y-m-d H:i:s') ?? NULL,
                ]);

                $uploadedFiles = [];

                // Input Multiple Files for Upload
                if ($request->hasFile('upload_other_documents')) {
                    $files = $request->file('upload_other_documents');
                    foreach ($files as $file) {
                        if ($file->isValid()) {
                            $filePath = $file->storePublicly('documents', 'public');
                            $uploadedFiles['upload_other_documents'][] = basename($filePath); // Extract the file name
                        }
                    }
                }

                // Input Single, Single File For Upload
                $fileInputs = [
                    'employee_profile',
                    'registration_docs',
                    'upload_pan_card_attachment',
                    'gst_certificate'
                ];

                foreach ($fileInputs as $inputName) {
                    if ($request->hasFile($inputName) && $request->file($inputName)->isValid()) {
                        $filePath = $request->file($inputName)->storePublicly('documents', 'public');
                        $uploadedFiles[$inputName] = basename($filePath); // Extract the file name
                    }
                }

                // Array to comma seprated multiple files in array
                if (array_key_exists('upload_other_documents', $uploadedFiles)) {
                    $uploadedFiles['upload_other_documents'] = implode(',', $uploadedFiles['upload_other_documents']);
                }

                $vendor->fill($uploadedFiles);

                if ($vendor->save()) {
                    return response()->json(['success' => true, 'errors' => null, 'message' => 'vendor Created Successfully']);
                } else {
                    return response()->json(['success' => false, 'errors' => null, 'message' => 'Failed']);
                }

            } else {


                // Excel::import( new DiagnosticsImport, 'sample_file.xlsx' );
                // dd('hello sachin');


                return view('admin.vendor.path_lab_create', [
                    'countries' => countries::get()
                ]);

            }
        } catch (\Exception $e) {
            $message = config('app.env') === 'production' ? 'Unexpected Failed' : $e->getMessage();
            return response()->json(['success' => false, 'message' => $message]);
        }
    }


    public function vendorNewRadiologyDiagnostics(Request $request)
    {
        if ($request->isMethod('post')) {
            prx( $request->all() );
        } else {
            return view('admin.vendor.radiology_diagnosticscreate');
        }
    }

    public function vendorNewHospitalsOthers(Request $request)
    {
        if ($request->isMethod('post')) {
            prx( $request->all() );
        } else {
            return view('admin.vendor.vendorNewHospitalsOthersCreate');
        }
    }

    public function vendorNewDoctorsOther(Request $request)
    {
        if ($request->isMethod('post')) {
            prx( $request->all() );
        } else {
            return view('admin.vendor.vendorNewDoctorsOtherCreate');
        }
    }

    public function vendorNewHealthcareProfessionals(Request $request)
    {
        if ($request->isMethod('post')) {
            prx( $request->all() );
        } else {
            return view('admin.vendor.vendorNewHealthcareProfessionalsCreate');
        }
    }

    public function vendorNewHtmConsumablesSuplliers(Request $request)
    {
        if ($request->isMethod('post')) {
            prx( $request->all() );
        } else {
            return view('admin.vendor.vendorNewHtmConsumablesSuplliersCreate');
        }
    }

}

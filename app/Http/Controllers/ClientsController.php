<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\VendorPathLab;

class ClientsController extends Controller
{
    public function labsList()
    {
        return view('admin.lab.list', [
            'getVendorPathLab' => VendorPathLab::get()
        ]);
    }

    public function labsDiagnosticsList()
    {
        return view('admin.lab.labsDiagnosticsList');
    }

    public function packagesList()
    {
        return view('admin.diagnostics.diagnostics-packages');
    }

    public function createDiagnosticsPackages()
    {
        return view('admin.diagnostics.create-diagnostics-packages');
    }

    public function endCustumers()
    {
        return view('admin.customer.endCustumers');
    }

    public function businessClients()
    {
        return view('admin.customer.businessClients');
    }

    public function labsDiagnosisCsv()
    {

    }

    public function listendCustumers()
    {
        return view('admin.customer.endCustumerslist');
    }

    public function businessClientslist()
    {
        return view('admin.customer.businessClientslist');
    }

}

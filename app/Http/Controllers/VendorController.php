<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class VendorController extends Controller
{

    public function vendorNewPathLab(Request $request)
    {
        if ($request->isMethod('post')) {
            prx( $request->all() );
        } else {
            return view('admin.vendor.path_lab_create');
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

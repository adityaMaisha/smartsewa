<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function vendorNewSetup(Request $request)
    {
        try {

            if ( request()->isMethod('post') ) {

                return response()->json(['success' => true, 'url' => route('vendor.new.step.01', 123123), 'msg' => 'next step open']);

            }else{
                return view('admin/hospital/hospital-step-0');
            }

        } catch (\Exception $e) {
            prx(['error' => $e->getMessage(), 'line' => $e->getLine()]);
        }
    }

    public function vendorNewToken01(Request $request, $nextToken){

        try {
            if ( request()->isMethod('post') ) {

                prx( $request->all() );

            }else{
                return view('admin/hospital/hospital-step-1');
            }

        } catch (\Exception $e) {
            prx(['error' => $e->getMessage(), 'line' => $e->getLine()]);
        }

    }

}

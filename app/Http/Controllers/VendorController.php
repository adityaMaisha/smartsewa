<?php

namespace App\Http\Controllers;

use Excel;
use App\Models\countries;
use Illuminate\Http\Request;
use App\Models\VendorPathLab;
use App\Models\Admin;
use App\Models\RadiologyDiagnoseVendor;
use App\Imports\DiagnosticsImport;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
                    'upload_other_documents' => 'max:2048',
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
                // dd($request->all());
                $admin = Admin::create([
                    'name' => $request->input('vendor_name', NULL),
                    'email' => $request->input('email_id', NULL),
                    'password' => Hash::make($request->input('password', NULL)),
                    'roleType'=>$request->vendor_type,
                    'trash'=>'0'
                ]);
                $vendor_id = 'VEN_'.strtoupper(uniqid());
                $vendor = new VendorPathLab([
                    'admin_id'=>$admin->_id,
                    'vendor_id' => $vendor_id,
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
                    'trash'=>'0',
                    'bank_city'=>$request->bank_city,
                    'care'=>$request->care
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

    public function vendorEditPathLab($id){
        $vendor = VendorPathLab::where('_id',decrypt($id))->first();
        return view('admin.vendor.path_lab_edit',[
            'countries' => countries::get()
        ],compact('vendor'));
    }
    public function vendorShowPathLab($id){
        // dd('helllo');
        $vendor = VendorPathLab::where('_id',decrypt($id))->first();
        return view('admin.vendor.path_lab_show',[
            'countries' => countries::get()
        ],compact('vendor'));
    }
    public function vendorUpdatePathLab(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'vendor_name' => 'required|string',
            'head_name' => 'required|string',
            'services' => 'required|string',
            'address' => 'required|string',
            'employee_profile' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'mobile_number' => 'required|digits:10',
            'email_id' => 'required|email',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'office_email' => 'required|email',
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
        $vendorUpdate = [
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
            'updated_at' => date('Y-m-d H:i:s') ?? NULL,
            'bank_city'=>$request->bank_city
        ];
        $vendor = VendorPathLab::where('admin_id',decrypt($id))->update($vendorUpdate);
        $admin = Admin::where('_id',decrypt($id))->update([
            'name' => $request->input('vendor_name', NULL),
            'email' => $request->input('email_id', NULL)
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
        if($uploadedFiles){
            $vendor->fill($uploadedFiles);
        }
        return response()->json(['success' => true, 'errors' => null, 'message' => 'vendor Created Successfully']);
        // dd($request->all(),decrypt($id));
    }
    public function vendorGetPathLab($id){
        $getData = VendorPathLab::where('_id', decrypt($id))->first();
        return response()->json([
            'message'=>'data retrieved',
            'data'=>$getData
        ],200);
    }


    public function vendorNewRadiologyDiagnostics(Request $request)
    {
        try{
            if ($request->isMethod('post')) {
                 $this->validate($request, [
                    "vendor_name"=>'required',
                    "head_name"=>'required',
                    "services"=>'required',
                    "address"=>'required',
                    "email_id"=>'required',
                    "mobile_number"=>'required',
                    "country"=>'required',
                    "state"=>'required',
                    "city"=>'required',
                    "mapLocation"=>'required',
                    "shortBrief"=>'required',
                    "office_email"=>'required',
                    "password"=>'required',
                    "contact_person_name"=>'required',
                    "contact_per_mobile"=>'required',
                    "adhaar_card_number"=>'required',
                    "pan_card_number"=>'required',
                    "employee_bank_name"=>'required',
                    "bank_account_holder_name"=>'required',
                    "bank_account_type"=>'required',
                    "bank_account_number"=>'required',
                    "confirm_account_number"=>'required',
                    "bank_ifsc_code"=>'required',
                    "bank_branch"=>'required',
                    "bank_city"=>'required',
                    "reference_name"=>'required',
                    "employee_profile"=>'required',
                    "gst_certificate"=>'required',
                    "upload_pan_card_attachment"=>'required',
                    "registration_docs"=>'required',
                    "upload_other_documents"=>'required'
                ],[
                    "vendor_name.required"=>'Please fill vendor name field',
                    "head_name.required"=>'Please fill owner/business head name',
                    "services.required"=>'Please select services field',
                    "address.required"=>'Please fill address field',
                    "email_id.required"=>'Please fill email field',
                    "mobile_number.required"=>'Please fill mobile field',
                    "country.required"=>'Please select country field',
                    "state.required"=>'Please select state field',
                    "city.required"=>'Please select city field',
                    "mapLocation.required"=>'Please fill map location field',
                    "shortBrief.required"=>'Please fill short brief field',
                    "office_email.required"=>'Please fill office email field',
                    "password.required"=>'Please fill password field',
                    "contact_person_name.required"=>'Please fill contact person name field',
                    "contact_per_mobile.required"=>'Please fill contact person mobile field',
                    "adhaar_card_number.required"=>'Please fill adhaar card no field',
                    "pan_card_number.required"=>'Please fill PAN card no field',
                    "employee_bank_name.required"=>'Please fill bank name field',
                    "bank_account_holder_name.required"=>'Please fill account holder name field',
                    "bank_account_type.required"=>'Please fill account type field',
                    "bank_account_number.required"=>'Please fill account number field',
                    "confirm_account_number.required"=>'Please fill confirm account number field',
                    "bank_ifsc_code.required"=>'Please fill IFSC code field',
                    "bank_branch.required"=>'Please fill bank branch field',
                    "bank_city.required"=>'Please fill bank city field',
                    "reference_name.required"=>'Please fill reference field',
                    "employee_profile.required"=>'Please upload file in profile picture field',
                    "gst_certificate.required"=>'Please upload file in GST certificate field',
                    "upload_pan_card_attachment.required"=>'Please upload file in PAN card field',
                    "registration_docs.required"=>'Please upload file in Registeration certificate field',
                    "upload_other_documents.required"=>'Please upload file in other documents field'
                ]);
                $inputs = $request->all();
                unset($inputs['_token']);
                unset($inputs['gst_certificate']);
                unset($inputs['employee_profile']);
                unset($inputs['upload_pan_card_attachment']);
                unset($inputs['upload_other_documents']);
                unset($inputs['registration_docs']);
                unset($inputs['confirm_account_number']);
                $inputs['trash']="0";
                if($request->hasFile('employee_profile')){
                    $employee_profile = $request->file('employee_profile')->store('radiology_diagnostics_vendor_files','public');
                    $inputs['employee_profile'] = $employee_profile;
                }
                if($request->hasFile('gst_certificate')){
                    $gst_certificate = $request->file('gst_certificate')->store('radiology_diagnostics_vendor_files','public');
                    $inputs['gst_certificate'] = $gst_certificate;
                }
                if($request->hasFile('upload_pan_card_attachment')){
                    $upload_pan_card_attachment = $request->file('upload_pan_card_attachment')->store('radiology_diagnostics_vendor_files','public');
                    $inputs['upload_pan_card_attachment'] = $upload_pan_card_attachment;
                }
                if($request->hasFile('registration_docs')){
                    $registration_docs = $request->file('registration_docs')->store('radiology_diagnostics_vendor_files','public');
                    $inputs['registration_docs'] = $registration_docs;
                }
                if($request->hasFile('upload_other_documents')){
                    $upload_other_documents = $request->file('upload_other_documents')->store('radiology_diagnostics_vendor_files','public');
                    $inputs['upload_other_documents'] = $upload_other_documents;
                }
                $admin =Admin::create([
                    'name'=>$request->vendor_name,
                    'email'=>$request->email_id,
                    'password'=>Hash::make($request->password),
                    'roleType'=>$request->vendor_type,
                    'trash'=>'0'
                ]);
                $inputs['admin_id']=$admin->_id;
                $insert = RadiologyDiagnoseVendor::insert($inputs);
                if($insert){
                    return response()->json([
                        'message'=>'insert successfull'
                    ],200);
                }else{
                    return response()->json([
                        'message'=>'Internal Server Error'
                    ],500);
                }

            } else {
                return view('admin.vendor.radiology_diagnosticscreate',[
                    'countries' => countries::get()
                ]);
            }
        }catch(ValidationException $e){
            throw $e;
        }catch(Exception $e){
            throw $e;
        }

    }
    public function vendorEditRadiologyDiagnostics($id){
        $editData = RadiologyDiagnoseVendor::where('admin_id',decrypt($id))->first();
        return view('admin.vendor.radiology_diagnosticsedit',compact('editData'),[
            'countries'=>countries::get()
        ]);
    }
    public function vendorUpdateRadiologyDiagnostics(Request $request,$id){
        dd(decrypt($id));
    }
    public function vendorListRadiologyDiagnostics(){
        $getData = RadiologyDiagnoseVendor::where('trash',"0")->get();
        return view('admin.vendor.radiology_diagnosticslist',compact('getData'));
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

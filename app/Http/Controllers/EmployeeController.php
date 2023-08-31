<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function loginProcess(Request $request)
    {
        try {

            if ($request->isMethod('post')) {

                $email = $request->user_email;
                $password = $request->user_password;
                $userDetails = Employee::where('email', $email)->first();
                if (!empty($userDetails) && Hash::check($password, $userDetails->password)) {
                    if ($userDetails->employee_status != 'active') {
                        return response()->json(['success' => false, 'title' => '', 'msg' => 'User Inactive. Contact executive for more info.']);
                    }

                    $request->session()->put('token', lock($userDetails->id));
                    return response()->json(['success' => true, 'title' => 'Login Successful', 'msg' => 'Welcome back!']);
                } else {
                    return response()->json(['success' => false, 'title' => 'Login Failed', 'msg' => 'Incorrect username or password. Please try again.']);
                }
            } else {
                return view('admin.login');
            }
        } catch (\Exception $e) {
            return response()->json(['success' => 500, 'msg' => $e->getMessage()]);
        }
    }

    public function dashboardPage()
    {
        return view('admin.dashboard.dashboard_home');
    }


}

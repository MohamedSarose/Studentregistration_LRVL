<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StuRegController extends Controller
{
    public function login()
    {
        return view("reg.stulogin");
    }
    public function registration()
    {
        return view("reg.sturegistration");

    }
    public function stu_registration(Request $request)
    {
        $request->validate(
            [
                'InputFullname'=>'required',
                'InputEmail'=>'required|InputEmail|unique:students',
                'inputTelephoneNo'=>'required',
                'inputAddress'=>'required',
                'InputPassword'=>'required',
                'InputConPassword'=>'required'
                
            ]);
            $students = new Student();
            $students->Inputfirstname = $request->Inputfirstname;
            $students->Inputlastname = $request->Inputlastname;
            $students->InputEmail = $request->InputEmail;
            $students->inputTelephoneNo = $request->inputTelephoneNo;
            $students->inputAddress = $request->inputAddress;
            $students->InputPassword = $request->InputPassword;
            $students->InputConPassword = $request->InputConPassword;
            $regstudents=$students->save();
            
            if($regstudents)
            {
                return back()->with('success', 'successfull registered');
            }
            else{
                return back()->with('fail', 'something wrong');
            }

    }
    public function stu_login(Request $request)
    {
        $request->validate(
            [
                
                'InputEmail'=>'required|InputEmail|unique:students',
                'InputPassword'=>'required'
                
            ]);
    }



}

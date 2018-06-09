<?php

namespace App\Http\Controllers;

use App\Fee;
use App\Student;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    function show()
    {
        $fees = Fee::all();
        $total = Fee::all()->sum('amount');
        return view('095006.allfee', ['fees' => $fees], ['total' => $total]);
    }
//    {
//        $student = Student::all();
//        $fees = $student->fee;
//        return view('095006.allfee', ['fees' => $fees], ['student' => $student]);
//    }

    function feeform()
    {
        return view('095006.fees');
    }
    function newfees()
    {

        $this->validate(request(), [
            'studentId' => 'required|integer',
            'amount' => 'required|integer',
            'dateOfPayment' => 'required',
        ]);

        $fees = new Fee();
        $fees->studentId = request('studentId');
        $fees->amount = request('amount');
        $fees->dateOfPayment = request('dateOfPayment');
        $fees->save();
        return redirect('/allfee');
    }
}

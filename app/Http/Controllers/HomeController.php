<?php

namespace App\Http\Controllers;

use App\Models\TestData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;

class HomeController extends Controller
{
    //View the form table
    function form(){
        return view('formTable');
    }
    //Retrive data from the data base
    function showData(){
        $data = TestData::get();
        return view('show',["data"=>$data]);
    }

    function store(Request  $request){
// dd( $request->all());
        $data=[
            'Firstname'=>$request->firstName,
            'Middlename'=> $request->middleName,
            'Lasttname'=> $request->lastName,
            'phonenumber'=> $request->phone,
            'emailid'=> $request->email,
            'address'=> $request->address,
            'pin'=> $request->pin,
        ];
        $result = TestData::insert($data);
        if($result){
            return redirect('/view');
        }
            
    }


}

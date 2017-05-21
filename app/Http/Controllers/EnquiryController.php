<?php

namespace App\Http\Controllers;

use App\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    //

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);



        $newEnquiry =  new Enquiry();
        $newEnquiry->name = $request->get('name');
        $newEnquiry->email = $request->get('email');
        $newEnquiry->message = $request->get('message');
        $newEnquiry->save();

//        Mail::send('enquiry_email',['enquiry'=>$newEnquiry],function ($message) use ($newEnquiry){
//            $message->to('vigama2k17co@gmail.com');
//            $message->subject('Vigama Enquiry');
//
//        });


        return redirect(url(route('enquiry-success')));



    }
}

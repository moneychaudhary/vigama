<?php

namespace App\Http\Controllers;

use App\Enquiry;
use Illuminate\Http\Request;

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


        return redirect(url(route('enquiry-success')));



    }
}

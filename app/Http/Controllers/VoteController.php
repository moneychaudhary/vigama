<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    //

    public function sendOtp($mobile)
    {

        $pin = self::generatePin();

        if (is_null($mobile))
        {
            return redirect(url(route('welcome')));
        }

        $detail = Detail::where('mobile', $mobile)->first();

        if (is_null($detail))
        {
            $detail = new Detail();
            $detail->mobile=$mobile;
        }
        $detail->code=(string)$pin;
        $detail->save();


        return 'Code has been sent. -> '.$pin;

    }

    public function vote(Request $request,$id)
    {
        if ($id>10 || $id<1)
        {

            return redirect(url(route('welcome')));

        }

        $this->validate($request, [
            'name' => 'required|string',
            'contact_no' => 'required|string|digits:10',
            'student_no' => 'required|string|digits:7',
            'code' => 'required|string|digits:6',
        ]);


        $detail = Detail::where('mobile', $request->get('contact_no'))->first();


        if ($request->get('code') != $detail->code )
        {
            return 'Invaild Code';
        }



        $vote =Vote::where('mobile', $request->get('contact_no'))->first();

        if(is_null($vote))
        {
            $vote =Vote::where('student_no', $request->get('student_no'))->first();

        }

        if (!is_null($vote))
        {
            return redirect(url(route('vote-error')));

        }

        $vote =  new Vote();
        $vote->name= $request->get('name');
        $vote->mobile= $request->get('contact_no');

        $vote->student_no= $request->get('student_no');
        $vote->contestant_id= $id;

        $vote->save();

        return redirect(url(route('vote-success')));

    }

    public static function generatePin($digits = 6)
    {
        $pin = "";
        for ($i = 0; $i < $digits; $i++) {
            $pin .= mt_rand(0, 9);
        }

        return $pin;
    }

}

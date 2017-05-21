<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Vote;
use Illuminate\Foundation\Testing\HttpException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;
use Psy\Exception\ErrorException;

class VoteController extends Controller
{
    //

    public function sendOtp($mobile)
    {

        $pin = self::generatePin();

        if (is_null($mobile)) {
            return redirect(url(route('home')));
        }

        $detail = Vote::where('mobile', $mobile)->first();

        if (is_null($detail)) {
            return redirect(url(route('home')));
        }

        if ($detail->voted) {
            return redirect(url(route('vote-error')));

        }
        $mobile = $detail->mobile;

        $detail->code = (string)$pin;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://smsapi.24x7sms.com/api_2.0/SendSMS.aspx', [
            'form_params' => [
                'apikey'=>"ZyU6ttozp4r",
                'MobileNo' => '91'.$mobile,
                'SenderId'=>'VIGAMA',
                'Message' =>'Your verification code is '.$pin.'.',
                'ServiceName'=>'TEMPLATE_BASED'
            ]
        ]);



        $detail->save();

        return $pin;

    }

    public function voteIntiate(Request $request, $id)
    {


        if ($id > 10 || $id < 1) {

            return redirect(url(route('home')));

        }

        $this->validate($request, [
            'mobile' => 'required|string|digits:10',
            'student_no' => 'required|string|digits:7',
        ]);


        $vote = Vote::where('mobile', $request->get('mobile'))->first();

        if (is_null($vote)) {
            $vote = Vote::where('student_no', $request->get('student_no'))->first();

        }

        if (!is_null($vote)) {
            if ($vote->voted) {
                return redirect(url(route('vote-error')));
            }
        } else {
            $vote = new Vote();
        }
        $vote->mobile = $request->get('mobile');
        $vote->student_no = $request->get('student_no');
        $vote->contestant_id = $id;
        $vote->namespace = self::generateUniqueId();
        $vote->save();

        $this->sendOtp($vote->mobile);


        return redirect(url('/vote-submit?namespace=' . $vote->namespace));

    }

    public static function generatePin($digits = 6)
    {
        $pin = "";
        for ($i = 0; $i < $digits; $i++) {
            $pin .= mt_rand(0, 9);
        }

        return $pin;
    }

    public static function generateUniqueId($length = 9, $start = 'z')
    {
        return $start . strtolower(str_random($length - 1));
    }

    public function voteSubmit(Request $request)
    {


        $vote = Vote::where('namespace', $request->get('namespace'))->first();
        if (is_null($vote) || $vote->voted) {
            return redirect(url(route('home')));
        }

        return view('form',compact('vote'));
    }

    public function create(Request $request,$namespace)
    {
        $vote = Vote::where('namespace', $namespace)->first();

        if (is_null($vote)) {
            return redirect(url(route('home')));
        }



        $this->validate($request, [
            'code' => 'required|string|digits:6'
        ]);

        if ($vote->code===$request->get('code'))
        {
            $vote->voted=true;
            $vote->save();
            return redirect(url(route('vote-success')));
        }
        else{
            return Redirect::back()->withErrors(['Verification code does not match']);
        }

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    /**
     * Contact page mail
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function postContactMail(Request $request)
    {
        $name =  $request->input('name');
        $email =  $request->input('email');
        $desc =  $request->input('desc');
        $msg =  $request->input('message');
        Mail::send('email.mail', ['name'=>$name,'email'=>$email,'desc'=>$desc,'msg'=>$msg], function ($message) {
            $message->to('info@biddyut.com')->subject('For Contact');
            $message->from('t.sample003@gmail', 'User');
        });

        return Response(['success' => 'true', 'message' => 'Mail Send'],200);
//        return Response(['success' => 'false', 'message' => 'Mail Not Send'],200);
    }

    /**
     * Newsletter mail
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function postNewsLetter(Request $request){
        $email = $request->input('email');
        Mail::send('email.news_letter',['email'=>$email], function ($message){
            $message->to('info@biddyut.com')->subject('NewsLetter');
            $message->from('t.sample003@gmail', 'User');
        });

        return Response(['success' => 'true', 'message' => 'Mail Send'],200);
        }

    /**
     * Deliver with us mail
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function postTeamUp(Request $request){
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $restaurent = $request->input('restaurent');
        $website = $request->input('website');
        $city = $request->input('city');
        $p_code = $request->input('p_code');
        Mail::send('email.team-up',['fname'=> $fname,'lname'=>$lname, 'email'=>$email, 'phone'=>$phone, 'restaurent'=>$restaurent, 'website'=>$website, 'city'=>$city, 'p_code'=>$p_code ], function ($message){
            $message->to('info@biddyut.com')->subject('Team Up');
            $message->from('t.sample003@gmail', 'User');
        });

        return Response(['success' => 'true', 'message' => 'Mail Send'],200);
    }

    /**
     * Ride with us page apply mail
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function postApply(Request $request){
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $pre_add = $request->input('pre-add');
        $occupation = $request->input('occupation');
        $license = $request->input('license');
        $bi_cycle = $request->input('bi-cycle');
        $del_com = $request->input('del-com');
        $per_add = $request->input('per-add');
        $city = $request->input('city');
        $mobile = $request->input('mobile');
        $ride_bike = $request->input('ride-bike');
        Mail::send('email.apply',[
            'fname'=> $fname,
            'lname'=>$lname,
            'email'=>$email,
            'phone'=>$phone,
            'pre_add'=>$pre_add,
            'occupation'=>$occupation,
            'city'=>$city,
            'license'=>$license,
            'bi_cycle'=>$bi_cycle,
            'del_com'=>$del_com,
            'per_add'=>$per_add,
            'mobile'=>$mobile,
            'ride_bike'=>$ride_bike,
        ], function ($message){
            $message->to('info@biddyut.com')->subject('Apply');
            $message->from('t.sample003@gmail', 'User');
        });

        return Response(['success' => 'true', 'message' => 'Mail Send'],200);
    }

    /**
     * Biddyut hubs job apply page mail
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function postJobApply(Request $request)
    {
        $name =  $request->input('name');
        $email =  $request->input('email');
        $message =  $request->input('message');
        $cv =  $request->input('cv');
        Mail::send('email.job_apply', ['name'=>$name,'email'=>$email,'message'=>$message,'cv'=>$cv], function ($message) {
            $message->to('info@biddyut.com')->subject('For Contact');
            $message->from('t.sample003@gmail', 'User');
        });

        return Response(['success' => 'true', 'message' => 'Mail Send'],200);
    }

}


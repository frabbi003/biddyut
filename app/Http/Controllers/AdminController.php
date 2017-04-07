<?php

namespace App\Http\Controllers;

use App\BiddutApiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    protected $redirectPath = "/admin/login";
    /**
    * Show admin dashBoard
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function dashBoard(Request $request)
    {
        return view('admin.dashboard');

    }

    public function doLogin(Request $request){

        $email = $request->input("email");
        $password = $request->input("password");
        $checkerInfo = AdminGetLoginChecker($email, $password);
        //if logged in
        if($checkerInfo){
            return redirect('/admin/dashboard');
        }
        return back()->with('message','Incorrect User Email or Password');
    }

    public function seeLogin(Request $request){
        //if logged in
        if(Auth::check()){
            return redirect('/admin/dashboard');
        }
        return view('admin.pages.forms.general', ['name' => 'James']);
    }
    // logout
    public function logout(Request $request)
    {
        if (Logout($request)){
            return redirect('/admin/login');
        }

    }

    public function getApiCreate()
    {
        return view('admin.sections.apiCreate');
    }

    public function postApiCreate(Request $request)
    {
        $cre = array(
            "title" => $request->input('title'),
            "url" => $request->input('url'),
            "status" => 1,
        );

        CreateApi($cre);

        return redirect('/api_list');
    }

    public function apiList()
    {
        $apiList = BiddutApiModel::where('status',1)->get();
        return view('admin.sections.sub_sections.apiList',['apiList'=> $apiList]);
    }

    public function getApiUpdate($id)
    {
        $apiData = BiddutApiModel::where('status',1)->where('id',$id)->get();
        return view('admin.sections.sectionsEdit.apiEdit',['apiData'=>$apiData]);
    }
    public function updateApiInfo(Request $request)
    {
        $apiId = $request->input('id');

        $cre = array(
            "title" => $request->input('title'),
            "url" => $request->input('url'),
            "status" => 1,
        );
            updateApi($apiId, $cre);

        return redirect('/api_list');
    }

    public function postApiUpdate(Request $request)
    {
        $apiId = $request->input('id');

        $cre = array(
            "title" => $request->input('title'),
            "url" => $request->input('url'),
            "status" => 1,
        );
        updateSingleApi($apiId, $cre);

        return redirect('/api_list');
    }
}

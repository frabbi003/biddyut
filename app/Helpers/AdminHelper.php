<?php

use App\User;
use App\BiddutApiModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
if (!function_exists('DummyFunction')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function DummyFunction()
    {

    }
}


if (!function_exists('AdminGetLoginChecker')) {

    /**
     * @param $email
     * @param $password
     * @return mixed
     */
    function AdminGetLoginChecker($email, $password)
    {
        $userId = false;
        if(Auth::attempt(['email' => $email, 'password' => $password]))
            $userId = auth()->user()->id;


        return $userId;
    }
}





if (!function_exists('Logout')) {

    /**
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    function Logout(\Illuminate\Http\Request $request)
    {
        Auth::logout();
        return true;
    }
}

if (!function_exists('CreateApi')) {
    function CreateApi($info)
    {
        DB::table('biddut_api')->where('status', 1)
            ->update([
                'status' => 0
            ]);

        $apiInfo['title'] = $info['title'];
        $apiInfo['url'] = $info['url'];
        $apiInfo['status'] = $info['status'];
        $apiInfo['created_at'] = new \DateTime(date('Y-m-d H:i:s'));

        DB::table('biddut_api')->insert(
            $apiInfo
        );

        return true;
    }
}


if (!function_exists('getApi'))
{
    function getApi()
    {
    $list = BiddutApiModel::select('url')->where('status',1)->first();
    return $list;
    }
}

if (!function_exists('updateApi')){
    function updateApi($id, $info)
    {
        $update = DB::table('biddut_api')->where('id', $id)
            ->update([
                'title' => $info['title'],
                'url' => $info['url'],
                'status' => $info['status'],
            ]);

        return $update;
    }
}

if (!function_exists('updateSingleApi')){
    function updateSingleApi($id, $info)
    {
        $update = DB::table('biddut_api')->where('id', $id)
            ->update([
                'title' => $info['title'],
                'url' => $info['url'],
                'status' => $info['status'],
            ]);

        return $update;
    }
}



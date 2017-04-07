<?php

namespace App\Http\Controllers;

use App\BiddutOrderRatings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Support\MessageBag;

/**
 * Order details by Tracking ID
 *
 * Class OrderAndCalculateController
 * @package App\Http\Controllers
 */
class OrderAndCalculateController extends Controller
{
    public function postOrderTacking(Request $request){
        $api = getApi();

        $trackerId= $request->query('order_id');
        $isSubmited= $request->query('submitted');

            $client = new Client();
//        $url = 'http://system.biddyut.com/api/v1/user/order/history/'.$trackerId;
            $url = $api->url.'/api/v1/user/order/history/'.$trackerId;

            $response = $client->post($url, ['headers'=> ['content-type'=>'application/json']]);
            $responseData = \GuzzleHttp\json_decode($response->getBody());

            $message= $responseData->message;
            if (!isset($responseData->response)){
                $responseData= [];
            }
            $logoUrl = getLogoInfo();
            $getFooterItems = getFooterItems();
            $getSocialAreaItems = getSocialAreaItems();
            $menuItems = getMenuItems();
            $reviewDetails = getReview($request->input('order_id'));

            return view('order.order-tracking',[
                'logo'=>$logoUrl,
                'getFooterItems'=>$getFooterItems,
                'getSocialAreaItems'=>$getSocialAreaItems,
                'menuItems'=> $menuItems,
                'responseData' => $responseData,
                'message'=> $message,
                'reviewDetails'=> $reviewDetails,
                'isSubmited' => $isSubmited
            ]);



    }

    /**
     * Merchant review for Sypply and delivery services
     *
     * @param Request $request
     * @return Redirect
     */
    public function postCustomerReview(Request $request)
    {
        $orderTrackNumber = $request->input('order_tracking_number');
        $orderList = getReview($orderTrackNumber);

        if (count($orderList)){
            $data = [
                'order_tracking_number' => $orderTrackNumber,
                'email' => $request->email,
                'name' => $request->name,
                'phone' => $request->phone,
                'order_rate' => $request->order_rate * 20,
                'del_rate' => $request->del_rate * 20,
                'comment' => $request->comment
            ];
            BiddutOrderRatings::where('order_tracking_number', $orderTrackNumber)->update($data);

        }else {
            $trackId = $request->input('order_tracking_number');
            $email = $request['email'];
            $name = $request['name'];
            $phone = $request['phone'];
            $rate = $request['order_rate'];
            $drate = $request['del_rate'];
            $comment = $request['comment'];

            $createData = [
                'order_tracking_number' => $trackId,
                'email' => $email,
                'name' => $name,
                'phone' => $phone,
                'order_rate' => $rate * 20,
                'del_rate' => $drate * 20,
                'comment' => $comment,
                'status' => 1,
            ];
            BiddutOrderRatings::insert($createData);

        }
        return redirect('order-tracking?submitted=1&order_id='.$orderTrackNumber);


    }
}

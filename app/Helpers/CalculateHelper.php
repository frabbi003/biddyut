<?php
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\MessageBag;


function getDivision()
{
    try{
        $api = getApi();
        $client = new Client();
        $url = $api->url.'/api/v1/location/divisions/20';

        $response = $client->get($url, ['headers'=> ['content-type'=>'application/json']]);
        $responseData = \GuzzleHttp\json_decode($response->getBody());

//    dd($responData);
            return $responseData;
        }
    catch(\Exception $e){
        
        return false;
    }
}

function getDistrictId($divisionId)
{
    try{
        $api = getApi();
        $client = new Client();
        $url = $api->url.'/api/v1/location/cities/'.$divisionId;

        $response = $client->get($url, ['headers'=> ['content-type'=>'application/json']]);
        return  \GuzzleHttp\json_decode($response->getBody());
    }
    catch(Exception $e){

        return $e->getMessage();
    }


}

function getProductZoneId($zoneId)
{
    try{
        $api = getApi();
        $client = new Client();
        $url = $api->url.'/api/v1/location/zones/'.$zoneId;

        $response = $client->get($url, ['headers'=> ['content-type'=>'application/json']]);
        return  \GuzzleHttp\json_decode($response->getBody());
    }
    catch(Exception $e){

        return $e->getMessage();
    }

}

function getProductCatagoryId()
{
    try{
        $api = getApi();
        $client = new Client();
        $url = $api->url.'/api/v1/product/categories';

        $response = $client->get($url, ['headers'=> ['content-type'=>'application/json']]);
        $responseData = \GuzzleHttp\json_decode($response->getBody());
        return $responseData;
    }
    catch(Exception $e){

        return $e->getMessage();
    }

}

function chargeCalculation($pic_zone_id,$del_zone_id,$product_category_id,$quantity,$width,$height,$length)
{
        $api = getApi();
        $client = new Client();
        $url = $api->url.'/api/v1/charge/calculator/'.$pic_zone_id.'/'.$product_category_id.'/'.$del_zone_id.'/'.$quantity.'/'.$width.'/'.$height.'/'.$length;

        $response = $client->get($url, ['headers'=> ['content-type'=>'application/json']]);
        return  \GuzzleHttp\json_decode($response->getBody());

}


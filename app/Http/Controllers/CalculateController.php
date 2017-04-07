<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    /**
     * Get district
     *
     * @param $id
     * @return mixed
     */
    public function getDistrict($id)
    {

        return getDistrictId($id);
    }

    /**
     * Get Zone Id
     *
     * @param $id
     * @return mixed
     */
    public function getZoneId($id)
    {

        return getProductZoneId($id);
    }

    public function postChargeCalculation(Request $request)
    {
        try{
            $pic_zone_id = $request->input('pic_zone_id');
            $product_category_id = $request->input('product_category_id');
            $quantity = $request->input('quantity');
            $del_zone_id = $request->input('del_zone_id');
            $width = $request->input('width');
            $height = $request->input('height');
            $length = $request->input('length');

            $data = chargeCalculation($product_category_id, $pic_zone_id, $del_zone_id, $quantity, $width, $height, $length);

            if (!$data) {
                return response()->json([
                    'success' => false,
                    'message' => 'unsuccssful calculation'
                ], 400);
            } else {
                return response()->json([
                    'success' => true,
                    'data' => $data
                ], 200);
            }
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'unsuccssful calculation'
            ], 400);
        }


    }
}

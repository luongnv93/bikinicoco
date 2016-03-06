<?php


namespace App\Dao;


use App\Models\ProductRate;

class RateManage {
    public static function getRateManage(){
        return view('admin.manage.rate-manage');
    }
    public static function getDeleteRate($id){
        $rate = ProductRate::find($id);
        $rate->delete();
        return response()->json([
            'success'=>'1',
            'msg'=>'The comment was has deleted successfully'
        ]);
    }









    //API
    public static function getApiAllRate(){
        $rates = ProductRate::orderBy('id','desc')->get();
        return response()->json($rates);
    }
} 
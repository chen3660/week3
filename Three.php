<?php

namespace App\Http\Controllers;

use App\Phone;
use Illuminate\Http\Request;

class Three extends Controller
{
    public function phone(){
        $model = new Phone();

        $data = $model -> get();

        return ['code'=>0,'msg'=>'成功','data'=>$data];
    }
}

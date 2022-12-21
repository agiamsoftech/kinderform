<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

function getCountryNameById($id) {
    $data = DB::table("countries")->find($id);
    if($data){
        return $data->name;
    }else{
        return '';
    }
}
function getStateNameById($id) {
    $data =DB::table("states")->find($id);
    if($data){
        return $data->name;
    }else{
        return '';
    }
}
function getNameById($id) {
    $data =DB::table("child_forms")->find($id);
    if($data){
        return $data->name;
    }else{
        return '';
    }
}
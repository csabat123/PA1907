<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

   public static function insertData($data){

      $value=DB::table('users')->where('firstName', $data['firstName'])->get();
      if($value->count() == 0){
         DB::table('users')->insert($data);
      }
   }


    protected $fillable=['First Name','Last Name','Student ID'];

}

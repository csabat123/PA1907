<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {

   public static function insertData($data){

      $value=DB::table('team')->where('user_id', $data['user_id'])->get();
      if($value->count() == 0){
         DB::table('team')->insert($data);
      }
   }


    protected $fillable=['user_id','group_id'];

}

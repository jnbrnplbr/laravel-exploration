<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   protected $fillable = [
      'title', 'description','remarks'
   ];

   protected $hidden = [
      'created_at', 'updated_at'
   ];
}

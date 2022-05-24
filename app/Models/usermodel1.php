<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usermodel1 extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function myuserinfo(){
        return $this->belongsTo(userinfo::class,'userinfo_id');

    }
}

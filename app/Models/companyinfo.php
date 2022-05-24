<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class companyinfo extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function myuser(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function model2(){
        return $this->hasOne(companymodel2::class);
    }
}

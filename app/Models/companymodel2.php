<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companymodel2 extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function job(){
        return $this->belongsTo(job::class,'job_id');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\job;


use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\NoReturn;
use phpDocumentor\Reflection\Types\Static_;

class jobController extends Controller
{
    //
    public function search(){

        $job=job::with(['myuser','myuser.companyinfo'])->latest()->filter()->paginate(10);

        return view('/job-list',['jobs'=>$job]);

    }
    public function showapplier(job $job){

        $candidates=$job->users;
        return view('/candidate-list',['users'=>$candidates]);




    }

    public function apply($id){

        if( !$this->checkapply($id)){

            auth()->user()->jobs()->attach($id);

            return back();
        }
        return back();

    }

    public static function checkapply($id){


        return auth()->user()->jobs->contains($id);
    }
}

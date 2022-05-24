<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\job;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\NoReturn;
use phpDocumentor\Reflection\Types\Static_;

class userController extends Controller
{
    //
    public function showjobs(User $User){
        $jobs=$User->jobs()->paginate(10);
        return view('myjob-list',['jobs'=>$jobs]);


    }

}

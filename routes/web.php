<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::middleware('auth')->group(function (){

    Route::post('/store-info',[SignController::class,'storeinfo']);
    Route::put('/change-password',[SignController::class,'changepassword']);
    Route::put('/update',[SignController::class,'update']);


        Route::get('/profile', function () {return view('profile',[
            'info'=>auth()->user()->userinfo,
            'user'=>auth()->user()
        ]);});
        Route::get('/continue-user',function (){return view('continue-user');});


        Route::get('/profileCompany',function (){return view('profileCompany',[
            'info'=>auth()->user()->companyinfo,
            'user'=>auth()->user(),
            'jobs'=>auth()->user()->job
        ]);});
        Route::post('/post-job',[SignController::class,'postajob']);

        Route::get('/myjob-details/{job}',function (\App\Models\job $job)
            {return view('/myjob-details',['job'=>$job->load(['myuser','myuser.companyinfo'])]);});

        Route::delete('/delete-job/{job}',[SignController::class,'deleteajob']);

        Route::get('/edit-job/{job}',function (\App\Models\job $job)
            {return view('edit-job',['job'=>$job->load(['myuser','myuser.companyinfo'])]);});

        Route::put('/update-job/{job}',[SignController::class,'editajob']);

        Route::post('/apply-for/{job}',[\App\Http\Controllers\jobController::class,'apply']);
        Route::get('/show-appliers/{job}',[\App\Http\Controllers\jobController::class,'showapplier']);
        Route::get('/candidate-details/{User}',function (\App\Models\User $User){
            return view('/candidate-details',['user'=>$User,
            'info'=>$User->userinfo]);});
        Route::get('/show-my-jobs/{User}',)




//});
    Route::get('/company-details/{User}',function (\App\Models\User $User){return view('/company-details',['user'=>$User]);});
    Route::get('/job-details/{job}',function (\App\Models\job $job){return view('job-details',
        ['job'=>$job->load(['myuser','myuser.companyinfo'])]);});

    Route::get('/job-list',function (){
        return view('job-list',[
        'jobs'=>\App\Models\job::with(['myuser','myuser.companyinfo'])->latest()->paginate(10)
    ]);});

    Route::get('/search-job',[\App\Http\Controllers\jobController::class,'search']);

    Route::get('/continue-co',function (){return view('continue-co');});

    Route::get('/log-in', function () { return view('log-in');  });

   // Route::get('/sign-company', function () { return view('sign-company'); });

   // Route::get('/sign-user', function () { return view('sign-user'); });

    Route::get('/sign-up', function () { return view('sign-up'); });

    Route::post('/log-in', [SignController::class,'logingIn']);

    Route::post('/log-out',[SignController::class,'logingOut']);

    Route::post('/sign-as-user',[SignController::class,'signAsUser']);

    Route::post('/sign-as-company',[SignController::class,'signAsCompany']);

    Route::post('/edit',[SignController::class,'update']);


    Route::get('/test',function (){
        try {
            $response=Http::timeout(2)->post('http://192.168.43.175:3000/userClass',[
                'yoe'=>'0',
                'cv'=>"my name obada",
                'job title'=>'javadeveloper'
            ]);
        }
        catch (\Illuminate\Http\Client\ConnectionException $e){
            dd('failed');
        }


        return $response;

    });

    Route::get('/', function () { return view('index'); });

    Route::get('/index', function () { return view('index'); });







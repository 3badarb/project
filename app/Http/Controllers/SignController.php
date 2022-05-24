<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\job;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\NoReturn;
use phpDocumentor\Reflection\Types\Static_;

class SignController extends Controller
{
    //

    public function signAsUser(){

            $attributes = $this->getValidatFirstSign() + ['tag' => 'U'];

            $attributes['password'] = bcrypt($attributes['password']);
            $attributes['name'] = ucwords($attributes['name']);

            $user = User::create($attributes);
            auth()->login($user);
            return view('/continue-user');

    }

    public function signAsCompany(){

            $attributes = $this->getValidatFirstSign() + ['tag' => 'C'];

            $attributes['password'] = bcrypt($attributes['password']);
            $attributes['name'] = ucwords($attributes['name']);

            $user = User::create($attributes);


            auth()->login($user);

            return redirect('/continue-co');

    }

    public function storeinfo(){
        if(auth()->user()->tag === 'U'){

        $infos=$this->getValidateuser();

            try {
                $response=Http::timeout(2)->post('http://192.168.43.175:3000/userClass',[
                    'yoe'=>$infos['education'].$infos['expirence'].$infos['skills']
                ]);

                $infos['jobtitle']=$response['jobtitle'];
            }
            catch (\Illuminate\Http\Client\ConnectionException $e){

            }

        auth()->user()->userinfo()->create($infos);

        return redirect('/profile');
        }
        elseif (auth()->user()->tag === 'C'){
            $infos=$this->getValidatecompany();

            auth()->user()->companyinfo()->create($infos);

           // return redirect(/*##  the next page  ##*/);
            return redirect('/profileCompany');
        }

        return auth()->user();
    }

    public function changepassword(){

        if (bcrypt(\request('current_password'))!== auth()->user()->password)
        {
            return back()->with('password',"Wrong password");
        }

        $var=\request()->validate([
            'password'=>'required|min:4|confirmed'
        ]);
        auth()->user()->update($var);

        return back();

    }

    public function update(){

        if(auth()->user()->tag === 'U'){

            $infos=$this->getValidateuser();

            auth()->user()->userinfo()->update($infos);

            return back();
        }
        elseif (auth()->user()->tag === 'C'){

            $infos=$this->getValidatecompany();


            auth()->user()->companyinfo()->update($infos);

            // return redirect(/*##  the next page  ##*/);
            return back();
        }

    }
    public function postajob(){
        $info=$this->getValidatejob();
        auth()->user()->job()->updateOrCreate($info);

        return back();


    }
    public function deleteajob($id){
        $x=job::find($id);
        $x->delete();
        return redirect('/profileCompany');

    }
    public function editajob($id){
        $x=job::find($id);

        $x->update($this->getValidatejob());


        return redirect('/myjob-details/'.$id);
    }

    public function logingOut(){

        auth()->logout();
        return redirect('/');

    }
    public  function logingIn(){

        $attributes=request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (auth()->attempt($attributes)){
            session()->regenerate();

            return redirect('/');

        }
        throw ValidationException::withMessages(['email'=>"You don't have account with this email",
            'password'=>'This is not your password']);
    }
public function getValidatFirstSign(){

        return request()->validate([

            'name'=>'required',
            'email'=>'email|required|unique:users,email',
            'password'=>'required|min:4|confirmed'

        ]);
}
public function getValidateuser(){
    return (request()->validate([
        'education'=> 'required' ,
        'skills'=>'required',
        'expirence'=>'required',
        'resident'=>'required',
        'from'=>'required',
        'birth'=>'required|date',
        'phone'=>'required|numeric'
    ]))+['user_id'=>auth()->id()
    ];

}
public function getValidatecompany()
{

        return (request()->validate([
                'about_us'=>'required',
                'location'=>'required',
                'telephone'=>'required|numeric',
                'website'=>'required',

            ]))+['user_id'=>auth()->id(),'jobtitle'=>''];

}

public function getValidatejob(){
    return (request()->validate([
            'description'=>'required',
            'requirement'=>'required',
            'jobtitle'=>'required',
            'expirence'=>'required',
            'salary'=>'required',

        ]))+['user_id'=>auth()->id()];

}
}

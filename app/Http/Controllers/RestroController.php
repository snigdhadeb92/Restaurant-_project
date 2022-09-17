<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resturant;
use App\Models\Registration;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
//use App\Http\Flash;

class RestroController extends Controller
{
    
    public function index()
    {
        //
        return view('home');
    }

    public function list(){
        $data =  resturant::all();
        return view('list',['data'=>$data]);
    }

    public function addResturant(){
        return view('add');
    }
    public function add(Request $req){
        $restro = new  resturant;
        $restro->name = $req->input('name');
        $restro->email = $req->input('email');
        $restro->address = $req->input('address');
        $restro->save();
        $req->session()->flash('status','Restaurant`s Details Add Successfully');
        $req->session()->flash('edit','Restaurant`s Details Updated Successfully');
        return redirect('list');

        //return 'add controller for store data';
    }
    public function delete($id){
        echo resturant::find($id)->delete();
        Session::flash('status','Restaurant Deleted Successfully');
        return redirect('list');
    }
    public function edit($id){
        $data= resturant::find($id);
        return view('edit',['data'=>$data]);
    }
    public function registration(){   
        return view('register');
    }
    public function user_registration(Request $req){   
        $user = new Registration;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->phone = $req->input('phone');
        $user->username = $req->input('username');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->address = $req->input('address');
        $user->save();
        $req->session()->put('user',$req->input('name'));
        return redirect('/');
    }
    public function login(){
        return view('login');
    }
    public function user_login(Request $req){   
        $user = Registration::where('username',$req->input('username'))->get();
        if(Crypt::decrypt($user[0]->password)==$req->input('password')){
            $req->session()->put('user',$user[0]->name);
            return redirect('/');
        }elseif(Crypt::decrypt($user[0]->password)!=$req->input('password')){
            $req->session()->put('error','Username or password mismatch');
            return redirect('login');
        }
        
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    function index(Request $res)
    {

        if($res->session()->has('user_id'))
        {
            return redirect('dashbord');
        }

        if($res->save)
        {
            $email = $res->email;
            $pass = $res->pass;

            $sql_qry = DB::table('user')->where('email',$email)->where('password',$pass);

            if($sql_qry->count()==1)
            {
                $user_data = $sql_qry->first();
                session(['user_id' => $user_data->id]);

                return redirect('dashbord');
            }
        }

        return view('welcome');
    }

    function register(Request $res)
    {

        if($res->save)
        {
            $name = $res->name;
            $email = $res->email;
            $pass = $res->pass;
            $contact = $res->contact;

            $userData = array('name' =>$name ,'email'=>$email,'password'=>$pass,'contact'=>$contact);

            DB::table('user')->insert($userData);

            return redirect('/');
        }
        
        return view('register');
    }

    function dashbord(Request $res)
    {
        if(!($res->session()->has('user_id')))
        {
            return redirect('/');
        }

        return view('Dashbord');
    }

    function logout(Request $res)
    {

        $res->session()->flush();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function login()
    {
        // only record 3 and only name field
        $resuls = DB::table('users')
                -> where('id','3')
                -> value('name');
        echo '<pre>';
        print_r($resuls);

        // only record 3 all fields
        $resuls = DB::table('users')
            -> where('id','3')
            -> get();
        echo '<pre>';
        print_r($resuls);

        // all records all fields
        $resuls = DB::table('users')
            -> get();
        dd($resuls);
        // passing the parameters to view user/login
        return view('user.login',[
            'name'      => 'Mike Long',
            'country'   => 'Australia'
        ]);
    }

    public function register()
    {
        return view('user.register',[
            'name'      => 'Mike Long',
            'country'   => 'Australia'
        ]);
    }
}

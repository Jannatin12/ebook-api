<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ['nis' => '3103118077',
        'name' => 'Jannatin Nurrohmah',
        'gender' => 'female',
        'class' => 'xii rpl 3'
    ];
    }
}

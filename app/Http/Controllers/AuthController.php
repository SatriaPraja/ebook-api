<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'NIS' => '3103119173',
            'Name' => 'Satria Duta Praja',
            'Phone' => '081215437072',
            'Class' => 'XII RPL 6/02',
        ];
    }
}

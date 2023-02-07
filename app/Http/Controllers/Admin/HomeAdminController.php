<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeAdminController extends Controller
{
    public function index(){

        return view('admin.home',[
            'title'=>'Quản trị - ChiChiFood'
        ]);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(){
        return view('dash.layouts.temp');
    }

    public function LoginPage(){
        return view('dash.loginpage');
    }

    public function DhlPage(){
        return view('dash.dhlpage');
    }

    public function BasicInfo(){
        return view('dash.basicinfo');
    }

    public function BreakdownInfo(){
        return view('dash.breakdowninfo');
    }

    public function BuyerIndex(){
        return view('dash.buyerindex');
    }

    public function ProductInfo(){
        return view('dash.productinfo');
    }

    public function AddBuyer(){
        return view('dash.addbuyer');
    }

    public function EditBuyer(){
        return view('dash.editbuyer');
    }

    public function ProductIndex(){
        return view('dash.productindex');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Banners;
use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function index(){
        return view('testForm');
    }

    public function store(Request $request){
        $data = $request->except('_token', '_method');
        Banners::create($data);
        return redirect()->back();
    }
}

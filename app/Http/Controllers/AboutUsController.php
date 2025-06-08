<?php

namespace App\Http\Controllers;

use App\Models\Backend\Banner;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public  function index(){
        $header = Banner::find(1); 
        $about_us_banner = Banner::find(7); 
        $about_us_1 = AboutUs::find(1);
        $about_us_2 = AboutUs::find(2);
        $about_us_3 = AboutUs::find(3);
        $about_us_4 = AboutUs::find(4);
        $about_us_5 = AboutUs::find(5);
        $about_us_6 = AboutUs::find(6);
        $about_us_7 = AboutUs::find(7);
        $emptyData = true;
        if($about_us_banner == null){
            return ('Error empty data!');
        }else{
            $url = $header->getFirstMediaUrl('images', 'large');
            $url_2 = $about_us_banner->getFirstMediaUrl('images', 'large');
        }
        return view('aboutus',compact(
            'url',
            'url_2',
            'about_us_1',
            'about_us_2',
            'about_us_3',
            'about_us_4',
            'about_us_5',
            'about_us_6',
            'about_us_7'
        ));
    }
}

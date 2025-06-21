<?php

namespace App\Http\Controllers;

use App\Models\Backend\Banner;
use App\Models\Slider;
use App\Models\Faculty;
use App\Models\ClassFaculty;
use App\Models\ClassFF;
use App\Models\Potential;
use App\Http\Resources\BannerListResource;

class HomeController extends Controller
{
    public function index()
    {
        $header = Banner::find(1); 
        $register = Banner::find(2); 
        $anoun_1 = Banner::find(3); 
        $anoun_2 = Banner::find(4); 
        $anoun_3 = Banner::find(5); 
        $anoun_4 = Banner::find(6); 
        // Get all sliders
        $sliders = Slider::get();

        $faculties = Faculty::get();
        $classFaculties = ClassFaculty::get();

        $potentials = Potential::get();

        $sliderMediaUrls = [];
        foreach ($sliders as $slider) {
            $mediaUrl = $slider->getFirstMediaUrl('images', 'large');
            if (!empty($mediaUrl)) {
                $sliderMediaUrls[] = $mediaUrl;
            }
        }

        $facultyMediaUrls = [];
        foreach ($faculties as $faculty) {
            $mediaUrl = $faculty->getFirstMediaUrl('images', 'large');
            if (!empty($mediaUrl)) {
                $facultyMediaUrls[] = $mediaUrl;
            }
        }

        $potentialMediaUrls = [];
        foreach ($potentials as $potential) {
            $mediaUrl = $potential->getFirstMediaUrl('images', 'large');
            if (!empty($mediaUrl)) {
                $potentialMediaUrls[] = $mediaUrl;
            }
        }

        $emptyData = true;
        if($register == null || $header == null){
            return ('Error empty data!');
        }else{
            $url = $header->getFirstMediaUrl('images', 'large');
            $registers = $register->getFirstMediaUrl('images', 'large');
            $anoun_1 = $anoun_1->getFirstMediaUrl('images', 'large');
            $anoun_2 = $anoun_2->getFirstMediaUrl('images', 'large');
            $anoun_3 = $anoun_3->getFirstMediaUrl('images', 'large');
            $anoun_4 = $anoun_4->getFirstMediaUrl('images', 'large');
        }

        return view('welcome', compact(
            'url',
            'registers',
            'emptyData',
            'sliderMediaUrls',
            'facultyMediaUrls',
            'faculties',
            'classFaculties',
            'potentialMediaUrls',
            'potentials',
            'anoun_1',
            'anoun_2',
            'anoun_3',
            'anoun_4'
        ));
    }

    public function show($slug){
        $header = Banner::find(1); 
        if($header == null){
            return ('Error empty data!');
        }else{
            $url = $header->getFirstMediaUrl('images', 'large');
        }
        $faculty = Faculty::query()
                        ->where('slug', $slug)
                        ->first();
        $classFaculties = ClassFaculty::get();

        $url_1 = $faculty->getFirstMediaUrl('images', 'large');
        return view('faculty', compact('faculty','url_1','url'));
    }
}

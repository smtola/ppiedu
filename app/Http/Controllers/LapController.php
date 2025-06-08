<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LibraryCategory;
use App\Models\LibraryDepartment;
use App\Models\Backend\Banner;

class LapController extends Controller
{
    public function index(){
        try {
            $lib_dep = LibraryCategory::query()->get();
            if ($lib_dep->isEmpty()) {
                return view('lap', [
                    'error' => 'No library categories found',
                    'lib_dep' => collect([]),
                    'libaries' => collect([]),
                    'libaryMediaUrls' => [],
                    'url' => null
                ]);
            }
            $libaries = LibraryDepartment::with(['category', 'subjects'])->get();
            $header = Banner::find(1); 
            
            if($header == null){
                return view('lap', [
                    'error' => 'Banner not found',
                    'lib_dep' => $lib_dep,
                    'libaries' => $libaries,
                    'libaryMediaUrls' => [],
                    'url' => null
                ]);
            }
            
            $url = $header->getFirstMediaUrl('images', 'large');
            $libaryMediaUrls = [];
            
            foreach ($libaries as $libary) {
                $mediaUrl = $libary->getFirstMediaUrl('department-images', 'large');
                if (!empty($mediaUrl)) {
                    $libaryMediaUrls[$libary->id] = $mediaUrl;
                }
            }
            
            return view('lap', [
                'error' => null,
                'lib_dep' => $lib_dep,
                'libaries' => $libaries,
                'libaryMediaUrls' => $libaryMediaUrls,
                'url' => $url
            ]);

        } catch (\Exception $e) {
            return view('lap', [
                'error' => 'An error occurred while loading the data',
                'lib_dep' => collect([]),
                'libaries' => collect([]),
                'libaryMediaUrls' => [],
                'url' => null
            ]);
        }
    }
}

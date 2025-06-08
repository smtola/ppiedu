<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\Backend\Banner;
class TrainController extends Controller
{
    public function index(){
        $training = Training::get();
        $trainingMediaUrls = [];
        $header = Banner::find(1); 
        if($header == null){
            return ('Error empty data!');
        }else{
            $url = $header->getFirstMediaUrl('images', 'large');
        }
        foreach ($training as $train) {
            $mediaUrl = $train->getFirstMediaUrl('images', 'large');
            if (!empty($mediaUrl)) {
                $trainingMediaUrls[] = $mediaUrl;
            }
        }
        return view('train',compact('training','trainingMediaUrls','url'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Backend\Banner;
use App\Models\ContactUs;

class ContactController extends Controller
{
    public function index(){
        $contacts = ContactUs::query()->get(); 
        $header = Banner::find(1); 
        if($header == null){
            return ('Error empty data!');
        }else{
            $url = $header->getFirstMediaUrl('images', 'large');
        }
        $contactMediaUrls = [];
        foreach ($contacts as $contact) {
            $mediaUrl = $contact->getFirstMediaUrl('images', 'large');
            if (!empty($mediaUrl)) {
                $contactMediaUrls[] = $mediaUrl;
            }
        }
        return view('contact',compact('contacts','contactMediaUrls','url'));
    }
}

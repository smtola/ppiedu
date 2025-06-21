<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
        public function index(Request $request){
            $news = News::query()->orderBy('name', 'asc')->paginate(10)->appends($request->except('page'));
            $newMediaUrls = $news->map(fn ($item) => 
                $item->getMedia('images')->map(fn($media) => $media->getUrl('small'))->toArray()
            )->toArray();
            return view('news.index', compact(
                'newMediaUrls',
                'news',
            ));
        }

    public function show($id)
    {
        $news = News::findOrFail($id);

        // Get all media URLs from the 'images' collection with 'large' conversion
        $urls = $news->getMedia('images')->map(function ($media) {
            return $media->getUrl('large');
        })->toArray();

        return view('news.show', ['item' => $news, 'urls' => $urls]);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\VideoController;

class CategoryController extends Controller
{
    public function index(){
        
        return view('category.index', [
            "categories" => Category::all(),
            "title" => "Categories",
            "active" => "category"
        ]);
    }

    public function show(Category $category)
{
    $videoController = new VideoController;

    $videosQuery = $category->videos(); 

    $videosQuery->filter(request(['search', 'category']));

    $videos = $videosQuery->paginate(7); 

    $vidThumbs = [];
    foreach ($videos as $link) {
        $vidThumbs[] = $videoController->getYouTubeThumbnail($link->link);
    }

    return view('category.videos', [
        "category" => $category,
        "videos" => $videos,
        "thumbnails" => $vidThumbs,
        "title" => "Category $category->category_name",
        "active" => "category"
    ]);
}

}

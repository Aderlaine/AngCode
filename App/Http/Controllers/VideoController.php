<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function getYouTubeEmbedCode($url) {
        // Mencocokkan URL YouTube dengan pola yang umum
        $pattern = '/^(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/';
        preg_match($pattern, $url, $matches);
    
        // Jika ada kecocokan, maka kita dapat mengambil ID video
        if (isset($matches[1])) {
            $videoId = $matches[1];
            
            // Membangun kode HTML yang dapat ditanamkan
            $embedCode = "<iframe width='100%' height='500' src='https://www.youtube.com/embed/{$videoId}' frameborder='0' style='border-radius:20px;' allowfullscreen></iframe>";
    
            return $embedCode;
        } else {
            return null; // URL YouTube tidak valid
        }
    }

    public function getYouTubeThumbnail($url) {
        // Mencocokkan URL YouTube dengan pola yang umum
        $pattern = '/^(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/';
        preg_match($pattern, $url, $matches);
    
        // Jika ada kecocokan, maka kita dapat mengambil ID video
        if (isset($matches[1])) {
            $videoId = $matches[1];
            
            // Membangun ulang URL thumbnail
            $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";
    
            return $thumbnailUrl;
        } else {
            return null; // URL YouTube tidak valid
        }
    }
    
    public function index(){
        $videos = Video::latest()->filter(request(['search', 'category']))->paginate(7);
        $vidThumbs = [];
        foreach($videos as $video){
            $vidThumbs[] = $this->getYouTubeThumbnail($video->link);
        }
        return view('video.listVideos', [
            "videos" => $videos,
            "thumbnails" => $vidThumbs,
            "title" => "All Videos",
            "active" => "allvideos"
        ]);
    }

    public function show(Video $video){
        $recomendVids = Video::where('category_id', $video->category_id)
        ->where('id', '!=', $video->id)
        ->inRandomOrder()
        ->take(5)
        ->get();
        $vidThumbs = [];
        foreach($recomendVids as $link){
            $vidThumbs[] = $this->getYouTubeThumbnail($link->link);
        }
        $bookmark = Bookmark::where('video_id', $video->id)
        ->where('user_id', auth()->id())
        ->first();
        return view('video.index',[
            "video" => $video,
            "youtubeVid" => $this->getYouTubeEmbedCode($video->link),
            "recomendVids" => $recomendVids,
            "thumbnails" => $vidThumbs,
            "bookmark" => $bookmark,
            "title" => $video->title,
            "active" => "none",
        ]);
    }

    public function upload(Request $request){
        $validatedData = $request -> validate([
            'title' => 'required|min:10|max:255',
            'link' => 'required',
            'maker' => 'required',
            'description' => 'required',
            'uploader_id' => '',
            'category_id' => '',
        ]);
        $video = Video::create($validatedData);
        return redirect("/videos/$video->id")->with("successUpload", "Video Has Been Uploaded");
    }

    public function destroy(Video $video){
        $video -> delete();

        return redirect()->back()->with('successDelete', '<b>Succesfully!</b> Video has been deleted!');
    }    
}

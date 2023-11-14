<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getYouTubeThumbnail($url)
    {
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

    public function index()
    {
        $user = Auth::user();
        $videos = Video::where('uploader_id', $user->id)->latest()->paginate(8);
        $vidThumbs = [];
        foreach ($videos as $video) {
            $vidThumbs[] = $this->getYouTubeThumbnail($video->link);
        }
        return view(
            'user.index',
            [
                'title' => $user->username,
                'active' => 'user',
                'user' => $user,
                'videos' => $videos,
                'thumbnails' => $vidThumbs,
                'dash' => 'yourVid'
            ]
        );
    }

    public function upload()
    {
        $user = Auth::user();
        return view('user.upload', [
            'title' => 'Upload',
            'active' => 'user',
            'dash' => 'upload',
            'user' => $user
        ]);
    }
    
    public function saveVid()
{
    $user = Auth::user();

    $bookmarks = Bookmark::where('user_id', $user->id)->get();

    $videos = Video::whereHas('bookmarks', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
        ->orderBy('created_at')
        ->paginate(8);

    $vidThumbs = [];
    
    foreach ($videos as $video) {
        $vidThumbs[] = $this->getYouTubeThumbnail($video->link);
    }

    $bookmarkIds = $bookmarks->pluck('id');

    return view(
        'user.savedVid',
        [
            'title' => $user->username,
            'active' => 'user',
            'user' => $user,
            'videos' => $videos,
            'thumbnails' => $vidThumbs,
            'idBookmark' => $bookmarkIds,
            'bookmarks' => $bookmarks, 
            'dash' => 'savedVid'
        ]
    );
}

}

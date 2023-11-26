<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function add(Request $request){
        $data = $request -> validate([
            'user_id' => 'required',
            'video_id' => 'required'
        ]);
        Bookmark::create($data);
        return redirect()->back()->with('successAdd', 'This Video is saved to your Bookmarks!');
    }

    public function destroy(Bookmark $bookmark){
        $bookmark -> delete();

        return redirect()->back()->with('successRemove', 'This Video has been removed from your Bookmarks!');
    }    
}
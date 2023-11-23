<?php

namespace App\Models;

use App\Models\User;
use App\Models\Upload;
use App\Models\Bookmark;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('Y-m-d');
    }

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        });
        
        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['level'] ?? false, function($query, $level){
            return $query->where('level', $level);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function uploader()
    {
        return $this->belongsTo(User::class);
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }

    public function isBookmarkedBy(User $user)
    {
        return $this->bookmarks->where('user_id', $user->id)->count() > 0;
    }

    protected static function boot(){
        parent::boot();

        // Menangkap event created untuk mencatat ke tabel uploads
        static::created(function ($video) {
            $upload = new Upload([
                'user_id' => $video->id,
                'video_id'  => $video->uploader_id,
            ]);
            $upload->save();
        });
    }
}

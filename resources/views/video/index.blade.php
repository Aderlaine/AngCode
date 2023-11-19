@extends('layouts.main')
@section('container')
    <div class="container my-5"
        style="background-color: #081b29;margin-top:130px !important; margin-bottom:100px !important;">
        <div class="row">
            <div class="col-8 ps-3 mt-2">
                @if (session()->has('successAdd'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class='bx bxs-badge-check me-1'></i><strong>Successfully!</strong> {{ session('successAdd') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('successUpload'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class='bx bxs-badge-check me-1'></i><strong>Successfully!</strong> {{ session('successUpload') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('successRemove'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class='bx bxs-badge-check me-1'></i> {{ session('successRemove') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                {!! $youtubeVid !!}
                <div class="row mt-3" style="width: 100%;">
                    <div class="col-10">
                        <h3 style="color:white">{{ $video->maker }} - {{ $video->title }}</h3>
                        <h6 class="text-secondary">{{ Str::limit($video->created_at, $limit = 10, ' ') }}</h6>
                        <a href="/categories/{{ $video->category->slug }}" class="text-decoration-none"
                            style="display:inline-block">
                            <h6 class="vid-link">#{{ $video->category->category_name }}</h6>
                        </a>
                    </div>
                    <div class="col-2 p-0 text-end">
                        @if ($video->uploader_id !== auth()->user()->id)
                            @if ($video->isBookmarkedBy(auth()->user()))
                                <form action="/bookmark/{{ $bookmark->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger col-2" style="width: 90px;"><i
                                            class='bx bx-bookmark-minus' style="font-size: 30px"></i><b
                                            class="d-block">Remove</b>
                                    </button>
                                </form>
                            @else
                                <form action="/bookmark/add" method="POST">
                                    @csrf
                                    <input type="hidden" name="video_id" value="{{ $video->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                    <button type="submit" class="btn btn-outline-info col-2" style="width: 70px;"> <i
                                            class='d-inline bx bx-bookmark' style="font-size: 30px;"></i><b
                                            class="d-block">save</b>
                                    </button>
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="mt-3">
                    @if (auth()->user()->image)
                        <img src="{{ asset('storage/' . auth()->user()->image) }}"
                            style="width: 60px;height:60px;object-fit:cover; object-position:center"
                            class="rounded-circle me-3" alt="Profil Picture" class="profile-image">
                    @else
                        <img src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg"
                            style="width: 60px;height:60px;object-fit:cover; object-position:center"
                            class="rounded-circle me-3" alt="Profil Picture" class="profile-image">
                    @endif
                    <span><b style="color: white;">{{ $video->uploader->username }}</b></span>
                </div>
                <div class="card border-info mt-4" style="background: transparent; width:100%;border-radius: 10px">
                    <div class="card-header border-info py-3" style="border-radius: 10px 10px 0 0">
                        <h4 style="color: white;">Description</h4>
                    </div>
                    <div class="card-body mt-2  ">
                        <p style="color:white; text-align:justify;">{{ $video->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-2" style="background-color:#081b29">
                <div class="card border-info" style="background: transparent; justify-content:center; border-radius:10px">
                    <h2 class="card-header text-info border-info py-3 mb-3" style="border-radius: 10px 10px 0 0">
                        Recomendation</h2>
                    <div class="card-body">
                        @foreach ($recomendVids as $key => $vid)
                            <a href="/videos/{{ $vid->id }}" style="text-decoration: none" class="vid-link">
                                <div class="mb-4 m row">
                                    <img class="col-6 img-fluid" src="{{ $thumbnails[$key] }}">
                                    <div class="col-6" style="color: white">
                                        <p>{{ Str::limit($vid->title, $limit = 30, '...') }}</p>
                                        <p style="font-size: 13px;color:darkgrey">{{ $vid->maker }}</p>
                                    </div>
                                </div>
                            </a>
                            <hr style="color:#0dcaf0;height:2px">
                        @endforeach
                        <a href="/categories/{{ $video->category->slug }}" class="vid-link">Another
                            {{ $video->category->category_name }} Videos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

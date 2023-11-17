@extends('layouts.main')
@section('container')

    <style>
        .no-vid{
            border: 2px solid #00abf0;
            border-radius: 10px;
            box-shadow: 0 0 18px #00abf0;        }
    </style>

    <div class="container p-0"
        style="min-height: 60vh; margin-top:13vh !important; width:100vw !important; margin-left:10px">
        <div class="row m-0">
            @include('partials.dash')
            <div class="col-9 mt-4 mb-3">
                <div class="row ms-3">
                    @if (session()->has('successRemove'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class='bx bxs-badge-check me-1'></i> {{ session('successRemove') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                    <h1 class="mb-3 mt-2">Saved Videos</h1>
                    @if ($videos->isEmpty())
                        <h3 class="text-center p-5 text-light no-vid">No Videos Available</h3>
                    @else
                        @foreach ($videos->reverse() as $key => $video)
                            <div class="col-3 mb-3">
                                <div class="card me-3 "
                                    style="height:285px;width: 13rem; font-size: 12px; background:transparent; border-color:#00abf0">
                                    <a href="/videos/{{ $video->id }}" class="vid-link"><img src="{{ $thumbnails[$key] }}"
                                            class="card-img-top" alt="..."></a>
                                    <div class="card-body">
                                        <a class="text-decoration-none" href="/videos/{{ $video->id }}">
                                            <div style="height: 100px">
                                                <p class="card-text text-light">
                                                    {{ Str::limit($video->title, $limit = 60, '...') }}</p>
                                                <p class="text-secondary">{{Str::limit($bookmarks[$key]->created_at, $limit = 10, ' ')  }}</p>
                                            </div>
                                        </a>
                                        <button type="button" class="btn btn-outline-danger" style="font-size: 12px; font-weight:600" data-bs-toggle="modal" data-bs-target="#removeBookmarkModal{{ $video->id }}">
                                            <i class='bx bx-bookmark-minus me-1' ></i>Remove
                                        </button>                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Konfirmasi Remove Bookmark -->
                            <div class="modal fade" id="removeBookmarkModal{{ $video->id }}" tabindex="-1"
                                aria-labelledby="removeBookmarkModalLabel{{ $video->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="removeBookmarkModalLabel">Remove Bookmark
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark">
                                            Are you sure you want to Remove the bookmark?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancel</button>
                                            <form id="remove-bookmark-form"action="/bookmark/{{ $idBookmark[$key] }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="row mt-3">
                    <div class="col d-flex align-items-center justify-content-center">
                        {{ $videos->onEachSide(1)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

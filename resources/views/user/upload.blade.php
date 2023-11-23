@extends('layouts.main')
@section('container')
    <style>
        .form-box .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 40px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 2px solid #fff;
            padding-right: 23px;
            font-size: 16px;
            color: #fff;
            font-weight: 500;
            transition: .5s;
        }

        .input-box input:focusl,
        .input-box input:valid {
            border-bottom-color: #fff;
        }

        .input-box label {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .input-box input:focus~label,
        .input-box input:valid~label {
            top: -5px;
            color: #00abf0;
        }

        .input-box i {
            position: absolute;
            top: 50%;
            right: 0%;
            transform: translateY(-50%);
            font-size: 18px;
            color: #fff;
            transition: .5s;
        }

        .input-box input:focus~i,
        .input-box input:valid~i {
            color: #00abf0;
        }

        .btn-upload {
            background-color: transparent;
            border-color: #00abf0;
            width: 50%;
            margin-left: 25%
        }

        .btn-upload:hover {
            background-color: #00abf0;
        }
    </style>
    <div class="container p-0" style="min-height: 70vh; margin-top:13vh !important; width:100vw !important; margin-left:10px">
        <div class="row m-0">
            @include('partials.dash')
            <div class="col-9 mt-4 mb-3">
                <div class="row ms-3">
                    <h1 class="mb-4 mt-2" style="padding-left: 40%">Upload Video</h1>
                    <div class="card offset-3 px-5 pb-4"
                        style="border-radius: 3%;background-color: transparent; border-color:#00abf0; width:60%;box-shadow: 0px 0px 18px #00abf0;">
                        <div class="form-box login">
                            <form action="/videos" method="POST">
                                @csrf
                                <div class="input-box mb-3">
                                    <input class="click-trigger" type="text" name="title" value="{{ old('title') }}"
                                        required>
                                    <label>Video Title</label>
                                    <i class='bx bx-video'></i>
                                    @error('title')
                                        <i class='bx bx-error-circle text-danger element-to-hide'
                                            style="margin-top: 35px; font-size: 13px"></i>
                                        <p class="text-danger me-3 element-to-hide" style="font-size: 13px">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="input-box mb-3">
                                    <input class="click-trigger" type="text" name="link" value="{{ old('link') }}"
                                        required>
                                    <label>Youtube link</label>
                                    <i class='bx bx-link'></i>
                                    @error('link')
                                        <i class='bx bx-error-circle text-danger element-to-hide'
                                            style="margin-top: 35px; font-size: 13px"></i>
                                        <p class="text-danger me-3 element-to-hide" style="font-size: 13px">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="input-box">
                                    <input class="click-trigger" type="text" name="maker" value="{{ old('maker') }}"
                                        required>
                                    <label>Video Maker</label>
                                    <i class='bx bx-user-pin'></i>
                                    @error('maker')
                                        <i class='bx bx-error-circle text-danger element-to-hide'
                                            style="margin-top: 35px; font-size: 13px"></i>
                                        <p class="text-danger me-3 element-to-hide" style="font-size: 13px">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="input-box mb-3">
                                    <input class="click-trigger" type="text" name="description"
                                        value="{{ old('description') }}" required>
                                    <label>Description</label>
                                    <i class='bx bx-captions'></i>
                                    @error('description')
                                        <i class='bx bx-error-circle text-danger element-to-hide'
                                            style="margin-top: 35px; font-size: 13px"></i>
                                        <p class="text-danger me-3 element-to-hide" style="font-size: 13px">{{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="input-box" style="margin-top: 1%">
                                    <Label>Kategori Video</Label><br><br>
                                    <select class="form-select form-select-sm" id="category_id" name="category_id">
                                        <option value="1" disabled selected>Pilih Kategori Video</option>
                                        <option value="1">HTML</option>
                                        <option value="2">CSS</option>
                                        <option value="3">Javascript</option>
                                        <option value="3">Project Learning</option>
                                    </select>
                                </div>
                                <input type="hidden" name="uploader_id" value="{{ auth()->id() }}">
                                <button type="submit" class="btn-upload btn btn-primary mt-4 mb-3" style=" "><i
                                        class='bx bx-cloud-upload me-1'></i>Upload Video</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

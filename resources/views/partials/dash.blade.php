<style>
    .user-active {
        border-right: 2px solid #00abf0;
    }

    .dash {
        transition: 0.2s
    }

    .dash:hover {
        background-color: #00abf0
    }

    .profile-image-container {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            margin: auto;
            border: 2px solid #00abf0;
            box-shadow: 0 0 25px #00abf0;
        }

        .profile-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #profile-img-input {
            display: none;
        }

        #upload-label {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            padding: 8px 15px;
            background-color: #00abf0;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            border:2px solid #00abf0;
            box-shadow: 0 0 25px #00abf0;
            display: none;
            white-space: nowrap;
        }

        .profile-image-container:hover #upload-label {
            display: block;
        }
</style>

<div class="col-3 m-0 mb-1 user-active" style="min-height: 50vh;">
    <div class="mt-4 pb-5" style="text-align: center">
        @error('image')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span style="overflow-wrap: break-word"><b><i
                            class='bx bxs-error-circle me-1'></i>{{ $message }}</b></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
        @if (session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <span style="overflow-wrap: break-word"><b><i
                            class='bx bxs-badge-check me-1'></i>{{ session('success') }}</b></span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        
        @if (auth()->user()->image)
        <div class="profile-image-container mt-5">
          <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="Profil Picture" class="profile-image">
          <label for="profile-img-input" id="upload-label"><i class='bx bxs-camera me-1' ></i>Update</label>
          <form action="/user/image" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="file" name="image" id="profile-img-input" class="form-control"  onchange="displayImage(this)">
              <button type="submit" style="display: none;"></button>
          </form>
      </div>
        @else
        <div class="profile-image-container mt-5">
          <img src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg" alt="Profil Picture" class="profile-image">
          <label for="profile-img-input" id="upload-label"><i class='bx bxs-camera me-1' ></i>Update</label>
          <form action="/user/image" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="file" name="image" id="profile-img-input" class="form-control"  onchange="displayImage(this)">
              <button type="submit" style="display: none;"></button>
          </form>
      </div>
        @endif
        <h3 class="mt-3">{{ $user->username }}</h3>
        <a href="/user" style="color: aliceblue;  " class="text-decoration-none">
            <div class="dash"
                style="font-weight:600; margin-top:60px; height:50px; padding:13px; {{ $dash === 'yourVid' ? 'background-color: #00abf0' : '' }}">
                <i class='bx bxs-videos'></i> Your Videos
            </div>
        </a>
        <a href="/upload" style="color: aliceblue; " class="text-decoration-none">
            <div class="dash"
                style="font-weight:600; height:50px; padding:13px; {{ $dash === 'upload' ? 'background-color: #00abf0' : '' }}">
                <i class='bx bx-cloud-upload'></i> Upload Video
            </div>
        </a>
        <a href="/save-video" style="color: aliceblue; " class="text-decoration-none">
            <div class="dash"
                style="font-weight:600; height:50px ; padding:13px; {{ $dash === 'savedVid' ? 'background-color: #00abf0' : '' }}">
                <i class='bx bx-save'></i> Saved videos
            </div>
        </a>
        <form id="logout-form" action="/logout" method="POST" class="sticky-bottom"
            style="margin-top: 30vh; bottom:45px;">
            @csrf
            <button type="button" class="btn btn-outline-danger" style="font-weight:600; width:200px"
                data-bs-toggle="modal" data-bs-target="#logoutModal">
                <i class='bx bx-log-out me-1'></i>Logout
            </button>
        </form>

    </div>
</div>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                Are you sure you want to log out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger"
                    onclick="document.getElementById('logout-form').submit()">Logout</button>
            </div>
        </div>
    </div>
</div>

<script>
    function displayImage(input) {
        const file = input.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                document.querySelector('.profile-image').src = e.target.result;
            };

            reader.readAsDataURL(file);
        }

        // Submit form when a file is selected
        document.querySelector('form').submit();
    }
</script>

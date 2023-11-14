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
</style>

<div class="col-3 m-0 mb-1 user-active" style="min-height: 50vh;">
    <div class="mt-4 pb-5" style="text-align: center">
        <img src="https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg"
            style="width: 100px;height:100px;object-fit:cover; object-position:center; text-align:center"
            class="rounded-circle me-3 my-3">
        <h3 class="mt-3">{{ $user->username }}</h3>
        <a href="/user" style="color: aliceblue;  " class="text-decoration-none">
            <div class="dash"
                style="font-weight:600; margin-top:60px; height:50px; padding:13px; {{ $dash === 'yourVid' ? 'background-color: #00abf0' : '' }}">
                <i class='bx bxs-videos'></i> Your Videos
            </div>
        </a>
        <a href="/upload" style="color: aliceblue; " class="text-decoration-none">
            <div class="dash" style="font-weight:600; height:50px; padding:13px; {{ $dash === 'upload' ? 'background-color: #00abf0' : '' }}">
                <i class='bx bx-cloud-upload'></i> Upload Video
            </div>
        </a>
        <a href="/save-video" style="color: aliceblue; " class="text-decoration-none">
            <div class="dash" style="font-weight:600; height:50px ; padding:13px; {{ $dash === 'savedVid' ? 'background-color: #00abf0' : '' }}">
                <i class='bx bx-save'></i> Saved videos
            </div>
        </a>
        <form id="logout-form" action="/logout" method="POST" class="sticky-bottom" style="margin-top: 30vh; bottom:45px;">
            @csrf
            <button type="button" class="btn btn-outline-danger" style="font-weight:600; width:200px" data-bs-toggle="modal" data-bs-target="#logoutModal">
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
          <button type="button" class="btn btn-danger" onclick="document.getElementById('logout-form').submit()">Logout</button>
        </div>
      </div>
    </div>
  </div>


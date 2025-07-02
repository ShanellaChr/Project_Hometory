<x-master>
  <div
    class="position-relative w-100 d-flex flex-column align-items-center"
    style="height: 100vh; background: url('/img/BackdropProfilePage.svg') no-repeat top center; background-size: cover; padding-top: 15vh;"
  >
    <h1 class="montserrat-bold text-5xl text-center mb-5">
      My<span class="ms-3 text-orenyedija">Hometory - My Profile</span>
    </h1>

    <div class="container mt-5 pt-5" style="max-width: 480px;">
      <form>
        <div class="mb-4">
          <label for="inputUsername" class="form-label montserrat-medium">Username</label>
          <input
            type="text"
            class="form-control form-control-lg nunito-medium"
            id="inputUsername"
            placeholder="Enter your username"
          >
        </div>
        <div class="mb-4">
          <label for="inputEmail" class="form-label montserrat-medium">Email</label>
          <input
            type="email"
            class="form-control form-control-lg nunito-medium"
            id="inputEmail"
            placeholder="Enter your email"
          >
        </div>
        <div class="mb-4">
          <label for="inputPassword" class="form-label montserrat-medium">Password</label>
          <input
            type="password"
            class="form-control form-control-lg nunito-medium"
            id="inputPassword"
            placeholder="Enter your password"
          >
        </div>
      </form>
      <div class="row justify-content-center mt-5 pt-3 text-center">
            <div class="col-12 col-md-4 mb-2">
              <a href="{{ route('profile.edit') }}" class="btn btn-ijo btn-ijo:hover w-100 d-flex justify-content-center align-items-center gap-2 py-2 nunito-bold">
                Edit
                <img src="/img/editButton.svg" alt="Edit" width="20" height="20">
              </a>
            </div>
            <div class="col-12 col-md-4 mb-2">
                <button type="button" class="btn btn-orange-putih btn-orange-putih:hover w-100 d-flex justify-content-center align-items-center gap-2 py-2  nunito-bold">
                    Logout
                <img src="/img/logOutIcon.svg" alt="Logout" width="20" height="20">
            </button>
            </div>
            <div class="col-12 col-md-4 mb-2">
              <!-- Trigger Modal -->
              <button
                  type="button"
                  class="btn btn-merah btn-merah:hover w-100 d-flex justify-content-center align-items-center gap-2 py-2 nunito-bold"
                  data-bs-toggle="modal"
                  data-bs-target="#deleteConfirmationModal"
              >
                  Delete
                  <img src="/img/trashbin white icon.svg" alt="Delete" width="20" height="20">
              </button>
            </div>
        </div>

    </div>
  </div>
  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius: 1rem;">

        <!-- Header -->
        <div class="modal-header bg-merahbutton text-putihpalette d-flex flex-column align-items-center" style="border-bottom: none;">
          <img src="/img/warning icon.svg" alt="Warning" width="80" height="80" class="mb-2">
        </div>

        <!-- Footer -->
        <div class="modal-footer d-flex justify-content-center gap-3 pt-2 mb-3">
          <h3 class="modal-title w-100 text-center montserrat-bold" id="deleteConfirmationLabel">Are You Sure Want <br> To Delete?</h3>
          <button type="button" class="btn btn-abu btn-abu:hover d-flex align-items-center gap-2 px-4" data-bs-dismiss="modal">
            Cancel
            <img src="/img/cancel icon.svg" alt="Cancel" width="20" height="20">
          </button>

          <form action="{{ route('profile.delete') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-merah btn-merah:hover d-flex align-items-center gap-2 px-4">
              Delete
              <img src="/img/trashbin white icon.svg" alt="Delete" width="20" height="20">
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-master>

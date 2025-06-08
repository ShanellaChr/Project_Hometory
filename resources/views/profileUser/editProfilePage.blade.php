<x-master>
  <div 
    class="position-relative w-100 d-flex flex-column align-items-center"
    style="height: 100vh; background: url('/img/BackdropProfilePage.svg') no-repeat top center; background-size: cover; padding-top: 25vh;"
  >

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
                Save
                <img src="/img/editButton.svg" alt="Edit" width="20" height="20">
              </a>
        </div>

    </div>
  </div>
</x-master>

<x-master>
  <div 
    class="position-relative w-100 d-flex flex-column align-items-center"
    style="height: 100vh; background: url('/img/BackdropProfilePage.svg') no-repeat top center; background-size: cover; padding-top: 15vh;"
  >
    <h1 class="montserrat-bold text-5xl text-center mb-5">
      My<span class="ms-3 text-orenyedija">Profile</span>
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
                <button type="button" class="btn bg-ijopalette text-putihpalette w-100 d-flex justify-content-center align-items-center gap-2 py-2  nunito-bold">
                    Edit
                <img src="/img/editButton.svg" alt="Edit" width="20" height="20">
                </button>
            </div>
            <div class="col-12 col-md-4 mb-2">
                <button type="button" class="btn bg-orenpalette text-putihpalette w-100 d-flex justify-content-center align-items-center gap-2 py-2  nunito-bold">
                    Logout
                <img src="/img/logOutIcon.svg" alt="Logout" width="20" height="20">
            </button>
            </div>
            <div class="col-12 col-md-4 mb-2">
                <button type="button" class="btn bg-merahbutton text-putihpalette w-100 d-flex justify-content-center align-items-center gap-2 py-2  nunito-bold">
                    Delete
                <img src="/img/trashbin white icon.svg" alt="Delete" width="20" height="20">
                </button>
            </div>
        </div>

    </div>
  </div>
</x-master>

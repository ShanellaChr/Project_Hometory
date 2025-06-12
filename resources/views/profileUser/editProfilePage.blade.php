<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Edit Profile</title>
</head>
<body>
  <div 
    class="position-relative w-100 d-flex flex-column align-items-center"
    style="height: 100vh; background: url('/img/BackdropProfilePage.svg') no-repeat top center; background-size: cover; padding-top: 10vh;"
  >
  <div class="d-flex justify-content-center align-items-center montserrat-bold text-5xl">Edit<span class="ms-3 text-orenyedija">Profile</span></div>
  <img src="/img/Back Button.svg" alt="Back Button" class="BackButton">
    <div class="container mt-5 pt-5" style="max-width: 500px;">
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
</body>
</html>
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
    <title>Hometory - Login</title>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-6 vh-100 position-relative d-flex flex-column align-items-center">
                <img src="/img/Back Button.svg" alt="Back Button" class="BackButton">
                <div class="position-absolute top-50 start-50 translate-middle" style="width: 400px;">
                    <img src="/img/LogoBox.svg" alt="Logo Box" class="img-fluid d-block mx-auto" >
                    <h3 class="pt-3 mb-5 montserrat-bold text-center">Login on Hometory</h3>
                    {{-- input form --}}
                    <form>
                        <div class="mb-3">
                            <label for="inputUsername" class="form-label montserrat-medium">Username</label>
                            <input type="text" class="form-control form-control-lg nunito-medium" id="inputUsername" placeholder="Enter your username">
                        </div>

                        <div class="mb-1">
                            <label for="inputPassword" class="form-label montserrat-medium">Password</label>
                            <input type="password" class="form-control form-control-lg nunito-medium" id="inputPassword" placeholder="Enter your password">
                        </div>

                        <div class="mt-3 mb-5 text-end">
                            <a href="#" class="small text-dark montserrat-medium text-decoration-none">Forgot Password?</a>
                        </div>

                        <button type="submit" class="nunito-bold p-3 btn-orange rounded shadow w-100">Login</button>

                         <div class="mt-3 mb-5">
                            <p class="d-inline montserrat-medium">Don't have an account? </p>
                            <a href="#" class="montserrat-bold text-decoration-none text-orenyedija">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>

            {{-- bagian kanan logo --}}
            <div class="col-6 vh-100 position-relative">
                <img src="/img/BackdropCircle.svg" alt="BackDrop" class="position-absolute w-100 h-100 top-0 end-0 z-1">
                <div class="position-absolute z-2" style="top: 45%; right: 10%;">
                    <img src="/img/Navbar Logo.svg" alt="Logo" class="w-100 mb-2">
                    <h3 class="nunito-medium text-end m-0">Track Smarter, Waste No More!</h3>
                </div>
            </div>
       </div>
    </div>
</body>
</html>

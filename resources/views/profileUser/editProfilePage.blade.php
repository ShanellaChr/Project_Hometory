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
    <div class="position-relative w-100 d-flex flex-column align-items-center"
        style="height: 100vh; background: url('/img/BackdropProfilePage.svg') no-repeat top center; background-size: cover; padding-top: 10vh;">
        <div class="d-flex justify-content-center align-items-center montserrat-bold text-5xl">Edit<span
                class="ms-3 text-orenyedija">Profile</span></div>
        <a href="{{ route('profile.show') }}">
            <img src="/img/Back Button.svg" alt="Back Button" class="BackButton">
        </a>

        <div class="container mt-5 pt-5" style="max-width: 500px;">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username"
                        value="{{ old('username', $user->username) }}">
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email"
                        value="{{ old('email', $user->email) }}">
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                </div>

                <div class="row justify-content-center mt-5 pt-3 text-center">
                    <div class="col-12 col-md-4 mb-2">
                        <button type="submit"
                            class="btn btn-ijo btn-ijo:hover w-100 d-flex justify-content-center align-items-center gap-2 py-2 nunito-bold">
                            Save
                            <img src="/img/Checklist Icon.svg" alt="Save" width="20" height="20">
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html class="bg-white font-roboto" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="grid grid-cols-2 gap-4 pt-24">
        <div>
            <div>
                <h1 class="text-blue-700 text-center text-5xl pb-8 font-bold">Registrasi</h1>
            </div>
            <form class="user pl-24 pr-24" action="" method="post">
                <div class="form mt-3">
                    <input type="text" class="form-control form-control-user2 rounded-full h-12 shadow-md" id="nama" name="nama"
                        aria-describedby="nama" placeholder="Nama">
                </div>
                <div class="form mt-3">
                    <input type="text" class="form-control form-control-user2 rounded-full h-12 shadow-md" id="notelp" name="notelp"
                        aria-describedby="notelp" placeholder="No.Telp">
                </div>
                <div class="form mt-3">
                    <input type="text" class="form-control form-control-user2 rounded-full h-12 shadow-md" id="email" name="email"
                        aria-describedby="email" placeholder="Email">
                </div>
                <div class="form mt-3">
                    <input type="text" class="form-control form-control-user2 rounded-full h-12 shadow-md" id="username" name="username"
                        placeholder="Username">
                </div>
                <div class="form mt-2">
                    <input type="password" class="form-control form-control-user2 rounded-full h-12 shadow-md" id="password" name="password"
                        placeholder="Password">
                </div>
                <div class="form mt-2">
                    <input type="password" class="form-control form-control-user2 rounded-full h-12 shadow-md" id="password2" name="password2"
                        placeholder="Konfirmasi Password">
                </div>

                <div class="text-center">
                    <button type="submit" name="register"
                        class="btn btn-reguser btn-block mt-8 bg-blue-500 text-white  rounded-full">Registrasi</button>
                </div>

            </form>
        </div>

        <div>
            <img src="/images/registrasi.png" alt="">
        </div>

    </div>

</body>

</html>

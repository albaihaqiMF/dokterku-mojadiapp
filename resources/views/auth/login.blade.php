<!DOCTYPE html>
<html class="bg-white font-roboto" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="grid grid-cols-2 gap-4 mt-44">
        <div>
            <div>
                <h1 class="text-blue-700 text-center text-5xl pb-8 font-bold">Login</h1>
            </div>
            <form class="user pl-24 pr-24" action="{{route('login')}}" method="POST">
                @csrf
                <div class="form">
                    <input type="text" class="form-control-user form-control rounded-full h-12 shadow-md" id="email" name="email"
                        aria-describedby="username" placeholder="Username">
                </div>
                <div class="form mt-3">
                    <input type="password" class="form-control-user form-control rounded-full h-12 shadow-md" id="password" name="password"
                        placeholder="Password">
                </div>
                <div class="text-center">

                    <button type="submit" name="login"
                        class="btn btn-user btn-block mt-8 bg-blue-500 text-white rounded-full bg-center mb-3">Masuk</button>
                    <br>
                    <a href="" class=" text-blue-500 underline">Daftar akun</a>
                </div>
            </form>
        </div>
        <div>
            <img src="/images/login.png" alt="">
        </div>
    </div>



</body>

</html>

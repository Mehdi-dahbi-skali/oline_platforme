<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>oline community platform</title>
    <link rel="stylesheet" href=" {{ asset('css/ecran.css')}} ">
    <script src="https://kit.fontawesome.com/8c8a1f6ca3.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <a href=" {{route('welcome')}} "><img src="  {{ asset('img/logotr.png') }}" alt="logo"></a>
        <p>Online  Community Platform</p>
        <a href="{{route('profile')}}"><i class="fas fa-user-circle"></i></a>
        @if (session('id'))
        <a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i></a>
        @endif
    </header>
   <main>
        @yield('contenant')
        
        @yield('users')

        @yield('profile')

        @yield('product')

        @yield('login')

        @yield('create_acc')

        @yield('create_post')

        @yield('create_product')

    </main>
</body>
</html>

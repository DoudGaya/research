<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>BUK - Chemistry Dept</title>
</head>
<body class="bg-gray-200">

<nav class="w-full flex px-10 py-4 mb-10 bg-white shadow justify-between">
    <div class="">
        <p class=" font-sans font-bold">ResearchDome </p>
    </div>
    
    <ul class="gap-5 hidden md:flex">
        <li class=" px-3 py-1 hover:bg-gray-100 cursor-pointer rounded-md">
            <a href="{{ route('posts')}}">Home</a>
        </li>
        <li class=" px-3 py-1 hover:bg-gray-100 cursor-pointer rounded-md">
            <a href="{{ route('about')}}">About</a>
        </li>
        <li class=" px-3 py-1 hover:bg-gray-100 cursor-pointer rounded-md">
            <a href="{{ route('services')}}">Services</a>
        </li>
        <li class=" px-3 py-1 hover:bg-gray-100 cursor-pointer rounded-md">
            <a href="{{ route('contact')}}">Contact</a>
        </li>
        
        <li class=" px-3 py-1 hover:bg-gray-100 cursor-pointer rounded-md">
            <a href="{{ route('projects')}}">Projects</a>
        </li>

       @auth
            <li class="ml-10 px-3 py-1 hover:bg-gray-100 cursor-pointer rounded-md">
                <a href="#">Levitrons</a>
            </li>
            <form action="{{ route('logout')}}" method="POST">
            @csrf
            <li class=" px-3 py-1 hover:bg-gray-100 cursor-pointer rounded-md">
                <button type="submit" href="{{ route('logout')}}">Logout</button>
            </li>
            </form>
            
       @endauth

       @guest
       <li class="ml-10  py-1 hover:bg-gray-100 cursor-pointer rounded-md">
        <a href="{{ route('register')}}">Register</a>
    </li>
    <li class=" py-1 hover:bg-gray-100 cursor-pointer rounded-md">
        <a href="{{ route('login')}}">Login</a>
    </li>
       @endguest
       
    </ul>
    <div class=" inline-block md:hidden">
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-black transform rotate-90" viewBox="0 0 20 20" fill="currentColor">
                <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
              </svg>
        </a>
    </div>
</nav>
    
    @yield('content')
    
</body>
</html>
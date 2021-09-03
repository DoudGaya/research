@extends('layouts.master')

@section('content')
    <section class="px-4">
        <div class="flex w-full  sm:w-3/4 md:w-2/4 lg:w-1/4 flex-col px-5 py-10 md:mx-auto rounded-md shadow-md bg-white">
            <div class=" border-b-2 flex @error('error') border-red-400 @enderror w-full justify-center">
               <h2 class=" text-2xl font-bold tracking-wide font-montero">Create an Account</h2>
            </div>
            <div class="my-50">
                <form action="{{ route('login')}}" method="post">
                    @csrf

                  <div class=" w-full  text-red-500 text-center">
                    @if (session('status'))
                    {{ session('status')}}
                @endif
                  </div>
                  
                    <div class="flex flex-col w-full py-1 space-y-2 mt-4 ">
                        <label class="font-exo text-xl" for="password">Email</label>
                        <input type="email" value="{{ old('email') }}" placeholder="Email" name="email" class="bg-gray-100 focus:outline-none px-2 py-1  @error('username') border-b border-red-400 @enderror rounded-lg">
                        @error('email')
                            <div class="">
                                <small class="text-sm font-exo text-red-400 ">{{ $message}} </small>
                            </div>
                        @enderror
                    </div>
                   
                    <div class="flex flex-col w-full py-1 space-y-2 mt-4 ">
                        <label class="font-exo text-xl" for="password">Password</label>
                        <input type="password" value="{{ old('password') }}" name="password" placeholder="Password" class="bg-gray-100 focus:outline-none px-2 py-1  @error('password') border-b border-red-400 @enderror rounded-lg">
                        @error('password')
                            <div class="">
                                <small class="text-sm font-exo text-red-400 ">{{ $message}} </small>
                            </div>
                        @enderror
                    </div>

                    <div class="flex w-full py-1 space-x-2 items-center mt-4 ">
                        <input type="checkbox" name="remember" id="remember"  class="bg-gray-100 focus:outline-none px-2 py-1 rounded-lg">
                        <label class="font-exo text-sm" for="remember">Remember me</label>
                       
                    </div>
                    <div class="flex flex-col w-full py-1 space-y-2 mt-4 ">
                    <button class="bg-black text-white font-exo px-3 py-2">Submit</button>
                    </div>
                 
                </form>
            </div>
        </div>
    </section>
@endsection
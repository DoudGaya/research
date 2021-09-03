@extends('layouts.master')

@section('content')
    <section class="">
       <div class="w-full">
        <div class="flex space-x-5 flex-rol px-10 py-6">
            {{-- left nav dashbaord --}}
            <div class=" w-2/12 bg-white text-gray-900 flex flex-col">
                <div class=" w-full p-2 flex flex-col justify-start ">
                    <p class="text-sm font-exo">{{ auth()->user()->name }}</p>
                </div>
            </div>
            {{-- right nav dashbaord --}}
            <div class="flex w-10/12 bg-white">
                other contents
            </div>
        </div>

       </div>

    </section>
@endsection 
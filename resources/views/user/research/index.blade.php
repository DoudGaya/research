@extends('layouts.master')

@section('content')
<div class="container w-4/6 justify-center m-auto bg-white rounded-md">
    <div class="flex flex-col  mx-8 py-5 space-x-4">
  <div class="">
      {{$user->username}}
      <p>published {{ $posts->count()}} {{ Str::plural('article', $posts->count() )}} </p>
      <p>Recieved {{ $user->recievedLikes->count() }} {{ Str::plural('like', $user->recievedLikes->count() )}} </p>
  </div>
    <hr class="my-3">
    <div class="w-full px-3 py-4 bg-gray-200">
        @if ($posts->count())
        @foreach ($posts as $post)
        <x-post :post="$post" />
        @endforeach
             {{ $posts->links() }}
     @else
         <p> <strong>{{ $user->name}}</strong> does not have any post</p>
     @endif
    </div>

</div>
@endsection
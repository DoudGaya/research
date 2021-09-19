@extends('layouts.master')

@section('content')
    <div class="container w-4/6 justify-center m-auto bg-white rounded-md">
        <div class="flex flex-col  mx-8 py-5 space-x-4">

        @auth
                <form action="{{ route('posts') }}" method="post">
                    @csrf
                    <div class="rounded-lg space-y-3">
                        <label for="body">Post Something</label>
                        <div class="border-blue-500 rounded-lg border p-2">
                            <textarea name="body" id="post" class="w-full h-20 bg-transparent outline-none" placeholder="Post Something"></textarea>
                        </div>
                </div>
                @error('body')
                <small class="text-red-500">{{ $message }}</small>
                @enderror
                <div class="rounded-lg flex justify-end my-3">
                    <button type="submit" class="bg-blue-600 rounded-lg text-white px-4 py-1">Publish</button>
                    </div>
                </form>
        @endauth
        <hr class="my-3">
        <div class=" w-full">
                @if ($posts->count())
                   @foreach ($posts as $post)
              <x-post :post="$post" />
                   @endforeach
                        {{ $posts->links() }}
                @else
                    <p>No post available</p>
                @endif
        </div>

    </div>
@endsection
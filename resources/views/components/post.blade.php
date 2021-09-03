@props(['post' => $post])

<p class="text-white bg-gray-800 px-2 rounded-lg max-w-max"> <a href=" {{ route('user.posts', $post->user) }}">{{$post->user->name}}</a> <span class="ml-10 text-gray-600 text-xs">{{$post->created_at->diffForHumans() }}</span></p>
<div class="my-4">{{ $post->body}}</div>
<div class="">
    <a href="{{ route('post.show', $post) }}">View</a>
</div>
<div class="flex space-x-2 items-center">
 @auth
 @can('delete', $post)
     <form method="POST" action="{{ route('post.delete', $post)}}">
         @csrf
         @method('DELETE')
         <button type="submit" class="my-1 text-red-500">Delete</button>
     </form>
 @endcan 
     @if (!$post->likedBy(auth()->user()))  
         <form method="POST" action="{{ route( 'post.like', $post )}}">
             @csrf
             <button type="submit" class="my-1 text-blue-500">Like</button>
         </form>
     @else
         <form method="post" action="{{ route( 'like.destroy', $post )}}">
             @method('DELETE')
             @csrf
             <button class="my-1 text-blue-500">Unlike</button>
         </form>
     @endif


     @endauth
   
 
     <span>{{$post->likes->count()}} <small class="text-sm text-blue-500">{{ Str::plural('like', $post->likes->count())}}</small></span>
</div>
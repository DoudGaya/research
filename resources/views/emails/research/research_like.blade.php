@component('mail::message')
# Your article was liked

{{ $liker->name }} liked one of your article

@component('mail::button', ['url' => route('post.show', $post)])
View Article
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

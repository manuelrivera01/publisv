@component('mail::message')
# Your post was liked

{{ $liker->name }} le dió like a una de tus publicaciones.

@component('mail::button', ['url' => route('posts.show', $post)])
    View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

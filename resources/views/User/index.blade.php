<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <h2 class='user_name'>{{Auth::user()->name}}</h2>
        <div class='own_posts'>
            @foreach ($own_posts as $post)
                <div class='post'>
                    <h4><a href='/posts/{{ $post->id }}'>{{ $post->title }}</a></h4>
                    <small>{{ $post->user->name }}</small>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
            
            <div class='paginate'>
                {{ $own_posts->links() }}
            </div>
        </div>
        
        @endsection
    </body>
</html>
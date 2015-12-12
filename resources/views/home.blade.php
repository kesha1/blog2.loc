@extends('layouts.app')
@section('content')
        <!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ route('posts.show', $post->id) }}">
                        <h2 class="post-title">
                            {!! str_limit($post->title, 50) !!}
                        </h2>
                    </a>

                    <p class="post-meta">Posted on {{ $post->created_at->format('F') }} {{ $post->created_at->format('d') }}, {{ $post->created_at->format('Y') }} at {{ $post->created_at->format('H:i:s') }}</p>
                </div>
                <hr>
            @endforeach
            {!! $posts->render() !!}
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', "$post->title")

@section('content')

    <article class="blog-post">
        <h2 class="mb-1 display-5 link-body-emphasis">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ date('d M Y H:i', strtotime($post->created_at)) }}</p>
        <p> {{ $post->content }} </p>

        <small class="text-muted">{{ $total_comments }} Komentar</small>

        @foreach ($comments as $comment)
            <div class="mb-3 card">
                <div class="card-body">
                    <p style="font-size: 8pt">
                        {{ $comment->comment }}
                    </p>
                </div>
            </div>
        @endforeach
    </article>
    <a href="{{ url('posts') }}">Beranda</a>

@endsection

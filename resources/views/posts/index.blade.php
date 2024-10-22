@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
    <h1>
        ini blog mizan
        <a class="btn btn-success" href="{{ url('posts/create') }}">+Buat Postingan</a>
    </h1>
    @foreach ($posts as $post)
        <div class="mb-3 card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><small class="text-muted">{{ date('d M Y H:i', strtotime($post->created_at)) }}</small>
                </p>
                <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">edit</a>
                <form method="POST" action="{{ url("posts/{$post->id}") }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection

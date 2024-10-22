@extends('layouts.app')

@section('title', 'Blog | Edit Postingan')

@section('content')

        <h1>Ubah Postingan</h1>
        <form method="POST" action="{{ url("posts/{$post->id}") }}" class="mx-auto form-control">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

@endsection

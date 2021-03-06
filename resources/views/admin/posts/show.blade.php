@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="post-title">{{ $post->title }}</h1>

                <img src="{{ $post->cover_image ? asset('storage/' . $post->cover_image) : asset('storage/uploads/poster-not-available.jpg') }}" alt="{{ $post->title }} - immagine di copertina">


                <div class="post-content">
                    {{ $post->content }}
                </div>
                <p>Autore: {{ $post->author }}</p>
                <p>Slug: {{ $post->slug }}</p>
                <p>Creato il: {{ $post->created_at }}</p>
                <p>Modificato il: {{ $post->updated_at }}</p>
            </div>
        </div>
    </div>
@endsection

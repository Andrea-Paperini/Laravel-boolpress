@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="post-title">Creazione nuovo post</h1>
                <form class="" action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="author">Autore</label>
                        <input type="text" class="form-control" id="author" name="author" placeholder="Autore" value="{{ $post->author }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Testo articolo</label>
                        <textarea class="form-control" id="content"  name="content" rows="8">{{ $post->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cover_image_file">Immagine di copertina</label>
                        @if($post->cover_image)
                            <img src="{{ asset('storage/' . $post->cover_image) }}" alt="{{ $post->title }} - immagine di copertina">
                        @endif
                        <input type="file" class="form-control-file" id="cover_image_file" name="cover_image_file" value="Cambia immagine">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Aggiorna">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

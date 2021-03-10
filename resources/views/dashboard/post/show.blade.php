@extends('dashboard.master')
@section('content')

            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input readonly value="{{ $post->title }}" type="text" class="form-control" id="title" name="title" aria-describedby="title">
            </div>
            <div class="mb-3">
                <label for="url_clean" class="form-label">URL limpio</label>
                <input  readonly value="{{ $post->url_clean }}" type="text" class="form-control" id="url_clean" name="url_clean" aria-describedby="url_clean">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenido</label>
                <textarea  readonly class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
            </div>

@endsection




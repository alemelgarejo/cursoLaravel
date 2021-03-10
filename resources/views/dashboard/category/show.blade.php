@extends('dashboard.master')
@section('content')

            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input readonly value="{{ $category->title }}" type="text" class="form-control" id="title" name="title" aria-describedby="title">
            </div>
            <div class="mb-3">
                <label for="url_clean" class="form-label">URL limpio</label>
                <input  readonly value="{{ $category->url_clean }}" type="text" class="form-control" id="url_clean" name="url_clean" aria-describedby="url_clean">
            </div>

@endsection




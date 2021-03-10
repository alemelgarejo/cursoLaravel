      

    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input value="{{ old('title', $post->title) }}" type="text" class="form-control" id="title" name="title" aria-describedby="title">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="url_clean" class="form-label">URL limpio</label>
        <input value="{{ old('url_clean', $post->url_clean) }}" type="text" class="form-control" id="url_clean" name="url_clean" aria-describedby="url_clean">
        @error('url_clean')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">Categoría</label>
        <select class="form-control" name="category_id" id="category_id">
            @foreach ($categories as $title => $id)
                <option {{ $post->category_id == $id ? 'selected="selected"' : ''}} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
        @error('category_id')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="posted" class="form-label">Posteado</label>
        <select class="form-control" name="posted" id="posted">
           @include('dashboard.partials.option-yes-not', ['val' => $post->posted])
        </select>
        @error('posted')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Contenido</label>
        <textarea class="form-control" id="content" name="content" rows="3">{{ old('content', $post->content) }}</textarea>
        @error('content')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>





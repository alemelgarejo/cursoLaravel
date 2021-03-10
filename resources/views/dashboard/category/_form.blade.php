      

    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input value="{{ old('title', $category->title) }}" type="text" class="form-control" id="title" name="title" aria-describedby="title">
        @error('title')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="url_clean" class="form-label">URL limpio</label>
        <input value="{{ old('url_clean', $category->url_clean) }}" type="text" class="form-control" id="url_clean" name="url_clean" aria-describedby="url_clean">
        @error('url_clean')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>





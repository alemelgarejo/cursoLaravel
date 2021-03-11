

    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input value="{{ old('name', $user->name) }}" type="text" class="form-control" id="name" name="name" aria-describedby="name">
        @error('name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input value="{{ old('email', $user->email) }}" type="text" class="form-control" id="email" name="email" aria-describedby="email">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    @if ($passw)
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input value="{{ old('password', $user->password) }}" type="password" class="form-control" id="password" name="password" aria-describedby="password">
        @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Enviar</button>





@extends('dashboard.master')
@section('content')

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input readonly value="{{ $user->name }}" type="text" class="form-control" id="name" name="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input  readonly value="{{ $user->email }}" type="text" class="form-control" id="email" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <input  readonly value="{{ $user->rol->key }}" type="text" class="form-control" id="rol" name="rol" aria-describedby="rol">
            </div>

@endsection




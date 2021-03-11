@extends('dashboard.master')
@section('content')
    <form action="{{ route('user.store') }}" method="POST">
        @include('dashboard.user._form', ['passw' => true])
    </form>
@endsection




@extends('dashboard.master')
@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="POST">       
        @method('PUT')
        @include('dashboard.category._form')
    </form>
@endsection
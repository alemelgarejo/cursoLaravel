@extends('dashboard.master')
@section('content')
    <a class="btn btn-success mt-3 mb-3" href="{{ route('post.create') }}">Crear</a>
    <table  class="table table-striped">
        <thead>
            <tr>
                <td scope="col">Id</td>
                <td scope="col">Título</td>
                <td scope="col">Categoría</td>
                <td scope="col">Posteado</td>
                <td scope="col">Creación</td>
                <td scope="col">Actualización</td>
                <td scope="col">Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->title}}</td>
                    <td>{{$post->posted}}</td>
                    <td>{{$post->created_at->format('d-m-Y')}}</td>
                    <td>{{$post->updated_at->format('d-m-Y')}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm mt-1" href="{{ route('post.show', $post->id) }}">Ver</a>
                        <a class="btn btn-warning btn-sm mt-1" href="{{ route('post.edit', $post->id) }}">Edit</a>
                        <button class="btn btn-danger btn-sm mt-1" type="button" data-toggle="modal" data-target="#deleteModal" data-id="{{ $post->id }}">
                            Del
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {{ $posts->links() }}

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>¿Desea eliminar el registro?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <form id="formDelete" action="{{ route('post.destroy', 0) }}" data-action="{{ route('post.destroy', 0) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
          $( document ).ready(function() {
            console.log( "ready!" );
            $('#deleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                action = $('#formDelete').attr('data-action').slice(0, -1);
                $('#formDelete').attr('action', action + id)
                console.log(action + id)
                var modal = $(this)    
                $('.modal-title').append('Eliminar post: '+id)       
            })
            });
            
      </script>

@endsection
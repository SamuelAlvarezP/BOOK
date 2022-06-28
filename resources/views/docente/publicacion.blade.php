<x-app-layout>
    @section('content')
    <br>
    <br>
    <br>
    <h1>Crear publicación</h1>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'publicacion.store']) !!}
            {!! Form::hidden('user_id', auth()->user()->id) !!}
            {!! Form::hidden('curso_id', $curso->id) !!}
            <div class="form-group">
                {!! Form::label('titulo', 'Titulo:') !!}
                {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título de la publicación']) !!}
                @error('titulo')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-groud">
                <p class="font-weight-bold">Estado</p>
                <label>
                    {!! Form::radio('status', 1, true) !!}
                    Borrador
                </label>
                <label>
                    {!! Form::radio('status', 2) !!}
                    Publicado
                </label>
                @error('status')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
                <div class="form-group">
                    {!! Form::label('contenido', 'Contenido:') !!}
                    {!! Form::textarea('contenido', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el contenido de la publicación']) !!}
                    @error('contenido')
                <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                {!! Form::submit('Crear publicación', ['class' => 'btn btn-dark']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
         ClassicEditor
        .create( document.querySelector( '#contenido' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
    @endsection
</x-app-layout>

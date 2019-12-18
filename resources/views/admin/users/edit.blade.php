@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Reportar</div>

        <div class="card-body">

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            @endif



            <form method="POST" action="reportar">
            @csrf
                <div class="form-group">
                    <label for="category_id">Categoria</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">General</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        
                        @endforeach

                    </select>
                </div>

                <div class="form-group">
                    <label for="severity">Severidad</label>
                    <select name="severity" id="" class="form-control">
                        <option value="M">Menor</option>
                        <option value="N">Normal</option>
                        <option value="A">Alta</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="severity">Titulo</label>
                    <input type="text" name="title" value="{{ old('title')}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="severity">Descripcion</label>
                    <textarea name="description" id="" class="form-control">{{ old('description')}}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Registrar Incidencia</button>

                </div>

            </form>

        </div>
    </div>

@endsection

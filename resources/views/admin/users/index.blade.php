@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Usuarios</div>

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

            <span class="glyphicon glyphicon-camera"></span>



            <form method="POST" action="usuarios">
            @csrf


                <div class="form-group">
                    <label for="severity">E-mail</label>
                    <input type="text" name="email" value="{{ old('email')}}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="severity">Nombre</label>
                    <textarea name="nombre" id="" class="form-control">{{ old('nombre')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="severity">Password</label>
                    <textarea name="password" id="" class="form-control">{{ old('nombre')}}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Registrar Usurio</button>


                </div>

            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">editar</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>Daniel</td>
                        <td>daniel.andres.zarate@gmail.com</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary" title="Editar">
                                <span class="glyphicon glyphicon-pencil">Editar</span>
                            </a>
                            <a href="" class="btn btn-sm btn-danger">
                                <span class="glyphicon glyphicon-search">Eliminar</span>
                            </a>


                        </td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

@endsection


@section('scripts')

@endsection

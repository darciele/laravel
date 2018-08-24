@extends('app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Filmes
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('errors')

                    <!-- Formulário de filmes-->
                    <form action="{{ url('filme')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Nome do filme -->
                        <div class="form-group">
                            

                            <div class="col-sm-6">
                                <label for="filme-name" class="col-sm-3 control-label">Titulo</label>
                                <input type="text" name="titulo" id="filme-titulo" class="form-control" value="{{ old('filme') }}">
                            
                            
                                 <label for="filme-genero" class="col-sm-3 control-label">Genero</label>

                            
                                <input type="text" name="genero" id="filme-genero" class="form-control" value="{{ old('filme') }}">
                            
                                <label for="filme-sinopse" class="col-sm-3 control-label">Sinopse</label>

                                
                                <input type="text" name="sinopse" id="filme-sinopse" class="form-control" value="{{ old('filme') }}">
                                
                                <label for="filme-duracao" class="col-sm-3 control-label">Duração</label>

                                
                                <input type="number" name="duracao" id="filme-duracao" class="form-control" value="{{ old('filme') }}">
                                
                                <label for="filme-poster" class="col-sm-3 control-label">Poster</label>

                                
                                <input type="file" name="poster" id="filme-poster" class="form-control" value="{{ old('filme') }}">

                                </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Novo Filme
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        <!-- Create Task Form... -->

        <!-- Current Tasks -->
        @if (count($filmes) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Filmes cadastrados
                </div>

                <div class="panel-body">
                    <table class="table table-striped filme-table">

                        <!-- Table Headings -->
                        <thead>
                            <th>Titulo</th>
                            <th>Genero</th>
                            <th>Sinopse</th>
                            <th>Duração</th>
                            <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            @foreach ($filmes as $filme)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $filme->titulo }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $filme->genero }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $filme->sinopse }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $filme->duracao }}</div>
                                    </td>

                                    <td>
                                        <form action="/filme/edit/{{ $filme->id }}" method="GET">
                                             <button>Editar</button>
                                         </form>
                                    </td>
                                    <td>
                                        <form action="/filme/delete/{{ $filme->id }}" method="GET">

                                             <button>Delete</button>
                                         </form>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        </div>
    </div>

   
@endsection

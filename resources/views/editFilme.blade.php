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
                    <form action="{{ url('filme/salvar/{id}')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Nome do filme -->
                        <div class="form-group">
                            

                            <div class="col-sm-6">
                                <label for="filme-name" class="col-sm-3 control-label">Titulo</label>
                                <input type="text" name="titulo" id="filme-titulo" class="form-control" value="{{ $filme->titulo }}">
                            
                            
                                 <label for="filme-genero" class="col-sm-3 control-label">Genero</label>

                            
                                <input type="text" name="genero" id="filme-genero" class="form-control" value="{{ $filme->genero }}">
                            
                                <label for="filme-sinopse" class="col-sm-3 control-label">Sinopse</label>

                                
                                <input type="text" name="sinopse" id="filme-sinopse" class="form-control" value="{{ $filme->sinopse }}">
                                
                                <label for="filme-duracao" class="col-sm-3 control-label">Duração</label>

                                
                                <input type="number" name="duracao" id="filme-duracao" class="form-control" value="{{ $filme->duracao }}">
                                
                                <label for="filme-poster" class="col-sm-3 control-label">Poster</label>

                                
                                <input type="file" name="poster" id="filme-poster" class="form-control" value="{{ old('filme') }}">

                                </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Salvar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



   
@endsection

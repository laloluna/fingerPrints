@extends('index')

@section('title', 'Añadir huella')

@section('content')

<div class="row">

    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-search"></i> Informacion de la huella
            </div>
            <!-- /.panel-heading -->
            <form class="col-md-12" method="POST" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="hand">Nombre</label>
                        <input type="text" id="name" name="name">
                    </div>  
                </div>  

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="hand">Genero</label>
                        <select class="form-control {{ $errors->has('hand') ? ' is-invalid' : '' }}" id="gender" name="gender">
                            <option value="">Genero</option>
                            <option value="1">Hombre</option>
                            <option value="2">Mujer</option>
                            <option value="0">Desconocido</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('hand') }}
                        </div>
                    </div>  
                </div>  

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="hand">Selecciona lado de mano</label>
                        <select class="form-control {{ $errors->has('hand') ? ' is-invalid' : '' }}" id="side" name="side">
                            <option value="">Lado</option>
                            <option value="1">Izquierda</option>
                            <option value="2">Derecha</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('hand') }}
                        </div>
                    </div>  
                </div>  
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="zone">Selecciona tipo de dedo</label>
                        <select class="form-control {{ $errors->has('region') ? ' is-invalid' : '' }}" id="type" name="type">
                            <option value="">Dedo</option>
                            <option value="1">Pulgar</option>
                            <option value="2">Índice</option>
                            <option value="3">Medio</option>
                            <option value="4">Anular</option>
                            <option value="5">Meñique</option>
                            <option value="6">Palma</option>
                        </select>
                        <div class="invalid-feedback">
                            {{ $errors->first('region') }}
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="template">Archivo de la huella</label>
                        <input type="file" class="form-control {{ $errors->has('template') ? ' is-invalid' : '' }}" name="file" id="file">
                        <div class="invalid-feedback">
                            {{ $errors->first('template') }}
                        </div>
                    </div>
                </div>

                <br />
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="reset" class="btn btn-primary">Cancelar</button>
                        <button type="submit" class="btn btn-success">Subir Huella</button>
                    </div>
                </div>
            </form>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel .chat-panel -->
    </div>
    <!-- /.col-lg-4 -->
</div>
<!-- /.row -->

@endsection
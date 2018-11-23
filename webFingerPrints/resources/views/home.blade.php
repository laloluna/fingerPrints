@extends('index')

@section('title', 'Identificacion Latente')

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="panel panel-green">
            <div class="panel-heading">
                {{ $image = '' }}
                <i class="fa fa-hand-o-up"></i> 
                    @if (count($people) > 0 && count($fingerprints) > 0)
                        {{ $people->find($fingerprints->last()->person_id)->name }}
                    @else
                        Sube una huella al sistema
                    @endif
                <div>
                    @if (count($people) > 0 && count($fingerprints) > 0)
                        <canvas class="img-fluid" id="img-current">
                        <!-- <img src="{{asset($fingerprints->last()->image)}}" class="img-responsive" id="imgCurrent"> -->
                    @else
                        <img src="{{asset('storage/images/placeholder.jpg')}}" class="img-responsive" id="imgCurrent">
                    @endif
                </div>
            </div>
            <!-- /.panel-body -->
            <a href="{{ route('upload') }}">
                <div class="panel-footer">
                    <span class="pull-left">Sube nueva huella</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-4 -->

    <div class="col-md-4">
        <div class="panel panel-red">
            <div class="panel-heading">
                <i class="fa fa-hand-o-up"></i>
                    @if (count($fingerprints) > 0)
                        {{ $people->find($fingerprints->find($current)->person_id)->name }}
                    @else
                        Sube una huella al sistema
                    @endif
                <div>
                    @if (count($fingerprints) > 0)
                        <canvas class="img-fluid" id="img-system">
                        <!-- <img src="{{asset($fingerprints->find($current)->image)}}" class="img-responsive" id="imgSystem"> -->
                    @else
                        <img src="{{asset('storage/images/placeholder.jpg')}}" class="img-responsive" id="imgSystem">
                    @endif
                </div>
            </div>
            <!-- /.panel-body -->
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">
                        @if (count($fingerprints) > 0)
                            {{ $people->find($fingerprints->find($current)->person_id)->name }}
                        @else
                            No hay huella seleccionada
                        @endif
                    </span>
                    <span class="pull-right">
                        {{-- @if ($people->find($fingerprints->find($current)->person_id)->gender == 1)
                            Hombre
                        @elseif ($people->find($fingerprints->find($current)->person_id)->gender == 2)
                            Mujer
                        @else
                            Desconocido
                        @endif --}}
                    </span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-4 -->

    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <i class="fa fa-search"></i> Coincidencias
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">
                    @foreach($coincidences as $i=>$coincidence)
                        <!-- @if ($fingerprints->last()->id == $coincidence->current_fingerprint_id) -->
                            <a href="{{ route('home', ['current' => $coincidence->system_fingerprint_id]) }}" class="list-group-item">
                                <i class="fa fa-male"></i> {{$people->find($fingerprints->find($coincidence->system_fingerprint_id)->person_id)->name}}
                                <span class="pull-right text-muted small"><em>{{ $coincidence->matching }}%</em>
                                </span>
                            </a>
                        <!-- @endif -->
                    @endforeach
                </div>
                <!-- /.list-group -->
                <a href="{{route('home', $current)}}" class="btn btn-default btn-block">Invertir Orden</a>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel .chat-panel -->
    </div>
    <!-- /.col-lg-4 -->
</div>
<!-- /.row -->

@endsection
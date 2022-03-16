@extends('Agenda.PlantiillaMaster')

@section('content')

<div class="container">
    <h4>Gestión de Citas </h4>
    <div class="col-xl-12 my-2">
        <form actiion="{{route('agendar.index')}}" method="get">
            <div class="form-row ">
                <div class="col-sm-4">
                    <input type="date" name="fecha" value="{{$fecha}}"/>
                </div>
                <div class="col-ato">
                   <input type="submit" class="btn btn-primary" value="Buscar"/>
                </div>


            </div>
        </form>

    </div>
    <div class="row my-2">
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th> Opciones</th>
                            <th> ID </th>
                            <th> Cédula</th>
                            <th> Nombre del Propetario</th>
                            <th> Apellidos del Propetario </th>
                            <th> Nombre de la Mascota</th>
                            <th> Fecha de la Cita</th>
                            <th> Hora de la Cita</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($citas)<=0)
                            <tr>
                                <td colspan="8"> No se encontarron Registros</td>
                            </tr>

                        @else
                            @foreach ($citas as $citas)
                                <tr>
                                <td><a href="{{route('agendar.edit', $citas->id)}}" class="btn btn-outline-warning btn-sm">Editar </a>  | Eliminar</td>
                                <td>{{$citas->id}}</td>
                                <td>{{$citas->cedula}}</td>
                                <td>{{$citas->nom_dueño}}</td>
                                <td>{{$citas->apell_dueño}}</td>
                                <td>{{$citas->nom_mascota}}</td>
                                <td>{{$citas->fecha_cita}}</td>
                                <td>{{$citas->hora_cita}}</td>
                                </tr>
                            @endforeach
                         @endif
                    </tbody>

                </table>
                

            </div>
            
        </div>
    </div>
</div>


@endsection
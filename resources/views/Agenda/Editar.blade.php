@extends('Agenda.PlantiillaMaster')

@section('content')

<div class="container w-50 border p-5 table-responsive">
    <div class="row mx-auto">
        <h4>Editar Cita </h4>
        <form  action="{{route('agendar.update',$cita->id)}}" method="post">
            
            @csrf
            @method('PUT')

            
        
            <div> 
                @error('cedula')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @if (session('success'))
                        <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                <label for="cedula" class="form-label"> Cédula: </label>
                <input type="number" class="form-control mb-2" name="cedula" required maxlength="15" value="{{$cita->cedula}}">

                <label for="nom_dueño" class="form-label">Nombre del Dueño: </label>
                <input type="text" class="form-control mb-2" name="nom_dueño" required maxlength="40" value="{{$cita->nom_dueño}}">

                <label for="apell_dueño" class="form-label">Apellido del Dueño: </label>
                <input type="text" class="form-control mb-2" name="apell_dueño" required maxlength="50" value="{{$cita->apell_dueño}}">

                <label for="nom_mascota" class="form-label">Nombre de la Mascota: </label>
                <input type="text" class="form-control mb-2" name="nom_mascota" required maxlength="40" value="{{$cita->nom_mascota}}">

                <label for="fecha_cita" class="form-label">Fecha de la Cita </label>
                <input type="date" class="form-control mb-2" name="fecha_cita" id="fecha_cita" value="{{$cita->fecha_cita}}">

                <label for="hora_cita" class="form-label">Hora de la Cita </label>
                <input type="time" class="form-control mb-2" name="hora_cita" id="hora_cita" value="{{$cita->hora_cita}}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary my-2" value="Actualizar"/>
                <input type="reset" class="btn btn-primary my-2" value="Cancelar"/>
            </div>
        </form>
    </div>
</div>
@endsection
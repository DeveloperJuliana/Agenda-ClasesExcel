@extends('Agenda.PlantiillaMaster')

@section('content')

<div class="container w-50 border p-5 table-responsive">
    <div class="row mx-auto">
        <h4>Crear Cita </h4>
        <form  action="{{route('agendar.store')}}" method="post">
            
            @csrf
        
            <div> 
                @error('cedula')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                @if (session('success'))
                        <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                <label for="cedula" class="form-label"> Cédula: </label>
                <input type="number" class="form-control mb-2" name="cedula" required maxlength="15">

                <label for="nom_dueño" class="form-label">Nombre del Dueño: </label>
                <input type="text" class="form-control mb-2" name="nom_dueño" required maxlength="40">

                <label for="apell_dueño" class="form-label">Apellido del Dueño: </label>
                <input type="text" class="form-control mb-2" name="apell_dueño" required maxlength="50">

                <label for="nom_mascota" class="form-label">Nombre de la Mascota: </label>
                <input type="text" class="form-control mb-2" name="nom_mascota" required maxlength="40">

                <label for="fecha_cita" class="form-label">Fecha de la Cita </label>
                <input type="date" class="form-control mb-2" name="fecha_cita" id="fecha_cita">

                <label for="hora_cita" class="form-label">Hora de la Cita </label>
                <input type="time" class="form-control mb-2" name="hora_cita" id="hora_cita">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary my-2" value="Agregar Cita"/>
                <input type="reset" class="btn btn-primary my-2" value="Cancelar"/>
            </div>
        </form>
    </div>
</div>
@endsection
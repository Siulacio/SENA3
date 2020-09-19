<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Código</label>
    <div class="col-sm-10">
        <input class="form-control" name="codigo" type="text" value="{{old('codigo',$programa->codigo ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
        <input class="form-control" name="nombre" type="text" value="{{old('nombre',$programa->nombre ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Fecha de Inicio</label>
    <div class="col-sm-10">
        <input class="form-control" name="fecha_inicio" type="date" value="{{old('fecha_inicio', $programa->fecha_inicio ?? '')}}" id="example-text-input" required>
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Fecha de Cierre</label>
    <div class="col-sm-10">
        <input class="form-control" name="fecha_cierre" type="date" value="{{old('fecha_cierre', $programa->fecha_cierre ?? '')}}" id="example-text-input" required>
    </div>
</div>

<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Tipo Programa</label>
    <div class="col-sm-10">
        <select name="rol" id="rol" class="form-control">
            <option value="0">Técnico</option>
            <option value="1">Tecnólogo</option>
        </select>
    </div>
</div>
<input type="hidden" name="id" value="{{$programa->id ?? ''}}">

<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Duración</label>
    <div class="col-sm-10">
        <input class="form-control" name="duracion" type="text" value="{{old('duracion', $programa->duracion ?? '')}}" id="example-text-input" required>
    </div>
</div>

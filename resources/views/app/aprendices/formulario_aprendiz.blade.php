<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Tipo Documento</label>
    <div class="col-sm-10">
        <select name="tipo_documento" id="tipo_documento" class="form-control">
            @if (isset($aprendices->tipo_documento))
                   <option value="0" selected>CC</option>
                   <option value="1" selected>TI</option>
                   <option value="2" selected>RC</option>
            @endif
        </select>
    </div>
</div>


<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Documento</label>
    <div class="col-sm-10">
        <input class="form-control" name="documento" type="text" value="{{old('documento',$aprendices->documento ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Primer Nombre</label>
    <div class="col-sm-10">
        <input class="form-control" name="nombre1" type="text" value="{{old('nombre1',$aprendices->nombre1 ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Segundo Nombre</label>
    <div class="col-sm-10">
        <input class="form-control" name="nombre2" type="text" value="{{old('nombre2',$aprendices->nombre2 ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Primer Apellido</label>
    <div class="col-sm-10">
        <input class="form-control" name="apellido1" type="text" value="{{old('aprellido1',$aprendices->apellido1 ?? '')}}" id="example-text-input">
    </div>
</div>

<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Segundo Apellido</label>
    <div class="col-sm-10">
        <input class="form-control" name="apellido2" type="text" value="{{old('aprellido2',$aprendices->apellido2 ?? '')}}" id="example-text-input">
    </div>
</div>

<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
    <div class="col-sm-10">
        <input class="form-control" name="fecha_nac" type="date" value="{{old('fecha_nac', $aprendices->fecha_nac ?? '')}}" id="example-text-input" required>
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Sexo</label>
    <div class="col-sm-10">
        <input class="form-control" name="sexo" type="text" value="{{old('sexo',$aprendices->sexo ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Tipo de Sangre</label>
    <div class="col-sm-10">
        <input class="form-control" name="tipo_sangre" type="text" value="{{old('tipo_sangre',$aprendices->tipo_sangre ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input class="form-control" name="correo" type="email" value="{{old('correo', $aprendices->correo ?? '')}}" id="example-text-input" required>
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Dirección</label>
    <div class="col-sm-10">
        <input class="form-control" name="direccion" type="text" value="{{old('direccion',$aprendices->direccion ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Teléfono </label>
    <div class="col-sm-10">
        <input class="form-control" name="telefono" type="text" value="{{old('telefono',$aprendices->telefono ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Nivel Sisben</label>
    <div class="col-sm-10">
        <input class="form-control" name="nivel_sisben" type="text" value="{{old('nivel_sisben',$aprendices->nivel_sisben ?? '')}}" id="example-text-input">
    </div>
</div>
<input type="hidden" name="id" value="{{$programa->id ?? ''}}">

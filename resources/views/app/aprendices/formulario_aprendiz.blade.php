<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Tipo Documento</label>
    <div class="col-sm-10">
        <select name="tipo_documento" id="tipo_documento" class="form-control">
            @foreach ($tiposDocumentos as $doc)
                @if (isset($aprendiz->tipo_documento))
                    @if ($doc->id == $aprendiz->tipo_documento )
                        <option value="{{$doc->id}}" selected>{{$doc->nombre}}</option>                        
                    @else
                        <option value="{{$doc->id}}">{{$doc->nombre}}</option>
                    @endif
                @else
                    <option value="{{$doc->id}}">{{$doc->nombre}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Documento <span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="documento" type="text" value="{{old('documento',$aprendiz->documento ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Primer Nombre <span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="nombre1" type="text" value="{{old('nombre1',$aprendiz->nombre1 ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Segundo Nombre</label>
    <div class="col-sm-10">
        <input class="form-control" name="nombre2" type="text" value="{{old('nombre2',$aprendiz->nombre2 ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Primer Apellido <span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="apellido1" type="text" value="{{old('apellido1',$aprendiz->apellido1 ?? '')}}" id="example-text-input">
    </div>
</div>

<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Segundo Apellido</label>
    <div class="col-sm-10">
        <input class="form-control" name="apellido2" type="text" value="{{old('apellido2',$aprendiz->apellido2 ?? '')}}" id="example-text-input">
    </div>
</div>

<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Fecha de Nacimiento <span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="fecha_nac" type="date" value="{{old('fecha_nac', $aprendiz->fecha_nac ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Sexo</label>
    <div class="col-sm-10">
        <select name="sexo" id="sexo" class="form-control">
            @if (isset($aprendiz->sexo))
                @if ($aprendiz->sexo == 1)
                    <option value="1" selected>Masculino</option>
                    <option value="0">Femenino</option>    
                @else
                    <option value="1">Masculino</option>
                    <option value="0" selected>Femenino</option>
                @endif                
            @else
                <option value="1" selected>Masculino</option>
                <option value="0">Femenino</option>
            @endif
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Tipo de Sangre <span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <select name="tipo_sangre" id="tipo_sangre" class="form-control">
            <option value="" disabled selected>Seleccione tipo sangre....</option>
            @foreach ($tiposSangre as $sangre)
                @if ( isset($aprendiz->tipo_sangre) )
                    @if ($sangre->id == $aprendiz->tipo_sangre )
                        <option value="{{$sangre->id}}" selected>{{$sangre->nombre}}</option>
                    @else
                        <option value="{{$sangre->id}}">{{$sangre->nombre}}</option>
                    @endif
                @else
                    <option value="{{$sangre->id}}">{{$sangre->nombre}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Correo <span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="correo" type="email" value="{{old('correo', $aprendiz->correo ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Dirección <span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="direccion" type="text" value="{{old('direccion',$aprendiz->direccion ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Teléfono  <span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="telefono" type="text" value="{{old('telefono',$aprendiz->telefono ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Nivel Sisben <span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <select name="nivel_sisben" id="nivel_sisben" class="form-control">
            <option value="" disabled selected>Seleccione nivel Sisben....</option>
            @foreach ($sisben as $item)
                @if ( isset($aprendiz->nivel_sisben) )
                    @if ($item->id == $aprendiz->nivel_sisben)
                        <option value="{{$item->id}}" selected>{{$item->nombre}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endif
                @else
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
<input type="hidden" name="id" value="{{$aprendiz->id ?? ''}}">

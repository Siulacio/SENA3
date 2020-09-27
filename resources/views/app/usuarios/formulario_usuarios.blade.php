<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Usuario<span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="username" type="text" value="{{old('username',$usuario->username ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Nombres<span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="nombres" type="text" value="{{old('nombres',$usuario->nombres ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Email<span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="email" type="email" value="{{old('email', $usuario->email ?? '')}}" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Contraseña<span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="password" type="password" value="" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Confirmar contraseña<span style="color: orange">*</span></label>
    <div class="col-sm-10">
        <input class="form-control" name="password_confirm" type="password" value="" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Rol<span style="color: orange">*</span></label>
    <div class="col-sm-10">
        {{-- <input class="form-control" name="rol" type="text" value="{{old('rol')}}" id="example-text-input"> --}}
        <select name="rol" id="rol" class="form-control">
            <option value="" selected disabled>Seleccione un rol...</option>
            @foreach ($roles as $rol)
                @if (isset($usuario->rol))
                    @if ($rol->id == $usuario->rol)
                        <option selected value="{{$rol->id}}">{{$rol->nombre}}</option>                    
                    @else
                        <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                    @endif                    
                @else
                    <option value="{{$rol->id}}">{{$rol->nombre}}</option>
                @endif
            @endforeach
        </select>
    </div>
</div>
<input type="hidden" name="id" value="{{$usuario->id ?? ''}}">

{{--
    rol->id 1,2,3,4
    usuario->rol 3  
     --}}

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $parqueadero->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">parqueadero <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ubicacion') }}</label>
    <div>
        {{ Form::text('ubicacion', $parqueadero->ubicacion, ['class' => 'form-control' .
        ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
        {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">parqueadero <b>ubicacion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('capacidad') }}</label>
    <div>
        {{ Form::text('capacidad', $parqueadero->capacidad, ['class' => 'form-control' .
        ($errors->has('capacidad') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad']) }}
        {!! $errors->first('capacidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">parqueadero <b>capacidad</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tarifa_por_hora') }}</label>
    <div>
        {{ Form::text('tarifa_por_hora', $parqueadero->tarifa_por_hora, ['class' => 'form-control' .
        ($errors->has('tarifa_por_hora') ? ' is-invalid' : ''), 'placeholder' => 'Tarifa Por Hora']) }}
        {!! $errors->first('tarifa_por_hora', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">parqueadero <b>tarifa_por_hora</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('servicios_ofrecidos') }}</label>
    <div>
        {{ Form::text('servicios_ofrecidos', $parqueadero->servicios_ofrecidos, ['class' => 'form-control' .
        ($errors->has('servicios_ofrecidos') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Ofrecidos']) }}
        {!! $errors->first('servicios_ofrecidos', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">parqueadero <b>servicios_ofrecidos</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>

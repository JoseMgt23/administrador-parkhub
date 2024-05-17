
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('usuario_id') }}</label>
    <div>
        {{ Form::text('usuario_id', $reserva->usuario_id, ['class' => 'form-control' .
        ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
        {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">reserva <b>usuario_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('parqueadero_id') }}</label>
    <div>
        {{ Form::text('parqueadero_id', $reserva->parqueadero_id, ['class' => 'form-control' .
        ($errors->has('parqueadero_id') ? ' is-invalid' : ''), 'placeholder' => 'Parqueadero Id']) }}
        {!! $errors->first('parqueadero_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">reserva <b>parqueadero_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_inicio') }}</label>
    <div>
        {{ Form::text('fecha_inicio', $reserva->fecha_inicio, ['class' => 'form-control' .
        ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio']) }}
        {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">reserva <b>fecha_inicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_fin') }}</label>
    <div>
        {{ Form::text('fecha_fin', $reserva->fecha_fin, ['class' => 'form-control' .
        ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
        {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">reserva <b>fecha_fin</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('estado') }}</label>
    <div>
        {{ Form::text('estado', $reserva->estado, ['class' => 'form-control' .
        ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">reserva <b>estado</b> instruction.</small>
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

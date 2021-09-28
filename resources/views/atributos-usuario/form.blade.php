<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('advertisement_id') }}
            {{ Form::text('advertisement_id', $atributosUsuario->advertisement_id, ['class' => 'form-control' . ($errors->has('advertisement_id') ? ' is-invalid' : ''), 'placeholder' => 'Advertisement Id']) }}
            {!! $errors->first('advertisement_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('key') }}
            {{ Form::text('key', $atributosUsuario->key, ['class' => 'form-control' . ($errors->has('key') ? ' is-invalid' : ''), 'placeholder' => 'Key']) }}
            {!! $errors->first('key', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $atributosUsuario->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
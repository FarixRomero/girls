<div class="container-fluid">

    <div class="box box-info padding-1">
        <div class="box-body">

            <div class="card m-3">
                <div class="card-body">
                    <div class="form-group">
                        {{ Form::label('telofono') }}
                        {{ Form::text('telofono', $advertisement->telofono, ['class' => 'form-control' . ($errors->has('telofono') ? ' is-invalid' : ''), 'placeholder' => 'Telofono']) }}
                        {!! $errors->first('telofono', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="card m-3">
                <div class="card-body">
                    <div class="form-group">
                        {{ Form::label('titulo') }}
                        {{ Form::text('titulo', $advertisement->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('nombre') }}
                        {{ Form::text('nombre', $advertisement->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('edad') }}
                        {{ Form::text('edad', $advertisement->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
                        {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('twitter') }}
                {{ Form::text('twitter', $advertisement->twitter, ['class' => 'form-control' . ($errors->has('twitter') ? ' is-invalid' : ''), 'placeholder' => 'Twitter']) }}
                {!! $errors->first('twitter', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                <span >Texto</span>
                <input type="text" class="form-control" value="texto" id="texto" name="texto">
            </div>
            <div class="form-group">
                {{ Form::label('is_independiente') }}
                {{ Form::text('is_independiente', $advertisement->is_independiente, ['class' => 'form-control' . ($errors->has('is_independiente') ? ' is-invalid' : ''), 'placeholder' => 'Is Independiente']) }}
                {!! $errors->first('is_independiente', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('tarifa_hora') }}
                {{ Form::text('tarifa_hora', $advertisement->tarifa_hora, ['class' => 'form-control' . ($errors->has('tarifa_hora') ? ' is-invalid' : ''), 'placeholder' => 'Tarifa Hora']) }}
                {!! $errors->first('tarifa_hora', '<div class="invalid-feedback">:message</p>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('horario') }}
                {{ Form::text('horario', $advertisement->horario, ['class' => 'form-control' . ($errors->has('horario') ? ' is-invalid' : ''), 'placeholder' => 'Horario']) }}
                {!! $errors->first('horario', '<div class="invalid-feedback">:message</p>') !!}
            </div>

        </div>
        
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

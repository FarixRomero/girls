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
                <span>Texto</span>
                {{-- <input type="text" class="form-control" value="{{$advertisement->texto}}" id="texto" name="texto"> --}}
                <textarea spellcheck="true" class="form-control" id="texto" rows="5" value="{{ $advertisement->texto }}" name="texto">{{ $advertisement->texto }}</textarea>

            </div>
            {{-- <div class="form-group">
                {{ Form::label('is_independiente') }}
                <input type="checkbox" >
                {{ Form::text('is_independiente', $advertisement->is_independiente, ['class' => 'form-control' . ($errors->has('is_independiente') ? ' is-invalid' : ''), 'placeholder' => 'Is Independiente']) }}
                {!! $errors->first('is_independiente', '<div class="invalid-feedback">:message</p>') !!}
            </div> --}}
            <div class="form-group">
                <div class="form-check">
                    <input type="hidden" name="is_independiente" value="0">
                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"
                        name="is_independiente">
                    <label class="form-check-label" for="flexCheckDefault">
                        Es independiente
                    </label>
                </div>
            </div>
            <div class="form-group">
            
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
            <div class="form-group">
                <h2>Servicios</h2>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    @foreach ($services as $service)
                        <label class="btn btn-danger m-1">
                            <input type="checkbox" class="" name="services[]"
                                value="{{ $service->id }}" autocomplete="off" {{ $advertisement->services()->where('service_id',$service->id)->first() ? 'checked' : ''  }} > {{ $service->descripcion }}
                        </label>
                    @endforeach

                </div>

            </div>

        </div>

        <div class="box-footer mt20">
            <button type="submit"  id="submit-all" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

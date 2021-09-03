@extends('layouts.app')

@section('template_title')
    {{ $advertisement->name ?? 'Show Advertisement' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Advertisement</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('advertisements.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $advertisement->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Telofono:</strong>
                            {{ $advertisement->telofono }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $advertisement->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Texto:</strong>
                            {{ $advertisement->texto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $advertisement->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $advertisement->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Twitter:</strong>
                            {{ $advertisement->twitter }}
                        </div>
                        <div class="form-group">
                            <strong>Is Independiente:</strong>
                            {{ $advertisement->is_independiente }}
                        </div>
                        <div class="form-group">
                            <strong>Tarifa Hora:</strong>
                            {{ $advertisement->tarifa_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Horario:</strong>
                            {{ $advertisement->horario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

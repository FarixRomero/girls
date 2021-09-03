@extends('layouts.app')

@section('template_title')
    {{ $service->name ?? 'Show Service' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $service->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Telofono:</strong>
                            {{ $service->telofono }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $service->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $service->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $service->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Twitter:</strong>
                            {{ $service->twitter }}
                        </div>
                        <div class="form-group">
                            <strong>Is Independiente:</strong>
                            {{ $service->is_independiente }}
                        </div>
                        <div class="form-group">
                            <strong>Tarifa Hora:</strong>
                            {{ $service->tarifa_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Horario:</strong>
                            {{ $service->horario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

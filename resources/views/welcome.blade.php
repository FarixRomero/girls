@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-columns">
                    @foreach ($files as $file)
                        @if ($file->tipo == 1)
                            <div class="card">
                                {{-- <div class="card-img-top">
                                <div class="card-body">
                                    <h4 class="card-tittle">hola</h4>
                                    <p class="card-text"></p>
                                </div>
                            </div> --}}

                                <img class="img-fluid" src="{{ asset($file->url) }}" alt="">
                            </div>
                        @else
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ asset($file->url) }}" allowfullscreen
                                    sandbox></iframe>
                            </div>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        {{-- <div class="row"> --}}
        {{-- <div class="col"> --}}
        {{-- <div class="card-columns"> --}}
        <!-- Page Content -->
        {{-- <div class="container"> --}}

        <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Thumbnail Gallery</h1>

        <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-start">


            @foreach ($users as $user)
                @if ($user->files->first()->tipo == 1)

                    <div class="col-lg-2 col-md-5 col-6">
                        <a data-toggle="modal" data-target="#exampleModalLong{{$user->files->first()->id }}">
                            <img class="img-fluid img-thumbnail" src="{{ asset($user->files->first()->url) }}" alt="">
                        </a>
                    </div>
                    <div class="modal fade" id="exampleModalLong{{ $user->files->first()->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle{{$user->files->first()->url }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle{{$user->files->first()->url }}">
                                        {{ $user->files->first()->url }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span>{{ $user->service->telofono}}</span>
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                @endif
            @endforeach

        </div>

    </div>
    {{-- @foreach ($files as $file)
        @if ($file->tipo == 1) --}}
            {{-- <div class="card">

                                <a data-toggle="modal" data-target="#exampleModalLong{{ $file->id }}">
                                    <img class="img-fluid" src="{{ asset($file->url) }}" alt="">
                                </a>
                                <span>{{ $file->user->service->telofono }}</span>
                                <button type="button" class="___class_+?6___" data-toggle="modal"
                                    data-target="#exampleModalLong{{ $file->id }}">
                                    Launch demo modal
                                </button>
                                <!-- Modal -->
                                
                            </div> --}}



        {{-- @else --}}
            {{-- <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ asset($file->url) }}" allowfullscreen
                                    sandbox></iframe>
                            </div>


                            <span>{{ $file->user->service->telofono }}</span> --}}

        {{-- @endif --}}
    {{-- @endforeach --}}
    </div>
    </div>
    </div>
    </div>
@endsection
@section('css')
   
@endsection

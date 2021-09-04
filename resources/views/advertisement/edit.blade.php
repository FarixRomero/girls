@extends('layouts.app')

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.css"
        integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@php
$cantidad_imagenes = 6 - $advertisement->user->files->count();
@endphp

@section('content')
    <section class="content container">
        <div class="row">

            @foreach ($advertisement->user->files()->where('tipo', 1)->get()
        as $file)
                <div class="col-lg-3 col-md-5 col-6">
             
                    <img class="img-fluid img-thumbnail" src="{{ asset($file->url) }}" alt="">
                    <form action="{{ route('admin.files.destroy',$file->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                    </form>
               
                </div>

            @endforeach
        </div>

        <div class="___class_+?4___">
            <div class="col-md-12">
                <div class="card-header">
                    <span class="card-title">Publicar anuncio</span>
                </div>
                <div class="box-body">
                    <div class="card card-default">
                        <div class="card-header">
                            <h2 class="card-title">Subir Imagenes</h2>
                            <h5>Solo se podran subir {{$cantidad_imagenes}} imagenes</h5>
                        </div>
                        <form method="POST" action="{{ route('admin.files.store') }}" action="/file-upload"
                            class="dropzone" id="subir-imagenes">
                        </form>
                        {{-- <div class="card-body">
                            Sube Videos
                        </div>
                        <form method="POST" action="{{ route('admin.files.storevideo') }}" action="/file-upload"
                            class="dropzone" id="subir-videos">
                        </form> --}}
                    </div>
                    {{-- <div class="box-footer mt20">
                        <button type="submit" id="submit-all" class="btn btn-primary btn-xs m-2">Sube las imagenes</button>
                    </div> --}}
                </div>
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Anuncio</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('advertisements.update', $advertisement->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('advertisement.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"
        integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        Dropzone.options.subirImagenes = {
            acceptedFiles: 'image/*',
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: '{{ $cantidad_imagenes }}',
            maxFiles: '{{ $cantidad_imagenes }}',
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            init: function() {
                var myDropzone = this;

                $("#submit-all").click(function(e) {
                    // e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
            }
        };
        Dropzone.options.subirVideos = {
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            acceptedFiles: 'video/*',

        };
    </script>
@endsection

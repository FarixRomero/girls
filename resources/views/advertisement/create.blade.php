@extends('layouts.app')
@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.css"
        integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="container">
                <div class="card-header">
                    <span class="card-title">Publicar anuncio</span>
                </div>
                <div class="box-body">
                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Create File</span>
                        </div>
                        <form method="POST" action="{{ route('admin.files.store') }}" action="/file-upload"
                            class="dropzone" id="subir-imagenes">
                        </form>
                        <div class="card-body">
                            Sube Videos
                        </div>
                        <form method="POST" action="{{ route('admin.files.storevideo') }}" action="/file-upload"
                            class="dropzone" id="subir-videos">
                        </form>
                    </div>
                 
                </div>

                @includeif('partials.errors')


                <form method="POST" action="{{ route('advertisements.store') }}" role="form"
                    enctype="multipart/form-data">
                    @csrf

                    @include('advertisement.form')

                 

                </form>

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
            parallelUploads: 6,
            maxFiles: 6,
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

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

                @includeif('partials.errors')

                {{-- <div class="card card-default"> --}}
                <div class="card-header">
                    <span class="card-title">Publicar anuncio</span>
                </div>
                {{-- <div class="card-body"> --}}
                <form method="POST" action="{{ route('advertisements.store') }}" role="form" enctype="multipart/form-data">
                    @csrf

                    @include('advertisement.form')
                
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="checkbox" name="countries[]" value="1" autocomplete="off"> España
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" name="countries[]" value="2" autocomplete="off"> Francia
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" name="countries[]" value="3" autocomplete="off"> Portugal
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" name="countries[]" value="4" autocomplete="off"> Italia
                        </label>
                        <label class="btn btn-primary">
                            <input type="checkbox" name="countries[]" value="5" autocomplete="off"> Alemania
                        </label>
                    </div>
                </form>
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
                {{-- </div> --}}
                {{-- </div> --}}
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
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
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

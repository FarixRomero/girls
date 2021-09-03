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
                        <form method="POST" action="{{ route('services.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('service.form')

                        </form>
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
@extends('layouts.app')

@section('content')

    <anuncio-component :url_base='@json(url("/"))'></anuncio-component>

@endsection

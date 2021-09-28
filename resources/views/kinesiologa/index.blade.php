@extends('layouts.app')

@section('content')

    <profile-component  :url_base='@json(url("/"))' :usuario='@json($user)'  ></profile-component>

@endsection

@extends('layouts.app')

@section('content')
   {{-- <header-component></header-component> --}}
   {{-- <home-component></home-component> --}}
   {{-- :url_post='@json(url('/')' --}}
         <profile-component  ' ></profile-component>

@endsection
@section('css')
    <style>
        .model-ribbon {
            height: 100px;
            overflow: hidden;
            pointer-events: none;
            position: absolute;
            right: -10px;
            text-align: right;
            top: -5px;
            width: 100px;
            z-index: 1;

        }
x
        .model-ribbon span {
            background: #cc3366 none repeat scroll 0 0;
            box-shadow: 0 0 3px rgb(0 0 0 / 30%);
            color: #FFFFFF;
            display: block;
            font-size: 12px;
            font-weight: bold;
            line-height: 30px;
            font-family: 'Oswald', sans-serif;
            position: absolute;
            right: -51px;
            text-align: center;
            text-transform: uppercase;
            top: 19px;
            transform: rotate(45deg);
            width: 180px;
        }



    </style>

@endsection

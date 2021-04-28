@extends('layouts.main')

    @section('title-page')
    {{$header.$id}}
    @endsection


@section('content')

   "Эта статья № {{$id}}</br>
   Здесь будет код обработки БД" ;

@endsection

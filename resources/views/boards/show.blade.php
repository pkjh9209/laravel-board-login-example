@extends('layouts.master')

@section('title')
    Show Board
@endsection

@section('content')
    <p>Show Board</p>
    <p>제목 : {{$board -> title}}</p>
    <p>내용 : {{$board -> story}}</p>
    <a href="/boards/{{$board->id}}/edit"><button>수정</button></a>
@endsection
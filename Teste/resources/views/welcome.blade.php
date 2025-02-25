@extends('layouts.main')

@section('title', 'Saulo Events')


@section('content')

<h1>algum título</h1>
<img src="/img/banner.jpg" alt="Banner">

@if(10 > 15)
<p>A condição é true</p>
@endif


@if($nome == "Pedro")
    <p>O nome é Pedro</p>
@else
    <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos , e trabalha como {{ $profissao }}</p>
@endif

@for($i = 0; $i< count($arr); $i++) 
    <p>{{ $arr[$i] }} - {{ $i }}</p>
@endfor

@php
    $name = 'Julio';
    echo $name;
@endphp

@foreach($nomes as $nomes)  
    <p>{{ $loop ->index }}</p>
    <p>{{ $nomes }}</p>
@endforeach

@endsection
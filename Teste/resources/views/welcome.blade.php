@extends('layouts.main')

@section('title', 'Saulo Events')


@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id= "search" name="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="cold-md-12">
    <h2>Proximos eventos</h2>
    <p>veja os eventos dos proximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="car col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            </div>
            <div class="card-body">
                <p class="card-date">26/02/2025</p>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="participantes">X participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>  
            </div>
        @endforeach


    </div>
</div>

@endsection
@extends('layouts.app')

@section('titletab', 'search') <!-- html tag, name -->

@section('content')
    <div class="container p-3">
        <h1 class="text-center">Search Results...</h1>
    </div>

    @foreach ($movies as $movie)
         <div class="container card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 d-flex justify-content-center">
                        <img src="{{ $movie->imageurl }}" class="img img-rounded img-fluid "/>
                    </div>
                    <div class="col-md-9 mt-4 px-5">
                        <a class="float-left" href="{{route('show.from.watchlist', ['id'=> $movie->id]) }}">
                            <h5 class="text-primary">{{ $movie->title }}({{ $movie->year }})</h5>
                        </a> 
                          <p class="float-left mt-3">{{ $movie->duration }} | {{ $movie->public }} | {{ $movie->category }}</p> 
                        <p class="float-left"><strong>{{ $movie->rating }} <i class="fa fa-star" style="color: #ffc107"></i></strong> </p>
                        <div class="clearfix"></div>
                        <p>{{ $movie->description }}</p> 
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@endsection
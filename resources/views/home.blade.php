@extends('layouts.app')
@section('title', 'Homepage')

@section('content')
    <div class="container">
        <h1 class="red-text pb-40">Lista Programmazione Film di oggi</h1>
        @foreach ($movies as $movie)
            <ul>
                <li class="borderBottom-black pb-20 pt-20 pl-20  {{($movie['id'] %2 != 0) ? 'gray-background' : NULL}}">
                    <div>
                        <div><a href="#">{{$movie['title']}}</a></div>
                        <div>Valutazione media degli utenti: {{$movie['vote']}}</div>
                    </div>
                </li>
            </ul>
        @endforeach
    </div>
@endsection
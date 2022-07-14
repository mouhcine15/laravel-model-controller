@extends('templates.base')

@section('pageTitle', 'Movies')

@section('pageMain')
    <main>
        <ul>
            @foreach ($movie as $movies)
                <li>
                    <div>
                        <strong>Titolo: </strong>
                        {{$movies->title}}
                    </div>
                    <div>
                        <strong>Titolo originale: </strong>
                        {{$movies->original_title}}
                    </div>
                    <div>
                        <strong>Nazionalità: </strong>
                        {{$movies->nationality}}
                    </div>
                    <div>
                        <strong>Data di uscita: </strong>
                        {{$movies->date}}
                    </div>
                    <div>
                        <strong>Voto: </strong>
                        {{$movies->vote}}
                    </div>
                </li>   
            @endforeach
        </ul>
    </main> 
@endsection

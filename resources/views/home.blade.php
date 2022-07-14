@extends('templates.base')

@section('pageTitle', 'Movies')

@section('pageMain')
    <main>
        <ul>
            @foreach ($movie as $movies)
                <li>
                    <div>
                        {{$movies->title}}
                    </div>
                    <div>
                        {{$movies->original_title}}
                    </div>
                    <div>
                        {{$movies->nationality}}
                    </div>
                    <div>
                        {{$movies->date}}
                    </div>
                    <div>
                        {{$movies->vote}}
                    </div>
                </li>   
            @endforeach
        </ul>
    </main> 
@endsection

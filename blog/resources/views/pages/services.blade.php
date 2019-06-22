
@extends('layouts/app')

@section('content')
    <div class="jumbotron">
            <h1> {{ $title }} </h1>
            <p>This is basically a blog which made with laravel framework</p>
            @if (count($services)>0)
                <ul class="list-group">
                    @foreach($services as $service)
                     <li class="list-group-item"> {{ $service }} </li>
                   @endforeach
                </ul>
            @else
                <p> Nothing found !</p>
            @endif
    </div>
@endsection


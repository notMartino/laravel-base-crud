@extends('layouts.main-layout')

@section('content')
    <main>
        <ul class="guests-list">
            @foreach ($guests as $guest)
                <li>
                    {{$guest -> firstname . ' ' . $guest -> lastname}}
                </li>
            @endforeach
        </ul>
    </main>
@endsection
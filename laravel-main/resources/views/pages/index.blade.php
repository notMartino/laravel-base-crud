@extends('layouts.main-layout')

@section('content')
    <main>
        <h2>Guests List</h2>
        <ul class="guests-list">
            @foreach ($guests as $guest)
                <li>
                    <a href="{{route('guestLink', $guest -> id)}}">
                        {{$guest -> firstname . ' ' . $guest -> lastname}}
                    </a>
                </li>
            @endforeach
        </ul>
    </main>
@endsection
@extends('layouts.main-layout')

@section('content')
    <main>
        <h2>Guest Details</h2>
        <ul class="guests-list">
            <li>
                Id: {{$guest -> id}}
            </li>
            <li>
                Firstname: {{$guest -> firstname}}
            </li>
            <li>
                Lastname: {{$guest -> lastname}}
            </li>
            <li>
                Address: {{$guest -> address}}
            </li>
            <li>
                Postal Code: {{$guest -> postalcode}}
            </li>
            <li>
                Payment: &dollar; {{$guest -> payment}} 
            </li>
            <li>
                Room: #{{$guest -> room}} 
            </li>
        </ul>
    </main>
@endsection
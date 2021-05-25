@extends('layouts.main-layout')

@section('content')
    <main>
        <form action="{{route('storeGuestLink')}}" method="POST">
            @method('POST')
            @csrf

            <ul>
                <li>
                    <label for="firstname">
                        Firstname: 
                    </label>
                    <input type="text" name="firstname">
                </li>
                <li>
                    <label for="firstname">
                        Lastname: 
                    </label>
                    <input type="text" name="lastname">
                </li>
                <li>
                    <label for="address">
                        Address: 
                    </label>
                    <input type="text" name="address">
                </li>
                <li>
                    <label for="postalcode">
                        Postal Code: 
                    </label>
                    <input type="text" name="postalcode">
                </li>
                <li>
                    <label for="payment">
                        Payment: 
                    </label>
                    <input type="number" name="payment">
                </li>
                <li>
                    <label for="room">
                        Room: 
                    </label>
                    <input type="number" name="room">
                </li>
                <li>
                    <input type="submit" value="Create Guest">
                </li>
            </ul>
        </form>
    </main>
@endsection
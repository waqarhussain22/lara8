@extends('layouts.template')
@section('contents')

    <p>Hello this is user registration page!</p><br>
    Hi {{ $name }}<br>
    Your country is {{$country}}<br>
@endsection

@section('footer')
    <div>Copyrights all rights reserved.</div>
@endsection

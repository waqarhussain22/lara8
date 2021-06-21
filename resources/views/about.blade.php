@extends('layouts.template')
@section('contents')

    <p>Hello this is about us section you can read all about us here.</p><br>
    Hi {{ $name }}<br>
    Your country is {{$country}}<br>
@endsection

@section('footer')
    <div>Copyrights all rights reserved.</div>
@endsection

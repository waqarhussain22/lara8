@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $story->title }} <a class="float-right" href="{{ route('dashboard.index') }}">Back to Stories</a></div>

                    <div class="card-body">
                        <p>Story: {{ $story->body }}</p>
                        <p>Type: {{ $story->type }}</p>
                        <p>Date: {{ $story->created_at }}</p>
                        <p>Author: {{ $story->user->name }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

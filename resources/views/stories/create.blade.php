@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Story <a href="{{ route('stories.index') }}" class="float-right"> Go Back</a> </div>

                    <div class="card-body">
{{--                        @if( $errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach($errors->all() as $error)--}}
{{--                                <li>--}}
{{--                                    {{ $error }}--}}
{{--                                </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        @endif--}}
                   <form action="{{ route('stories.store') }}" method="POST">
                        @csrf
                        @include('stories.form')
                       <div class="form-group">
                           <button type="text" class="btn btn-primary">Add</button>
                       </div>
                   </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

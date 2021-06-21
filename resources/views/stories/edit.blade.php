@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Story</div>

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
                   <form action="{{ route('stories.update', [$story]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('stories.form')
                       <div class="form-group">
                           <button type="text" class="btn btn-primary">Save</button>
                       </div>
                   </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

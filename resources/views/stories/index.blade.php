@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Stories') }}
                        @can('create', App\Story::class)
                            <a class="float-right" href="{{ route('stories.create') }}">Add New Story</a>
                         @endcan
                    </div>

                    <div class="card-body">
                     <table class="table">
                         <thead>
                         <tr>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                         </tr>
                         </thead>
                         <tbody>
                         @foreach( $stories as $story)
                            <tr>
                                <td>{{ $story->title }}</td>
                                <td>{{ $story->type }}</td>
                                <td>{{ $story->status == 1 ? 'Yes' : 'No' }}</td>
                                @can('view', $story)
                                    <td><a href="{{ route('stories.show', [$story]) }}" class="btn btn-secondary">View</a></td>
                                @endcan

                                @can('update', $story)
                                    <td><a href="{{ route('stories.edit', [$story]) }}" class="btn btn-secondary">Edit</a></td>
                                @endcan
                                <td>

                                 @can('delete', $story)
                                    <form action="{{ route('stories.destroy', [$story]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"> Delete</button>

                                    </form>
                                 @endcan
                                </td>
                            </tr>
                          @endforeach
                         </tbody>
                     </table>
                        <div class="paginate">
                            {{ $stories->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

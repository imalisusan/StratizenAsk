@extends('ideas.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vumbua</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ideas.create') }}"> Create New Idea</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Idea Id</th>
            <th>Title</th>
            <th>Details</th>
            <th>Due Date</th>
            <th>Manager</th>
            <th>Category</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($ideas as $idea)
        <tr>
            <td>{{ $idea->id }}</td>
            <td>{{ $idea->title }}</td>
            <td>{{ $idea->detail }}</td>
            <td>{{ $idea->due_date }}</td>
            <td>{{ $idea->manager }}</td>
            <td>{{ $idea->category }}</td>
            <td>{{ $idea->status }}</td>
            <td>
                <form action="{{ route('ideas.destroy',$idea->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('ideas.show',$idea->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('ideas.edit',$idea->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $ideas->links() !!}
@endsection
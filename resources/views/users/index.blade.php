@extends('users.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Vumbua</h2>
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
            <th>User Id</th>
            <th>Title</th>
            <th>Details</th>
            <th>Due Date</th>
            <th>Manager</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->title }}</td>
            <td>{{ $user->detail }}</td>
            <td>{{ $user->due_date }}</td>
            <td>{{ $user->manager }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->user_id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('users.show',$user->user_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->user_id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $users->links() !!}
@endsection
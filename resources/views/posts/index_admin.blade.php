@extends('laratrust::panel.layout')
@section('title', 'Posts')

    @section('content')
    <div class="flex flex-col">
        @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
        @endif
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="mt-4 align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
            <thead>
                <tr>
                <th class="th">Id</th>
                <th class="th">Title</th>
                <th class="th">Description</th>
                <th class="th">Category</th>
                <th class="th">Status</th>
                <th class="th"></th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($posts as $post)
                <tr>
                <td class="td text-sm leading-5 text-gray-900">
                    {{$post->id}}
                </td>
                <td class="td text-sm leading-5 text-gray-900">
                    {{$post->title}}
                </td>
                <td class="td text-sm leading-5 text-gray-900">
                    {{$post->description}}
                </td>
                <td class="td text-sm leading-5 text-gray-900">
                    {{$post->category}}
                </td>
                <td class="td text-sm leading-5 text-gray-900">
                    {{$post->status}}
                </td>
                <td class="flex justify-end px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                    <a class="text-blue-600 hover:text-blue-900" href="{{ route('posts.show',$post->id) }}">View</a>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete the course?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    {{ $posts->links('laratrust::panel.pagination') }}
    @endsection
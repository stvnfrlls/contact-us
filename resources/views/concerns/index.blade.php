@extends('layouts.app')

@section('content')
    <div class="container mx-auto m-3 p-3">
        <div class="h1 text-start m-3">Messages</div>
        @if (count($concerns) > 0)
            <table class="table text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>Email</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($concerns as $concern)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $concern->email }}</td>
                            <td>{{ $concern->name }}</td>
                            <td class="d-flex flex-shrink-0 justify-content-center gap-1">
                                <a href="{{ route('concerns.show', ['concern' => $concern->id]) }}" class="btn btn-primary">
                                    View
                                </a>
                                <form action="{{ route('concerns.destroy', ['concern' => $concern->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="deleteMessage({{ $concern->id }})">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="display-5 text-center m-5 p-5">No messages found.</div>
        @endif
    </div>
@endsection

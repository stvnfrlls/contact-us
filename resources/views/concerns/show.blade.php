@extends('layouts.app')

@section('content')
    <div class="container mx-auto m-3 p-3">

        <div class="h1 text-start mb-3">Details</div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="fw-bold">{{ $concern->name }}</div>
                            <div>{{ $concern->created_at->format('Y-m-d') }}</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">{{ $concern->message }}</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

        });
    </script>
@endsection

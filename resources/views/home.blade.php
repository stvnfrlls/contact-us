@extends('layouts.app')

@section('content')
    <div class="container mx-auto m-3 p-3">
        <div class="h1 text-center">Welcome to Contact Form App</div>

        <div class="d-flex justify-content-center m-3 p-3">
            <div class="mx-1">
                <a href="/concerns" type="button" class="btn btn-primary">
                    View Messages
                </a>
            </div>
            <div class="mx-1">
                <a href="/contact" type="button" class="btn btn-secondary">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
@endsection

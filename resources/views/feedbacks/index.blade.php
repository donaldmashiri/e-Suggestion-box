@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Feedbacks') }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($suggestions as $suggestion)
                                <div class="col-md-4 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $suggestion->title }}</h5>
                                            <p class="card-text">
                                                <strong>Regnum:</strong> {{ $suggestion->user->regnum }}<br>
                                                <strong>Full Name:</strong> {{ $suggestion->user->name }}<br>
                                                <strong>Category:</strong> {{ $suggestion->category }}<br>
                                                <strong>Description:</strong> {{ $suggestion->description }}<br>
                                                <strong>Status:</strong> {{ $suggestion->status }}
                                            </p>
                                            <a href="{{ route('feedbacks.show', $suggestion->id) }}" class="btn btn-warning btn-sm">Add Feedback</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

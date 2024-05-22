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
                        <div class="justify-content-end">
                            <a href="{{route('feedbacks.index')}}" class="btn btn-secondary btn-sm justify-content-end"> back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('layouts.messages')
                        <div class="row">
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
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-8 card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('feedbacks.store') }}">
                                        @csrf

                                        <input type="hidden" name="suggestion_id" value="{{$suggestion->id}}">

                                        <div class="row mb-3">
                                            <label for="status" class="fw-bolder col-form-label">{{ __('Status') }}</label>
                                                <select name="status" class="form-control " id="status">
                                                    <option value="">Select Status</option>
                                                    <option value="reviewed">reviewed</option>
                                                    <option value="implemented">implemented</option>
                                                </select>
                                                @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="row mb-3">
                                            <label for="notes" class="col-form-label fw-bolder">{{ __('Notes') }}</label>
                                            <input id="notes" type="hidden" name="notes">
                                            <trix-editor input="notes"></trix-editor>
                                                @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                        </div>


                                        <div class="row mb-0">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary float-right">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Feedbacks') }}
                        </h5>
                    </div>
                    <div class="card-body mt-3">
                        @if($feedbacks->count() > 0)
                        <table class="table table-sm table-bordered table-striped table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">Notes</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($feedbacks as $feedback)
                                <tr>
                                    <td> {!! $feedback->notes  !!} </td>
                                    <td>
{{--                                        <a href="{{route('suggestions.show', $suggestion->id)}}" class="btn btn-warning btn-sm">Edit</a>--}}
                                        <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                            <h4 class="alert alert-danger">No FeedBack yet</h4>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

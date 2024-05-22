@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Suggestions') }}
                        </h5>
                        <div class="justify-content-end">
                            <a href="{{route('suggestions.index')}}" class="btn btn-secondary btn-sm justify-content-end"> back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('layouts.messages')
                        <table class="table table-sm table-bordered table-striped table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">Regnum</th>
                                <th scope="col">Full Names</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> R001 </td>
                                    <td> Yolanda </td>
                                    <td> {{$suggestion->title}} </td>
                                    <td> {{$suggestion->category}} </td>
                                    <td> {{$suggestion->description}} </td>
                                    <td> {{$suggestion->status}} </td>

                                </tr>

                            </tbody>
                        </table>
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
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($feedbacks as $feedback)
                                    <tr>
                                        <td> {!! $feedback->notes  !!} </td>
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

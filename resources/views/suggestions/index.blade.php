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
                            <a href="" class="btn btn-success btn-sm justify-content-end"> Add Suggestion</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-sm table-bordered table-striped table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">Regnum</th>
                                <th scope="col">Full Names</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($suggestions as $suggestion)
                                <tr>
                                    <td> R001 </td>
                                    <td> Yolanda </td>
                                    <td> {{$suggestion->title}} </td>
                                    <td> {{$suggestion->category}} </td>
                                    <td> {{$suggestion->description}} </td>
                                    <td> {{$suggestion->status}} </td>
                                    <td>
                                        <a href="{{route('suggestions.show', $suggestion->id)}}" class="btn btn-warning btn-sm">View</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

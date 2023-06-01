@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Incoming Permission letter</div>
                <div class="card-body">
                    <div class="row">

                        @foreach($permitletter as $data)
                        <div class="mb-4">
                            <div class="card">
                            <div class="card-header bg-white d-flex align-items-center">
                                    <div class="col-md-6">
                                        <div class="fw-bold">{{$data->user->name}}</div>
                                        <div class="fw-italic">{{$data->kelas->class_name}}</div>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        @if($data->status == 'submitted')
                                        <div
                                            class="d-inline-flex px-2 py-1 fw-semibold text-white bg-warning rounded-2">
                                            Submitted
                                        </div>
                                        @elseif($data->status == 'accepted')
                                        <div
                                            class="d-inline-flex px-2 py-1 fw-semibold text-white bg-success rounded-2">
                                            Accepted
                                        </div>
                                        @else
                                        <div class="d-inline-flex px-2 py-1 fw-semibold text-white bg-danger rounded-2">
                                            Rejected
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-body p-4 d-flex">
                                    <div class="col-md-6 gap-2">
                                        <div class="container">
                                            <div class="fw-light">permit type :</div>
                                            <div>{{$data->permission_type}}</div>
                                        </div>
                                        <div class="container">
                                            <div class="fw-light">Description :</div>
                                            <div class="">{{$data->desc}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class="fw-light">Start date :</div>
                                            <div>{{$data->start_date}}</div>
                                        </div>
                                        <div class="container">
                                            <div class="fw-light">End date :</div>
                                            <div>{{$data->end_date}}</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer bg-white">
                                    <div class="row justify-content-between">
                                        <div class="col-md-6">
                                            <div class="fw-light">PIC Name :</div>
                                            <div class="fw-bold">{{$data->pic_name}}</div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="row align-items-center">
                                                <form action="/accept/{{$data->id}}" method="POST"
                                                    route="letters.accept" class="w-auto">
                                                    @csrf
                                                    {{method_field('PUT')}}
                                                    <button class="btn btn-success mt-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-check-circle"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                            <path
                                                                d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                        </svg>
                                                        Terima
                                                    </button>
                                                </form>

                                                <form action="/reject/{{$data->id}}" method="POST"
                                                    route="letters.reject" class="w-auto">
                                                    @csrf
                                                    {{method_field('PUT')}}
                                                    <button class="btn btn-danger mt-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-x-circle"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                            <path
                                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                        </svg>
                                                        Tolak
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

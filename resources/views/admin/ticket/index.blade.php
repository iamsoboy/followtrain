@extends('layouts.admin')

@section('title', 'Train Tickets')

@section('content')

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Train Tickets</li>
    </ul>

    <!-- BEGIN row -->
    <div class="row">

        <!-- BEGIN col-12 -->
        <div class="col-xl-12">
            <!-- BEGIN card -->
            @if (session()->has('success_message'))
                <div class="alert alert-success mb-6">
                    <strong>{{session()->get('success_message')}}</strong>
                </div>
            @endif
            <div class="card text-black mb-3 overflow-hidden">
                <div class="card-header">Card header here</div>
                <form method="post" action="{{ route('ticket.store') }}" class="needs-validation" novalidate="">
                @csrf
                <!-- BEGIN card-body -->
                    <div class="card-body position-relative">

                        <!-- BEGIN row -->
                        <div class="row">

                            <!-- BEGIN col-8 -->
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="Train-Available">Select a Train</label>
                                    <select class="custom-select form-control @error('train_id') is-invalid @enderror" name="train_id">
                                        @forelse($trains as $train)
                                            <option value="{{$train->id}}">{{$train->name}}</option>
                                        @empty
                                            <option value="empty">Not Available</option>
                                        @endforelse
                                    </select>
                                    @error('train_id')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="trainName">Ticket Name</label>
                                    <input type="text" class="form-control @error('ticket_name') is-invalid @enderror" value="{{ old('ticket_name') }}" name="ticket_name" placeholder="Enter Ticket Name" />
                                    @error('ticket_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Description">Ticket Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" rows="2" name="description"></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <!-- BEGIN col-4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="trainCode">Ticket Price</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" placeholder="in naira" />
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="trainCode">Total Numbers of Seats</label>
                                    <input type="text" class="form-control @error('seat_no') is-invalid @enderror" name="seat_no" value="{{ old('seat_no') }}" placeholder="Total number of seats" />
                                    @error('seat_no')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Train-Available">Ticket Available?</label>
                                    <select class="custom-select form-control @error('ticket_available') is-invalid @enderror" name="ticket_available">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                    @error('ticket_available')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- BEGIN col-12 -->
                            <div class="col-md-12">


                            </div>

                        </div>
                        <!-- END row -->
                    </div>
                    <!-- END card-body -->
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Add New</button>
                    </div>
                </form>
            </div>
            <!-- END card -->

        </div>
        <!-- END col-12 -->

    </div>
    <!-- END row -->



    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-12 -->
        <div class="col-lg-12 col-md-12">

            <!-- default table -->
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ticket Class</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">No. of Available Tickets</th>
                    <th scope="col">Available</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($tickets as $ticket)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$ticket->ticket_class}}</td>
                        <td>{{$ticket->ticket_description}}</td>
                        <td>{{$ticket->price}}</td>
                        <td class="text-center">{{$ticket->seat_numbers}}</td>
                        <td>
                            @if($ticket->is_active == 0)
                                <span class="badge badge-danger">Inactive</span>
                            @else
                                <span class="badge badge-success">Active</span>
                            @endif
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @empty
                    <b>No Train Ticket Created Yet</b>
                @endforelse
                </tbody>
            </table>

        </div>
        <!-- END col-6 -->
    </div>
    <!--END row -->

@endsection

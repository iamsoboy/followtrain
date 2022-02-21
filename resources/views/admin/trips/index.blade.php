@extends('layouts.admin')

@section('title', 'Train Trips')

@section('content')

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Train Trips</li>
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
            @if (session()->has('error_message'))
                <div class="alert alert-danger mb-6">
                    <strong>{{session()->get('error_message')}}</strong>
                </div>
            @endif
            <div class="card text-black mb-3 overflow-hidden">
                <div class="card-header">Card header here</div>
                <form method="post" action="{{ route('trips.store') }}" class="needs-validation" novalidate="">
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
                                    <label for="trainName">Location</label>
                                    <select class="selectpicker form-control @error('location') is-invalid @enderror" name="location" data-style="btn-default" multiple data-max-options="1">
                                        <optgroup label="Location">
                                            @forelse($locations as $location)
                                            <option value="{{$location->name}}">{{$location->name}}</option>
                                            @empty
                                            <option value="">Not Available</option>
                                            @endforelse
                                        </optgroup>
                                    </select>
                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="trainName">Destination</label>
                                    <select class="selectpicker form-control @error('destination') is-invalid @enderror" name="destination" data-style="btn-default" multiple data-max-options="1">
                                        <optgroup label="Location">
                                            @forelse($locations as $location)
                                                <option value="{{$location->name}}">{{$location->name}}</option>
                                            @empty
                                                <option value="">Not Available</option>
                                            @endforelse
                                        </optgroup>
                                    </select>
                                    @error('destination')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- BEGIN col-4 -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Week-Days">Week Days</label>
                                    <select class="selectpicker form-control @error('week_days') is-invalid @enderror" name="week_days[]" data-style="btn-default" multiple data-max-options="7">
                                        <optgroup label="Days of the Week">
                                            <option value="Mon">Monday</option>
                                            <option value="Tue">Tuesday</option>
                                            <option value="Wed">Wednesday</option>
                                            <option value="Thur">Thursday</option>
                                            <option value="Fri">Friday</option>
                                            <option value="Sat">Saturday</option>
                                            <option value="Sun">Sunday</option>
                                        </optgroup>
                                    </select>
                                    @error('week_days')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Departure">Departure Time</label>
                                    <div class="input-group bootstrap-timepicker timepicker">
                                        <input id="timepicker" type="text" class="form-control @error('departure_time') is-invalid @enderror" name="departure_time" />
                                        <span class="input-group-addon input-group-append">
                                            <span class="input-group-text"><i class="fa fa-clock"></i></span>
                                        </span>
                                    </div>
                                    @error('departure_time')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Trips">Schedule Active?</label>
                                    <select class="custom-select form-control @error('trip_active') is-invalid @enderror" name="trip_active">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                    @error('trip_active')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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

@section('pagescript')
    <script src="{{asset('admin/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>

    <script>
        $('#timepicker').timepicker();
    </script>
@stop
@endsection

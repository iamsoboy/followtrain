@extends('layouts.admin')

@section('title', 'Add Train')

@section('content')

    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Add Train</li>
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
                <form method="post" action="{{ route('locate.store') }}" class="needs-validation" enctype="multipart/form-data">
                @csrf
                <!-- BEGIN card-body -->
                    <div class="card-body position-relative">

                        <!-- BEGIN row -->
                        <div class="row">

                            <!-- BEGIN col-8 -->
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="trainName">Location Image</label>
                                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" value="{{ old('image') }}" name="image" >
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="trainName">Location Code</label>
                                    <input type="text" class="form-control @error('code') is-invalid @enderror" value="{{ old('code') }}" name="code" placeholder="XXX" />
                                    @error('code')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="trainName">Location Name</label>
                                    <input type="text" class="form-control @error('location_name') is-invalid @enderror" value="{{ old('location_name') }}" name="location_name" placeholder="Enter Train Locations" />
                                    @error('location_name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Train-Available">Train Available?</label>
                                    <select class="custom-select form-control @error('status') is-invalid @enderror" name="status">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- BEGIN col-4 -->

                        </div>
                        <!-- END row -->
                    </div>
                    <!-- END card-body -->
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Add New Location</button>
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
                    <th scope="col">Image</th>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Active</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($locations as $location)
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="{{asset('location/'.$location->image)}}" style="width: 50%; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        </td>
                        <td>{{$location->code}}</td>
                        <td>{{$location->name}}</td>
                        <td>
                            @if($location->status == 0)
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
                    <b>No Train Available Yet</b>
                @endforelse
                </tbody>
            </table>

        </div>
        <!-- END col-6 -->
    </div>
    <!--END row -->

@endsection

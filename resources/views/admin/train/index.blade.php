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
                <form method="post" action="{{ route('train.store') }}" class="needs-validation" novalidate="">
                @csrf
                    <!-- BEGIN card-body -->
                    <div class="card-body position-relative">

                            <!-- BEGIN row -->
                            <div class="row">

                                <!-- BEGIN col-8 -->
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="trainName">Train Name</label>
                                        <input type="text" class="form-control @error('train_name') is-invalid @enderror" value="{{ old('train_name') }}" name="train_name" placeholder="Enter Train Name" />
                                        @error('train_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="trainCode">Train Code</label>
                                        <input type="text" class="form-control @error('train_code') is-invalid @enderror" name="train_code" value="{{ old('train_code') }}" placeholder="XXX-XX-XXXX" />
                                        @error('train_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <!-- script -->
                                    </div>
                                </div>
                                <!-- BEGIN col-4 -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Train-Available">Train Available?</label>
                                        <select class="custom-select form-control @error('train_available') is-invalid @enderror" name="train_available">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                        @error('train_available')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="trainCode">Train Active?</label>
                                        <select class="custom-select form-control @error('train_active') is-invalid @enderror" name="train_active">
                                            <option value="1">Yes</option>
                                            <option value="2">No</option>
                                        </select>
                                        @error('train_active')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- BEGIN col-12 -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="Description">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" rows="2" name="description"></textarea>
                                        @error('description')
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



    <!-- BEGIN row -->
    <div class="row">
        <!-- BEGIN col-12 -->
        <div class="col-lg-12 col-md-12">

            <!-- default table -->
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Train Name</th>
                    <th scope="col">Train Code</th>
                    <th scope="col">Available</th>
                    <th scope="col">Active</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($trains as $train)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$train->name}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>
                        @if($train->is_available == 0)
                            <span class="badge badge-danger">Inactive</span>
                        @else
                            <span class="badge badge-success">Active</span>
                        @endif
                    </td>
                    <td>
                        @if($train->is_active == 0)
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

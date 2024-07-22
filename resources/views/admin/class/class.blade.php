@extends('admin.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3"></div>
                <div class="col-md-8">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add class</h3>
                        </div>


                        <form action="{{route('admin.class.formstore')}}" method="get">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Add class</label>
                                    <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                        id="exampleInputEmail1" placeholder="Enter academic year">
                                </div>
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                @if (Session::has('success'))
                                    <div class="text-success">{{ Session::get('success') }}</div>
                                @endif

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                        </form>
                    </div>
                @endsection

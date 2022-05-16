@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <h3>Register New Citizen</h3>

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if (Session::has('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif

                        <form action="{{ route('cizizen.store') }}" method="POST">
                            @csrf
                            <div class="form-group">

                                <small class="col-lable">Name</small>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="" placeholder="NAME" required />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <small class="col-lable">Phone Number</small>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                    value="" placeholder="PHONE NUMBER" required />
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <small class="col-lable">Address</small>
                                <input type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror" value=""
                                    placeholder="ADDRESS" required />
                            </div>

                            <div class="form-group">
                                <small class="col-lable">Gender</small>
                                <select class="form-control" name="gender" id="">
                                    <option value="male">Male</option>
                                    <option value="Female">Female</option>

                                </select>

                            </div>
                            <div class="form-group">
                                <small class="col-lable">Country</small>
                                <select class="form-control" name="country_id" id="">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <small class="col-lable">State</small>
                                <select class="form-control" name="state_id" id="">
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <small class="col-lable">LGA</small>
                                <select class="form-control" name="lga_id" id="">
                                    @foreach ($lgas as $lga)
                                        <option value="{{ $lga->id }}">{{ $lga->name }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <small class="col-lable">Ward</small>
                                <select class="form-control" name="ward_id" id="">
                                    @foreach ($wards as $ward)
                                        <option value="{{ $ward->id }}">{{ $ward->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Submit</button>
                            </div>





                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

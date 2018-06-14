@extends('layouts.default_template')

@section('title_page')
    Register
@endsection

@section('active_home')
active
@endsection

@section('content')
<div class="box-register">
    <div class="col-lg-4 offset-lg-4 mt-5">
        <h3 class="text-center mb-4">Register</h3>
        <div class="container">

            {{-- @if(!empty($errors->all()))
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
            
            <form name="register" action="register_process" method="post">

                @csrf

                {!!Session::get('status')!!}

                <div class="form-group">
                    <input type="text" name="firstname" class="form-control" value="{{old('firstname')}}" placeholder="Firstname">
                    <span class="text-danger">{{$errors->first('firstname')}}</span>
                </div>

                <div class="form-group">
                    <input type="text" name="lastname" class="form-control" value="{{old('lastname')}}" placeholder="Lastname">
                    <span class="text-danger">{{$errors->first('lastname')}}</span>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email">
                    <span class="text-danger">{{$errors->first('email')}}</span>
                </div>

                <div class="form-group">
                    <input type="tel" name="tel" class="form-control" value="{{old('tel')}}" placeholder="Tel">
                    <span class="text-danger">{{$errors->first('tel')}}</span>
                </div>
                
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" value="male"> Male
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender" value="female"> Female
                    </label>
                </div>

                <p><span class="text-danger">{{$errors->first('gender')}}</span></p>

                <div class="form-group mt-2">
                    <textarea class="form-control" name="address" rows="4"  placeholder="Address">{{old('address')}}</textarea>
                    <span class="text-danger">{{$errors->first('address')}}</span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
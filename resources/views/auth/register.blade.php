@extends('layouts.base')
@section('content')
<center class="py-5"> 
    <div class="card">
        <div class="card-header">
            <h1 class="mb-4">Register</h1>
        </div>
        <div class="card-body">
        <div class="col-md-12">
            <form method="POST" action="{{ route('register') }}">
                @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error')}}
                </div>                    
                @endif
                @csrf
                <div class="mb-2">
                    <div class="form-group">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="" placeholder="Full names"  @error('name') style="border-color:red;" @enderror>
                        <span class="text-danger float-start">@error('name')
                        {{ $message }}                            
                        @enderror</span>
                    </div>
                </div>     
                <div class="mb-2">
                    <div class="form-group">
                        <input type="text" value="{{ old('username') }}" name="username" class="form-control" id="" placeholder="Username" @error('username') style="border-color:red;" @enderror>
                        <span class="text-danger float-start">@error('username')
                        {{ $message }}                            
                        @enderror</span>
                    </div>
                </div>    
                <div class="mb-2">
                    <div class="form-group">
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control" id=""  placeholder="Email address" @error('email') style="border-color:red;" @enderror>
                        <span class="text-danger float-start">@error('email')
                        {{ $message }}                            
                        @enderror</span>
                    </div>
                </div>    
                <div class="mb-2">
                    <div class="form-group">
                        <input type="text" value="{{ old('phone') }}" name="phone" class="form-control" id="" placeholder="Phone number" @error('phone') style="border-color:red;" @enderror>
                        <span class="text-danger float-start">@error('phone')
                        {{ $message }}                            
                        @enderror</span>
                    </div>
                </div>    
                <div class="mb-2">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="" placeholder="Password" @error('password') style="border-color:red;" @enderror>
                        <span class="text-danger float-start">@error('password')
                        {{ $message }}                            
                        @enderror</span>
                    </div>
                </div>  
                    <div class="mr-2 float-start mb-2">
                        <label for="" class="m-2 fw-bold">
                            <input type="checkbox" name="remember" id="">  Remember me
                        </label>
                    </div><br><br>
                    <div class="float-start mb-2">
                       <p class="fw-bold">Already have an account? Login<span><a href="{{ url('login') }}">
                        here</a></span></p> 
                    </div>
                  
                <div class="mb-2">
                    <button type="submit" class="btn btn-secondary" style="float: right;">Register</button>
                    </div>
                </div>    
            </form> 
        </div>
    </div>
</div>
</center>
@endsection
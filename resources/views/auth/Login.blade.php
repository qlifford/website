@extends('layouts.base')
@section('content')
<center class="py-5"> 
    <div class="card">
        <div class="card-header">
            <h1 class="mb-4">Login</h1>
        </div>
    <div class="card-body"> 
      <div class="col-md-12">
            <form method="POST" action="{{ route('login') }}">
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session()->get('success')}}
                </div>                    
            @endif
            @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error')}}
            </div>                    
            @endif
                @csrf
                <div class="mb-4">
                    <div class="form-group">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="" placeholder="Name" @error('name') style="border-color:rgb(240, 17, 17);" @enderror>
                        <span class="text-danger float-start">
                            @error('name') {{ $message }}                            
@enderror
                        </span>
                    </div>
                </div>     
                <div class="mb-4">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="" placeholder="Password" @error('password') style="border-color:red;" @enderror>
                        <span class="text-danger float-start">
                            @error('password') {{ $message }}                            
@enderror
                        </span>
                    </div>
                </div>  
                <div class="mb-4">
                    <button class="btn btn-secondary" style="float: right;">Login</button>
                    </div>
                </div>    
            </form> 
        </div>
        </div>
</div>
</center>
@endsection
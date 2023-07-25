@extends('layouts.base')
@section('content')
<div class="container-fluid">
    <center>
        <h1>
           Welcome to <span style="color: red;">Our</span>  Site
        </h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod amet fugit est eveniet error voluptatum nulla blanditiis debitis natus voluptates necessitatibus tempora qui accusantium perspiciatis, ipsam iste quo hic neque.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, blanditiis corrupti optio consequatur distinctio eaque cum? Repellat aspernatur iusto tempora adipisci mollitia doloribus. Doloribus dolor, aspernatur facere a voluptatum quasi.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa et nostrum repudiandae dicta nulla officiis repellendus nam esse minus, ratione perferendis molestiae laboriosam iste fuga quaerat adipisci, voluptatum veniam natus.
        </p>
        <div class="mt-5">
            <a style="margin-right: 8px;" class="mr-6" href="{{ url('register') }}">
                <button class="btn btn-success btn-lg">Join Us</button>
            </a>
            <a href="{{ url('login') }}">
                <button class="btn btn-danger btn-lg">Login</button>
            </a>
        </div>
    </center>
</div>
@endsection
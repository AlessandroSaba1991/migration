@extends('layouts.app')

@section('content')
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Real Estate Agency</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, optio.</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Visit a properties</a>
        </p>
    </div>
</div>
<section class="container">
    <h3>Our properties</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque in explicabo deleniti eum. Perferendis molestias molestiae alias adipisci, asperiores officiis debitis recusandae facere excepturi iure optio eum autem harum tempore.</p>
    <div class="houses row row-cols-1 row-cols-md-3 g-3">
        @forelse($houses as $house)
        <div class="col">
            <div class="card">
                <img class="img-fluid" src="{{$house->image}}" alt="">
                <div class="card-body">
                    <address>
                        {{$house->address}}
                        {{$house->city}}
                    </address>

                </div>
            </div>
        </div>
        @empty
        <div class="col"></div>
        @endforelse
    </div>
</section>
@endsection

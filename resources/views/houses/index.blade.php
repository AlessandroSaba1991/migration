@extends('layouts.app')

@section('content')
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">Properties</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, optio.</p>
    </div>
</div>
<section class="container">
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

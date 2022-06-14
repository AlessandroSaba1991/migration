@extends('layouts.app')

@section('content')
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">{{$house->address}}</h1>
        <img src="{{$house->image}}" alt="">
    </div>
</div>
<section class="container">
    <div class="card">
        <img class="img-fluid" src="{{$house->image}}" alt="">
        <div class="card-body">
            <address>
                {{$house->address}}
                {{$house->city}}
            </address>
        </div>
    </div>
</section>
@endsection

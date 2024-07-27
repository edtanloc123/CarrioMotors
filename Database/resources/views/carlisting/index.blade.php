@extends('layout.user')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Listing</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Listing</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Rent A Car Start -->
    <div style="text-align: center;" class="p-3" style="max-width: 900px;">
        @foreach ($segment as $segment)
            <a href="{{ url('/carlisting/segment/' . $segment->id.'#findyourcar') }}"
                class="btn btn-primary py-md-3 px-md-5 mt-2">{{ $segment->segmentname }}</a>
        @endforeach
        <br>
        <br>
        <a style="height: 50px ; width: 100px;" href="{{ url('/carlisting/index#findyourcar') }}"
                class="btn btn-primary">All</a>
    </div>
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 id="findyourcar" class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
            <div class="row">
                @foreach ($otoname as $otoname)
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="rent-item mb-4">
                        <a href="{{ url('/carbooking/index/' . $otoname->id . '#carbooking') }}">  <img class="img-fluid mb-4" src="{{ asset('user') }}/images/{{ $otoname->photo }}"
                                alt=""> </a>
                            <h4 class="text-uppercase mb-4">{{ $otoname->name }}</h4>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="px-2">
                                    <i class="fa fa-car text-primary mr-1"></i>
                                    <span>{{$otoname -> yearofmanufacture}}</span>
                                </div>
                                <div class="px-2 border-left border-right">
                                    <i class="fa fa-cogs text-primary mr-1"></i>
                                    <span>{{$otoname -> fuelcapacity}}</span>
                                </div>
                                <div class="px-2">
                                    <i class="fa fa-road text-primary mr-1"></i>
                                    <span>{{$otoname -> engine}}</span>
                                </div>
                            </div>
                            <a class="btn btn-primary px-3"
                                href="{{ url('/carbooking/index/' . $otoname->id.'#carbooking') }}">{{ $otoname->price }}$</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Rent A Car End -->
@endsection

@extends('layout.user')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Booking</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div id="carbooking" class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase mb-5">{{ $oto->name }}</h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="{{ asset('user') }}/images/{{ $oto->photo }}" alt="">
                </div>
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-2">{{ $oto->price }}$</h4>
                    <div class="d-flex mb-3">
                        <h6 class="mr-2">Rating:</h6>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(250)</small>
                        </div>
                    </div>
                    <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua
                        sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et
                        sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod,
                        dolores takimata consetetur invidunt</p>
                    <div class="d-flex pt-1">
                        <h6>Share on:</h6>
                        <div class="d-inline-flex">
                            <a class="px-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="px-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="px-2" href=""><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-n3 mt-lg-0 pb-4">
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2"> &nbsp;YEAR:</i>
                    <br>
                    <span>{{ $oto->yearofmanufacture }}</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2">&nbsp;ENGINE:</i>
                    <br>
                    <span>{{ $oto->engine }}</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2">&nbsp;WATTAGE:</i>
                    <br>
                    <span>{{ $oto->wattage }}</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2">&nbsp;ORIGIN:</i>
                    <br>
                    <span>{{ $oto->origin }}</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2">&nbsp;FUELCAPACITY:</i>
                    <br>
                    <span>{{ $oto->fuelcapacity }}</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2">&nbsp;PRICE:</i>
                    <br>

                    <span>{{ $oto->price }} $</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2">&nbsp;SPEED:</i>
                    <br>
                    <span>20km/liter</span>
                </div>
                <div class="col-md-3 col-6 mb-2">
                    <i class="fa fa-car text-primary mr-2">&nbsp;LOCATION:</i>
                    <br>
                    <span>GPS Navigation</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Car Booking Start -->
    <div class="container-fluid pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="mb-4">Personal Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="First Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="Last Name" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="email" class="form-control p-4" placeholder="Your Email" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control p-4" placeholder="Mobile Number"
                                    required="required">
                            </div>
                        </div>
                    </div>
                    <h2 class="mb-4">Booking Detail</h2>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" style="height: 50px;">
                                    <option selected>Pickup Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" style="height: 50px;">
                                    <option selected>Drop Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input"
                                        placeholder="Pickup Date" data-target="#date2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-6 form-group">
                                <div class="time" id="time2" data-target-input="nearest">
                                    <input type="text" class="form-control p-4 datetimepicker-input"
                                        placeholder="Pickup Time" data-target="#time2" data-toggle="datetimepicker" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" style="height: 50px;">
                                    <option selected>Select Adult</option>
                                    <option value="1">Adult 1</option>
                                    <option value="2">Adult 2</option>
                                    <option value="3">Adult 3</option>
                                </select>
                            </div>
                            <div class="col-6 form-group">
                                <select class="custom-select px-4" style="height: 50px;">
                                    <option selected>Select Child</option>
                                    <option value="1">Child 1</option>
                                    <option value="2">Child 2</option>
                                    <option value="3">Child 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control py-3 px-4" rows="3" placeholder="Special Request" required="required"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-secondary p-5 mb-5">
                        <h2 class="text-primary mb-4">Payment</h2>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Direct Check</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary py-3">Reserve Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Car Booking End -->

    </html>
@endsection

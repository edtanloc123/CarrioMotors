@extends('layout.user')
@section('content')
    <script src="{{ asset('user/js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('user/css/style3.css') }}">
    <!-- Page Header Start -->
    <script>
        $(document).ready(function() {
            // $('#photo').click(function() {
            //     // alert('hello');
            //     var src = $(this).attr('src');
            //     console.log('src '+ src);
            //     var width = $(this).attr('width');
            //     console.log('width '+width);
            //     var height = $(this).attr('height');
            //     console.log('height '+ height);
            // });


            $('.thumb').click(function() {
                var src = $(this).attr('src');
                $('#bigPhoto').attr('src', src);
                console.log(src);
            });
        });
    </script>
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Detail</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Detail</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div id="detailsne" class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <h1 class="display-4 text-uppercase mb-5">{{ $oto->name }}</h1>
                    <div class="row mx-n2 mb-3">
                        <img id="bigPhoto" class="img-fluid w-100" src="{{ asset('user') }}/images/{{ $oto->photo }}"
                            alt="">
                    </div>
                    <div class="row mx-n2 mb-3">
                        @foreach ($photo as $photo)
                            <div class="col-md-3 col-6 px-2 pb-2">
                                <img class="img-fluid w-100 thumb" src="{{ asset('user') }}/images/{{ $photo->name }}"
                                    alt="">
                            </div>
                        @endforeach
                    </div>

                    <div class="row pt-2">
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


                    <div class="row pt-2" id="commentne">
                        <div class="container mt-5 mb-5">
                            <div class="d-flex justify-content-center row">
                                <div class="d-flex flex-column col-md-8">
                                    <div
                                        class="d-flex flex-row align-items-center text-left comment-top p-2 bg-white border-bottom px-4">
                                        <div class="profile-image"><img class="rounded-circle"
                                                src="https://i.imgur.com/t9toMAQ.jpg" width="70"></div>
                                        <div class="d-flex flex-column-reverse flex-grow-0 align-items-center votings ml-1">
                                            <i class="fa fa-sort-up fa-2x hit-voting"></i><span>127</span><i
                                                class="fa fa-sort-down fa-2x hit-voting"></i>
                                        </div>
                                        <div class="d-flex flex-column ml-3">
                                            <div class="d-flex flex-row post-title">
                                                <h5>Is sketch 3.9.1 stable?</h5><span class="ml-2">(Jesshead)</span>
                                            </div>
                                            <div class="d-flex flex-row align-items-center align-content-center post-title">
                                                <span class="bdge mr-1">video</span><span class="mr-2 comments">13
                                                    comments&nbsp;</span><span class="mr-2 dot"></span><span>6 hours
                                                    ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="coment-bottom bg-white p-2 px-4">
                                        <form action="{{ url('details/comment#commentne/') }}" method="post">
                                            @csrf
                                            <div class="d-flex flex-row add-comment-section mt-4 mb-4"><img
                                                    class="img-fluid img-responsive rounded-circle mr-2"
                                                    src="https://i.imgur.com/qdiP4DB.jpg" width="38"><input
                                                    type="text" class="form-control mr-3" id="textComment" name="content"
                                                    placeholder="Add comment">
                                                <input type="hidden" name="otoid" value="{{ $oto->id }}">
                                                <button class="btn btn-primary" type="submit"
                                                    id="buttonComment">Comment</button>
                                            </div>
                                        </form>
                                        @foreach ($comments as $comment)
                                            <div class="commented-section mt-2">
                                                <div class="d-flex flex-row align-items-center commented-user">
                                                    <h5 class="mr-2" id="nameID"></h5><span id="dotID"></span><span
                                                        class="mb-1 ml-2" id="secondID"></span>
                                                </div>
                                                <div class="comment-text-sm"><span
                                                        id="commentID">{{ $comment->content }}</span></div>
                                                <div class="reply-section">
                                                    <div class="d-flex flex-row align-items-center voting-icons"><i
                                                            class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i
                                                            class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span
                                                            class="ml-2">10</span><span class="dot ml-2"></span>
                                                        <h6 class="ml-2 mt-1">Reply</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- <div class="commented-section mt-2">
                                                    <div class="d-flex flex-row align-items-center commented-user">
                                                        <h5 class="mr-2">Samoya Johns</h5><span class="dot mb-1"></span><span class="mb-1 ml-2">5 hours ago</span>
                                                    </div>
                                                    <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</span></div>
                                                    <div class="reply-section">
                                                        <div class="d-flex flex-row align-items-center voting-icons"><i class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span class="ml-2">15</span><span class="dot ml-2"></span>
                                                            <h6 class="ml-2 mt-1">Reply</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="commented-section mt-2">
                                                    <div class="d-flex flex-row align-items-center commented-user">
                                                        <h5 class="mr-2">Makhaya andrew</h5><span class="dot mb-1"></span><span class="mb-1 ml-2">10 hours ago</span>
                                                    </div>
                                                    <div class="comment-text-sm"><span>Nunc sed id semper risus in hendrerit gravida rutrum. Non odio euismod lacinia at quis risus sed. Commodo ullamcorper a lacus vestibulum sed arcu non odio euismod. Enim facilisis gravida neque convallis a. In mollis nunc sed id. Adipiscing elit pellentesque habitant morbi tristique senectus et netus. Ultrices mi tempus imperdiet nulla malesuada pellentesque.</span></div>
                                                    <div class="reply-section">
                                                        <div class="d-flex flex-row align-items-center voting-icons"><i class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span class="ml-2">25</span><span class="dot ml-2"></span>
                                                            <h6 class="ml-2 mt-1">Reply</h6>
                                                        </div>
                                                    </div>
                                                </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Related Car Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <h2 class="mb-4">Related Cars</h2>
            <div class="owl-carousel related-carousel position-relative" style="padding: 0 30px;">
                @foreach ($otoname as $otoname)
                    <div class="rent-item">
                        <a href="{{ url('/details/index/' . $otoname->id . '#detailsne') }}"> <img class="img-fluid mb-4"
                                src="{{ asset('user') }}/images/{{ $otoname->photo }}" alt=""> </a>
                        <h4 class="text-uppercase mb-4">{{ $otoname->name }}</h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span>2015</span>
                            </div>
                            <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                                <span>AUTO</span>
                            </div>
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <span>25K</span>
                            </div>
                        </div>
                        <a class="btn btn-primary px-3" href="{{ url('/details/index/' . $otoname->id.'#detailsne') }}">DETAILS</a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Related Car End -->
@endsection

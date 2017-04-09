@extends('glayouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Detail</li>
        </ol>

        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section class="page-title">
                    <div class="pull-left">
                        <h1>{{$item['title']}}</h1>
                        <h3>{{$item['location']}}</h3>
                        <div class="rating-passive" data-rating="4">
                            <span class="stars"></span>
                            <span class="reviews">6</span>
                        </div>
                    </div>
                    <!--end page-title-->
                    <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Write a review</a>
                </section>

                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <section>
                            <div class="gallery detail">
                                <div class="owl-carousel" data-owl-nav="0" data-owl-dots="1">
                                    @foreach($item->gallery as $picture)
                                        <div class="image">
                                            <div class="bg-transfer"><img src="{{url('/').$picture->image}}" alt=""></div>
                                        </div>
                                    @endforeach
                                </div>
                                <!--end owl-carousel-->
                            </div>
                            <!--end gallery-->
                        </section>

                        <section>
                            <section>
                                <h2>About this listing</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt
                                    massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit
                                    enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique
                                    ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant
                                    morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                </p>
                                <p>
                                    In ut varius magna. Integer ullamcorper tincidunt molestie. Morbi consequat sem non nulla laoreet,
                                    non commodo tellus elementum. Sed tincidunt, lorem vitae rhoncus pharetra, diam ex pharetra erat, eu
                                    lacinia mi libero vitae lectus. Nullam cursus bibendum magna ut elementum. Fusce eget mauris in erat
                                    gravida pretium sed eget massa.
                                    gravida pretium sed eget massa.
                                </p>
                            </section>
                        </section>

                        <!--<section class="box">
                            <h2>Opening Hours</h2>
                            <dl>
                                <dt>Monday</dt>
                                <dd>08:00am - 11:00pm</dd>
                                <dt>Tuesday</dt>
                                <dd>08:00am - 11:00pm</dd>
                                <dt>Wednesday</dt>
                                <dd>12:00am - 11:00pm</dd>
                                <dt>Thursday</dt>
                                <dd>08:00am - 11:00pm</dd>
                                <dt>Friday</dt>
                                <dd>03:00pm - 02:00am</dd>
                                <dt>Saturday</dt>
                                <dd>03:00pm - 02:00am</dd>
                                <dt>Sunday</dt>
                                <dd>Closed</dd>
                            </dl>
                        </section>-->


                        {{--@include('detail.reviews')--}}

                        {{--@include('detail.review-form')--}}
                    </div>
                    <!--end col-md-6-->
                    <div class="col-md-4 col-sm-12">
                        <section>
                            <div class="detail-sidebar">
                                <section class="shadow">
                                    <div class="map height-250px" id="map-detail"></div>
                                    <!--end map-->
                                    <div class="content">
                                        <div class="vertical-aligned-elements">
                                            <div class="element"><img src="{{url('/')}}/assets/img/logo-2.png" alt=""></div>
                                            <div class="element text-align-right"><a href="#" class="btn btn-primary btn-rounded btn-xs">Claim</a></div>
                                        </div>
                                        <hr>
                                        <address>
                                            <figure><i class="fa fa-map-marker"></i>3858 Marion Street<br>Morrisville, VT 05661 </figure>
                                            <figure><i class="fa fa-envelope"></i><a href="#">email@example.com</a></figure>
                                            <figure><i class="fa fa-phone"></i>316-436-8619</figure>
                                            <figure><i class="fa fa-globe"></i><a href="#">www.markysrestaurant.com</a></figure>
                                        </address>
                                    </div>
                                </section>
                            </div>
                            <!--end detail-sidebar-->
                        </section>
                        {{--@include('detail.detail-sidebar')--}}
                        <section>
                            <h2>Features</h2>
                            <ul class="tags">
                                <li>Wi-Fi</li>
                                <li>Parking</li>
                                <li>TV</li>
                                <li>Alcohol</li>
                                <li>Vegetarian</li>
                                <li>Take-out</li>
                                <li>Balcony</li>
                            </ul>
                        </section>
                        <section>
                            <h2>Social Share</h2>
                            <div class="social-share"></div>
                        </section>
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end col-md-9-->

            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">
                    @include('listing.search')
                    @include('listing.recent')
                </aside>
                <!--end sidebar-->
            </div>
            <!--end col-md-3-->
        </div>
    </div>
    <!--end container-->
@endsection


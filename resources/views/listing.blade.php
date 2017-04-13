@extends('glayouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Listing</li>
        </ol>
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section class="page-title">
                    <h1>Listing</h1>
                </section>
                <!--end section-title-->

                <section>
                    <div class="search-results-controls clearfix">
                    {{--<div class="pull-left">
                        <a href="" class="circle-icon active"><i class="fa fa-th"></i></a>
                        <a href="" class="circle-icon"><i class="fa fa-bars"></i></a>
                    </div>
                    <!--end left-->
                    <div class="pull-right">
                        <div class="input-group inputs-underline min-width-150px">
                            <select class="form-control selectpicker" name="sort">
                                <option value="">Sort by</option>
                                <option value="1">Price</option>
                                <option value="2">Distance</option>
                                <option value="3">Title</option>
                            </select>
                        </div>
                    </div>--}}
                        <!--end right-->
                    </div>
                    <!--end search-results-controls-->
                </section>

                <section>
                    <div class="row">
                        @foreach( $data as $item)
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="1">
                                <a href="detail/{{$item['id']}}">
                                    <div class="description">
                                        <figure>{{$item['additional_info']}}</figure>
                                        <div class="label label-default">{{$item['category']}}</div>
                                        <h3>{{$item['title']}}</h3>
                                        <h4>{{$item['location']}}</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/1.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="{{$item['rating']}}">
                                        <span class="stars"></span>
                                        <span class="reviews">6</span>
                                    </div>
                                    <div class="controls-more">
                                        <ul>
                                            <li><a href="#">Add to favorites</a></li>
                                            <li><a href="#">Add to watchlist</a></li>
                                            <li><a href="#" class="quick-detail">Quick detail</a></li>
                                        </ul>
                                    </div>
                                    <!--end controls-more-->
                                </div>
                                <!--end additional-info-->
                            </div>
                            <!--end item-->
                        </div>
                        <!--<end col-md-3-->
                    @endforeach

                    </div>
                    <!--end row-->
                </section>

                <section>
                    @include('listing.nav')
                </section>
            </div>
            <!--end col-md-9-->

            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">
                    @include('listing.search')
                    @include('listing.recent')
                </aside>
                <!--end sidebar-->
            </div>
            <!--end col-md-4-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
@endsection


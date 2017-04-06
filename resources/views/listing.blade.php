@extends('glayouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Contact</li>
        </ol>
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section class="page-title">
                    <h1>Grid Listing</h1>
                </section>
                <!--end section-title-->

                <section>
                    <div class="search-results-controls clearfix">
                        <div class="pull-left">
                            <a href="listing-grid-right-sidebar.html" class="circle-icon active"><i class="fa fa-th"></i></a>
                            <a href="listing-row-right-sidebar.html" class="circle-icon"><i class="fa fa-bars"></i></a>
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
                        </div>
                        <!--end right-->
                    </div>
                    <!--end search-results-controls-->
                </section>

                <section>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="1">
                                <a href="detail.html">
                                    <div class="description">
                                        <figure>Average Price: $8 - $30</figure>
                                        <div class="label label-default">Restaurant</div>
                                        <h3>Marky’s Restaurant</h3>
                                        <h4>63 Birch Street</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/1.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="4">
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
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="2">
                                <a href="detail.html">
                                    <div class="description">
                                        <div class="label label-default">Restaurant</div>
                                        <h3>Ironapple</h3>
                                        <h4>4209 Glenview Drive</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/2.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="3">
                                        <span class="stars"></span>
                                        <span class="reviews">13</span>
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
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="15">
                                <figure class="ribbon">Top</figure>
                                <a href="detail.html">
                                    <div class="description">
                                        <figure>Happy hour: 18:00 - 19:00</figure>
                                        <div class="label label-default">Bar & Grill</div>
                                        <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                        <h4>3857 Losh Lane</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/3.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                    <div class="rating-passive" data-rating="5">
                                        <span class="stars"></span>
                                        <span class="reviews">56</span>
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
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="3">
                                <figure class="ribbon">Top</figure>
                                <a href="detail.html">
                                    <div class="description">
                                        <figure>Starts at: 19:00</figure>
                                        <div class="label label-default">Event</div>
                                        <h3>Food Festival</h3>
                                        <h4>840 My Drive</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/4.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                    <div class="rating-passive" data-rating="5">
                                        <span class="stars"></span>
                                        <span class="reviews">12</span>
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
                        <!--<end col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="4">
                                <a href="detail.html">
                                    <div class="description">
                                        <div class="label label-default">Lounge</div>
                                        <h3>Cosmopolit</h3>
                                        <h4>2896 Ripple Street</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/5.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="5">
                                        <span class="stars"></span>
                                        <span class="reviews">43</span>
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
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="6">
                                <a href="detail.html">
                                    <div class="description">
                                        <figure>Free entry</figure>
                                        <div class="label label-default">Concert</div>
                                        <h3>Stand Up Show</h3>
                                        <h4>371 Kinney Street</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/6.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="0">
                                        <span class="stars"></span>
                                        <span class="reviews">0</span>
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

                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="5">
                                <a href="detail.html">
                                    <div class="description">
                                        <div class="label label-default">Real Estate</div>
                                        <h3>Beautiful Luxury Villa</h3>
                                        <h4>3284 Hillside Street</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/28.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="4">
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
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="6">
                                <a href="detail.html">
                                    <div class="description">
                                        <div class="label label-default">Event</div>
                                        <h3>Stand Up Show</h3>
                                        <h4>534 Sycamore Road</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/6.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="3">
                                        <span class="stars"></span>
                                        <span class="reviews">13</span>
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
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="7">
                                <a href="detail.html">
                                    <div class="description">
                                        <div class="label label-default">Event</div>
                                        <h3>University Day</h3>
                                        <h4>Central Town University</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/12.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                    <div class="rating-passive" data-rating="5">
                                        <span class="stars"></span>
                                        <span class="reviews">56</span>
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
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="9">
                                <a href="detail.html">
                                    <div class="description">
                                        <div class="label label-default">Adrenaline</div>
                                        <h3>High Mountain Trip</h3>
                                        <h4>East Alps</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/13.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                    <div class="rating-passive" data-rating="5">
                                        <span class="stars"></span>
                                        <span class="reviews">12</span>
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
                        <!--<end col-md-4-->
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="10">
                                <a href="detail.html">
                                    <div class="description">
                                        <div class="label label-default">Car</div>
                                        <h3>Hyundai i30</h3>
                                        <h4>580 Briarhill Lane</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/29.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="5">
                                        <span class="stars"></span>
                                        <span class="reviews">43</span>
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
                        <div class="col-md-4 col-sm-4">
                            <div class="item" data-id="11">
                                <a href="detail.html">
                                    <div class="description">
                                        <div class="label label-default">Relax</div>
                                        <h3>Thai Massage</h3>
                                        <h4>1360 Meadowbrook Mall Road</h4>
                                    </div>
                                    <!--end description-->
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/15.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                </a>
                                <div class="additional-info">
                                    <div class="rating-passive" data-rating="0">
                                        <span class="stars"></span>
                                        <span class="reviews">0</span>
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

                    </div>
                    <!--end row-->
                </section>

                <section>
                    <div class="center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="disabled previous">
                                    <a href="#" aria-label="Previous">
                                        <i class="arrow_left"></i>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li class="next">
                                    <a href="#" aria-label="Next">
                                        <i class="arrow_right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>
            </div>
            <!--end col-md-9-->

            <div class="col-md-3 col-sm-3">
                <aside class="sidebar">
                    <section>
                        <h2>Search Filter</h2>
                        <form class="form inputs-underline">
                            <div class="form-group">
                                <input type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <select class="form-control selectpicker" name="location">
                                    <option value="">Location</option>
                                    <option value="1">New York</option>
                                    <option value="2">Washington</option>
                                    <option value="3">London</option>
                                    <option value="4">Paris</option>
                                </select>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <select class="form-control selectpicker" name="category">
                                    <option value="">Category</option>
                                    <option value="1">Restaurant</option>
                                    <option value="2">Event</option>
                                    <option value="3">Adrenaline</option>
                                    <option value="4">Sport</option>
                                    <option value="5">Wellness</option>
                                </select>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <input type="text" class="form-control date-picker" name="min-price" placeholder="Event Date">
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <div class="ui-slider" id="price-slider" data-value-min="10" data-value-max="400" data-value-type="price" data-currency="$" data-currency-placement="before">
                                    <div class="values clearfix">
                                        <input class="value-min" name="value-min[]" readonly>
                                        <input class="value-max" name="value-max[]" readonly>
                                    </div>
                                    <div class="element"></div>
                                </div>
                                <!--end price-slider-->
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Search Now<i class="fa fa-search"></i></button>
                            </div>
                            <!--end form-group-->
                        </form>
                    </section>
                    <section>
                        <h2>Recent Items</h2>
                        <div class="item" data-id="1">
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Average Price: $8 - $30</figure>
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Marky’s Restaurant</h3>
                                    <h4>63 Birch Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/1.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--end item-->
                        <div class="item" data-id="2">
                            <a href="detail.html">
                                <div class="description">
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Ironapple</h3>
                                    <h4>4209 Glenview Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/2.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end item-->
                        <div class="item" data-id="15">
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Happy hour: 18:00 - 19:00</figure>
                                    <div class="label label-default">Bar & Grill</div>
                                    <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                    <h4>3857 Losh Lane</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/3.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Add to watchlist</a></li>
                                    <li><a href="#" class="quick-detail">Quick detail</a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end item-->
                    </section>
                </aside>
                <!--end sidebar-->
            </div>
            <!--end col-md-4-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
@endsection


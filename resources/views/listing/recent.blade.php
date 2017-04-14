<section>
    <h2>Recent Items</h2>
    @foreach( $recent as $item)
        <div class="item" data-id="{{$item['id']}}">
            <a href="/detail/{{$item['id']}}">
                <div class="description">
                    <figure>{{$item['additional_info']}}</figure>
                    <div class="label label-default">{{$item['category']}}</div>
                    <h3>{{$item['title']}}</h3>
                    <h4>{{$item['location']}}</h4>
                </div>
                <!--end description-->
                <div class="image bg-transfer">
                    <img src="{{url('/').'/'.$item->gallery->first()['image']}}" alt="">
                </div>
                <!--end image-->
            </a>
            <div class="controls-more">
                <ul>
                    <li><a href="#">Add to favorites</a></li>
                    <li><a href="#">Add to watchlist</a></li>
                    <li><a href="detail" class="quick-detail">Quick detail</a></li>
                </ul>
            </div>
        </div>
        <!--end item-->
    @endforeach

</section>
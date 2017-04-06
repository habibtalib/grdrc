<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\Gallery;
use App\Reviews;
use Illuminate\Queue\RedisQueue;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main');
    }

    public function data(Request $request)
    {

        if (isset($request['optimized_loading'])) {
            return Items::where('latitude', '<=', $request['north_east_lat'])
                ->where('latitude', '=>', $request['south_west_lat'])
                ->where('longitude', '<=', $request['north_east_lng'])
                ->where('longitude', '=>', $request['south_west_lng'])->get();
        } else {
            return Items::all();
        }
    }

    public function customizer()
    {
        $default_color = "";
        $path_to_css_file = 'assets/css/style.css';
        $file_contents = file_get_contents($path_to_css_file);

        if( $_POST['action'] == "load_default_color" ){
            $this->getLineWithString($path_to_css_file, "default_color");
        }

        if( !empty( $_POST['action'] ) == "change_color" && !empty( $_POST['new_color'] ) && !empty( $_POST['default_color'] ) ){
            $file_contents = str_replace( $_POST['default_color'], $_POST['new_color'] , $file_contents );
            file_put_contents( $path_to_css_file, $file_contents );
            echo $_POST['new_color'];
        }
    }

    function getLineWithString($fileName, $str) {
        $lines = file($fileName);
        foreach ($lines as $lineNumber => $line) {
            if (strpos($line, $str) !== false) {
                preg_match_all("/\[([^\]]*)\]/", $line, $color);
                $default_color = $color[1][0];
                echo $default_color;
            }
        }
        return -1;
    }

    public function sidebar_result(Request $request){
        $data = [];
        $gallery = [];
        $reviewsNumber = [];

        if( !empty( $request['markers'] ) ){

            for( $i=0; $i < count($request['markers']); $i++){
                //$queryData = mysqli_query( $connection, "SELECT * FROM items WHERE id = " . $request['markers'][$i] );
                //array_push( $data, mysqli_fetch_assoc( $queryData ) );
                $data = Items::where('id', $request['markers'][$i])->get();

                // gallery
                //$queryGallery = mysqli_query( $connection, "SELECT image FROM gallery WHERE item_id = " . $request['markers'][$i] );
                //array_push( $gallery, mysqli_fetch_assoc( $queryGallery ) );
                $gallery = Gallery::where('item_id' , $request['markers'][$i])->get();

                // reviews
                //$queryReviews = mysqli_query( $connection, "SELECT rating FROM reviews WHERE item_id = " . $request['markers'][$i] );
                //$reviews = mysqli_fetch_all( $queryReviews, MYSQLI_ASSOC );
                //array_push( $reviewsNumber, count($reviews ) );
                $reviewsNumber = Reviews::where('item_id' , $request['markers'][$i])->get();
            }

        }

// End of example ------------------------------------------------------------------------------------------------------

        if( !empty($_POST['markers']) ){

            for( $i=0; $i < count($data); $i++){
                for( $e=0; $e < count($_POST['markers']); $e++){
                    if( $data[$i]['id'] == $_POST['markers'][$e] ){
                        echo
                            '<div class="result-item" data-id="'. $data[$i]['id'] .'">';

                        // Ribbon ------------------------------------------------------------------------------------------

                        if( !empty($data[$i]['ribbon']) ){
                            echo
                                '<figure class="ribbon">'. $data[$i]['ribbon'] .'</figure>';
                        }

                        echo
                            '<a href="'. $data[$i]['url'] .'">';

                        // Title -------------------------------------------------------------------------------------------

                        if( !empty($data[$i]['title']) ){
                            echo
                                '<h3>'. $data[$i]['title'] .'</h3>';
                        }

                        echo
                        '<div class="result-item-detail">';

                        // Image thumbnail -------------------------------------------------------------------------

                        if( !empty($gallery[$i]["image"]) ){
                            echo
                                '<div class="image" style="background-image: url('. $gallery[$i]["image"] .')">';
                            if( !empty($data[$i]['additional_info']) ){
                                echo
                                    '<figure>'. $data[$i]['additional_info'] .'</figure>';
                            }

                            // Price ---------------------------------------------------------------------------

                            if( !empty($data[$i]['price']) ){
                                echo
                                    '<div class="price">'. $data[$i]['price'] .'</div>';
                            }
                            echo
                            '</div>';
                        }
                        else {
                            echo
                            '<div class="image" style="background-image: url(assets/img/items/default.png)">';
                            if( !empty($data[$i]['additional_info']) ){
                                echo
                                    '<figure>'. $data[$i]['additional_info'] .'</figure>';
                            }

                            // Price ---------------------------------------------------------------------------

                            if( !empty($data[$i]['price']) ){
                                echo
                                    '<figure class="price">'. $data[$i]['price'] .'</figure>';
                            }
                            echo
                            '</div>';
                        }

                        echo
                        '<div class="description">';
                        if( !empty($data[$i]['location']) ){
                            echo
                                '<h5><i class="fa fa-map-marker"></i>'. $data[$i]['location'] .'</h5>';
                        }

                        // Rating ------------------------------------------------------------------------------

                        if( !empty($data[$i]['rating']) ){
                            echo
                                '<div class="rating-passive"data-rating="'. $data[$i]['rating'] .'">
                                            <span class="stars"></span>
                                            <span class="reviews"></span>
                                        </div>';
                        }

                        // Category ----------------------------------------------------------------------------

                        if( !empty($data[$i]['category']) ){
                            echo
                                '<div class="label label-default">'. $data[$i]['category'] .'</div>';
                        }

                        // Description -------------------------------------------------------------------------

                        if( !empty($data[$i]['description']) ){
                            echo
                                '<p>'. $data[$i]['description'] .'</p>';
                        }
                        echo
                        '</div>
                        </div>
                    </a>
                    <div class="controls-more">
                        <ul>
                            <li><a href="#" class="add-to-favorites">Add to favorites</a></li>
                            <li><a href="#" class="add-to-watchlist">Add to watchlist</a></li>
                        </ul>
                    </div>
                </div>';

                    }
                }
            }

        }
    }

    public function infoBox(Request $request){
        $currentLocation = "";
        $reviewsNumber = [];

        // Select all data from "items"
        //$queryData = mysqli_query( $connection, "SELECT * FROM items WHERE id = " . $_POST['id'] );
        //$data = mysqli_fetch_all( $queryData, MYSQLI_ASSOC );
        $data = Items::where('id', $request['id'])->get();

        // Select all data from "gallery"
        //$queryGallery = mysqli_query( $connection, "SELECT image FROM gallery WHERE item_id = " . $_POST['id'] );
        //$gallery = mysqli_fetch_all( $queryGallery, MYSQLI_ASSOC );
        $gallery = Gallery::where('item_id' , $request['id'])->get();

        // Select all data from "reviews"
        //$queryReviews = mysqli_query( $connection, "SELECT * FROM reviews WHERE item_id = " . $_POST['id'] );
        //$reviews = mysqli_fetch_all( $queryReviews, MYSQLI_ASSOC );
        //array_push( $reviewsNumber, count($reviews ) );
        $reviews = Reviews::where('item_id' , $request['id'])->get();
        $reviewsNumber = Reviews::where('item_id' , $request['id'])->count();

                $currentLocation = $data[0];

                /*

                for( $i=0; $i < count($data); $i++){
                    if( $data[$i]['id'] == $_POST['id'] ){
                        $currentLocation = $data[$i]; // Loaded data must be stored in the "$currentLocation" variable
                    }
                }
                */

        // End of example //////////////////////////////////////////////////////////////////////////////////////////////////////

        // Infobox HTML code

                echo
                    '<div class="item infobox" data-id="'. $currentLocation['id'] .'">
            <a href="'. $currentLocation['url'] .'">
                <div class="description">';

                // Category ------------------------------------------------------------------------------------------------

                if( !empty($currentLocation['category']) ){
                    echo
                        '<div class="label label-default">'. $currentLocation['category'] .'</div>';
                }

                // Title ---------------------------------------------------------------------------------------------------

                if( !empty($currentLocation['title']) ){
                    echo
                        '<h3>'. $currentLocation['title'] .'</h3>';
                }

                // Location ------------------------------------------------------------------------------------------------

                if( !empty($currentLocation['location']) ){
                    echo
                        '<h4>'. $currentLocation['location'] .'</h4>';
                }
                echo

                '</div>
                <!--end description-->';

                // Image thumbnail -------------------------------------------------------------------------

                if( !empty($gallery[0]["image"]) ){
                    echo
                        '<div class="image" style="background-image: url('. $gallery[0]["image"] .')"></div>';
                }
                else {
                    echo
                    '<div class="image" style="background-image: url(assets/img/items/default.png)"></div>';
                }

                echo
                '<!--end image-->
            </a>';
                if( !empty( $currentLocation['rating'] ) ){
                    echo
                    '<div class="rating-passive">';
                    for($i=0; $i < 5; $i++){
                        if( $i < $currentLocation['rating'] ){
                            echo '<span class="stars"><figure class="active fa fa-star"></figure></span>';
                        }
                        else {
                            echo '<span class="stars"><figure class="fa fa-star"></figure></span>';
                        }
                    }
                    echo
                        '<span class="reviews">'. count($reviews) .'</span>
            </div>';
                }
                echo
                '<div class="controls-more">
                <ul>
                    <li><a href="#">Add to favorites</a></li>
                    <li><a href="#">Add to watchlist</a></li>
                </ul>
            </div>
            <!--end controls-more-->
        
        </div>
        <!--end item-->';


    }

    public function search(Request $request) {
        //dd($request->all());
        return view('listing');
    }

    public function detail(Request $request) {
        //dd($request->all());
        return view('detail');
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function aboutUs(){
        return view('about-us');
    }


}

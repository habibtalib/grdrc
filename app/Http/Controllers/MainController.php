<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

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

    public function data()
    {
        return Items::all();
    }

    public function customizer()
    {
        $default_color = "";
        $path_to_css_file = '../css/temporary-style.css';
        $file_contents = file_get_contents($path_to_css_file);

        if( $_POST['action'] == "load_default_color" ){
            getLineWithString($path_to_css_file, "default_color");
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

    public function sidebar_result(){
        $data = $this->data();
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

                        if( !empty($data[$i]['gallery'][0]) ){
                            echo
                                '<div class="image" style="background-image: url('. $data[$i]['gallery'][0] .')">';
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
                                            <span class="reviews">'. $data[$i]['reviews_number'] .'</span>
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

    public function infoBox(){

        $currentLocation = "";

        // ---------------------------------------------------------------------------------------------------------------------
        // Here comes your script for loading from the database.
        // ---------------------------------------------------------------------------------------------------------------------

        // Remove this example in your live site and replace it with a connection to database //////////////////////////////////

        $data = $this->data();

        for( $i=0; $i < count($data); $i++){
            if( $data[$i]['id'] == $_GET['id'] ){
                $currentLocation = $data[$i]; // Loaded data must be stored in the "$currentLocation" variable
            }
        }

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

        if( !empty($currentLocation['gallery'][0]) ){
            echo
                '<div class="image" style="background-image: url('. $currentLocation['gallery'][0] .')"></div>';
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
                        '<span class="reviews">'. $currentLocation['reviews_number'] .'</span>
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


}

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
        $recent = Items::get();
        return view('main',compact('recent'));
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

    public function customizer(Request $request)
    {
        $path_to_css_file = 'assets/css/style.css';
        $file_contents = file_get_contents($path_to_css_file);

        if( $request['action'] == "load_default_color" ){
            $this->getLineWithString($path_to_css_file, "default_color");
        }

        if( !empty( $request['action'] ) == "change_color" && !empty( $request['new_color'] ) && !empty( $request['default_color'] ) ){
            $file_contents = str_replace( $request['default_color'], $request['new_color'] , $file_contents );
            file_put_contents( $path_to_css_file, $file_contents );
            echo $request['new_color'];
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

            for( $i=0; $i < count($request['markers']); $i++){;
                $data = Items::where('id', $request['markers'][$i])->get();

                // gallery
                $gallery = Gallery::where('items_id' , $request['markers'][$i])->get();

                // reviews
                $reviewsNumber = Reviews::where('item_id' , $request['markers'][$i])->get();
            }

        }

        return view('sideBarResult',compact('data','request','gallery','reviewsNumber'));

    }

    public function sidebar_detail(Request $request){

        $data = Items::where('id', $request['id'])->get();

        // Select all data from "gallery"s
        $gallery = Gallery::where('items_id' , $request['id'])->get();

        // Select all data from "reviews"s
        $reviews = Reviews::where('item_id' , $request['id'])->get();

        $currentLocation = $data[0];
        return view('sideBarDetail',compact('currentLocation','reviews', 'gallery'));

    }

    public function infoBox(Request $request){

        $data = Items::where('id', $request['id'])->get();

        // Select all data from "gallery"s
        $gallery = Gallery::where('items_id' , $request['id'])->get();

        // Select all data from "reviews"s
        $reviews = Reviews::where('item_id' , $request['id'])->get();

        $currentLocation = $data[0];

        return view('infoBox',compact('currentLocation','reviews', 'gallery'));


    }

    public function listing(Request $request) {
        //dd($request->all());
        if(isset($request['_token'])) {
            //dd($request->all());
            $data = Items::where('title', 'like', '%'. $request['keyword'] . '%')
                ->where('category', 'like', '%'. $request['category'] . '%')
                ->where('location', 'like', '%'. $request['location'] . '%')
                ->paginate(10);

        } else {
            $data = Items::paginate(10);
        }

        $recent = Items::get();

        return view('listing',compact('data','recent', 'request'));
    }

    public function detail(Items $item) {
        //dd($request->all());
        $recent = Items::get();
        $request = Request();
        return view('detail.show', compact('recent','item', 'request'));
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function aboutUs(){
        return view('about-us');
    }

    public function submit(){
        Items::create(request()->all());
        return redirect('/');
    }

    public function update($id){

        $request = request();
        $item = Items::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'address' => 'required'
        ]);

        $input = $request->all();

        $item->fill($input)->save();

        return redirect('/detail/'.$id);
    }


    public function edit(Items $item){
        return view('edit', compact('item'));
    }

}

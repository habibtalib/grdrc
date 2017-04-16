@extends('glayouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="\listing">Listing</a></li>
            <li class="active">Create</li>
        </ol>
        <!--end breadcrumb-->
        <section class="page-title center">
            <h1>New Listing</h1>
        </section>
        <!--end page-title-->
        <section>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    @include('layouts.errors')
                    <form class="form inputs-underline" enctype="multipart/form-data" action="\submit" method="POST">
                        {{csrf_field()}}
                        <section>
                            <h3>About</h3>
                            <div class="row">
                                <div class="col-md-9 col-sm-9">
                                    <div class="form-group">
                                        <label for="title">Listing Title</label>
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" >
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-9-->
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control selectpicker" name="category" id="category">
                                            <option value="Billboard" >Billboard</option>
                                            <option value="Digital Billboard" >Digital Billboard</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--col-md-3-->
                            </div>
                            <!--end row-->
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                            </div>
                            <!--end form-group-->
                        </section>
                        <section>
                            <h3>Contact</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="address-autocomplete">Address</label>
                                        <input type="text" class="form-control" name="address" id="address-autocomplete" value="">
                                    </div>
                                    <!--end form-group-->
                                    <div class="map height-200px shadow" id="map-submit"></div>
                                    <!--end map-->
                                    <div class="form-group hidden">
                                        <input type="text" class="form-control" id="latitude" name="latitude" hidden="">
                                        <input type="text" class="form-control" id="longitude" name="longitude" hidden="">
                                    </div>
                                    <p class="note">Enter the exact address or drag the map marker to position</p>
                                </div>
                                <!--end col-md-6-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="region">Listing Location</label>
                                        <select class="form-control selectpicker" name="location" id="location">
                                            <option value="Kuala Lumpur" >Kuala Lumpur</option>
                                            <option value="Selangor" >Selangor</option>
                                            <option value="Melaka" >Melaka</option>
                                            <option value="Johor" >Johor</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="phone">Price </label>
                                        <input type="text" class="form-control" name="phone" id="phone" value="">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="email">Dimension </label>
                                        <input type="text" class="form-control" name="email" id="email" value="">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-6-->
                            </div>
                        </section>
                        <section>
                            <h3>Gallery</h3>
                            <div class="file-upload-previews"></div>
                            <div class="file-upload">
                                <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                                <span>Click or drag images here</span>
                            </div>
                        </section>
                        <hr>
                        <section class="center">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-rounded">Submit Listing</button>
                            </div>
                            <!--end form-group-->
                        </section>
                    </form>
                    <!--end form-->
                </div>
                <!--end col-md-6-->
            </div>
            <!--end row-->
        </section>
    </div>
    <!--end container-->

@endsection

@section('script')
    <script>
        var _latitude = '3.15910600';
        var _longitude = '101.89345200';
        var element = "map-submit";
        simpleMap(_latitude,_longitude, element, true);
    </script>
@endsection
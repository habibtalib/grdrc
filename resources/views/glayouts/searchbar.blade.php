<section class="block background-is-dark">
    <div class="form search-form">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <select class="form-control selectpicker" name="city">
                                <option value="">Location</option>
                                <option value="1">New York</option>
                                <option value="2">Washington</option>
                                <option value="3">London</option>
                                <option value="4">Paris</option>
                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <select class="form-control selectpicker" name="category">
                                <option value="">Category</option>
                                <option value="restaurant">Restaurant</option>
                                <option value="car rental">Car Rental</option>
                                <option value="relax">Relax</option>
                                <option value="sport">Sport</option>
                                <option value="wellness">Wellness</option>
                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-2 col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control date-picker" name="min-price" placeholder="Event Date">
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-1 col-sm-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary width-100"><i class="fa fa-search"></i></button>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <ul class="checkboxes">
                            <li>
                                <div class="form-group">
                                    <label class="no-margin"><input type="checkbox" name="1">Hotel</label>
                                </div>
                                <!--end form-group-->
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="no-margin"><input type="checkbox" name="2">Event</label>
                                </div>
                                <!--end form-group-->
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="no-margin"><input type="checkbox" name="3">Restaurant</label>
                                </div>
                                <!--end form-group-->
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="no-margin"><input type="checkbox" name="4">Trip</label>
                                </div>
                                <!--end form-group-->
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="no-margin"><input type="checkbox" name="5">Concert</label>
                                </div>
                                <!--end form-group-->
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="no-margin"><input type="checkbox" name="6">Adrenaline</label>
                                </div>
                                <!--end form-group-->
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="no-margin"><input type="checkbox" name="6">Wellness</label>
                                </div>
                                <!--end form-group-->
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <div class="ui-slider" id="price-slider" data-value-min="10" data-value-max="400" data-value-type="price" data-currency="$" data-currency-placement="before">
                            <div class="values clearfix">
                                <input class="value-min" name="value-min[]" readonly>
                                <input class="value-max" name="value-max[]" readonly>
                            </div>
                            <div class="element"></div>
                        </div>
                        <!--end price-slider-->
                    </div>
                </div>
            </form>
            <!--end form-hero-->
        </div>
        <!--end container-->
    </div>
    <!--end search-form-->
    <div class="background-wrapper">
        <div class="background-color background-color-default"></div>
        <div class="bg-transfer opacity-40"><img src="assets/img/background-04.jpg" alt=""></div>
    </div>
</section>
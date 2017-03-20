<section class="block background-is-dark">
    <div class="form search-form">
        <div class="container">
            <form method="POST" action="/search">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Enter keyword" required>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <select class="form-control selectpicker" name="city" required>
                                <option value="">Location</option>
                                <option value="1">Kuala Lumpur</option>
                                <option value="2">Selangor</option>
                                <option value="3">Melaka</option>
                                <option value="4">Johor</option>
                            </select>
                        </div>
                        <!--end form-group-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-3 col-sm-4">
                        <div class="form-group">
                            <select class="form-control selectpicker" name="category" required>
                                <option value="">Category</option>
                                <option value="1">Billboard</option>
                                <option value="2">Digital Billboard</option>
                            </select>
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
                    <div class="col-md-7 col-sm-8">
                    </div>
                    <div class="col-md-2">
                        <div class="ui-slider" id="price-slider" data-value-min="10" data-value-max="4000" data-value-type="price" data-currency="RM" data-currency-placement="before">
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
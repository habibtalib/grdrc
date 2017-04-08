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
<header id="page-header">
    <nav>
        <div class="left">
            <a href="index.html" class="brand"><img src="assets/img/logo.png" alt=""></a>
        </div>
        <!--end left-->
        <div class="right">
            <div class="primary-nav has-mega-menu">
                <ul class="navigation">
                    <li class="{{ (Request::path() == '/') ? 'active': ''}}"><a href="/">Home</a></li>
                    <li class="{{ (Request::path() == '/about-us') ? 'active': ''}}"><a href="about-us">About Us</a></li>
                    <li class="{{ (Request::path() == '/contact-us') ? 'active': ''}}"> <a href="contact-us">Contact Us</a></li>
                </ul>
                <!--end navigation-->
            </div>
            <!--end primary-nav-->
            <div class="secondary-nav">
                <a href="#" data-modal-external-file="modal/sign-in" data-target="modal-sign-in">Sign In</a>
                <a href="#" class="promoted" data-modal-external-file="modal/register" data-target="modal-register">Register</a>
            </div>
            <!--end secondary-nav-->
            <a href="#" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" data-modal-external-file="modal/submit" data-target="modal-submit"><i class="fa fa-plus"></i><span>Add listing</span></a>
            <div class="nav-btn">
                <i></i>
                <i></i>
                <i></i>
            </div>
            <!--end nav-btn-->
        </div>
        <!--end right-->
    </nav>
    <!--end nav-->
</header>
<!--end page-header-->
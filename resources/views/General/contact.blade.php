@section("header")

    @include("partials.general.pagesheader")

@endsection

@extends("layouts.general.master")

@section("body")
<!-- mail -->
        <div class="mail" id="mail">
            <div class="container">
                <h3 class="tittle-w3l">Wish to Speak with Us?</h3>
                <div class="agileinfo_mail_grids">
                    <div class="col-md-7 agileinfo_mail_grid_right">
                        <form action="#" method="post">
                            <div class="col-md-6 col-sm-6 wthree_contact_left_grid">
                                <input type="text" name="Name" placeholder="Name" required="">
                                <input type="email" name="Email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6 col-sm-6 wthree_contact_left_grid">
                                <input type="text" name="Telephone" placeholder="Telephone" required="">
                                <input type="text" name="Subject" placeholder="Subject" required="">
                            </div>
                            <div class="clearfix"> </div>
                            <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Clear">
                        </form>
                    </div>
                    <div class="col-md-5 contact-left-w3ls">
                    <h3>Contact Info</h3>
                    <div class="visit">
                        <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
                            <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
                            <h4>Visit us</h4>
                            <h5>Department of Electonic ENgineering UNN</h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mail-w3">
                        <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
                            <h4>Mail us</h4>
                            <h5><a href="mailto:info@tutorials.ng">info@tutorials.ng</a></h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="call">
                        <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
                            <h4>Call us</h4>
                            <h5>08163922749</h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="visit">
                        <div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
                            <h4>Work hours</h4>
                            <h5>Mon-Sat 08:00 AM - 05:00PM</h5>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50996.31320435244!2d-122.06676498187694!3d36.97949802442312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e441b7c36d549%3A0x52ca104b2ad7f985!2sSanta+Cruz%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1469096018666" style="border:0"></iframe>
    </div>
<!-- //mail -->
@endsection
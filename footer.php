 <div class="container-fluid">
     <div class="d-flex align-content-around flex-wrap">
        <div class="row footer">
        <div class="footer-content">
            <div class="col-md-3 col-sm-4 col-xs-9">
                <h3>Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>             
                        <li><a href="#about-us">About us</a></li>  
                        <li><a href="#services">Services</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#online-reservation">Online Reservation</a></li>
                    </ul>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-9">
                <h3>Contact us</h3>
                    <ul class="list-unstyled">
                        <li><a href="mailto:info@indiangrill.se"><i class="fa fa-envelope" aria-hidden="true"></i> info@indiangrill.se</a></li>
                        <li><a href="tel:+460708962111"><i class="fa fa-phone" aria-hidden="true"></i> +46 070 896 21 11 </a>Catering</li>
                        <li><a href="tel:+460841010041"><i class="fa fa-phone" aria-hidden="true"></i> +46 08 410 100 41 </a>Office</li>
                    </ul>
            <div class="social-footer">
                <div class="row features">
                    <h5>Find us on:</h5>
                        <ul>
                            <li><a href="https://www.instagram.com/indiangrillsthlm/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.facebook.com/indiangrillsthlm/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                </div>
            </div>
            </div>
        <div class="col-md-3 col-sm-4 col-xs-9">
            <h3>Come visit us!</h3>
                <div id="map"></div>
                <script>
                    function initMap() {
                    var uluru = {lat: 59.347479, lng: 18.110960};
                    var map= new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: uluru
                    });
                    var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                    });
                    }
                </script>
                    <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLqmp4h-qQBCwZ6ZAGCoreVoKqr2urZFE&callback=initMap">
                </script>
        </div>
            <div class="col-md-3 col-sm-4 col-xs-9">
                <h3>Opening hours</h3>
                <ul class="list-unstyled">
                    <li>Monday 11:00 - 14:00</li>
                    <li>Tuesday 11:00 - 14:00</li>
                    <li>Wednesday 11:00 - 14:00</li>
                    <li>Thursday 11:00 - 14:00</li>
                    <li>Friday 11:00 - 14:00</li>
                    <li>Saturday Closed</li>
                    <li>Sunday Closed</li>
                </ul>
            </div>
        </div>
        </div>
     </div>
</div>
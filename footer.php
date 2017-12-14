<div class="container-fluid">
  <?php
  $url = $_SERVER['PHP_SELF'];


  if (strpos($url, 'contact') !== false || strpos($url, 'index') !== false) {?>
    <div class="map-border">
      <img src="img/map-border.png" />
      <div class="border-text">
        <p>
          locate us on a map
        </p>
      </div>
    </div>
  <?php } ?>

  <div class="footer container">
    <div class="row">
      <div class="col-lg-6">
        <ul class="sitemap">
          <li><a href="">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Services</a></li>
          <li><a href="">Portfolio</a></li>
          <li><a href="">News & Media</a></li>
          <li><a href="">Contact us</a></li>
        </ul>
      </div>

      <div class="col-lg-6">
        <ul class="footer-social">
          <li>
            <a href=""><img src="img/fb-foot.png" /></a>
          </li>
          <li>
            <a href=""><img src="img/insta-foot.png" /></a>
          </li>
          <li>
            <a href=""><img src="img/linkedin-foot.png" /></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer-section">
    <div class="footer container">
      <p> &copy; Copyrights 2017, Demian. All rights Reserved. Designed & Developed by Techadvert.</p>
    </div>
  </div>

</div>
</div>

</body>
</html>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="assets/js/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArJ2dB0TovErJT-YSk5_SRSvjgG_fITrE&callback=initMap">  </script>
<script>

function initMap() {
  var uluru = {lat: -25.363, lng: 131.044};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}

</script>

</body>
</html>

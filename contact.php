<?php require_once('header.php') ?>
<style>
.banner img{
  height:450px;
}

.contact-detail{
  margin: 20px 0px;
}
</style>
<div class="banner">
  <div class="container-fluid banner-container">
    <img src="img/home-banner.jpg" />
  </div>
</div>

<div class="container">
  <div class="contact-detail">
    <div class="row">
      <h3>Contact Info</h3>

      <div class="col-lg-4">
        <p><img src="img/tel-icon.png" /> +961 1 247 991 </p>
      </div>
      <div class="col-lg-4">
        <p><img src="img/tel-icon.png" /> +961 1 247 991 </p>
      </div>
      <div class="col-lg-4">
        <p><img src="img/tel-icon.png" /> +961 1 247 991 </p>
      </div>
    </div>
  </div>

</div>

<div class="container-fluid">
  <div class="contact-container ">
    <div class="contact-page container">

      <div class="contact-instruction">
        <h3>Write us a messsage:</h3>
        <p>
          Fields highlighted in red are required
        </p>
      </div>

      <form action="" method="POST">

        <div class="row">
          <div class="col-lg-6">
            <label>Full name</label>
            <input type="text" name="name"/>
          </div>
          <div class="col-lg-6">
            <label>Email</label>
            <input type="text" name="email"/>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <label>Address</label>
            <input type="text" name="address"/>
          </div>
          <div class="col-lg-6">
            <label>Phone number</label>
            <input type="text" name="phone"/>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12" style="padding: 0 15px !important">
            <label>Leave Your Message</label>
            <textarea name="message" rows="4" cols="50" ></textarea>
          </div>
          <div class="col-xs-12">
            <div class="btn-lrg submit-btn" style="margin-top:30px;">SUBMIT</div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div id="map">

  </div>

</div>


<?php require_once('footer.php') ?>

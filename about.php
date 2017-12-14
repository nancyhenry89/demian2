<style>
.banner img{
  height:450px;
}

</style>

<?php require_once ('header.php') ?>
<div class="banner">
  <div class="container-fluid banner-container">
    <img src="img/home-banner.jpg" />
  </div>
</div>

<div class="container">
  <div class="menu-container ">
    <ul class="menu-list">
      <li>
        <ul class="submenu-list about-clicked" id="history-btn">
          <li>
            <img src="img/eye.png" />
          </li>
          <li>
            History
          </li>
        </ul>
      </li>
      <li>
        <ul class="submenu-list" id="mission-vision">
          <li>
            <img src="img/eye.png" />
          </li>
          <li>
            Mission & Vision
          </li>
        </ul>
      </li>
      <li>
        <ul class="submenu-list" id="why-demian">
          <li>
            <img src="img/eye.png" />
          </li>
          <li>
            Why Demian
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>


<div class="info-wrapper">
  <div class="container">
    <div id="why">
      <div class="row">
        <div class="col-lg-6">
          <div class="owl-carousel why">
            <div > <img src="img/about-info.jpg" /></div>
            <div> <img src="img/about-info.jpg" /></div>
            <div> <img src="img/about-info.jpg" /></div>
            <div> <img src="img/about-info.jpg" /></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="why-box">
            <ul>
              <li>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
              </li>
              <li>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
              </li>
              <li>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>


    <div id="mission">
      <div class="row">
        <div class="col-lg-6">
          <div class="owl-carousel mission-vision">
            <div > <img src="img/about-info.jpg" /></div>
            <div> <img src="img/about-info.jpg" /></div>
            <div> <img src="img/about-info.jpg" /></div>
            <div> <img src="img/about-info.jpg" /></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="why-box">

            <button class="accordion">Our Mission</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Our Vision</button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div id="history">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <section class="main-timeline-section">
          <!-- <div class="timeline-start"></div> -->
          <div class="conference-center-line"></div>
          <div class="conference-timeline-content">
            <div class="timeline-article timeline-article-top">
              <div class="content-date">
                <span>1987</span>
              </div>
              <div class="meta-date"></div>
              <div class="content-box">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
              </div>
            </div>

            <div class="timeline-article timeline-article-bottom">
              <div class="content-date">
                <span>2007</span>
              </div>
              <div class="meta-date"></div>
              <div class="content-box">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
              </div>
            </div>
          </div>
          <!-- <div class="timeline-end"></div> -->
        </section>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="history-image-section">
          <div class="history-overlay">
            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <p>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php require_once('footer.php'); ?>

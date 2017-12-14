<?php require_once ('header.php'); ?>
<style>
.banner img{
  height:450px;
}

.news-date-text{
  left:25px;
}

.news-date{
  position:initial;
}


</style>

<div class="banner">
  <div class="container-fluid banner-container">
    <img src="img/home-banner.jpg" />
  </div>
</div>


<div class="container">
  <div class="section-header">
    <div class="title">
      <h1> News & Media</h1>
    </div>

    <div class="filters">
      <ul class="parent">
        <li>
          <ul class="child">
            <li>
              <div class="filter-btn filter-clicked " data-id="news"></div>
            </li>
            <li>
              News
            </li>
          </ul>
        </li>
        <li>
          <ul class="child">
            <li>
              <div class="filter-btn" data-id="media"></div>
            </li>
            <li>
              Media Gallery
            </li>
          </ul>
        </li>
      </ul>


    </div>
  </div>
  <div class="content-section">
    <div class="news-content-container" id="news">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-lg-2">
              <div class="news-date">
                <img src="img/menu-select.png"/>
                <div class="news-date-text">
                  <p class="month">OCT</p>
                  <p class="year">2018</p>
                </div>
              </div>

              <p>SHARE:</p>

              <ul class="news-social">
                <li>
                  <img src="img/fb.png" />
                </li>
                <li>
                  <img src="img/twitter.png" />
                </li>
                <li>
                  <img src="img/linkedin.png" />
                </li>
                <li>
                  <img src="img/insta-news.png" />
                </li>
              </ul>
            </div>
            <div class="col-lg-10">
              <p class="news-title">Lorem ipsum</p>
              <p class="news-content">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
            </div>
          </div>

        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="news-image shadow">
            <img src="img/news.jpg" />
          </div>
        </div>
      </div>
    </div>
    <div class="media-gallery-container" id="media">
      <div class="row">
        <div class="col-lg-4">
          <div class="video-container">
            <div class="thumbnail-image">
              <img src='img/video-thumb.jpg' />
            </div>
            <div class="play-icon">
              <img src="img/play-icon.png" />
            </div>
            <p>
              <strong>Lorem Ipsum </strong> | sit amet consectetur
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="video-container">
            <div class="thumbnail-image">
              <img src='img/video-thumb.jpg' />
            </div>
            <div class="play-icon">
              <img src="img/play-icon.png" />
            </div>
            <p>
              <strong>Lorem Ipsum </strong> | sit amet consectetur
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="video-container">
            <div class="thumbnail-image">
              <img src='img/video-thumb.jpg' />
            </div>
            <div class="play-icon">
              <img src="img/play-icon.png" />
            </div>
            <p>
              <strong>Lorem Ipsum </strong> | sit amet consectetur
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="video-container">
            <div class="thumbnail-image">
              <img src='img/video-thumb.jpg' />
            </div>
            <div class="play-icon">
              <img src="img/play-icon.png" />
            </div>
            <p>
              <strong>Lorem Ipsum </strong> | sit amet consectetur
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="video-container">
            <div class="thumbnail-image">
              <img src='img/video-thumb.jpg' />
            </div>
            <div class="play-icon">
              <img src="img/play-icon.png" />
            </div>
            <p>
              <strong>Lorem Ipsum </strong> | sit amet consectetur
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="video-container">
            <div class="thumbnail-image">
              <img src='img/video-thumb.jpg' />
            </div>
            <div class="play-icon">
              <img src="img/play-icon.png" />
            </div>
            <p>
              <strong>Lorem Ipsum </strong> | sit amet consectetur
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<?php require_once ('footer.php');?>

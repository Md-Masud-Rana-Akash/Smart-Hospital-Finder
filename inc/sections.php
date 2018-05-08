<div style="background-color: #F4E8FF">
  <div style="background-color: black">
    <center>
      <br>
      <br>
      <!--  <h2 style="color: white">WELCOME TO HOSPITAL MANAGMENT SYSTEM</h2><br> -->
      <!--  <p class="lead">We are dedicated to our users and try to provide best service.</p> -->
      <center>

        <?php include 'search.php';?>


      </center>


      <br>
      <br>
      <hr class="m-y-md">

      <!-- <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p> -->
    </center>
  </div>



  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 hidden-xs hidden-sm">
          <img src="img/about.png" class="img-responsive" alt="">
        </div>

        <div class="col-sm-12 col-md-6">
          <div class="about-des">
            <h3 class="btn btn-primary btn-lg">ABOUT US</h3>
            <p>We are not any specific hospital that you are looking for rather we make it easy for you that rhich hospital
              or clicnic or doctor you are looking for using this website , you can get the neccessary information in detail's
              about your desired hospital or clicnic or doctor</p>
            <a href="about_more.php" class="btn btn-success">Read More</a>
            <br>
            <br>
            <br>

            <h3 class="btn btn-primary btn-lg">OUR VISION & MISSION</h3>
            <p>We are commited to provide valuable and accurate service to our visitors and customer's who regularly use our
              site to get latest update , our mission and vision is to provide quality service both nationally and internationally.</p>
            <a href="vision_more.php" class="btn btn-success">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Service Section -->
  <section id="services">
    <div class="container">
      <div class="row">
        <!-- Main Title -->
        <div class="col-md-6 col-md-offset-3">
          <div class="title-block">
            <br>
            <br>
            <button type="button" class="btn btn-primary btn-lg">Service We Offer</button>
            <br>
            <br>

          </div>
        </div>
      </div>
      <div class="row" id="service-content">

        <!-- <div class="col-sm-6 col-md-4">
<div class="service-grid">
<div class="service-icon">
<img src="s2.png" alt="" class="hvr-buzz-out"/>
</div>
<div class="service-text" >
<button type="button" class="btn btn-warning">Service We Offer</button>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum non tellus quis ante vulputate mattis vitae id erat.â€¦</p>
</div>
</div>
</div> -->

        <div class="col-sm-6 col-md-4">
          <div class="service-grid">
            <div class="service-icon">
              <img src="s3.png" alt="" class="hvr-buzz-out" />
            </div>
            <div class="service-text">
              <button type="button" class="btn btn-warning">Doctors</button>

              <p>You can find specific doctors and their service using our site.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="service-grid">
            <div class="service-icon">
              <img src="s4.png" alt="" class="hvr-buzz-out" />

            </div>
            <div class="service-text">
              <button type="button" class="btn btn-warning">Register New Hospitals</button>
              <p>The owner of any clicnic or private hospital can add their information to our site so that user can get their
                desirable information through out this from anywhere in the count</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="service-grid">
            <div class="service-icon">
              <img src="s1.png" alt="" class="hvr-buzz-out" />
            </div>
            <div class="service-text">
              <button type="button" class="btn btn-warning">Hospitals</button>
              <p>You can find any nearby hospital's using our site.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="service-grid">
            <div class="service-icon">
              <img src="s6.png" alt="" class="hvr-buzz-out" />
            </div>
            <div class="service-text">
              <button type="button" class="btn btn-warning">Health Service</button>
              <p>You can get monthly and yearly health services for futher information contact with us.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="service-grid">
            <div class="service-icon">
              <img src="s5.png" alt="" class="hvr-buzz-out" />
            </div>
            <div class="service-text">
              <button type="button" class="btn btn-warning">Medicine</button>
              <p>You can get medicine support for details contact with us.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="contact">
    <center>
      <h3 class="btn btn-primary btn-lg">CONTACT WITH US</h3>
    </center>
    <br>
    <br>
    <br>
    <center>
      <div class="row">
        <!-- BLANK SPACE -->
        <div class="col-sm-1">
        </div>

        <div class="col-sm-3">
          <form action="" id="enquiryForm" method="post" accept-charset="utf-8">
            <button type="button" class="btn btn-danger">Enquiry Form</button>
            <input type="hidden" name="csrf_stream_token" value="23a09478dc7e3bf441c2034982139e94" />
            <div class="form-group">
              <input type="name" name="name" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="phone" name="mobile" class="form-control" placeholder="Phone No">
            </div>
            <div class="form-group">
              <textarea name="enquiry" class="form-control" placeholder="Enquiry"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="thm-btn page-scroll pull-right">Submit</button>
            </div>
          </form>
        </div>




        <!-- Address -->
        <div class="col-sm-3">
          <div class="footer-box address-inner">
            <img src="img/hospital.jpg" alt="">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration&#8230;</p>
            <div class="address">
              <i class="flaticon-placeholder"></i>
              <p>&#9962 123/A, Street, State-12345, Demo</p>
            </div>
            <div class="address">
              <i class="flaticon-customer-service"></i>
              <p>&#9742 0123456789</p>
            </div>
            <div class="address">
              <i class="flaticon-mail"></i>
              <p>
                <button type="button" class="btn btn-info">&#9997 hospital@gmail.com</button>
              </p>
            </div>
          </div>
        </div>





        <!-- Map -->
        <div class="col-sm-3">
          <div class="map">
            <button type="button" class="btn btn-success">Google Map</button>
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.4016169203146!2d90.42351411435888!3d23.768708793994882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7894ad2a21d%3A0xbb20a6f3fc4db34a!2sEast+West+University+(EWU)!5e0!3m2!1sen!2sbd!4v1511536482120"
                width="300" height="250" frameborder="0" style="border:0" allowfullscreen>

              </iframe>
            </div>
          </div>
        </div>
      </div>
</div>
</center>
</section>

</div>
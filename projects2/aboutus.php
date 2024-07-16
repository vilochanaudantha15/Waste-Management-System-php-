<html>

<head>
  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="styl.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    button {
  cursor: pointer;
  border: 0;
  border-radius: 10px;
  font-weight: 600;
  margin: 0 10px;
  width: 80px;
  padding: 5px 0;
  box-shadow: 0 0 20px rgba(104, 85, 224, 0.2);
  transition: 0.4s;
}

.reg {
  color: white;
  background-color: rgba(104, 85, 224, 1);
}

.log {
  color: rgb(104, 85, 224);
  background-color: rgba(255, 255, 255, 1);
  border: 1px solid rgba(104, 85, 224, 1);
}

button:hover {
  color: white;
  width:;
  box-shadow: 0 0 20px rgba(104, 85, 224, 0.6);
  background-color: rgba(104, 85, 224, 1);
}


  </style>



</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

    <div class="container">
      <a class="navbar-brand" href="#">Colombo Municipal Council</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="collapse navbar-collapse" id="mainMenu">
          <ul class="navbar-nav ms-auto text-uppercase f1">
            <li class="nav-item">
              <a href="home.php" class="active active-first">home</a>
            </li>
            <li>
              <a href="aboutus.php">about us</a>
            </li>
            <li>
              <a href="wastecollection.php">Waste collection</a>
            </li>


            <li>
              <a href="viewmap.php">view map</a>
            </li>

            <li>
            <button type="button" class="log"><a href="loginss.php">Login</a></button>
              <button type="button" class="reg"><a href="register.php">signup</a></button>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>

  <main class="flex">
    <section class="flex-content padding_2x">
      <article>
        <h1 class="title big">Increase <em>greenery by </em> recycling waste</h1><br><br>
        <p>We are a waste collection and recycling company dedicated to promoting sustainable waste management
          practices. Our mission is to provide reliable, efficient, and eco-friendly waste collection and recycling
          services that help reduce the environmental impact of waste disposal. With years of experience in the
          industry, we have built a reputation for excellence in customer service and a commitment to sustainability. We
          believe that by working together with our customers and community, we can create a cleaner and healthier
          environment for all. Contact us today to learn more about our services and how we can assist you.</p>
        <a href="viewmap.php" class="btn1">Check out the map<i class="fa fa-arrow-right"></i></a>
      </article>
    </section>
    <section class="flex-content padding_2x">
    </section>
  </main>

  <section class="section_all bg-light" id="about">

    <div class="section6">
      <section>
        <h1 class="title">How It Works?</h1>
        <p>Our website offers an easy and convenient way for users to report garbage problems in their area. By simply
          visiting our website and accessing the map feature, users can mark the location of any garbage-related issues
          they have observed. </p>
        <p>Once the location is marked, our team is notified and will quickly dispatch a crew to the site to assess and
          address the problem. We pride ourselves on our speedy response times and effective waste management solutions.
        </p>
        <p>By using our website to report garbage problems, users can rest assured that their concerns will be promptly
          addressed, and they will be contributing to a cleaner and healthier environment for everyone.</p>
      </section>
      <section>
        <div class="cards">
          <!--CARD BEGINING-->
          <div class="card">
            <span><img src="https://i.postimg.cc/TYLgxxzx/01.png" alt=""><i class="fa fa-circle"></i></span>
            <h1 class="title">Access our website map feature</h1>
            <p>Simply visit our website and navigate to the map feature to begin reporting garbage problems in your
              area.</p>
          </div>
          <!--CARD ENDS-->
          <!--CARD BEGINING-->
          <div class="card">
            <span><img src="https://i.postimg.cc/Cxb8ZNM6/02.png" alt=""><i class="fa fa-circle"></i></span>
            <h1 class="title">Mark the location of the problem</h1>
            <p>Use the map feature to pinpoint the exact location of the garbage problem you have observed.</p>
          </div>
          <!--CARD ENDS-->
          <!--CARD BEGINING-->
          <div class="card">
            <span><img src="https://i.postimg.cc/4NDtNMG9/03.png" alt=""><i class="fa fa-circle"></i></span>
            <h1 class="title">Provide additional details</h1>
            <p>Provide any relevant details about the issue, such as the type of garbage or any other information that
              may help our team address the problem more efficiently.</p>
          </div>
          <!--CARD ENDS-->
          <!--CARD BEGINING-->
          <div class="card">
            <span><img src="https://i.postimg.cc/d0vyGyLQ/04.png" alt=""><i class="fa fa-circle"></i></span>
            <h1 class="title">Submit the report</h1>
            <p>Once you have provided all the necessary information, submit the report, and our team will quickly
              dispatch a crew to assess and address the issue.</p>
          </div>
          <!--CARD ENDS-->
        </div>
      </section>
    </div>


    <div class="row mt-3">
      <div class="col-lg-4">
        <div class="about_content_box_all mt-3">
          <div class="about_detail text-center">
            <div class="about_icon">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Visit our website</h5>
            <p class="edu_desc mt-3 mb-0 text-muted">Simply go to our website to access our online reporting system for
              garbage problems.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="about_content_box_all mt-3">
          <div class="about_detail text-center">
            <div class="about_icon">
              <i class="fab fa-angellist"></i>
            </div>
            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Describe the problem</h5>
            <p class="edu_desc mb-0 mt-3 text-muted">Provide a description of the garbage problem you have observed,
              including details such as the location, type of waste, and any other relevant information.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="about_content_box_all mt-3">
          <div class="about_detail text-center">
            <div class="about_icon">
              <i class="fas fa-paper-plane"></i>
            </div>
            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Submit the report</h5>
            <p class="edu_desc mb-0 mt-3 text-muted">After providing all the necessary details, submit the report, and
              our team will quickly respond to address the problem.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <div class="sections section2 padding_2x">
    <article class="cards padding_2x">
      <section class="flex-content padding_2x">
        <figure>
          <img src="https://i.postimg.cc/J7yFYNtr/01.png" alt="" loading="lazy">
        </figure>
        <h2 class="title small">Picking <em>waste</em></h2>
        <p>Our dumpers are always free to collect your waste at any moment.</p>
        <p>Dumpers are coming imediately to your houese if you have make a report.</p>
      </section>
      <section class="flex-content padding_2x">
        <figure>
          <img src="https://i.postimg.cc/jSTkjBc2/02.png" alt="" loading="lazy">
          <h2 class="title small"><em>Schedule</em> with us</h2>
          <p>Report to us about the scenario to get an efficient service.
          </p>
          <p>According to your complain we are collecting the waste from marked locations on the map.
          </p>
        </figure>
      </section>
      <section class="flex-content padding_2x">
        <figure>
          <img src="https://i.postimg.cc/FKsWyc2Q/03.png" alt="" loading="lazy">
          <h2 class="title small">Get things <em>done</em></h2>
          <p>We are going through a greate recycling system.</p>
          <p>While recycling is great in a lot of ways, the ultimate goal is to get people to prevent waste in the first
            place.</p>
        </figure>
      </section>
    </article>
  </div>

  <div class="we-are-block">

    <div id="about-us-section">

      <div class="about-us-image">

        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Colombo_Municipal_Council_Photograph_2021.jpg/1024px-Colombo_Municipal_Council_Photograph_2021.jpg"
          width="808" height="458" alt="Lobby Image">

      </div>

      <div class="about-us-info">

        <h2>Colombo Municipal Council</h2>

        <p class="edu_desc mb-0 mt-3 text-muted">The Colombo Municipal Council is the municipal governing body of
          Colombo, the largest city and financial centre in Sri Lanka. It consists of a directly elected executive Mayor
          of Colombo, current elect is Rosy Senanayake, and 119 elected 119 municipal councilors.</p>

        <a href="#" title="About Us Button">ABOUT US</a>

      </div>

    </div>

    <div id="history-section">

      <div class="history-image">

        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Colombo_Municipal_Council_Photograph_2021.jpg/1024px-Colombo_Municipal_Council_Photograph_2021.jpg"
          width="951" height="471" alt="Building Pic">

      </div> <br>

      <div class="history-info">

        <h2>Global Waste Management</h2>

        <p>Global waste management involves handling and disposing of waste in an environmentally responsible manner on
          a global scale. It is crucial for protecting public health and the environment. Strategies like recycling,
          composting, incineration, and landfilling are used to manage waste effectively.
        </p>

        <a href="#" title="History Button">HISTORY</a>

      </div>

    </div>

  </div><br><br><br><br>



  <footer>
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <h3>Site Map</h3>
          <ul class="list-unstyled three-column">
            <li>Home</li>
            <li>About us</li>
            <li>Our projects</li>
            <li>Report a problem</li>
            <li>Report details</li>
            <li>Map</li>

          </ul>
          <div class="col-lg-3 item social">
            <ul class="wrapper">
              <li class="icon facebook">
                <span class="tooltip">Facebook</span>
                <span><i class="fa fa-facebook"></i></span>
              </li>
              <li class="icon twitter">
                <span class="tooltip">Twitter</span>
                <span><i class="fa fa-twitter"></i></span>
              </li>
              <li class="icon instagram">
                <span class="tooltip">Instagram</span>
                <span><i class="fa fa-instagram"></i></span>
              </li>
              <li class="icon youtube">
                <span class="tooltip">Youtube</span>
                <span><i class="fa fa-youtube"></i></span>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <h3>latest Articles</h3>
          <div class="media">

            <div class="media-body">
              <h4 class="media-heading">Road</h4>
              <p>Routz company holds 10 on going projects</p>
            </div>
          </div>

          <div class="media">

            <div class="media-body">
              <h4 class="media-heading">Bridge</h4>
              <p>Routz company holds 5 on going projects</p>
            </div>
          </div>

          <div class="media">

            <div class="media-body">
              <h4 class="media-heading">Street</h4>
              <p>Routz company holds 7 on going projects</p>
            </div>
          </div>

        </div>

        <div class="col-lg-4">


          <div class="widget no-box">
            <h3 class="widget-title">Contact Us<span></span></h3>
            <p>Feel free to contact us</p>
            <div class="emailfield">
              <input type="text" name="email" value="Email">
              <input class="submitbutton ripplelink" type="submit" value="Subscribe">
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    </div>

    </div>
    </div>
    <div class="copyright text-center">
      Routz Construction <span>2023</span>
    </div>
  </footer>
</body>

</html>
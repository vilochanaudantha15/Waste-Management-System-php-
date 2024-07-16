<html>
    <head>
        <title>View Map</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="styl.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;

       
      }

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
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                    <h1 class="title big">Best <em>Commercial & Residential</em> Cleaning Service.</h1>
                    <p>In a world where resources are limited, it's more important than ever to adopt sustainable practices that
          minimize our impact on the environment. One of the simplest and most effective ways to do this is by
          practicing the three R's: reuse, recycle, and reduce. These practices not only reduce waste but also conserve
          resources, save energy, and help create a cleaner and healthier planet for future generations. In this way, by
          incorporating these habits into our daily lives, we can contribute towards a better and more sustainable
          future</p>
                    <a href="home.php" class="btn1">Go To Home<i class="fa fa-arrow-right"></i></a>
                </article>
            </section>
            <section class="flex-content padding_2x">
            </section>
        </main>
          
                  
      <div class="sectionp">
        <section>
          <img src="3523_428fd902f4247199467725e7eccf1673.jpg" alt="">
        </section>
        <section>
        <span>
        <em>How to use ?</em>
        <h1 class="title">Read the instruction below</h1>
        <p>
          <li>Use the zoom feature to locate the area where the garbage problem is present.</li>
          <li>Click on the exact location of the garbage problem on the map. A red marker will appear on the map to indicate the location.</li>
          <li>Add any additional details about the garbage problem in the provided form, such as the type of waste or the severity of the issue.</li>
          <li>Click on the "Submit" button to send the report to our team.</li>
        </p>
        <a href="#" class="btn1">Contact Us</a>
      </span>
        </section>
        </div>
        
        </div>
        <div id="map"></div>         
         
     
        <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx9qVEgwT3rlE5yciz9S76F6ISao0QMJs&callback=initMap"></script>    
          
    <script>
      
     // Define a list of markers with different colors
const markers = [
  { lat: 6.9271, lng: 79.8612, color: 'red' },
  { lat: 6.8667, lng: 81.0466, color: 'blue' },
  { lat:7.2906, lng: 80.6337, color: 'green' },
  { lat:6.7230, lng: 80.0647, color: 'yellow' }

];

// Initialize a Google Map object
const map = new google.maps.Map(document.getElementById('map'), {
  center: {lat: 7.8731, lng:80.7718},
            zoom: 8
});


// Loop through the list of markers and create a marker for each one
markers.forEach(marker => {
  const iconUrl = `https://maps.google.com/mapfiles/ms/icons/${marker.color}-dot.png`;
  const markerOptions = {
    position: { lat: marker.lat, lng: marker.lng },
    map: map,
    icon: {
      url: iconUrl,
      scaledSize: new google.maps.Size(32, 32)
    }
  };
  
  const newMarker = new google.maps.Marker(markerOptions);
  
});



            
          </script>

                                 
<footer style="margin-top: 80px;">
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
          <div class="col-lg-3 item social"><ul class="wrapper">
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
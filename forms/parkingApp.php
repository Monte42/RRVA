<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>Roxbury Run Village</title>
    <link href="https://fonts.googleapis.com/css?family=Amiri|Calistoga|Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/tenant.css">
  </head>
  <body>
    <header id='head'>
      <h1 id="title">Roxbury Run Village</h1>
    </header>

    <nav id='nav'>
      <!-- Main Start-->
      <label for="drop" class="toggle">Menu</label>
      <input type="checkbox" id="drop" />
      <ul class="menu">
        <li><a class="test" href="../index.html">Home</a></li>
        <li><a class="test" href="../views/about.html">About Us</a></li>
        <li><a class="test" href="../views/amenities.html">Amenities</a></li>
        <li><a class="test" href="../views/gallery.html">Gallery</a></li>
        <li><a class="test" href="../views/localAttractions.html">Local Attractions</a></li>
        <!-- <li><a href="../views/localWeather.html">Local Weather</a></li> -->
        <li><a class="test" href="../views/location.html">Location</a></li>
        <li>
            <!-- Information Start-->
            <label for="drop-1" class="toggle">Information +</label>
            <a href="#">Information</a>
            <input type="checkbox" id="drop-1"/>
            <ul>
                <li><a class="test" href="../views/keyContacts.html">Key Contacts</a></li>
                <li><a class="test" href="../views/trails.html">Private Trails</a></li>
                <li><a class="test" href="../views/camera.html">Live Camera</a></li>
                <li>
                  <!-- FOR HOMEOWNERS Start-->
                  <label for="drop-2" class="toggle">For Homeowners +</label>
                  <a href="#">For Homeowners</a>
                  <input type="checkbox" id="drop-2"/>
                  <ul>
                    <li><a class="test" href="../newsUpdates/byLaws.html">Governing Docs</a></li>
                    <li><a href="../views/arch.html">Architectural Docs</a></li>
                    <li><a class="test" href="../newsUpdates/letters.html">Letters</a></li>
                    <li>
                      <!-- FORMS Start-->
                      <label for="drop-3" class="toggle">Forms +</label>
                      <a href="#">Forms</a>
                      <input type="checkbox" id="drop-3"/>
                      <ul>
                        <li><a href="registration.php">Registration Form</a></li>
                        <li><a href="exteriorMod.php">Modify Exterior App</a></li>
                        <li><a href="winterWatch.php">Winter Watch App</a></li>
                        <li><a href="tenant.php">Tenant Information</a></li>
                        <li><a href="guestInfo.php">Guest Information</a></li>
                        <li><a href="parkingApp.php">Parking Sticker App</a></li>
                      </ul>
                      <!-- FORMS End -->
                    </li>

                  </ul>
                  <!-- FOR HOMEOWNERS End-->
                </li>

            </ul>
            <!-- Information End-->
        </li>
        <li><a href="../views/covid-19.html">Coronavirus</a></li>
      </ul>
      <!-- main End-->

    </nav>

    <div class="sidebar">
      <li><a href="../index.html">Home</a></li>
      <li><a href="../views/about.html">About</a></li>
      <li><a href="../views/amenities.html">Amenities</a></li>
      <li><a href="../views/trails.html">Private Trails</a></li>
      <li><a href="../views/localAttractions.html">Local Attractions</a></li>
      <!-- <li><a href="../views/localWeather.html">Local Weather</a></li> -->
      <li><a href="../views/camera.html">Live Camera</a></li>
      <li><a href="../views/location.html">Location</a></li>
      <li><a href="../views/keyContacts.html">Key Contacts</a></li>
      <li><a href="../views/gallery.html">Gallery</a></li>
      <li><span>Documents</span>
        <ul class="submenu">
          <li><a href="../newsUpdates/byLaws.html">Governing Docs</a></li>
          <li><a href="../views/arch.html">Architectural Docs</a></li>
          <li><a href="../newsUpdates/letters.html">Letters</a></li>
        </ul>
      </li>
      <li><span>Forms</span>
        <ul class="submenu">
          <li><a href="registration.php">Registration Form</a></li>
          <li><a href="exteriorMod.php">Modify Exterior App</a></li>
          <li><a href="winterWatch.php">Winter Watch App</a></li>
          <li><a href="tenant.php">Tenant Information</a></li>
          <li><a href="guestInfo.php">Guest Information</a></li>
          <li><a href="parkingApp.php">Parking Sticker App</a></li>
        </ul>
      </li>
      <li><a href="../views/covid-19.html">Coronavirus</a></li>
    </div>

    <div class="content">
      <div class="form">
        <div class="header container">
          <h2>Parking Sticker Application</h2>
          <p>RR Village Association, Inc. Architectural Control Committee</p>
          <p>P.O. Box 115 Denver Ny 12421 Phone:(607) 326-7677 Fax:(607)326-2927 <a href="#">rrvainc@catskill.net</a></p>
        </div>

        <hr>

        <div class="container">
          <p>
            As we indicated at our annual meeting last fall, we are implementing
            various steps to promote compliance with our rental policy. Enclosed
            with/ attached to this letter is a very brief form which will permit us
            to issue RRVA stickers to homeowners that should be affixed to the
            driver's side of the car. We will provide a sticker for each car
            registered in the name of a homeowner or a dependent that resides with
            them at their principal home.
          </p>
          <p>
            In addition to providing these stickers, we will also subscribe to a
            service that tracks all of the major home rental sites. This will allow
            us to track rentals and enforce our rules in the event of violations of
            the rental policy.
          </p>
          <p>Stickers will be available in the office.</p>
        </div>

        <form class="container" action="parkingAppBack.php" method="POST">
          <span>
            <label for="name">Name:</label>
            <input type="text" name="name" required>
          </span>

          <span>
            <label for="cluster">Cluster: </label>
            <input type="number" name="cluster" required>
          </span>

          <span>
            <label for="unit">Unit: </label>
            <input type="number" name="unit" required>
          </span>

          <span>
            <label for="stickers">Number of stickers requested: </label>
            <input type="number" name="stickers" required>
          </span>

          <p>Please dilever a copy of the registration for each vehicle</p>

          <p><input type='submit' name='submit' value='Submit'></p>
        </form>
      </div>
      <footer id="footer">
        <div class="contact-us">
          <p>Contact Us</p>
          <hr>
          <p>P.O. Box 115 Denver</p>
          <p>Ny 12421</p>
          <p>(607) 326-7677</p>
        </div>
        <div class="contact-me">
          <a href="http://legend-gary.com/">
            <div class="logo"></div>
            <div class="my-link">
              <p>Website By</p>
              <p>Legend Gary Developments</p>
            </div>
          </a>
        </div>
      </footer>
    </div>


    <script src="../js/jquery.js"></script>
    <script src="../js/sidebarSet.js"></script>
  </body>
</html>

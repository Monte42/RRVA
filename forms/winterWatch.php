<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Winter Watch Form</title>
    <link href="https://fonts.googleapis.com/css?family=Amiri|Calistoga|Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/winterWatch.css">
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
      <form action="winterWatchBack.php" method="post">
        <div class="form-container">
          <div class="form-head">
            <h1>RR VILLAGE ASSOCIATION, INC.</h1>
            <p class="head-margin">rrvainc@catskill.net</p>
            <a href="https://www.roxburyrunvillage.com">RoxburyRunVillage.com</a><br>
            <p>P.O. Box 115 130 Mountainside Circle Roxbury Run Village Denver Ny 12421</p><br>
            <p class="head-margin">Phone: 607 326-7677</p>
            <p>Fax: 607 326-2927</p>
            <hr>
          </div>

          <p>
            I hereby request RRVA, Inc. through the maintenance staff, to do the
            "Winter House Watch" service in
            <span>cluster:
              <input class="short-input" type="text" name="cluster" size="1" required>
            </span>
            for
            <span>unit:
              <input class="short-input" type="text" name="unit" size="1" required>
            </span>
            for the months of: (Please check appropriate spaces)
          </p>
          <label for="nov">
            <input type="checkbox" name="nov">
            Nov <span class="this-year">20</span>
          </label>
          <label for="dec">
            <input type="checkbox" name="dec">
            Dec <span class="this-year">20</span>
          </label>
          <label for="jan">
            <input type="checkbox" name="jan">
            Jan <span class="next-year">21</span>
          </label>
          <label for="feb">
            <input type="checkbox" name="feb">
            Feb <span class="next-year">21</span>
          </label>
          <label for="Mar">
            <input type="checkbox" name="mar">
            Mar <span class="next-year">21</span>
          </label>
          <p>for which I will be charged $40.00 per month, payable in advance.</p><br>
          <p>
            It is my understanding this service will be provided under the following
            conditions only:
          </p><br>
          <ul>
            <li>
              Weekdays only, dependent upon outside temperatur and/or weather conditions.
            </li>
            <li>
              <em>As outside temperaturs warrant</em>, my heat will be adjusted upwards
              and downwards as necessary
            </li>
            <li>
              Should emergency services be required, <em>i.e.</em> defrosting and/or
              repairs of frozen pipes, ect. Such service will billed to my accout at
              $50.00 per hour plus materials.  <strong><em>Emergency service is done on
              as time allows basis. You will be notified if you should call a
              plumber</em></strong>
            </li>
            <li>
              this service does not include the checking of sewer lines.
            </li>
            <li>
              Neither the Association nor its employees are liable for any damage or
              consequential damage to my property caused by the elements and/or incuured
              during the preformance of said services, including any utility costs.
            </li>
          </ul><br>

          <h4><strong>PLEASE FILL OUT FOR WINTER WATCH</strong></h4>

          <ol>
            <li>
              When not occipied, what is the thermostat setting?
              <input class="short-input" type="text" name="temp" size="2" required>
              degrees.
            </li>
            <li>
              Do you have heat tape on water lines in unheated areas such as the
              basement or crawl space?
              Yes<input type="radio" name="tape" value="tape-yes" required>
              No<input type="radio" name="tape" value="tape-no">
            </li>
            <li>
              Do you turn your water off?
              Yes<input type="radio" name="water" value="water-yes" required>
              No<input type="radio" name="water" value="water-no">
            </li>
            <li>
              Where is your water valve located?<input type="text" name="valve" required>
            </li>
            <li>
              Do you turn your water heater off?
              Yes<input type="radio" name="waterHeater" value="waterHeater-yes" required>
              No<input type="radio" name="waterHeater" value="waterHeater-no">
            </li>
          </ol>

          <p>
            The Association suggests that when ever possible, turn your water off.
            Dripping water (toilet running and/or slightest drip) can cause your
            sewer line to freeze.  If this happens, you can have a back up water
            while flushing your toilet, running your water, ect.
          </p>

          <p>
            <em>
              If you call the office by Friday morning of the weekend you are
              arriving the Association will turn you heat up and turn your outside
              light on.  When Leaving a message please indicate you name, cluster,
              unit number, and the temperaturs in which rooms you want the heat set.
              If no temperatur is specified the Association will set the living room
              thermostat to 70 degrees.
            </em>
          </p>

          <br><br><br><br>

          <p class="agree-container">
            <span>Name:
              <input type="text" name="name" required>
            </span>
            <span>
              I've read and agree to the terms and policies:
              <input type="checkbox" name="agree" required>
            </span>
            <span>
              Check will be sent:
              <input type="checkbox" name="check" required>
            </span>
          </p>
          <p>
            Winter house watch is not available until payment and the submission of
            this form. Payment will be do at the office no later than 10 day prior
            to the beginning of the month.
          </p>

          <p><input type='submit' name='submit' value='Submit'></p>
        </div>
      </form>
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
    <!-- <script src="../js/winterWatchDate.js"></script> -->
  </body>
</html>

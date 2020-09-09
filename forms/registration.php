<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <title>Roxbury Run Village</title>
    <link href="https://fonts.googleapis.com/css?family=Amiri|Calistoga|Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/registration.css">
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
          <h2>Registration Form</h2>
          <p>RR Village Association, Inc. Architectural Control Committee</p>
          <p>P.O. Box 115 Denver Ny 12421 Phone:(607) 326-7677 Fax:(607)326-2927 <a href="#">rrvainc@catskill.net</a></p>
        </div>

        <hr>

        <div class="container">

        <form class="container" action="registrationBack.php" method="POST">
          <div class="user-info">
            <span>
              <label for="dop">Date of Purchase:</label>
              <input type="date" name="dop" required>
            </span><br>

            <span>
              <label for="name1">Owners Name:</label>
              <input type="text" name="name1" required>
            </span>

            <span>
              <label for="name2">Owners Name:</label>
              <input type="text" name="name2">
            </span><br>

            <span>
              <label for="homeNum1">Home #:</label>
              <input type="number" name="homeNum1" required>
            </span>

            <span>
              <label for="homeNum2">Home #:</label>
              <input type="number" name="homeNum2">
            </span><br>

            <span>
              <label for="workNum1">Work #:</label>
              <input type="number" name="workNum1">
            </span>

            <span>
              <label for="workNum2">Work #:</label>
              <input type="number" name="workNum2">
            </span><br>

            <span>
              <label for="cellNum1">Cell #:</label>
              <input type="number" name="cellNum1">
            </span>

            <span>
              <label for="cellNum2">Cell #:</label>
              <input type="number" name="cellNum2">
            </span><br>

            <span>
              <label for="faxNum1">Fax #:</label>
              <input type="number" name="faxNum1">
            </span>

            <span>
              <label for="faxNum2">Fax #:</label>
              <input type="number" name="faxNum2">
            </span><br>

            <span>
              <label for="email1">Email:</label>
              <input type="email" name="email1" required>
            </span>

            <span>
              <label for="email2">Email:</label>
              <input type="email" name="email2">
            </span><br>

            <label for="currAddress">Current address:</label>
            <input type="text" name="currAddress" required>
            <br>

            <span>
              <label for="city">City:</label>
              <input type="text" name="city" required>
            </span>

            <span>
              <label for="state">State:</label>
              <input type="text" name="state" required>
            </span>

            <span>
              <label for="zip">Zip:</label>
              <input type="number" name="zip" required>
            </span>

            <p id="unitAddress">
              RR Village Property Addres
              <span class="sm-span">
                <label for="cluster">Cluster</label>
                <input type="number" name="cluster" required>
              </span>
              <span class="sm-span">
                <label for="unit">Unit</label>
                <input type="number" name="unit" required>
              </span>
               Denver NY 12421 -
               <span>
                 <label for="runNum">Phone (607) 326 -</label>
                 <input type="number" name="runNum">
               </span>
            </p><br>
          </div>

          <hr>

          <div class="user-info">
            <span>
              <label for="price">Price/Value $</label>
              <input type="number" name="price" required>
            </span>

            <span>
              <label for="loanAmount">Loan Amount $</label>
              <input type="number" name="loanAmount">
            </span><br>

            <span>
              <label for="mHolder">MORTGAGE HOLDER:</label>
              <input type="text" name="mHolder">
            </span>

            <span>
              <label for="loanNum">LOAN #</label>
              <input type="text" name="loanNum">
            </span><br>

            <label for="mAddress">ADDRESS:</label>
            <input type="text" name="mAddress">

            <span>
              <label for="mPhone">PHONE#</label>
              <input type="number" name="mphone">
            </span>

            <span>
              <label for="contact">CONTACT:</label>
              <input type="text" name="contact">
            </span><br>

            <span>
              <label for="lbName">Listing Broker:</label>
              <input type="text" name="lbName">
            </span>

            <span>
              <label for="lbPhone">Phone:</label>
              <input type="number" name="lbPhone">
            </span>

            <span>
              <label for="caName">Closing Attorney's Name:</label>
              <input type="text" name="caName">
            </span>

            <span>
              <label for="caAddress">Closing Attorney's Address:</label>
              <input type="text" name="caAddress">
            </span>

            <span>
              <label for="caPhone">Closing Attorney's Phone:</label>
              <input type="number" name="caPhone">
            </span>

            <span>
              <label for="caEmail">Email:</label>
              <input type="email" name="caEmail">
            </span>

            <span>
              <label for="sbName">Selling Broker's Name:</label>
              <input type="text" name="sbName">
            </span>

            <span>
              <label for="sbAddress">Selling Broker's Address:</label>
              <input type="text" name="sbAddress">
            </span>

            <span>
              <label for="sbPhone">Phone:</label>
              <input type="number" name="sbPhone">
            </span>
          </div>
          <br><br>

          <hr>

          <div class="lower">
            <p>
              <strong>
                ****Each member of the Association was given 8 passes to the
                recreational facilities.  Four blue passes with key, four without;
                with the cluster and unit number printed on them.  These passes
                must be turned over before closing.  The replacement cost for these
                passes and or keys is $50.00 each.  If the passes and/or keys are
                unavailable, the purchaser will be responsible for the cost of the
                replacement's.
              </strong>
            </p>

            <span>
              <strong>Passes and keys received:</strong>
              Yes <input type="radio" name="passes" value="Yes">
              No <input type="radio" name="passes" value='No' checked>
            </span>

            <p>
              I/we, the new owner(s) have been given the Declarations, By-Laws and
              Rules Regeulations of the RR Village Association, Inc. by our broker
              and have read and understand them. <br>
              <span id="text-help">(please check)</span><input type="checkbox" name="termsAgreed" required>
            </p>
          </div>
          <span>
            Would you like a copy sent your email:
            Yes <input type="radio" name="copy" value="Yes">
            No <input type="radio" name="copy" value='No' checked>
          </span><br>
          <input type='submit' name='submit' value='Submit'>

        </form>
      </div>
      <footer id="footer">
        <div class="contact-us">
          <p>Contact Us</p>
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

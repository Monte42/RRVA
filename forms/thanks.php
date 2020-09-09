<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thank You <?php echo $_GET['name'] ?></title>
    <link rel="stylesheet" href="../css/tenant.css">
    <link rel="stylesheet" href="../css/nav.css">
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
        <li><a class="test" href="../views/localWeather.html">Local Weather</a></li>
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

      </ul>
      <!-- main End-->

    </nav>

    <div class="sidebar">
      <li><a href="../index.html">Home</a></li>
      <li><a href="../views/about.html">About</a></li>
      <li><a href="../views/amenities.html">Amenities</a></li>
      <li><a href="../views/trails.html">Private Trails</a></li>
      <li><a href="../views/localAttractions.html">Local Attractions</a></li>
      <li><a href="../views/localWeather.html">Local Weather</a></li>
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
          <li><a href="exteriorMod.php">Modify Exterior App</a></li>
          <li><a href="winterWatch.php">Winter Watch App</a></li>
          <li><a href="tenant.php">Tenant Information</a></li>
          <li><a href="guestInfo.php">Guest Information</a></li>
          <li><a href="parkingApp.php">Parking Sticker App</a></li>
        </ul>
      </li>
    </div>

    <div class="content">
      <h1>Thank you for you submission <?php echo $_GET['name'] ?></h1>
      <h3>Have a great day!</h3>
      <a href="../index.html">Return Home</a>
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/sidebarSet.js" charset="utf-8"></script>

  </body>
</html>
<!-- get the php name echo from proposal folder and put in place of gary d. -->

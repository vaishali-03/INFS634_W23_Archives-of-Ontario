<?php

require 'database/db_login.php'; //load credentials 

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['enquiry'])){ //check if required fields are submitted using POST method

    //Extracting data from the database 
    $sql = "INSERT INTO `contact_us` (`ID`, `Name`, `Email`, `Enquiry`) VALUES (NULL, '".$_POST['name']."','".$_POST['email']."', '".$_POST['enquiry']."')";
    $stmt = $conn->prepare($sql);
    //Creating New Event
    if( $stmt->execute() ){  //executing query to update the database 

        $message="Enquiry Submitted!"; //Message to show account was created
    } else {
            $message="Error was encountered in submitting enquiry."; //Message to show error in creating account 
		}
    } 
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="stylesheet" href="assets/css/contact_us.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  </head>
  <body>
    <div class="archives-home">

     <!---Navigation Bar--> 
      <div class="header">
          <div class="logo">
            <a href="index.php">
              <img src="assets/img/Logo.png">
            </a>   
          </div>
          <div class="navigation">
            <div class="dropdown about-us">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</button>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="access_our_collections.php">Access Our Collections</a></li>
              </ul>
            </div>
            <div class="dropdown services">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Services Offered</button>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Education at the Archives</a></li>
                  <li><a class="dropdown-item" href="#">Tracing your Family History</a></li>
                  <li><a class="dropdown-item" href="#">Reference Services</a></li>
                  <li><a class="dropdown-item" href="#">Loans</a></li>
              </ul>
            </div>
            <div class="dropdown private-records">
              <button class="btn btn-secondary" type="button" aria-expanded="false">Private Records Acquisition</button>
            </div>
            <div class="dropdown art-collection">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Art Collection</button>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="explore_our_collections.php">Explore Our Collections</a></li>
                  <li><a class="dropdown-item" href="art_collection_database.php">Art Collection Database</a></li>
              </ul>
            </div>
            <div class="dropdown contact-us">
              <a href="contact_us.php">
                <button class="btn btn-secondary" type="button" aria-expanded="false">Contact Us</button>
              </a>
            </div> 
          </div>
      </div>

     <!---Dropdown Navigation-->
      <header>
          <a href="index.php" class="archives-logo"><img src="assets/img/Logo.png"></a>

          <input type="checkbox" id="menu-bar">
          <label for= "menu-bar">Menu</label>

          <nav class="navbar">
            <ul>
              <li><a href="#">About Us +</a>
                  <ul>
                    <li><a href="access_our_collections.php">Access Our Collections</a></li>
                  </ul>
              </li>
              <li><a href="#">Services Offered +</a>
                  <ul>
                    <li><a href="#">Education at the Archives</a></li>
                    <li><a href="#">Tracing your Family History</a></li>
                    <li><a href="#">Reference Services</a></li>
                    <li><a href="#">Loans</a></li>
                  </ul>
              </li>
              <li><a href="#">Private Records Acquisition</a></li>
              <li><a href="#">Art Collection +</a>
                  <ul>
                    <li><a href="explore_our_collections.php">Explore Our Collections</a></li>
                    <li><a href="art_collection_database.php">Art Collection Database</a></li>
                  </ul>
              </li>
              <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
          </nav>
      </header>

      <!---Content Contact Us--->
      <img class="bg-image" alt="background-image" src="assets/img/contact_us_bg.png"/> 
      <b class="page-heading">Submit an Enquiry</b>

      <!---Submit Form--->
      <main class="form-signin w-100 m-auto">
        <form action="#" method="POST">
          <div class="form-floating">
              <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name" required>
              <label for="floatingInput">Name</label>
          </div>

          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
            <label for="floatingInput">Email address</label>
          </div>

          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="enquiry" name="enquiry" required>
            <label for="floatingInput">Enquiry</label>
          </div>
          <br>
          <div class="enquiry-message">
            <?php echo $message;?>
          </div>
          <br>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
        </form>
      </main>

      <!---Footer-->
      <section class="footer">
        <ul class="list">
          <li>
            <a href="https://www.ontario.ca/page/accessibility">Accessibility</a>
          </li>
          <li>
            <a href="https://www.ontario.ca/page/privacy-statement">Privacy</a>
          </li>
          <li>
            <a href="https://www.ontario.ca/government/terms-use">Terms of Use</a>
          </li>
          <li class="social"><a href="https://www.facebook.com/ArchivesOntario"><i class="fab fa-facebook-f"></i></a></li>
          <li class="social"><a href="https://twitter.com/ArchivesOntario"><i class="fab fa-twitter"></i></a></li>
          <li class="social"><a href="https://www.instagram.com/archivesontario/"><i class="fab fa-instagram"></i></a></li>      

        </ul>
      </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

      
    

     




      


    
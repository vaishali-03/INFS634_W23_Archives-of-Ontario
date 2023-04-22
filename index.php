<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
  </head>
  <body>
    <div class="archives-home">

     <!---Navigation Bar---> 
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

     <!--Dropdown Navigation--->
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
    
      <!---Content Home Page--->
      <img class="bg-image" alt="background-image" src="assets/img/index_background.png"/> 
      <div class="content">
        <b class="page-heading">Welcome to the Archives of Ontario! </b>
        <div class="text-container">
          <p class="text">The Archives of Ontario is the largest provincial archives in Canada, and the premier source of information about the history of the land we now call Ontario and its people. Since 1903, we've been collecting, preserving, and making available the documentary heritage of the province. As Information, Privacy and Archives division in the Ministry of Public and Business Service Delivery, we also provide leadership in record keeping, access and privacy to the Ontario Public Service, provincial agencies, and the broader public sector.</p>
          <p class="text">We provide access to unique and multi-faceted records that date back to the 16th century and include everything from hand-written letters to books, maps, achitectural drawings, photographs, artwork, films, sound recordings, electronic documents, and more.</p>
        </div>
        <img class="montage" alt="cover-image" src="assets/img/montage.png"/>
        <iframe class="frame-iframe" alt="archives-video" src="https://www.youtube.com/embed/3YP_XjJAxJQ?rel=0&mute=1" frameborder="0" allowfullscreen></iframe>
      </div>

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

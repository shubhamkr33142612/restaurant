<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bamboo Restaurant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

<body>

   
  <?php include 'menu.php'; ?>


  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active ">

        <img src="images/plant-pot-decoration-table-coffee-shop-cafe-restaurant_1339-169637.avif" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/cheerful-woman-talking-her-phone-cafeteria-france_213512-1956.avif" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item ">

        <img src="images/top-view-assortment-delicious-poke-bowl_23-2148873833.avif" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">
        About Us
      </h2>
    </div>
    <div class="container-fluid">
      <div class="row ">
        <div class="col-lg-6 col-md-6 col-12">

          <img src="images/12.avif" class="img-fluid aboutimage" alt="">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">The Food Serve</h2>
          <p class="py-3">Good food means that it enhances the condition of is consumers and growers; its production maintains the health of the environment while generating a profit for the grower. These three conditions, people/society, environment and profit are also referred to as the triple bottom line. In a triple bottom line system people/society and the environment are equally as important as profit.</p>
          <a href="about.php" class="btn btn-success">Check more </a>
        </div>

      </div>
    </div>
  </section>


  <section class="my-5 ">
    <div class="py-5">
      <h1 class="text-center">
        Our Services</h1>
    </div>
    <div class="verticalimage">
      <div class="continer-fliud">
        <div class="row text-center ">

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card my-2" style="width: 26rem;">
              <video control autoplay loop muted src="https://player.vimeo.com/external/432642521.sd.mp4?s=e4e8476df12ec431db653261be0f0b04622052c3&profile_id=164&oauth2_token_id=57447761"></video>
              <!-- <img  src="images/2.avif" class="card-img-top" alt="..."> -->
              <div class="card-body">
                <p class="card-text">“Food for us comes from our relatives, whether they have wings or fins or roots. That is how we consider food. Food has a culture. It has a history. It has a story. It has relationships.”</p>
                <a href="#" class="btn btn-warning videobutton">Check more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card my-2" style="width: 26rem;">
              <video control autoplay loop muted src="https://player.vimeo.com/external/571208899.sd.mp4?s=d4481a6ef8c327c4535ea834422358b6c7a930f5&profile_id=164&oauth2_token_id=57447761"></video>
              <!-- <img  height="200px"  src="images/1.avif" class="card-img-top" alt="..."> -->
              <div class="card-body">
                <p class="card-text">“Food for us comes from our relatives, whether they have wings or fins or roots. That is how we consider food. Food has a culture. It has a history. It has a story. It has relationships.”</p>
                <a href="#" class="btn btn-warning videobutton">Check more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card my-2" style="width:25rem; ">
              <video control autoplay loop muted src="https://player.vimeo.com/external/555945390.sd.mp4?s=95b5bc04b3a291ec6c9347b08866e57cda2a0bde&profile_id=164&oauth2_token_id=57447761"></video>
              <!-- <img src="images/1.avif" class="card-img-top" alt="..."> -->
              <div class="card-body">
                <p class="card-text">“Food for us comes from our relatives, whether they have wings or fins or roots. That is how we consider food. Food has a culture. It has a history. It has a story. It has relationships.”</p>
                <a href="#" class="btn btn-warning videobutton">Check more </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card my-2" style="width: 26rem;">
              <video control autoplay loop muted src="https://player.vimeo.com/external/376148473.sd.mp4?s=f4c2283aabf6828b39484927dc8aa547ea8cc8bd&profile_id=164&oauth2_token_id=57447761"></video>
              <!-- <img  height="200px"  src="images/1.avif" class="card-img-top" alt="..."> -->
              <div class="card-body">
                <p class="card-text">“Food for us comes from our relatives, whether they have wings or fins or roots. That is how we consider food. Food has a culture. It has a history. It has a story. It has relationships.”</p>
                <a href="#" class="btn btn-warning videobutton">Check more </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card my-2" style="width: 26rem;">
              <video control autoplay loop muted src="https://player.vimeo.com/external/447746667.sd.mp4?s=51115cdde9e50a458bae44747031b6634875c61b&profile_id=164&oauth2_token_id=57447761"></video>
              <!-- <img  height="200px"  src="images/1.avif" class="card-img-top" alt="..."> -->
              <div class="card-body">
                <p class="card-text">“Food for us comes from our relatives, whether they have wings or fins or roots. That is how we consider food. Food has a culture. It has a history. It has a story. It has relationships.”</p>
                <a href="#" class="btn btn-warning videobutton">Check more </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card my-2 " style="width: 25rem; ">
              <video control autoplay loop muted >
              <source src="https://player.vimeo.com/external/479813000.sd.mp4?s=a2312b396bb4384593e8f2e1d5a8b891ab23f4fd&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
              </video>
              <!-- <img  height="200px"  src="images/1.avif" class="card-img-top" alt="..."> -->
              <div class="card-body">
                <p class="card-text">“Food for us comes from our relatives, whether they have wings or fins or roots. That is how we consider food. Food has a culture. It has a history. It has a story. It has relationships.”</p>
                <a href="#" class="btn btn-warning videobutton">Check more </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <footer>
  <a href="https://twitter.com/Shubham71769902" class="p-3 bg-dark text-center justify-content-center link-warning d-flex">@Shubham_Resturant © Copyright 2023</a>

      
  </footer>
  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>

</html>
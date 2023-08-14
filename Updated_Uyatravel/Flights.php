

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uyatravel-About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Open+Sans:wght@300;500;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/common.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <style>
        

    </style>
    

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- code to make the navbar show up on ever page  -->
<?php require('inc/header.php') ?>

<!-- header for Hotels[title] -->
<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">AVAILABLE FLIGHTS/HOTELS DEALS </h2>
  <hr>
  
</div>


  <div class="container">
    <div class="row">

    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
    <nav class="navbar navbar-expand-lg navbar-light rounded shadow ">
    <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2 ">Filters:</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropbox" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="border bg-light p-3 rounded mb-3">
      
     <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropbox">
     <h5 class="mb-3" style="font-size:16px"  >CHECK AVAILABILITY</h5>
         <label class="form-label" >Depart</label>
         <input type="date" class="form-control shadow-none mb-3">
         <label class="form-label" >Return</label>
         <input type="date" class="form-control shadow-none">
     
     </div>
     <br>
     <div class="border bg-light p-3 rounded mb-3">
       <h5 class="mb-3" style="font-size:16px" >Facilities</h5>
       <div class="mb-2">
         <input type="checkbox" id="f1" class="form-check-input shadow-none mb-3 me-1">
         <label class="form-check-label" for="f1" >Facilities one</label>

       </div>
       
       <div class="mb-2">
         <input type="checkbox" id="f2" class="form-check-input shadow-none mb-3 me-1">
         <label class="form-check-label" for="f2" >Facilities two</label>

       </div>
       <div class="mb-2">
         <input type="checkbox" id="f3" class="form-check-input shadow-none mb-3 me-1">
         <label class="form-check-label" for="f3" >Facilities Three</label>

       </div>
       
      
         
     </div>
     <div class="border bg-light p-3 rounded mb-3">
       <h5 class="mb-3" style="font-size:16px" >GUESTS</h5>
       <div class="d-flex">
       <div class="me-3">
        <label class="form-label">Adults</label>
        <input type="number" class="form-control shadow-none">

       </div>
       <div>
        <label class="form-label">Children</label>
        <input type="number" class="form-control shadow-none">

       </div>

       </div>
       
       
      
         
     </div

     
    </div>
    </div>
    </nav>
    </div>


    <div class="col-lg-9 col-md-12 px-4">
    <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5">
      <img src="https://assets-global.website-files.com/5c6d6c45eaa55f57c6367749/624b471bdf247131f10ea14f_61d31b8dbff9b500cbd7ed32_types_of_rooms_in_a_5-star_hotel_2_optimized_optimized.jpeg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <h6 class="mb-3">Simple Room Name</h6>
      <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          2 Beds
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
         1 Bathroom
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
        1 Balcony
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          1 Sofa
          </span>

        </div>
        <div class="facilities mb-3">
          <h6 class="mb-1">Facilities</h6> 
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          Free wifi
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
        Television[Dstv]
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
        AC
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          Room Heater
          </span>
        </div>
        <div class="guests mb-5 px-lg-3 px-md-3 px-0">
          <h6 class="mb-1">GUESTS</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            5 Adults
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            4 Child
          </span>

        </div>
    </div>
   
    <div class="col-md-2 text-align-items ">
     <h6 class="mb-4">R2700 per night</h6>
     <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
     <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
    </div>


    
    </div>
   </div>
   <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5">
      <img src="https://assets-global.website-files.com/5c6d6c45eaa55f57c6367749/624b471bdf247131f10ea14f_61d31b8dbff9b500cbd7ed32_types_of_rooms_in_a_5-star_hotel_2_optimized_optimized.jpeg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <h6 class="mb-3">Simple Room Name</h6>
      <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          2 Beds
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
         1 Bathroom
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
        1 Balcony
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          1 Sofa
          </span>

        </div>
        <div class="facilities mb-3">
          <h6 class="mb-1">Facilities</h6> 
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          Free wifi
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
        Television[Dstv]
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
        AC
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          Room Heater
          </span>
        </div>
        <div class="guests mb-5 px-lg-3 px-md-3 px-0">
          <h6 class="mb-1">GUESTS</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            5 Adults
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            4 Child
          </span>

        </div>
    </div>
   
    <div class="col-md-2 text-align-items ">
     <h6 class="mb-4">R2700 per night</h6>
     <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
     <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
    </div>


    
    </div>
   </div>
   <div class="card mb-4 border-0 shadow">
    <div class="row g-0 p-3 align-items-center">
    <div class="col-md-5">
      <img src="https://assets-global.website-files.com/5c6d6c45eaa55f57c6367749/624b471bdf247131f10ea14f_61d31b8dbff9b500cbd7ed32_types_of_rooms_in_a_5-star_hotel_2_optimized_optimized.jpeg" class="img-fluid rounded">
    </div>
    <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
      <h6 class="mb-3">Simple Room Name</h6>
      <div class="features mb-3">
          <h6 class="mb-1">Features</h6>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          2 Beds
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
         1 Bathroom
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
        1 Balcony
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          1 Sofa
          </span>

        </div>
        <div class="facilities mb-3">
          <h6 class="mb-1">Facilities</h6> 
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          Free wifi
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
        Television[Dstv]
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
        AC
          </span>
          <span class="badge rounded-pill bg-light text-dark  text-wrap ">
          Room Heater
          </span>
        </div>
        <div class="guests mb-5 px-lg-3 px-md-3 px-0">
          <h6 class="mb-1">GUESTS</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            5 Adults
          </span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">
            4 Child
          </span>

        </div>
    </div>
   
    <div class="col-md-2 text-align-items ">
     <h6 class="mb-4">R2700 per night</h6>
     <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
     <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
    </div>


    
    </div>
   </div>
    </div>
    
    

  </div>
  
</div>




<?php require('inc/footer.php') ?>

  </div>
  
</div>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView:3,
    spaceBetween: 40,
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>

</body>
</html>




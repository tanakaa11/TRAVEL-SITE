

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uyatravel-Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Open+Sans:wght@300;500;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/common.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<?php require('inc/header.php') ?>

<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="images/capetown.jpeg" alt="" class="w-100 d-block"></div>
    <div class="swiper-slide"><img src="images/cruise_first_class.jpeg" alt="" class="w-100 d-block"></div>
    <div class="swiper-slide"><img src="images/first_class.jpeg" alt="" class="w-100 d-block"></div>
    <div class="swiper-slide"><img src="images/capetown.jpeg" alt="" class="w-100 d-block"></div>
    <div class="swiper-slide"><img src="https://i.pinimg.com/originals/5c/33/76/5c33761a8047bcc35a6c38a1c2dfd8f2.png" alt="" class="w-100 d-block"></div>
    <div class="swiper-slide"><img src="images/capetown.jpeg" alt=""></div>
    <div class="swiper-slide"><img src="https://th.bing.com/th/id/R.705d50fd0e717373227533e52ceb097a?rik=yrgICx3EPPZ2WA&pid=ImgRaw&r=0" alt="" class="w-100 d-block"></div>
  </div>
  <div class="swiper-pagination"></div>
</div>

  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check booking availability</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Depart</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500">Return</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
            <label class="form-label" style="font-weight: 500">Adult</label>
            <select class="form-select shadow-none">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="col-lg-2 mb-3">
            <label class="form-label" style="font-weight: 500">Children</label>
            <select class="form-select shadow-none">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
    <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
  </div>

        </div>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- DEEAAAALLLSSSS -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR AVALABLE HOTELS</h2>

 <div class="container">
  <div class="row">
   <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
      <img src="https://th.bing.com/th/id/OIP.ABqXFuAsE0hP1jEjf1dGBAHaFj?pid=ImgDet&rs=1" class="card-img-top" >
      <div class="card-body">
        <h5> Capital Hotel Standard Room </h5>
        <h6 class="mb-4">R2700 per night</h6>
        <div class="features mb-4">
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
        <!-- our facilities div -->
        <div class="facilities mb-4">
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
        <div class="rating mb-4">
           <h6 class="mb-1">Rating</h6>
           <span class=" badge rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>

           </span>    
        </div>
        <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
        </div>


        
       </div>
     </div>
 
   </div>
   <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
      <img src="https://th.bing.com/th/id/OIP.ABqXFuAsE0hP1jEjf1dGBAHaFj?pid=ImgDet&rs=1" class="card-img-top" >
      <div class="card-body">
        <h5> Capital Hotel Standard Room </h5>
        <h6 class="mb-4">R2700 per night</h6>
        <div class="features mb-4">
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
        <!-- our facilities div -->
        <div class="facilities mb-4">
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
        <div class="rating mb-4">
           <h6 class="mb-1">Rating</h6>
           <span class=" badge rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>

           </span>    
        </div>
        <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
        </div>


        
       </div>
     </div>
  
   </div>

   <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
      <img src="https://th.bing.com/th/id/OIP.ABqXFuAsE0hP1jEjf1dGBAHaFj?pid=ImgDet&rs=1" class="card-img-top" >
      <div class="card-body">
        <h5> Capital Hotel Standard Room </h5>
        <h6 class="mb-4">R2700 per night</h6>
        <div class="features mb-4">
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
        <!-- our facilities div -->
        <div class="facilities mb-4">
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
        <div class="rating mb-4">
           <h6 class="mb-1">Rating</h6>
           <span class=" badge rounded-pill bg-light">
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>
           <i class="bi bi-star-fill text-warning"></i>

           </span>    
        </div>
        <div class="d-flex justify-content-evenly mb-2">
           <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
           <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
        </div>


        
       </div>
     </div>
   
  
   </div>


   <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Hotels >>></a><br>
   </div>
  </div>
 </div>



 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR AVALABLE DEALS</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 ">
    <div class=" col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/airplane.svg" alt="" width="80px">
      <h5 class= "mt-3">FLIGHTS</h5>
    </div>

    <div class=" col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/binoculars.svg" alt="" width="80px">
      <h5 class= "mt-3">CRUISES</h5>
    </div>


    <div class=" col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/briefcase.svg" alt="" width="80px">
      <h5 class= "mt-3">SPECIAL DEALS</h5>
    </div>
  </div>

<div class="col-lg-12 text-center mt-5">
<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">MORE DEALS >>></a>
</div>


</div>
<!-- TESTIMONIALS -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5 mb-8">
  <div class="swiper swiper-testimonials">
    <div class="swiper-container">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide  p-4">
          <div class="profile align-items-center p-4 mb-3">
            <img src="images/person-circle.svg" alt="" width="30px">
            <h6 class="m-0 ms-2 ">random user1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Aspernatur quidem deserunt nihil, ratione debitis labore assumenda. 
            Ratione sequi necessitatibus quasi quod ducimus in delectus quidem, asperiores quisquam,
            sapiente, voluptatum itaque.
          </p>
          <!-- <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          </div> -->
        </div>

        <div class="swiper-slide  p-4">
          <div class="profile align-items-center p-4">
            <img src="images/person-circle.svg" alt="" width="30px">
            <h6 class="m-0 ms-2">random user2</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Aspernatur quidem deserunt nihil, ratione debitis labore assumenda. 
            Ratione sequi necessitatibus quasi quod ducimus in delectus quidem, asperiores quisquam,
            sapiente, voluptatum itaque.
          </p>
          <!-- <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Add pagination -->
  <div class="swiper-pagination"></div>

  <!-- Add navigation buttons -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<!-- Include the Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  // Initialize Swiper
  var mySwiper = new Swiper('.swiper-container', {
    loop: true, // Set to true to enable continuous loop sliding
    slidesPerView: 1, // Number of slides per view
    spaceBetween: 10, // Space between slides
    autoplay: {
      delay: 3000, // Delay between slides (in milliseconds)
      disableOnInteraction: false, // Enable automatic sliding even on user interaction
    },
    pagination: {
      el: '.swiper-pagination', // Pagination element
      clickable: true, // Allow clicking on pagination bullets to navigate to the corresponding slide
    },
    navigation: {
      nextEl: '.swiper-button-next', // Next slide button
      prevEl: '.swiper-button-prev', // Previous slide button
    },
  });
</script>

    <div class="swiper-pagination"></div>
  </div>

</div>

<script>
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      loop: true,
      centeredSlides: true,
      slidesPerView: "3",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
     
    });
  </script>

<br><br><br>
<br><br><br>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
      
    },
    autoplay: {
      delay: 3000, // Set the delay to 3000 milliseconds (3 seconds)
    },
  });
</script>

<!-- Reach us googleMAP  -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
   <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.1405289954996!2d28.009381210054983!3d-26.061663358086992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957471dc31a113%3A0xd41fe3cc7da49c3b!2sThe%20Bryanston%20Country%20Club!5e0!3m2!1sen!2sza!4v1690185686492!5m2!1sen!2sza"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
   <div class="col-lg-4 col-md-4">
    <div class=" p-4 rounded mb-4">
      <h5>Call or WhatsApp Us:</h5>
      <a href="tel: +27 071 234 5678" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-outbound"></i>+27 71 234 5678</a>
      <br>
            <a href="tel: +27 071 234 5678" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-whatsapp"></i>+27 71 234 5678</a>
    </div>
    <div class="col-lg-4 col-md-4">
  <div class=" p-4 rounded mb-4">
    <h5>FOLLOW: </h5>
    <div class="d-flex align-items-center mb-2">
      <i class="bi bi-instagram me-2"></i>
      <a href="https://www.instagram.com/uya_travel/?hl=en" class="text-decoration-none text-dark">@Uyatravel.insta</a>
    </div>
    <div class="d-flex align-items-center">
      <i class="bi bi-twitter me-2"></i>
      <a href="https://twitter.com/uyatravel" class="text-decoration-none text-dark">@uyatravel</a>
    </div>
  </div>
</div>

   </div>
    
  </div>
</div>




  </div>
  
</div>





<!-- to ensure footer shows -->
<?php require('inc/footer.php') ?>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel2">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="badge rounded-pill bg-lighyt text-dark mb-3 text-wrap lh-base">
           Please input the correct information below:

        </span>
        
          
          <div class="row">

            <div class= "col-md-6 ps-0">
            <label class="form-label">Name</label>
            <input type="text" class="form-control shadow-none"  >
          </div>
         
            <div class= "col-md-6 ps-0">
            <label class="form-label">Email</label>
            <input type="email" class="form-control shadow-none"  >
          </div>

          
            <div class= "col-md-6 ps-0">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control shadow-none"  >
          </div>
          
            <div class= "col-md-6 ps-0 mb-3">
            <label class="form-label">Profile Image</label>
            <input type="file" class="form-control shadow-none"  >
          </div>
       
            <div class= "col-md-12 ps-0 mb-3">
            <label class="form-label">Address</label><br>
            <textarea name="form-control shadow-none" row="1"></textarea>
          </div>

          <div class= "col-md-6 ps-0 mb-3">
            <label class="form-label">OTP</label>
            <input type="number" class="form-control shadow-none"  >
          </div>
       
            <div class= "col-md-12 ps-0 mb-3">
            <label class="form-label">Date of birth</label>
            <input type="date" class="form-control shadow-none"  >
          </div>

          <div class= "col-md-6 ps-0">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none"  >
          </div>

          <div class= "col-md-6 ps-0">
            <label class="form-label">Repeat Password</label>
            <input type="password" class="form-control shadow-none"  >
          </div>

           


         
        </div>
          


        <div class="container-fluid px-lg-4 mt-4"> </div>

        
       



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>





</body>
</html>




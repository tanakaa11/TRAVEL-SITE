

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uyatravel-contact_us</title>
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
      .pop:hover{
        border-top-color:var(--teal) ;
      }
    </style>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- code to make the navbar show up on ever page  -->
<?php require('inc/header.php') ?>

<!-- form -->
<br><br>
<div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4">
        <form action="">
          <h5> Send a Message</h5>
          <div class="mt-4">
            <label class="form-label" style="font-weight: 500;">Name</label>
            <input type="text" class="form-control"  shadow-none>
          </div>
          <div class="mt-4">
            <label class="form-label" style="font-weight: 500;">Email</label>
            <input type="email" class="form-control"  shadow-none>
          </div>
          <div class="mt-4">
            <label class="form-label" style="font-weight: 500;">Subject</label>
            <input type="text" class="form-control"  shadow-none>
          </div>
          <div class="mt-4">
            <label class="form-label" style="font-weight: 500;">Message</label>
            <textarea class="form-control shadow-none" rows="6" style="resize: none;"></textarea>
          </div>
          <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
        </form>

      </div>
  
    </div>
    <br><br><br>
<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
   <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3584.1405289954996!2d28.009381210054983!3d-26.061663358086992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957471dc31a113%3A0xd41fe3cc7da49c3b!2sThe%20Bryanston%20Country%20Club!5e0!3m2!1sen!2sza!4v1690185686492!5m2!1sen!2sza"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <h5><Address></Address></h5>
    <a href="https://goo.gl/maps/nC6Ux5jufjS2CHZ1A" target="_blank" class="d-inline-block text-decoration-none text-dark">
    <i class="bi bi-pin-map"></i> UyaTRAVEL Location
    </a>
    <h5 class="email"></h5>
    <a href="mailto: ask.uyaTRAVEL@gmail.com" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope-at-fill"></i> ask.uyaTRAVEL@gmail.com</a>
    
    </div>


<!-- Add this before the closing </body> tag to include Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>











<?php require('inc/footer.php') ?>

  </div>
  
</div>


</body>
</html>




<!DOCTYPE html>
<html lang="en">
       <?php error_reporting(E_ALL);
        ini_set('display_errors', 1);?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hotel Risper's</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <style>
            *{
                font-family: 'Poppins', sans-serif;
            }
            .h-font{
                font-family: 'Merienda', cursive;
            }
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button 
            {-webkit-appearance: none;
            margin: 0;
        }
            /* input[type=number] {
            -moz -appearance:textfield;
        } */
        .availability-form{
            margin-top:-50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-length:px){
            .availability-form{
            margin-top:-0px;
            padding:0,35 ;
        }
    }
    </style>
    </head>
<body class = "bg-light">
        <?php require ('inc/header.php'); ?>
    <!-- Carousel/swiper start -->
        <div class="container-fluid px-lg-4 mt-4">
            <div class="swiper  swiper-container">
                    <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/2.jpg"class = "w-100 d-block"/>
                            </div>
                            <div class="swiper-slide">
                                <img src="images/1.jpg" class = "w-100 d-block" />
                            </div>
                            <div class="swiper-slide">
                                <img src="images/3.jpg" class = "w-100 d-block" />
                            </div>
                            <div class="swiper-slide">
                                <img src="images/4.jpg" class = "w-100 d-block" />
                            </div>
                            <div class="swiper-slide">
                                <img src="images/5.jpg" class = "w-100 d-block"/>
                            </div>
                    </div>
            </div>
    </div>
    <!-- Carousel/swiper end -->

    <!-- Check booking start -->
    <div class = "container availability-form">
      <div class = "row">
           <div class = "col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Boooking Availability</h5> 
             <form>
                    <div class="row align-items-end">
                        <div class = "col-lg-3 mb-3 "> 
                                <label class="form-label" style ="font-weight:500;">Check-In </label>
                                <input type="date" class="form-control shadow-none">  
                        </div>   
                        <div class = "col-lg-3 mb-3"> 
                                <label class="form-label" style ="font-weight:500;">Check-Out </label>
                                <input type="date" class="form-control shadow-none">  
                        </div> 
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style ="font-weight:500;">Adult </label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style ="font-weight:500;">Children </label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type = "submit" class="btn textwhite shadow-none btn-success">
                              Submit
                            </button>
                        </div>
                    </div>  
              </form>          
            </div>
        </div>
    
    <!-- Our Rooms-->
    <h2 class="mt- pt- mb text-center fw-bold h-font"> OUR ROOMS </h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col mid-6 my-3">
                 <div class="card border-0 shadow" style="max-width: 350px;margin: auto;">
                    <img src="images/2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5>Simple Room Name </h5>
                      <h6 class="mb-4"> Ksh. 800 per night </h6>
                      <div class="features">
                        <h6 class="mb-1"> Features</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                           2 Rooms
                       </span>
                       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                         1 Bathroom
                       </span>
                       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                            3 Sofas
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1"> Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                           Wifi
                       </span>
                       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                        Television
                       </span>
                       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                            Room heater
                        </span>
                      </div>
                      <div class="rating mb-4">
                         <h6 class="mb-4">Rating</h6>
                         <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                         </span>
                    </div>
                     <div class="d-flex justify-content-evenly mb-2">
                      <a href="#" class="btn btn-sm text-white btn-success shadow-none">Book Now</a>
                      <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More Details</a>
                    </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col mid-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px;margin: auto;">
                   <img src="images/2.jpg" class="card-img-top" alt="...">
                   <div class="card-body">
                     <h5>Simple Room Name </h5>
                     <h6 class="mb-4"> Ksh. 800 per night </h6>
                     <div class="features">
                       <h6 class="mb-1"> Features</h6>
                       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          2 Rooms
                      </span>
                      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                        1 Barthroom
                      </span>
                      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                         1 Balcony
                       </span>
                       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                           3 Sofas
                       </span>
                     </div>
                     <div class="facilities mb-4">
                       <h6 class="mb-1"> Facilities</h6>
                       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                          Wifi
                      </span>
                      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                       Television
                      </span>
                      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                         AC
                       </span>
                       <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                           Room heater
                       </span>
                     </div>
                     <div class="rating mb-4">
                        <h6 class="mb-4">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                           <i class="bi bi-star-fill text-warning"></i>
                        </span>
                   </div>
                    <div class="d-flex justify-content-evenly mb-2">
                     <a href="#" class="btn btn-sm text-white btn-success shadow-none">Book Now</a>
                     <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More Details</a>
                   </div>
                   </div>
                 </div>
           </div>
           <div class="col-lg-4 col mid-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px;margin: auto;">
               <img src="images/2.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5>Simple Room Name </h5>
                 <h6 class="mb-4"> Ksh. 800 per night </h6>
                 <div class="features">
                   <h6 class="mb-1"> Features</h6>
                   <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                      2 Rooms
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                    1 Barthroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                     1 Balcony
                   </span>
                   <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                       3 Sofas
                   </span>
                 </div>
                 <div class="facilities mb-4">
                   <h6 class="mb-1"> Facilities</h6>
                   <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                      Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                   Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                     AC
                   </span>
                   <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                       Room heater
                   </span>
                 </div>
                 <div class="rating mb-4">
                    <h6 class="mb-4">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                       <i class="bi bi-star-fill text-warning"></i>
                    </span>
               </div>
                <div class="d-flex justify-content-evenly mb-2">
                 <a href="#" class="btn btn-sm text-white btn-success shadow-none">Book Now</a>
                 <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More Details</a>
               </div>
               </div>
             </div>
       </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Rooms >>></a>

            </div>

        </div>
    </div>
     <!-- Our Facilities-->
    <h2 class="mt- pt- mb text-center fw-bold h-font"> OUR FACILITIES </h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
         <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/wifi.png" width="80px">
            <h5 class="mt-3">Wifi</h5>
         </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/wifi.png" width="80px">
            <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/wifi.png" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/wifi.png" width="80px">
                    <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
             <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Facilities >>></a>
            </div>
        </div>
    </div>
     <!-- Our Testimonials-->
     <h2 class="mt- pt- mb text-center fw-bold h-font"> OUR TESTIMONIALS </h2>
     <div class="container">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper">

              <div class="swiper-slide bg-white p-4">
                <div class="profile d-flex align-items-center p-4">
                    <img src="images/profile 1.jpg "width="30px">
                    <h6 class="m-0 ms-2"> Macdonald Mariga</h2>
                </div>
                    <p> 
                    The services offered at this hotel are excellent 
                    ranging from unlimited Wifi,hot water bath tap
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center p-4">
                        <img src="images/profile2.jpg "width="30px">
                        <h6 class="m-0 ms-2"> Wayne Martinez</h2>
                    </div>
                        <p> 
                        The services offered at this hotel are excellent 
                        ranging from unlimited Wifi,hot water bath tap
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center p-4">
                            <img src="images/profile3.jpg "width="30px">
                            <h6 class="m-0 ms-2"> Salina Gomez</h2>
                        </div>
                            <p> 
                            The services offered at this hotel are excellent 
                            ranging from unlimited Wifi,hot water bath tap
                            </p>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                
            
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> More Rooms >>></a>

                </div>
     </div>

      <!-- Our Reach us-->
      <h2 class="mt- pt- mb text-center fw-bold h-font"> REACH US </h2>
      <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63820.69981844934!2d36.85539610000001!3d-1.2985050999999979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f116f32cbb451%3A0x5deab2bfaeff1666!2sMakadara%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1699596626260!5m2!1sen!2ske"  height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4 ">
                <div class="bg-white p-4 rounded mb-4">
                    <h5> Call Us</h5>
                    <a href="tel:0712345678" class="d-inline-block mb-2 text-decoration-none text dark">
                     <i class="bi bi-telephone"></i>+254 712345678
                    </a>
                    <br>
                    <a href="tel:0712345678" class="d-inline-block ">
                    <i class="bi bi-whatsapp"></i>+254 712345678
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5> Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="d-inline-block mb-3">
                    <i class="bi bi-twitter me-1"></i>Twitter
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="d-inline-block mb-3">
                    <i class="bi bi-facebook me-1"></i>Facebook
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="d-inline-block mb-3">
                    <i class="bi bi-instagram me-1"></i>Instagram
                    </a>
                    <br>
                </div>
   
            </div>


        </div>
      </div>

       <!-- Footer-->
       <?php require ('inc/footer.php'); ?>

     
 
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
            var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            loop:true,
            autoplay:{
                delay:3500,
                disableOnInteraction:false,
             }
             });
            var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "3",
      slidesPerView: "auto",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
            slidesPerView: 1,
        },
        640:{
            slidesPerView: 1,
        },
        768:{
            slidesPerView: 2,
        },
       1024:{
            slidesPerView: 3,
        },

      }
    });
      </script>
 </body>
</html>
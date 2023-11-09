        <!DOCTYPE html>
        <html lang="en">
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
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Hotel Risper's</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="#">Rooms</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="#">Facilities</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active me-2" aria-current="page" href="#">About</a>
                </li>
            </ul>  
            <div class="d-flex">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3 " data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
                </button>
            </form>
            </div>

        </div>
    </nav>

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
    <!-- Carousel/swiper start -->

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
     </div>
 <br><br><br>
 <br><br><br>
 <br><br><br>

    <div class="modal" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                <h5 class="modal-title"id="exampleModalLabel">
                <i class="bi bi-person-circle"></i> User Login
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn btn-dark shadow-none">Login</button>
            <a href="javascript: void(0)"class="text-secondary text-decoration-none">Forgot Password</a>   
            </div>
        </div>
            </form>
            </div>
        </div>
    </div> 


    <div class="modal" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                    <h5 class="modal-title"id="exampleModalLabel">
                    <i class="bi bi-person-lines-fill"></i> User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Your deatils must match with your ID.That will be reqiured during check-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                        <div class = "col-md-6"> 
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control shadow-none">  
                        </div>
                        <div class = "col-md-6 ps-0"> 
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control shadow-none">  
                        </div>
                        <div class = "col-md-6"> 
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control shadow-none">  
                        </div>
                        <div class = "col-md-6 ps-0"> 
                        <label class="form-label">Picture</label>
                        <input type="file" class="form-control shadow-none">  
                        </div>
                        <div class = "col-md-12 ps-0 "> 
                        <label class="form-label">Address</label>
                        <textarea class = "form-control shadow-none" rows = "1"></textarea> 
                        </div>
                        <div class = "col-md-6 ps-0"> 
                        <label class="form-label">Pincode</label>
                        <input type="number" class="form-control shadow-none">  
                        </div>
                        <div class = "col-md-6 ps-0"> 
                        <label class="form-label">Date of Birth </label>
                        <input type="date" class="form-control shadow-none">  
                        </div>
                        <div class = "col-md-6 ps-0"> 
                        <label class="form-label">Password </label>
                        <input type="password" class="form-control shadow-none">  
                        </div>
                        <div class = "col-md-6 ps-0"> 
                        <label class="form-label">Confirm Password </label>
                        <input type="password" class="form-control shadow-none">  
                        </div>
                        <div class = "text-center my-1">
                        <button type ="submit" class= "btn btn-dark shadow-none"> Register</button>
                        </div>
                  </div>
              </div>
        </form>
    </div>
    
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
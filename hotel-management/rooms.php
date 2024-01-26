<!DOCTYPE html>
<html lang="en">
       <?php error_reporting(E_ALL);
        ini_set('display_errors', 1);?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hotel Risper's-ROOMS</title>
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
                /* .h-line{
                width: 150px;
                height:1.7px;
                
            } */
        
        </style>

            
            <?php require ('inc/links.php');?>
    
    </head>
<body class = "bg-light">
        <?php require ('inc/header.php'); ?>

     <div class ="my-5 px-4"></div>
            <h2 class="fw-bold h-font text-center"> OUR ROOMS</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 ">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2">FILTERS</h4>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column " id="filterDropdown">
                                <div class="border bg-light p-3 rounded mb-3">
                                  <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h5>
                                    <label class="form-label" style ="font-weight:500;">Check-In </label>
                                    <input type="date" class="form-control shadow-none mb-3">
                                    <label class="form-label" style ="font-weight:500;">Check-Out </label>
                                   <input type="date" class="form-control shadow-none">
                             </div>
                             <div class="container-fluid flex-lg-column align-items-stretch">
                              <div class="border bg-light p-3 rounded mb-3">
                                 <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                                  <div class="mb-2">
                                    <label class="form-check-label" for="f1">Facility_one </label>
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id ="f1">
                                  </div>
                                  <div class="mb-2">
                                    <label class="form-check-label" for="f1">Facility_Two </label>
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id ="f1">
                                  </div>
                                  <div class="mb-2">
                                    <label class="form-check-label" for="f1">Facility Three </label>
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id ="f1">
                                  </div>
                             </div>
                             <div class="border bg-light p-3 rounded mb-3">
                                 <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
                                <div class="d-flex">
                                
                                  <div class="mb-2 me-2">
                                    <label class="form-label" >Adults </label>
                                    <input type="number" class="form-control shadow-none " >
                                  </div>
                                  <div class="mb-2 me-2">
                                    <label class="form-label" >Children</label>
                                    <input type="number" class="form-control shadow-none " >
                                  </div>
                                 </div>
                             </div>
                           </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9 col-md-12 px-4">
                    <div class="card mb-4 border-0 shadow">
                    
                      <div class="row g-0 p-3 align-items-center">
                             <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 px-4 ">
                                <img src="images/2.jpg" class="img-fluid rounded-start" alt="...">
                             </div>
                              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                 <h5>Simple Room Name </h5>
                                    <div class="features mb-4">
                                        <h6 class="mb-3"> Features</h6>
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
                                        <h6 class="mb-3"> Facilities</h6>
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
                                    <div class="guests mb-4">
                                        <h6 class="mb-3"> Guests</h6>
                                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                       5 Adults
                                      </span>
                                      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                         4 Children
                                      </span>
                                    </div>
                              </div>
                                
                                <div class="col-md-2 text-align-center">
                                   <h6 class="mb-4"> Ksh. 800 per night </h6>
                                   <a href="#" class="btn btn-sm text-white btn-success shadow-none mb-2">Book Now</a>
                                   <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More Details</a>
                                </div>
                        </div>
                        
                    </div>
                    <div class="card mb-4 border-0 shadow">
                    
                      <div class="row g-0 p-3 align-items-center">
                             <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 px-4 ">
                                <img src="images/2.jpg" class="img-fluid rounded-start" alt="...">
                             </div>
                              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                 <h5>Simple Room Name </h5>
                                    <div class="features mb-4">
                                        <h6 class="mb-3"> Features</h6>
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
                                        <h6 class="mb-3"> Facilities</h6>
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
                                    <div class="guests mb-4">
                                        <h6 class="mb-3"> Guests</h6>
                                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                       5 Adults
                                      </span>
                                      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                         4 Children
                                      </span>
                                    </div>
                              </div>
                                
                                <div class="col-md-2 text-align-center">
                                   <h6 class="mb-4"> Ksh. 800 per night </h6>
                                   <a href="#" class="btn btn-sm text-white btn-success shadow-none mb-2">Book Now</a>
                                   <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More Details</a>
                                </div>
                        </div>
                        
                    </div>
                    <div class="card mb-4 border-0 shadow">
                    
                      <div class="row g-0 p-3 align-items-center">
                             <div class="col-md-5 mb-lg-0 mb-md-0 mb-3 px-4 ">
                                <img src="images/2.jpg" class="img-fluid rounded-start" alt="...">
                             </div>
                              <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                 <h5>Simple Room Name </h5>
                                    <div class="features mb-4">
                                        <h6 class="mb-3"> Features</h6>
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
                                        <h6 class="mb-3"> Facilities</h6>
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
                                    <div class="guests mb-4">
                                        <h6 class="mb-3"> Guests</h6>
                                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                       5 Adults
                                      </span>
                                      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap ">
                                         4 Children
                                      </span>
                                    </div>
                              </div>
                                
                                <div class="col-md-2 text-align-center">
                                   <h6 class="mb-4"> Ksh. 800 per night </h6>
                                   <a href="#" class="btn btn-sm text-white btn-success shadow-none mb-2">Book Now</a>
                                   <a href="#" class="btn btn-sn btn-outline-dark shadow-none">More Details</a>
                                </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
      </div>            
                    <?php require ('inc/footer.php'); ?>
                </body>

</html>
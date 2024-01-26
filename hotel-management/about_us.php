<!DOCTYPE html>
<html lang="en">
       <?php error_reporting(E_ALL);
        ini_set('display_errors', 1);?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hotel Risper's-About Us</title>
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
            .box{
                border-top-color: var(--teal)!important;
            }
        
        </style>

            
            <?php require ('inc/links.php');?>
    
    </head>
<body class = "bg-light">
        <?php require ('inc/header.php'); ?>

        <div class ="my-5 px-4">
            <h2 class="fw-bold h-font text-center"> ABOUT US</h2>
            <div class= "h-line bg dark"><div> 
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                     </p>

                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 oder-2">
                                <h3 class= "mb-3"> welcome All</h3>
                                <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has  
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-5 mb-4 order-lg2 order-1">
                                <img src="images/profile 1.jpg" class= "w-50 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-6 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 text-center box">
                                    <img src="images/bedroom.png" width="50px">
                                    <h4 class="mt-3">100+ ROOMS</h4>
                                </div>
                                
                            </div>
                            <div class="col-lg-3 col-md-6 mb-6 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 text-center box">
                                    <img src="images/teamwork.png" width="50px">
                                    <h4 class="mt-3">200+ REVIEWS</h4>
                                </div>
                                
                            </div>
                            <div class="col-lg-3 col-md-6 mb-6 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 text-center box">
                                    <img src="images/users.png" width="50px">
                                    <h4 class="mt-3">100+ STAFF</h4>
                                </div> 
                            </div>
                            <div class="col-lg-3 col-md-6 mb-6 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 text-center box">
                                    <img src="images/ancestors.png" width="50px">
                                    <h4 class="mt-3">150+ CUSTOMERS</h4>
                                </div> 
                            </div>
                        </div>
                        
                        
                    </div>
                    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>
                    <div class="swiper mySwiper p-4">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide bg-white text-center overflow hidden rounded">
                        <img src = "images/profile2.jpg" class="w-50">
                        <h5 class=" mt-2">Martinez Gormez</h5>
                       </div>
                       <div class="swiper-slide bg-white text-center overflow hidden rounded">
                        <img src = "images/profile2.jpg" class="w-50">
                        <h5 class=" mt-2">Martinez Gormez</h5>
                       </div>
                        
                    </div>
                      <div class="swiper-pagination"></div>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
                <script>
                var swiper = new Swiper(".mySwiper", {
                    pagination: {
                        slidesPerView:4,
                        spaceBetween:40,
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                    },
                });
                </script>

                    <?php require ('inc/footer.php'); ?>
                </body>


</html>
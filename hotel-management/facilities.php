<!DOCTYPE html>
<html lang="en">
       <?php error_reporting(E_ALL);
        ini_set('display_errors', 1);?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hotel Risper's-FACILITIES</title>
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

        <div class ="my-5 px-4">
            <h2 class="fw-bold h-font text-center"> OUR FACILITIES</h2>
            <div class= "h-line bg dark"><div> 
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                    survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop </p>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-5 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 border-dark">
                                    <div class="d-flex align-items-center mb-2">
                                    <img src="images/wifi.png"  width="80px">
                                    <h5 class= "m-0 ms-3"> Wifi</h5>
                                    </div>
                                    <p class = "text-center mt-3">text of the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's standard dummy </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 border-dark">
                                    <div class="d-flex align-items-center mb-2">
                                    <img src="images/wifi.png"  width="80px">
                                    <h5 class= "m-0 ms-3"> Wifi</h5>
                                    </div>
                                    <p class = "text-center mt-3">text of the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's standard dummy </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 border-dark">
                                    <div class="d-flex align-items-center mb-2">
                                    <img src="images/wifi.png"  width="80px">
                                    <h5 class= "m-0 ms-3"> Wifi</h5>
                                    </div>
                                    <p class = "text-center mt-3">text of the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's standard dummy </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-5 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 border-dark">
                                    <div class="d-flex align-items-center mb-2">
                                    <img src="images/wifi.png"  width="80px">
                                    <h5 class= "m-0 ms-3"> Wifi</h5>
                                    </div>
                                    <p class = "text-center mt-3">text of the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's standard dummy </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 border-dark">
                                    <div class="d-flex align-items-center mb-2">
                                    <img src="images/wifi.png"  width="80px">
                                    <h5 class= "m-0 ms-3"> Wifi</h5>
                                    </div>
                                    <p class = "text-center mt-3">text of the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's standard dummy </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 border-dark">
                                    <div class="d-flex align-items-center mb-2">
                                    <img src="images/wifi.png"  width="80px">
                                    <h5 class= "m-0 ms-3"> Wifi</h5>
                                    </div>
                                    <p class = "text-center mt-3">text of the printing and typesetting industry. 
                                        Lorem Ipsum has been the industry's standard dummy </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require ('inc/footer.php'); ?>
                </body>


</html>
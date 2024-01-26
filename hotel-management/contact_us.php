<!DOCTYPE html>
<html lang="en">
       <?php error_reporting(E_ALL);
        ini_set('display_errors', 1);?>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hotel Risper's-CONTACT US</title>
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
            <h2 class="fw-bold h-font text-center"> CONTACT US</h2>
            <div class= "h-line bg dark"></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has 
                    survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was 
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop </p>
          
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-5 px-4">
                                <div class="bg-white rounded shadow p-4 border-4 ">   
                                 <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63820.69981844934!2d36.85539610000001!3d-1.2985050999999979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f116f32cbb451%3A0x5deab2bfaeff1666!2sMakadara%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1699596626260!5m2!1sen!2ske"  height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <h5 class= "m-0 ms-3"> Address</h5>
                                    <i class="bi bi-geo-alt-fill"></i>
                                    <a href = "https://maps.app.goo.gl/g6DKRAGt35fFpYL4A"target="blank" class = "d-inline-block text-decoration-none text-dark">Hotel Risper's</a>
                                    <h5> Call Us</h5>
                                        <a href="tel:0712345678" class="d-inline-block mb-2 text-decoration-none text-dark">
                                        <i class="bi bi-telephone"></i>+254 712345678
                                        </a>
                                        <br>
                                        <a href="tel:0712345678" class="d-inline-block d-inline-block mb-2 text-decoration-none text-dark">
                                        <i class="bi bi-whatsapp"></i>+254 712345678
                                        </a>
                                        <h5 class="mt-2">Email</h5> <i class="bi bi-envelope"></i>
                                        <a href="mailto:serviceshotelrisper@gmail.com"class="d-inline-block d-inline-block mb-2 text-decoration-none text-dark">serviceshotelrisper@gmail.com</a>
                                        <h5> Follow Us</h5>
                                            <a href="#" class="d-inline-block mb-3">
                                            <i class="bi bi-twitter me-1"></i>
                                            </a>
                                            
                                            <a href="#" class="d-inline-block mb-3">
                                            <i class="bi bi-facebook me-1"></i>
                                            <br>
                                            <a href="#" class="d-inline-block mb-3">
                                            <i class="bi bi-instagram me-1"></i>
                                            </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-5 px-4">
                                <div class="bg-white rounded shadow p-4 border-4">
                                    <form>
                                        <h5>Send a Message</h5>
                                        <div class="mb-3">
                                           <label for="" class="form-label">Name</label>
                                           <input type="text" class="form-control shadow-none">
                                        </div>
                                        <div class="mb-3">
                                           <label for="" class="form-label">Email</label>
                                           <input type="email" class="form-control shadow-none">
                                        </div>
                                        <div class="mb-3">
                                           <label for="" class="form-label">Subject</label>
                                           <input type="text" class="form-control shadow-none">
                                        </div>
                                        <div class="mb-3">
                                           <label for="" class="form-label">Message</label>
                                           <textarea class="form-control shadow-none" rows="5"style="resize:none;"></textarea>
                                        </div>
                                        <div class="d-flex">
                                    <button type="button" class="btn btn-success shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                                    Send
                                    </button>
                                    </form>
                                    
                                </div>
                            </div>
                           
                        </div>
                     </div>
                        
                   
                    <?php require ('inc/footer.php'); ?>
                </body>


</html>
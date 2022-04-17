<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <link rel="shortcut icon" type="image/x-icon" href="../../Images/train.png">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--         
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
        <!-- <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css"> -->
        <!-- <link rel="stylesheet" href="css/owl-carousel.css"> -->
        <!-- <link rel="stylesheet" href="css/datepicker.css"> -->
        <link rel="stylesheet" href="../CSS files/additional.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <title>Mugen Train</title>
        <link href="../CSS files/PHomepage Design.css" rel="stylesheet">
    </head>
    <body>
      
        <main>
            <header class="p-3 bg-white text-white  fixed-top">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center  justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                        <img src="../../Images/images1.png" height="60px" alt="">
                        </a>
                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li>
                                <a href="userHomepage.php" class="nav-link px-2 link-secondary">
                                    <h3 style="font-weight: light;">Mugen Train</h3>
                                </a>
                            </li>
                        </ul>
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <!-- <p style="font-weight: bold;"><a class="btn btn-warning" href="#"></a> -->
                                <a class="btn btn-warning" href="userHomepage.php">Logout</a>
                            </p>
                        </form>
                    </div>
                </div>
            </header>
            <hr >
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" >
                        <img src="../../Images/ii.webp" class="d-block w-100 bg-dark" width="100%" height="100%" >
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Welcome to our Platform</h1>
                                <p>Thanks for visiting our site let us help you</p>
                                <p><a class="btn btn-lg btn-dark" href="#">Welcome</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../../Images/tnl3.jpg" class="d-block w-100 " width="100%" height="100%" >
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Buy Online Tickets</h1>
                                <p>Book Tickets now! </p>
                                <p><a class="btn btn-lg btn-dark" href="#">Join us</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../../Images/tnl5.jpg" class="d-block w-100 bg-dark" width="100%" height="100%" >
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>Get News</h1>
                                <p>Get News on available Train</p>
                                <p><a class="btn btn-lg btn-dark" href="#">Thankyou</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--Health Services-->
            <div class="container marketing">
                <h1 style="text-align: center;font-weight: lighter;">Buy Ticket</h1>
                <!-- Three columns of text below the carousel -->
                <div class="row" style="margin-top: 42px;">
                    <div class="col-md-5 col-md-offset-1">
                        <section id="first-tab-group" class="tabgroup">
                            <div id="tab1">
                                <div class="submit-form">
                                    <h4>Fill up the Form:</h4>
                                    <form  action="" >
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <label for="from">From:</label>
                                                    <select required name='from' >
                                                        <option value="">Select a location...</option>
                                                        <option value="1">Dhaka</option>
                                                        <option value="2">Chittagong</option>
                                                        <option value="3">Sylhet</option>
                                                        <option value="4">Khulna</option>
                                                        <option value="5">Mymensingh</option>
                                                        <option value="6">Cox's Bazar</option>
                                                        <option value="7">Rajshahi</option>
                                                        <option value="8">Cumilla</option>
                                                        <option value="9">Dinajpur</option>
                                                        <option value="10">Rangpur</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <label for="to">To:</label>
                                                    <select required name='to'>
                                                        <option value="">Select a location...</option>
                                                        <option value="11">Dhaka</option>
                                                        <option value="12">Chittagong</option>
                                                        <option value="13">Sylhet</option>
                                                        <option value="14">Khulna</option>
                                                        <option value="15">Mymensingh</option>
                                                        <option value="16">Cox's Bazar</option>
                                                        <option value="17">Rajshahi</option>
                                                        <option value="18">Cumilla</option>
                                                        <option value="19">Dinajpur</option>
                                                        <option value="20">Rangpur</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                         
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <label for="return">Date of Journey:</label>
                                                    <input name="return" type="date" class="form-control date" id="return" placeholder="Select date..." required="" >
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6" ">
                                                <fieldset>
                                                    <label for="class" style="margin-bottom: 12px;">Choose a Class:</label>
                                                    <select required name='to'>
                                                        <option value="">Select a class</option>
                                                        <option value="21">AC_B</option>
                                                        <option value="22">AC_S</option>
                                                        <option value="23">SNIGDHA</option>
                                                        <option value="24">F_CHAIR</option>
                                                        <option value="25">F_SEAT</option>
                                                        <option value="26">F_BERTH</option>
                                                        <option value="27">S_CHAIR</option>
                                                        <option value="28">SHOVAN</option>
                                                      
                                                    </select>
                                                </fieldset>
                                            </div>
                                            
                                     
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <button type="submit"  class="btn btn-info">Order Ticket Now</button>
                                                </fieldset>
                                              
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <img src="../../Images/tn.webp" alt="" height="500px" width="600px" style="margin-left: 40px;">
                    </div>
                </div>
                  
                <!-- /.row -->
                <!--new-->
               
            <!--FOOTER-->
            <!-- <footer class="container" >
                <h3>Connect with us</h3>
                <ul class="list-unstyled d-flex" >
                    <li class="ms-3"><a class="link-dark" href="#" ><img src="facebook (2).png" alt=""></a></li>
                    <li class="ms-3"><a class="link-dark" href="#" ><img src="discord (1).png" alt=""></a></li>
                    <li class="ms-3"><a class="link-dark" href="#" ><img src="linkedin (1).png" alt=""></a></li>
                </ul>
            </footer> -->
        </main>
    </body>
</html>
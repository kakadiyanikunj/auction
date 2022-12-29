<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Appino - Responsive App Landing Page" />
    <meta name="author" content="iqonicthemes.in" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Biding_app</title>

    <!-- Bootstrap -->
    <link rel="icon" type="image/jpg" href="img/favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css" />

    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/jquery.carousel-3d.default.css"/>

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" href="css/responsive.css">

</head>
   <body data-spy="scroll" data-target=".navbar" data-offset="0">
    <div class="bid_wrapper">

    <!-- start monile view navigation -->
    {{url('
    <!-- end mobi')}}le view navigation -->

    <!-- start daily task section -->
    <section class="devlop_wrapper">
        <div class="container bid_container">
            <div class="daily_task">
                <div class="task_wrapper">
                    <h6>PO2211001</h6>
                    <img class="img-fluid" src="img/ludo.svg"><span>Ludo Game</span>
                </div>
                <div class="daily_day">
                    <p><span>01 Days</span> to Submit</p>
                </div>
            </div>
            <div class="daily_start">
                <p>Started On : 01 Jan 2022</p>
            </div>
            <div class="daily_login text-center">
                <p>Daily Login</p>
                <img class="img-fluid" src="img/check_img.svg">
            </div>
            <div class="daily_item">
                <ul>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#MyModal"><li>Documents<span><img class="img-fluid" src="{{url('img/left-arrow.svg')}}"></span></li>
                    </a>
                    <a href="#"><li>Submit File<span><img class="img-fluid" src="{{url('img/left-arrow.svg')}}"></span></li>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Modal1"><li>Bugs List<span><img class="img-fluid" src="{{url('img/left-arrow.svg')}}"></span></li>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Modal2"><li>Need Help<span><img class="img-fluid" src="{{url('img/left-arrow.svg')}}"></span></li>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Modal3"><li>Work Order<span><img class="img-fluid" src="{{url('img/left-arrow.svg')}}"></span></li>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Modal3"><li>Payment Status<span><img class="img-fluid" src="{{url('img/left-arrow.svg')}}"></span></li>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Modal4"><li>Developer Details<span><img class="img-fluid" src="{{url('img/left-arrow.svg')}}"></span></li>
                    </a>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#Modal5"><li>Project Timeline<span><img class="img-fluid" src="{{url('img/left-arrow.svg')}}"></span></li>
                    </a>
                </ul>
            </div>
        </div>
    </section>
    <!-- end daily task section -->
    </div>

     <!-- start bidding -->

    <div class="modal work_project fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="MyModal" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Project Documents</h5>
                    <button type="button" class="btn btn-cross" data-bs-toggle="modal" data-bs-target="#myModal">
                        <img class="img-fluid" src="img/cross.svg" alt="img">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="app_content daily_content">
                                <p>Ludo is fun to play a multiplayer board game that can be played between 2, 3 or 4 players. It is the most popular and fun game to play with family and friends. Ludo is a mind refreshing game with its lucky dice rolls and strategical gameplay. This interesting 2D Ludo game has been around us for a long time as the best game to play in our spare time</p>
                                <p>How the Ludo game works:<br>Ludo game starts with four tokens placed in each player's starting box. A dice is rolled in turns by each player during the game. The player's token will be placed on the starting point when a 6 is rolled on the dice. The main goal of the game is to take all 4 tokens inside the HOME area before the other opponents.</p>
                                <p>Basic rules of Ludo game:</p>
                                <ul>
                                    <li>- A token can start to move only if the dice rolled is a 6.</li>
                                    <li>- Each player gets a turn wise chance to roll the dice. And if the player rolls a 6, they will get another chance to roll the dice again.</li>
                                    <li>- All the tokens must reach the center of the board to win the game.</li>
                                    <li>- The token move clock-wise according to the number of rolled dice.</li>
                                    <li>- Knocking out other s token will give you an extra chance to roll the dice again.</li>
                                </ul>
                                <p class="game_pag">Game features:</p>
                                <ul>
                                    <li>Single Player - Play against the computer.</li>
                                    <li>Local Multiplayer - Play with friends and family offline.</li>
                                    <li>Play 2 to 4 players.</li>
                                    <li>You can continue your game anytime.</li>
                                    <li>Multi-colored dice for each player.</li>
                                    <li>Real Ludo dice roll animation.</li>
                                    <li>View the progress of each player in percentage.</li>
                                    <li>Throw dice or roll instantly.</li>
                                    <li>Shake your phone to roll the dice option</li>
                                    <li>Customize game speed yourself.</li>
                                    <li>Easy single menu player selection.</li>
                                    <li>Play the Ludo game in your native languages.</li>
                                    <li>English, Hindi, Nepali, Spanish, Portuguese, French, Arabic & Indonesian </li>
                                    <li>languages are supported in this Ludo game.</li>
                                </ul>
                                <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
                                    <a href="#" class="view_btn blue">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal 2-->
    <div class="modal work_project fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="Modal1" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bugs List</h5>
                    <button type="button" class="btn btn-cross" data-bs-toggle="modal" data-bs-target="#myModal">
                        <img class="img-fluid" src="img/cross.svg" alt="img">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="app_content daily_content">
                                <p>Ludo is fun to play a multiplayer board game that can be played between 2, 3 or 4 players. It is the most popular and fun game to play with family and friends. Ludo is a mind refreshing game with its lucky dice rolls and strategical gameplay. This interesting 2D Ludo game has been around us for a long time as the best game to play in our spare time</p>
                                <p>How the Ludo game works:<br>Ludo game starts with four tokens placed in each player's starting box. A dice is rolled in turns by each player during the game. The player's token will be placed on the starting point when a 6 is rolled on the dice. The main goal of the game is to take all 4 tokens inside the HOME area before the other opponents.</p>
                                <p>Basic rules of Ludo game:</p>
                                <ul>
                                    <li>- A token can start to move only if the dice rolled is a 6.</li>
                                    <li>- Each player gets a turn wise chance to roll the dice. And if the player rolls a 6, they will get another chance to roll the dice again.</li>
                                    <li>- All the tokens must reach the center of the board to win the game.</li>
                                    <li>- The token move clock-wise according to the number of rolled dice.</li>
                                    <li>- Knocking out other s token will give you an extra chance to roll the dice again.</li>
                                </ul>
                                <p class="game_pag">Game features:</p>
                                <ul>
                                    <li>Single Player - Play against the computer.</li>
                                    <li>Local Multiplayer - Play with friends and family offline.</li>
                                    <li>Play 2 to 4 players.</li>
                                    <li>You can continue your game anytime.</li>
                                    <li>Multi-colored dice for each player.</li>
                                    <li>Real Ludo dice roll animation.</li>
                                    <li>View the progress of each player in percentage.</li>
                                    <li>Throw dice or roll instantly.</li>
                                    <li>Shake your phone to roll the dice option</li>
                                    <li>Customize game speed yourself.</li>
                                    <li>Easy single menu player selection.</li>
                                    <li>Play the Ludo game in your native languages.</li>
                                    <li>English, Hindi, Nepali, Spanish, Portuguese, French, Arabic & Indonesian </li>
                                    <li>languages are supported in this Ludo game.</li>
                                </ul>
                                <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
                                    <a href="#" class="view_btn blue">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- modal 2-->
    <div class="modal work_project fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="Modal3" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-none justify-content-end">
                    <button type="button" class="btn btn-cross" data-bs-toggle="modal" data-bs-target="#myModal">
                        <img class="img-fluid" src="img/cross.svg" alt="img">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="invoice_img text-center">
                                <img class="img-fluid" src="{{url('img/invoice.svg')}}">
                                <a href="#" class="invoice_btn">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal 4-->
    <div class="modal work_project fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="Modal4" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Developer Details</h5>
                    <button type="button" class="btn btn-cross" data-bs-toggle="modal" data-bs-target="#myModal">
                        <img class="img-fluid" src="img/cross.svg" alt="img">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="develp_form">
                               <form action="" method="post" class="needs-validation check_form" novalidate>
                                    <div class="row">
                                        <div class="col-12 text-start">
                                            <label for="name" class="form-label ">Name :</label>
                                            <input type="name" class="form-control" id="email" placeholder="Enter Your Business Name" name="name" required>
                                            <div class="invalid-feedback">Please enter Your Name</div>
                                        </div>
                                        <div class="col-12 mt-2 text-start">
                                            <label for="name" class="form-label ">Employee Id :</label>
                                            <input type="name" class="form-control" id="email" placeholder="8987678" name="name" required>
                                            <div class="invalid-feedback">Please enter Your Id</div>
                                        </div>
                                        <div class="col-12 mt-2 text-start">
                                            <label for="name" class="form-label ">Skype ID :</label>
                                            <input type="name" class="form-control" id="email" placeholder="LIVE:AFAKLDSF8" name="name" required>
                                            <div class="invalid-feedback">Please enter Your Id</div>
                                        </div>
                                        <div class="col-12 mt-2 text-start">
                                            <label for="name" class="form-label ">Employee Id :</label>
                                            <input type="name" class="form-control" id="email" placeholder="Enter Your Business Name" name="name" required>
                                            <div class="invalid-feedback">Please enter Your Employee Id</div>
                                        </div>
                                        <div class="col-12 mt-2 text-start">
                                            <label for="name" class="form-label ">Working Hours :</label>
                                            <input type="name" class="form-control" id="email" placeholder="08" name="name" required>
                                            <div class="invalid-feedback">Please enter Your Working Hours</div>
                                        </div>
                                        <div class="col-12 mt-2 text-start">
                                            <label for="name" class="form-label ">Mobile :</label>
                                            <input type="name" class="form-control" id="email" placeholder="9898989898" name="name" required>
                                            <div class="invalid-feedback">Please enter Your Mobile number</div>
                                        </div>
                                        <div class="col-12 mt-2 text-start">
                                            <label for="name" class="form-label ">WhatsApp :</label>
                                            <input type="name" class="form-control" id="email" placeholder="9898989898" name="name" required>
                                            <div class="invalid-feedback">Please enter WhatsApp number</div>
                                        </div>
                                        <div class="col-12 mt-2 text-start">
                                            <label for="name" class="form-label ">Email ID :</label>
                                            <input type="name" class="form-control" id="email" placeholder="ABC.XYZ@GMAIL.COM" name="name" required>
                                            <div class="invalid-feedback">Please enter Your Email Id</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button type="submit" class="btn view_btn blue">Ohky</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- modal 4-->
    <div class="modal work_project fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="Modal5" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Project Timeline</h5>
                    <button type="button" class="btn btn-cross" data-bs-toggle="modal" data-bs-target="#myModal">
                        <img class="img-fluid" src="img/cross.svg" alt="img">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="timline_content">
                                <div class="project_pag d-flex justify-content-between">
                                    <span>Logo</span>
                                    <span>: 01 Days</span>
                                    <span>28 Oct 2022</span>
                                    <span><img class="img-fluid" src="img/correct.svg"></span>
                                </div>
                                <div class="project_pag d-flex justify-content-between">
                                    <span>UXUI</span>
                                    <span>: 03 Days</span>
                                    <span>28 Oct 2022</span>
                                    <span><img class="img-fluid" src="img/correct.svg"></span>
                                </div>
                                <div class="project_pag yellow d-flex justify-content-between">
                                    <span>Stage 01</span>
                                    <span>: 05 Days</span>
                                    <span>28 Oct 2022</span>
                                </div>
                                <div class="project_pag yellow d-flex justify-content-between">
                                    <span>Stage 02</span>
                                    <span>: 05 Days</span>
                                    <span>11 Nov 2022</span>
                                </div>
                                <div class="project_pag yellow d-flex justify-content-between">
                                    <span>Stage 03</span>
                                    <span>: 03 Days</span>
                                    <span>19 Oct 2022</span>
                                </div>
                                <div class="project_pag yellow d-flex justify-content-between">
                                    <span>Final APK</span>
                                    <span>: 05 Days</span>
                                    <span>14 Nov 2022</span>
                                </div>
                                <div class="project_pag yellow d-flex justify-content-between">
                                    <span>Bugs Fix</span>
                                    <span>: 02 Days</span>
                                    <span>19 Nov 2022</span>
                                </div>
                                <div class="project_pag yellow d-flex justify-content-between">
                                    <span>Launch</span>
                                    <span>: 01 Days</span>
                                    <span>21 Nov 2022</span>
                                </div>
                                <div class="project_pag yellow d-flex justify-content-between">
                                    <span>Support</span>
                                    <span>: 90 Days</span>
                                    <span>22 Nov 2022</span>
                                </div>
                                <div class="project_pag yellow d-flex justify-content-between">
                                    <span>Final Update</span>
                                    <span>: 01 Days</span>
                                    <span>23 Nov 2022</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mt-3">
                                    <a href="#" class="view_btn blue">Ohky</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>

    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!-- wow -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>

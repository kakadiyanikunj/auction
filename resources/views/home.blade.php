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

    <section class="mobile_nav d-block d-md-none">
        <nav class="navbar mobile_navmenu navbar navbar-expand-sm">
         <div class="container-fluid">
             <ul class="navbar-nav m-auto">
                 <li class="nav-item nav-link rounded-5"><a href="/editprofile/{id}">Profile </a></li>
                 <li class="nav-item nav-link rounded-5"><a href="/bid/{id}">My Bid</a></li>
                 <li class="nav-item nav-link rounded-5"><a href="/home" class="active">Home</a></li>
                 <li class="nav-item nav-link rounded-5"><a href="/task/{0}">My Task</a></li>
                 <li class="nav-item nav-link rounded-5"><a href="">support</a></li>
             </ul>
         </div>
         </nav>
     </section>
    <!-- end monile view navigation -->
    <!-- start mobile dewvlopment sectin -->
    <section class="devlop_wrapper">
        <div class="container bid_container">
            <div class="devlop_title">
                <h3>Choose What to Development</h3>
            </div>
           <ul class="nav nav-pills " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Application</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Game</a>
                </li>
                 <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-web-tab" data-bs-toggle="pill" data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web" aria-selected="false">Website</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">

                    </div>
                </div>

                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end mobile dewvlopment sectin -->
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

    <script>
        $(document).ready(function(){
            $.ajax({
                url:"https://outsource.63-141-249-130.plesk.page/public/api/v1/get-product-list",
                method:'POST',
                datatype:"json",
                data:{
                    "category": "Application"
                },
                success:function(data){
                    var datas="";
                    $.each(data.result,function(key,value){
                        datas+=`
                        <div class="col-12 col-lg-6">
                            <div class="devlop_inner">
                                <div class="devlop_box">
                                    <div class="devlop_img">
                                        <img class="img-fluid" src="${value.app_icon}"height="100" width="100">

                                    </div>
                                    <div class="devlop_content">
                                        <h5>${value.id}</h5>
                                        <h6>${value.name}</h6>
                                        <p>${value.category}</p>
                                    </div>
                                </div>
                                <div class="devlop_pag">
                                    <span>Technology</span>
                                    <span>Price</span>
                                    <span>Period</span>
                                </div>
                                <div class="devlop_form">
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="row form_content">
                                                <div class="col-12 col-lg-4 ">
                                                    <ul>
                                                        <li>${value.technology}</li>

                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-4 p-0">
                                                    <ul>
                                                        <li><form>${value.price}</form></li>

                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-4 ">
                                                    <ul>
                                                        <li><form>${value.duration}</form></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="/details/${value.id}" target="_blank" id="btn" class="view_btn">view</a>
                                </div>
                            </div>
                        </div>
                        `;
                    });

                    console.log(data);
                    $('#pills-home').append(datas);


                }

            });

            $(document).ready(function(data){
                $.ajax({
                    url:"https://outsource.63-141-249-130.plesk.page/public/api/v1/get-product-list",
                    method:'POST',
                    datatype:'json',
                    data:{
                        "category": "Game"
                    },
                    success:function(data){
                        var datas="";
                        $.each(data.result,function(key,value){
                            datas+=`
                            <div class="col-12 col-lg-6">
                                <div class="devlop_inner">
                                    <div class="devlop_box">
                                        <div class="devlop_img">
                                            <img class="img-fluid" src="${value.app_icon}" height="100" width="100">

                                        </div>
                                        <div class="devlop_content">
                                            <h5>${value.id}</h5>
                                            <h6>${value.name}</h6>
                                            <p>${value.category}</p>
                                        </div>
                                    </div>
                                    <div class="devlop_pag">
                                        <span>Technology</span>
                                        <span>Price</span>
                                        <span>Period</span>
                                    </div>
                                    <div class="devlop_form">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="row form_content">
                                                    <div class="col-12 col-lg-4 ">
                                                        <ul>
                                                            <li>${value.technology}</li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-12 col-lg-4 p-0">
                                                        <ul>
                                                            <li><form> ${value.price}</form></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-12 col-lg-4 ">
                                                        <ul>
                                                            <li><form>${value.duration}</form></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <a href="/details/${value.id}" target="_blank" class="view_btn">view</a>
                                    </div>
                                </div>
                            </div>
                            `;
                        });
                        console.log(data);
                        $('#pills-profile').append(datas);
                    }
                });

                $.ajax({
                    url:"https://outsource.63-141-249-130.plesk.page/public/api/v1/get-product-list",
                    method:'POST',
                    datatype:"json",
                    data:{
                        "category":"Website"
                    },
                    success:function(data){
                        var datas="";
                        $.each(data.result,function(key,value){
                            datas+=`
                            <div class="col-12 col-lg-6">
                                <div class="devlop_inner">
                                    <div class="devlop_box">
                                        <div class="devlop_img">
                                            <img class="img-fluid" src="${value.app_icon}"height="100" width="100">

                                        </div>
                                        <div class="devlop_content">
                                            <h5>${value.id}</h5>
                                            <h6>${value.name}</h6>
                                            <p>${value.category}</p>
                                        </div>
                                    </div>
                                    <div class="devlop_pag">
                                        <span>Technology</span>
                                        <span>Price</span>
                                        <span>Period</span>
                                    </div>
                                    <div class="devlop_form">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="row form_content">
                                                    <div class="col-12 col-lg-4 ">
                                                        <ul>
                                                            <li>${value.technology}</li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-12 col-lg-4 p-0">
                                                        <ul>
                                                            <li><form> ${value.price}</form></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-12 col-lg-4 ">
                                                        <ul>
                                                            <li><form>${value.duration}</form></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <a href="/details/${value.id}" target="_blank" class="view_btn">view</a>
                                    </div>
                                </div>
                            </div>
                            `;
                        });

                        console.log(data);
                        $('#pills-web').append(datas);
                    }

                });

            });




        });
    </script>
</body>
</html>

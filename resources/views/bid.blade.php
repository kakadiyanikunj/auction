@include('header')
@include('alljs')
   <body data-spy="scroll" data-target=".navbar" data-offset="0">
    <div class="bid_wrapper">

    <!-- start monile view navigation -->

    <!-- end monile view navigation -->
    <!-- start mobile dewvlopment sectin -->
    <section class="devlop_wrapper">
        <div class="container bid_container">
            <div class="devlop_title">

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
                    <div class="row" id="app">

                    </div>
                </div>

                <div class="tab-pane fade show active" id="pills-profile"  role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row" id="game">

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                    <div class="row" id="web">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end mobile dewvlopment sectin -->
    </div>
    <!-- jQuery-->


    <script>
        $(document).ready(function(){
            var full_url = document.URL;
            var url_array = full_url.split('/')
            var last_segment = url_array[url_array.length - 1];
            console.log(last_segment);
            var token = localStorage.getItem("token");
            var status = localStorage.getItem("status");
            $.ajax({
                url:"https://outsource.63-141-249-130.plesk.page/public/api/v1/get-user-bids-list",
                method:'POST',
                datatype:"json",
                headers: {
                    'Authorization': `Bearer ${token}`
                },

                success:function(data){
                    console.log(data);
                    var app="";
                    $.each(data.result,function(key,value){
                        if(value.category == "Application"){
                            app+=`
                        <div class="col-12 col-lg-6">
                            <div class="devlop_inner">
                                <div class="devlop_box">
                                    <div class="devlop_img">
                                        <img class="img-fluid" src="${value.app_icon}"height="100" width="100">

                                    </div>
                                    <div class="devlop_content">
                                        <h5>${value.product_id}</h5>
                                        <h6>${value.product_name}</h6>
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
                                                        <li><form><input type="number" class="form-control" placeholder="₹ ${value.bid_price}"></form></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-4 ">
                                                    <ul>
                                                        <li><form><input type="number" class="form-control" placeholder="${value.bid_duration}Days"></form></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-7">
                                        <div class="amount_pag green">
                                            <p>Your Biding Amount is <b> Lowest Then others.</b> <span>01 H: 05 M : 00 SS</span></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="bid_btn">
                                            <a href="view.html" target="_blank" class="view_btn blue">Bid Now </a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        `;};
                    });

                    console.log(app);
                    $('#app').append(app);

                    var game="";
                    $.each(data.result,function(key,value){

                        if(value.category == "Game"){
                            game+=`
                        <div class="col-12 col-lg-6">
                            <div class="devlop_inner">
                                <div class="devlop_box">
                                    <div class="devlop_img">
                                        <img class="img-fluid" src="${value.app_icon}" height="100" width="100">

                                    </div>
                                    <div class="devlop_content">
                                        <h5>${value.product_id}</h5>
                                        <h6>${value.product_name}</h6>
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
                                                        <li><form><input type="number" class="form-control" placeholder="₹ ${value.bid_price}"></form></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-4 ">
                                                    <ul>
                                                        <li><form><input type="number" class="form-control" placeholder="${value.bid_duration}Days"></form></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-7">
                                        <div class="amount_pag green">
                                            <p>Your Biding Amount is <b> Lowest Then others.</b> <span>01 H: 05 M : 00 SS</span></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="bid_btn">
                                            <a href="#" target="_blank" class="view_btn  blue">Bid Now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;}
                    });

                    //console.log(game);
                    $('#game').append(game);




                    var web="";
                    $.each(data.result,function(key,value){
                        if(value.bid_status == "Website"){
                            web+=`
                        <div class="col-12 col-lg-6">
                            <div class="devlop_inner">
                                <div class="devlop_box">
                                    <div class="devlop_img">
                                        <img class="img-fluid" src="${value.app_icon}"height="100" width="100">

                                    </div>
                                    <div class="devlop_content">
                                        <h5>${value.product_id}</h5>
                                        <h6>${value.product_name}</h6>
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
                                                        <li><form><input type="number" class="form-control" placeholder="₹ ${value.bid_price}"></form></li>
                                                    </ul>
                                                </div>
                                                <div class="col-12 col-lg-4 ">
                                                    <ul>
                                                        <li><form><input type="number" class="form-control" placeholder="${value.bid_duration}Days"></form></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-7">
                                        <div class="amount_pag green">
                                            <p>Your Biding Amount is <b> Lowest Then others.</b> <span>01 H: 05 M : 00 SS</span></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="bid_btn">
                                            <a href="view.html" target="_blank" class="view_btn blue">Bid Now </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `;};
                    });

                    console.log(web);
                    $('#web').append(web);
                },

            });


        });
    </script>
</body>
</html>

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
                <h3>My Running Task / Projects</h3>
            </div>
            <div class="row" id="task">

            </div>
        </div>
    </section>
    <!-- end mobile dewvlopment sectin -->
    </div>

    <!-- start bidding -->

    <div class="modal work_project fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="MyModal" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enroll Developer Data</h5>
                    <button type="button" class="btn btn-cross" data-bs-toggle="modal" data-bs-target="#myModal">
                        <img class="img-fluid" src="{{url('img/cross.svg')}}" alt="img">
                    </button>
                </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form class="needs-validation" id="employeedata" method="post" novalidate>
                            <div class="form-group mb-3">
                                <label>Developer Name:</label>
                                <input type="text" class="form-control" id="name" name="developer_name" placeholder="User Name" required>
                                <div class="invalid-feedback">Please enter a developer_name address.</div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Employee Id:</label>
                                <input type="text" class="form-control" id="employee_id" name="employee_id" placeholder="Enter Employee Id" required>
                                <div class="invalid-feedback">Please enter a developer_name address.</div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Working Hours:</label>
                                <input type="number" class="form-control" id="working_hours" name="working_hours" placeholder="Enter Working Hour" required>
                                <div class="invalid-feedback">Please enter a developer_name address.</div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Email:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                <div class="invalid-feedback">Please enter a email address.</div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Mobile:</label>
                                <input type="number" class="form-control" id="number" name="number" placeholder="Enter Mobile number" required>
                                <div class="invalid-feedback">Please enter a Mobile number address.</div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Skype:</label>
                                <input type="text" class="form-control" id="skype" name="skype" placeholder="Enter Skype" required>
                                <div class="invalid-feedback">Please enter a Skype address.</div>
                            </div>
                            <div class="form-group mb-3">
                                <label>Whatsapp:</label>
                                <input type="number" class="form-control" id="whatsapp" name="whatsapp" placeholder="Enter whatsapp" required>
                                <div class="invalid-feedback">Please enter a whatsapp address.</div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="timline_border">
                    <p>Project TimeLine</p>
                </div>
                <div class="timline_content">
                    <div class="project_pag d-flex justify-content-between">
                        <span>Logo</span>
                        <span>: 01 Days</span>
                        <span>28 Oct 2022</span>
                        <span><img class="img-fluid" src="{{url('img/correct.svg')}}"></span>
                    </div>
                    <div class="project_pag d-flex justify-content-between">
                        <span>UXUI</span>
                        <span>: 03 Days</span>
                        <span>28 Oct 2022</span>
                        <span><img class="img-fluid" src="{{url('img/correct.svg')}}"></span>
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
                    <div id="response"></div>
                    <div class="d-flex justify-content-center align-items-center mt-3">
                        <a href="#" class="view_btn blue" onclick="btn()">Start Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                            <a href="work.html" target="_blank" class="view_btn" data-bs-toggle="modal" data-bs-target="#MyModal">Start Now </a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        `;
                    });

                    console.log(app);
                    $('#task').append(app);


                },

            });
        });
        function btn() {
            var token = localStorage.getItem("token");
            var full_url = document.URL;
            var url_array = full_url.split('/')
            var last_segment = url_array[url_array.length - 1];
             $.ajax({
                url: "https://outsource.63-141-249-130.plesk.page/public/api/v1/register-developer",
                method: 'POST',
                datatype: "json",
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                data: {

                    "product_id": last_segment,
                    "developer_name": $('#developer_name').val(),
                    "employee_id": $('#employee_id').val(),
                    "working_hours": $('#working_hours').val(),
                    "email": $('#email').val(),
                    "number": $('#number').val(),
                    "skype": $('#skype').val(),
                    "whatsapp":$('#whatsapp').val()
                },

                success: function(result) {

                    console.log(result);
                    if(result.code == 200){

                        //window.location.href='http://127.0.0.1:8000/login/'+last_segment;
                    }else{
                        $("#response").append('<div class="alert alert-danger" role="alert" > Not Enroll Developer Data</div>');
                    }


                },



            });
        }
    </script>
</body>
</html>

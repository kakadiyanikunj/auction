@include('header')
@include('alljs')

<body data-spy="scroll" data-target=".navbar" data-offset="0">
    <div class="bid_wrapper">


        <section class="devlop_wrapper">
            <div class="container">
                <div class="row" id="view"></div>
                <div id="response"></div>
            </div>
        </section>
        <!-- end mobile dewvlopment sectin -->
    </div>
    <!-- jQuery-->
    <script>
        $(document).ready(function() {
            var full_url = document.URL;
            var url_array = full_url.split('/')
            var last_segment = url_array[url_array.length - 1];
            console.log(last_segment);
            var token = localStorage.getItem("token");
            var status = localStorage.getItem("status");

            $.ajax({
                url: "https://outsource.63-141-249-130.plesk.page/public/api/v1/get-latest-bid-details",
                method: 'POST',
                datatype: "json",
                headers: {
                    'Authorization': `Bearer ${token}`
                },

                data: {
                    "product_id": last_segment,

                },
                success: function(data) {
                    var datas = "";
                    var idshow = data.result.data.id;

                    datas = `
                    <div class="col-12 col-lg-3"></div>
                    <div class="col-12 col-lg-6">
                        <div class="devlop_title">
                            <h3>${data.result.data.category }Details</h3>
                        </div>
                        <div class="devlop_inner">
                            <div class="devlop_box">
                                <div class="devlop_img">
                                    <img class="image.png" src="${data.result.data.app_icon}" height="100" width="100">
                                </div>
                                <div class="devlop_content">
                                    <h5>${data.result.data.id}</h5>
                                    <h6>${data.result.data.product_name}</h6>
                                    <p>${data.result.data.category }</p>
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
                                                    <li>${data.result.data.technology }</li>

                                                </ul>
                                            </div>
                                            <div class="col-12 col-lg-4 p-0">
                                                <ul>
                                                    <li><form><input type="number" id="price" class="form-control" placeholder="₹ ${data.result.data.bid_price  }"></form></li>

                                                </ul>
                                            </div>
                                            <div class="col-12 col-lg-4 ">
                                                <ul>
                                                    <li><form><input type="number" id="duration" class="form-control" placeholder="₹ ${data.result.data.product_duration }"></form></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">

                                <a href="#" class="view_btn" onclick="btn()" >Bid Now</a>

                            </div>
                        </div>
                        <div class="app_content">
                            <p>${data.result.data.description}  </p>




                            <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
                                <a href="#" class="view_btn blue">Done</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-lg-3"></div>
                    `;
                    $('#view').append(datas);

                }

            });
        });

        function btn() {
            var token = localStorage.getItem("token");
            var status = localStorage.getItem("status");
            var full_url = document.URL;
            var url_array = full_url.split('/')
            var last_segment = url_array[url_array.length - 1];
             $.ajax({
                url: "https://outsource.63-141-249-130.plesk.page/public/api/v1/register-user-bids",
                method: 'POST',
                datatype: "json",
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                data: {

                    "product_id": last_segment,
                    "bid_price": $('#price').val(),
                    "duration": $('#duration').val()
                },

                success: function(result) {

                    if(result.code==200){
                        if(status==0){
                        window.location.href="/companyregister/"+last_segment
                        console.log(result);
                        }


                    }
                    else{
                    if(result.message){
                        $("#response").append('<div class="alert alert-danger" role="alert" >'+result.message+'</div>');
                        window.location.href='/taskdetails/'+last_segment
                        }

                    }
                        $("#response").append('<div class="alert alert-danger" role="alert" >'+result.cause+'</div>');

                        console.log(result);
                        //window.location.href="/companyregister/"+last_segment



                },



            });
        }
    </script>
</body>

</html>

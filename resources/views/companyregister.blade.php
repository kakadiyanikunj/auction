@include('header')
@include('alljs')
   <body data-spy="scroll" data-target=".navbar" data-offset="0">
    <div class="bid_wrapper">

     <section class="devlop_wrapper">
        <div class="container bid_container">
            <div class="devlop_title">
                <h3>Company Registration</h3>
            </div>

        <form class="form-sample" id="formdata" >

        @csrf
            <div class="custom_form">
                <div class="row">
                    <div class="col-12">
                        <label>Name:</label>
                         <input type="text" class="form-control  @error('company_name') is-invalid @enderror" id="company_name" placeholder="Enter company Name" name="company_name" value="{{ old('company_name') }}"  >
                            @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-12">
                        <label>Address:</label>
                         <input type="text" class="form-control  @error('address') is-invalid @enderror" id="address" placeholder="Enter company addresss" name="address" value="{{ old('address') }}"  >
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-12">
                        <label>Area:</label>
                         <input type="text" class="form-control  @error('area') is-invalid @enderror" id="area" placeholder="Enter  area" name="area" value="{{ old('area') }}"  >
                            @error('area')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-12">
                        <label>City:</label>
                         <input type="text" class="form-control  @error('city') is-invalid @enderror" id="city" placeholder="Enter city" name="city" value="{{ old('city') }}"  >
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>


                    <div class="col-12">
                        <label>State:</label>
                         <input type="text" class="form-control  @error('state') is-invalid @enderror" id="state" placeholder="Enter state" name="state" value="{{ old('state') }}"  >
                            @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>


                    <div class="col-12 mt-2">
                        <label>Zipcode</label>
                        <input type="number" class="form-control @error('zipcode') is-invalid @enderror" id="zipcode" placeholder="Enter your zipcode " name="zipcode" value="{{ old('zipcode') }}">

                        @error('zipcode')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="col-12">
                        <label>Website:</label>
                         <input type="text" class="form-control  @error('website') is-invalid @enderror" id="website" placeholder="Enter website" name="website" value="{{ old('website') }}"  >
                            @error('website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-12 mt-2">
                        <label>Whatsapp</label>
                        <input type="number" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" placeholder="Enter whatsapp " name="whatsapp" value="{{ old('whatsapp') }}">

                        @error('whatsapp')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="col-12">
                        <label>Fb_page:</label>
                         <input type="text" class="form-control  @error('fb_page') is-invalid @enderror" id="fb_page" placeholder="Enter fb_page" name="fb_page" value="{{ old('fb_page') }}"  >
                            @error('fb_page')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-12">
                        <label>Skype Id:</label>
                         <input type="text" class="form-control  @error('skype') is-invalid @enderror" id="skype" placeholder="Enter Skype Id" name="skype" value="{{ old('skype') }}"  >
                            @error('skype')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-12">
                        <label>Company_size:</label>
                         <input type="number" class="form-control  @error('company_size') is-invalid @enderror" id="company_size" placeholder="Enter Company Size" name="company_size" value="{{ old('company_size') }}"  >
                            @error('company_size')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>




                </div>
                <br>
                <div class="col-md-12">
                    <div class="form-group">

                        <a href="#" id="submit" class="btn btn-primary">Register</a>
                    </div>
                </div>
                <div class="mb-5">
                    <?php
                    $uri = $_SERVER['REQUEST_URI']; //it will print full url
                    $uriArray = explode('/', $uri); //convert string into array with explode
                    $id = $uriArray[2]; //Print first array value
                    ?>


                </div>

            </div>
        </form>
            <div id="response"></div>
        </div>
    </section>

    </div>
    <!-- jQuery-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>


        $(document).ready(function(){
            $("#submit").click(function(){
                var full_url = document.URL;
                var url_array = full_url.split('/')
                var last_segment = url_array[url_array.length - 1];
                var token = localStorage.getItem("token");
                $.ajax({
                url:"https://outsource.63-141-249-130.plesk.page/public/api/v1/company-register",
                method:'POST',
                datatype:"json",
                headers: {
                    'Authorization': `Bearer ${token}`
                },
                data: {
                    "company_name":$('#company_name').val(),
                    "address":$('#address').val(),
                    "area":$('#area').val(),
                    "city":$('#city').val(),
                    "state":$('#state').val(),
                    "zipcode":$('#zipcode').val(),
                    "website":$('#website').val(),
                    "whatsapp":$('#whatsapp').val(),
                    "fb_page":$('#fb_page').val(),
                    "skype":$('#skype').val(),
                    "company_size":$('#company_size').val(),

                 },

                success:function(result){
                    console.log(result);

                    if(result.code == 200){
                        $("#response").append('<div class="alert alert-danger" role="alert" >'+result.message+'</div>');
                        window.location.href='http://127.0.0.1:8000/taskdetails/'+last_segment;
                    }else{
                        $("#response").append('<div class="alert alert-danger" role="alert" > '+result.cause+'please register your details.</div>');
                    }
                },



                });
            });
        });
    </script>

</body>
</html>

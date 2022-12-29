@include('header')
@include('alljs')
   <body data-spy="scroll" data-target=".navbar" data-offset="0">
    <div class="bid_wrapper">
    
     <section class="devlop_wrapper">
        <div class="container bid_container">
            <div class="devlop_title">
                <h3>Registration</h3>
            </div>

        <form class="form-sample" id="formdata" >


            <div class="custom_form">
                <div class="row">
                    <div class="col-12">
                        <label>Name:</label>
                         <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="Enter your Name" name="name" value="{{ old('name') }}"  >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-12 mt-2">
                        <label>Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your Email address " name="email" value="{{ old('email') }}">


                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                    <div class="col-12 mt-2">
                        <label>Mobile</label>
                        <input type="number" class="form-control @error('mobile') is-invalid @enderror" id="mobile" placeholder="Enter your mobile number" name="mobile" value="{{ old('mobile') }}">

                        @error('mobile')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="col-12 mt-2">
                        <label>Password:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" name="password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="col-12 mt-2">
                        <label>Comform Password:</label>
                        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" id="confirm_password" placeholder="conform your password" name="confirm_password">

                        @error('confirm_password')
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

                    <a href="http://127.0.0.1:8000/login/{{ $id }}">You Have Already Register? Click Here.</a>
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
                $.ajax({
                url:"https://outsource.63-141-249-130.plesk.page/public/api/v1/user-register",
                method:'POST',
                datatype:"json",

                data: {
                    "name":$('#name').val(),
                    "email":$('#email').val(),
                    "mobile":$('#mobile').val(),
                    "password":$('#password').val(),
                    "confirm_password":$('#confirm_password').val()
                 },

                success:function(result){
                    console.log(result);

                    if(result.code == 200){

                        window.location.href='http://127.0.0.1:8000/login/'+last_segment;
                    }else{
                        $("#response").append('<div class="alert alert-danger" role="alert" > please register your details.</div>');
                    }
                },



                });
            });
        });
    </script>

</body>
</html>

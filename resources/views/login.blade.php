@include('header')
@include('alljs')
   <body data-spy="scroll" data-target=".navbar" data-offset="0">
    <div class="bid_wrapper">

    <!-- start monile view navigation -->
    
    <!-- end monile view navigation -->

    <!-- start company information -->
     <section class="devlop_wrapper">
        <div class="container bid_container">
            <div class="devlop_title">
                <h3>Login</h3>
            </div>
            <form class="form-sample"  >
                @csrf
                <pre>
                @php

                @endphp
                </pre>
                <div class="custom_form">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <label>Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your Email address " name="email" value="{{ old('email') }}"required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        <div class="col-12 mt-2">
                            <label>Password:</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" name="password"required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="#" id="login" class="btn btn-primary">Login</a>
                        </div>
                    </div>

                    <div class="mb-5">
                        <?php
                        $uri = $_SERVER['REQUEST_URI']; //it will print full url
                        $uriArray = explode('/', $uri); //convert string into array with explode
                        $id = $uriArray[2]; //Print first array value
                        ?>

                        <a href="http://127.0.0.1:8000/profile/{{ $id }}">You Have Not Have register?? Click Here.</a>
                    </div>



                </div>
            </form>
            <div id="response"></div>
        </div>
    </section>
    <!-- end company information -->
    </div>
    <!-- jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#login").click(function(){
                var full_url = document.URL;
                var url_array = full_url.split('/')
                var last_segment = url_array[url_array.length - 1];
                $.ajax({
                url:"https://outsource.63-141-249-130.plesk.page/public/api/v1/login",
                method:'POST',
                datatype:"json",

                data: {
                    "email":$('#email').val(),
                    "password":$('#password').val()
                 },

                success:function(result){
                    console.log(result.result.token);

                    if(result.code == 200){
                        localStorage.setItem('token',result.result.token);
                        localStorage.setItem('status',result.result.status);
                       window.location.href='http://127.0.0.1:8000/bidview/'+last_segment;
                    }else{
                        $("#response").append('<div class="alert alert-danger" role="alert" >you are not valid user, please register your details.</div>');
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.log('Error in Operation');
                }


                });
            });
        });
    </script>
</body>
</html>

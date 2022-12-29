@include('header')
@include('alljs')

   <body data-spy="scroll" data-target=".navbar" data-offset="0">
    <div class="bid_wrapper">


    <!-- end monile view navigation -->
    <!-- start mobile dewvlopment sectin -->
    <section class="devlop_wrapper">
        <div class="container">
            <div class="row" id="view">

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

             $.ajax({
                url: "https://outsource.63-141-249-130.plesk.page/public/api/v1/get-product-details",
                method: 'POST',
                dataType: "json",
                data: {
                    "id": last_segment
                },
                success: function(data) {

                    var datas = "";
                    datas = `
                    <div class="col-12 col-lg-3"></div>
                    <div class="col-12 col-lg-6">
                        <div class="devlop_title">
                            <h3>${data.result.category }Details</h3>
                        </div>
                        <div class="devlop_inner">
                            <div class="devlop_box">
                                <div class="devlop_img">
                                    <img class="img-fluid" src="${data.result.app_icon}"height="100" width="100">

                                </div>
                                <div class="devlop_content">
                                    <h5>${data.result.id}</h5>
                                    <h6>${data.result.name}</h6>
                                    <p>${data.result.category }</p>
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
                                                    <li>${data.result.technology }</li>

                                                </ul>
                                            </div>
                                            <div class="col-12 col-lg-4 p-0">
                                                <ul>
                                                    <li>
                                                        <form>${data.result.price }</form>
                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="col-12 col-lg-4 ">
                                                <ul>
                                                    <li>
                                                        <form>${data.result.duration }</form>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-center">
                                <a href="/login/${data.result.id}" class="view_btn">view</a>
                            </div>
                        </div>
                        <div class="app_content">
                            <p>Ludo is fun to play a multiplayer board game that can be played between 2, 3 or 4 players. It is
                                the most popular and fun game to play with family and friends. Ludo is a mind refreshing game
                                with its lucky dice rolls and strategical gameplay. This interesting 2D Ludo game has been
                                around us for a long time as the best game to play in our spare time</p>
                            <p>How the Ludo game works:<br>Ludo game starts with four tokens placed in each player's starting
                                box. A dice is rolled in turns by each player during the game. The player's token will be placed
                                on the starting point when a 6 is rolled on the dice. The main goal of the game is to take all 4
                                tokens inside the HOME area before the other opponents.</p>
                            <p>Basic rules of Ludo game:</p>
                            <ul>
                                <li>- A token can start to move only if the dice rolled is a 6.</li>
                                <li>- Each player gets a turn wise chance to roll the dice. And if the player rolls a 6, they
                                    will get another chance to roll the dice again.</li>
                                <li>- All the tokens must reach the center of the board to win the game.</li>
                                <li>- The token move clock-wise according to the number of rolled dice.</li>
                                <li>- Knocking out other's token will give you an extra chance to roll the dice again.</li>
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
    </script>
</body>
</html>

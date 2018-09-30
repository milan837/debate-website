<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Debate</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./css/index.css" />
    <script src="./jquery/jquery.js"></script>
    <script src="./jquery/jquery-ui.js"></script>
    <script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags,
    })
  } );
  
  $(document).ready(function(){
      $("#search-button").click(function(){
          $("#tags").toggle("fade");
      });
 });
  $(document).ready(function(){
      $("#user-img-id").click(function(){
          $(".user-menu").toggle("size");
      });
  });
  </script>
</head>

<body>
    <!-- Header section -->
    <header>
        <div class="header--left">
            <div class="header--left-left">
                <!-- title -->
                <h3><a href="#">Debate</a></h3>
            </div>
            <!-- header top-navigation bar -->
            <div class="header--left-right">
                <ul class="categories">
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Entertainment</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">All Categories</a></li>
                </ul>
            </div>
        </div>
        <!-- Items in the right side of the header -->
        <div class="header--right">
            <div class="search-div">
                <button id="search-button" style="height:50px;width:50px; border-radius:10px;"><img src="./images/search-icon.png" ></button>
                <div class="ui-widget" >
                    <label for="tags" ></label>
                    <input id="tags"style="display:none;"type="search" placeholder="Search out what you want">
                </div>
            </div>
            <div class="user-div">
            <button id="user-img-id"><img src="./images/user-icon-temp.png"></button>
                </div>
                <div class="user-menu" style="display:none;">
                    <div id="user-menu1">
                        <img src="./images/user-icon-temp.png">
                    </div>
                    <div id="user-menu2">
                        <div id="setting-img">
                            <a href="#"><button><img src="./images/icons8_Settings_30px.png"></button></a>
                        </div>
                        <div id="squad-button">
                            <a href="#"><button>Squads</a></button>
                        </div>
                    </div>
                    <div id="user-menu3">
                        <button>Log Out</button>    
                    <div>
                </div>
           
        </div>

    </header>


        <!-- top trending hashtags section -->
        <section class="debate-section0">
            <div class="trending-main">
                <div class="trending">
                    <p>Top Trending Hashtags</p>
                </div>
                <div class="trendinghashtags">
                    <button class="hashtags"> #Hashtag1</button>
                    <button> #Hashtag2</button>
                    <button> #Hashtag3</button>
                    <button> #Hashtag4</button>
                    <button> #Hashtag5</button>
                    <button> #Hashtag6</button>
                    <button> #Hashtag7</button>
                    <button> #Hashtag8</button><br>
                    <button> #Hashtag9</button>
                    <button> #Hashtag10</button>
                    <button> #Hashtag11</button>
                    <button> #Hashtag12</button>
                    <button> #Hashtag13</button>
                    <button> #Hashtag14</button>
                </div>
            </div>
        </section>

<center>
    <div class="main_div">
    <?php  for($i=0; $i<20; $i++){ ?>
        <a href="chatbox.php">  <div class="debates-div">
                       <div class="debates1">
                            <div class="debates-content">
                                <div class="debates-left">
                                    <div class="debates-left--left">
                                        <img src="./images/icons8_Male_User_50px.png">
                                    </div>
                                    <div class="debates-left--right">
                                        <text class="start-time"> 12 minutes ago</text>
                                    </div>

                                </div>
                                <div class="debates-right">
                                    <img src="./images/icons8_Male_User_50px.png"><br>
                                </div>

                                <p class="debate-topic">#messiVronaldo in Champions League</p><br>

                                <div class="debate-main">

                                    <div class="team">
                                        <text class="teamA-name">Team A</text><br>
                                        <text class="squad-name">Messi Guys</text><br>
                                        <text class="live-score">Live Scored</text><br><br>

                                    </div>
                                    <div class="scoreA">
                                        <text class="scoreA-text">50%</text>
                                    </div>
                                </div>
                                <div class="debate-main">


                                    <div class="team">
                                        <text class="teamB-name">Team B</text><br>
                                        <text class="squad-name">Ronaldo Guys</text><br>
                                        <text class="live-score">Live Scored</text><br>

                                    </div>
                                    <div class="scoreB">
                                        <text class="scoreB-text">50%</text>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
            </div>
            </a>

    <?php } ?> 
    </div>
</center>

</body>

</html>
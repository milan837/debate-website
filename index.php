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
        $(function () {
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
            $("#tags").autocomplete({
                source: availableTags,
            })
        });

        $(document).ready(function () {
            $("#search-button").click(function () {
                $("#tags").toggle("fade");
            });
        });
        $(document).ready(function () {
            $("#user-img-id").click(function () {
                $(".user-menu").toggle("size");
            });
        });

        $(document).ready(function () {
            $('.aside-main-container').click(function () {
                $('.aside-full-container').toggle("slide");
            });
        });

        $(document).ready(function () {
            $('.aside-main-container2').click(function () {
                $('.aside-full-container').toggle("slide");
            });
        });

        $(document).ready(function () {
            $('input[type="checkbox"]').click(function () {
                if ($(this).prop("checked") == false) {
                    $('.toggle-off-div').toggle("fade");
                }

            });
        });

        $(document).ready(function () {
            $('input[type="checkbox"]').click(function () {
                if ($(this).prop("checked") == true) {
                    $('.online-contacts-div').toggle("fade");
                }
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
                <button id="search-button" style="height:50px;width:50px; border-radius:10px;"><img src="./images/search-icon.png"></button>
                <div class="ui-widget">
                    <label for="tags"></label>
                    <input id="tags" style="display:none;" type="search" placeholder="Search out what you want">
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
                <?php  for($i=0; $i<15; $i++){ ?>
                <button class="hashtags"> #football</button>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="aside-main-container">
        <button>Online</button>
    </div>

    <!-- Aside bar/online -->
    <aside>
        <div class="full-aside">

            <div class="aside-full-container" style="display:none;">

                <div class="aside-container1">
                    <div>
                        <p class="online-users">25 Friends are active</p>
                    </div>
                    <div class="online-status">
                        <label class="switch">
                            <input id="availability" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="aside-main-container2">
                    <button> Online</button>
                </div>
                <div style="display: inline-block" class="aside-container2">
                    <?php  for($i=0; $i<3; $i++){ ?>
                    <div class="online-contacts-div" style="display:none;">
                        <h3 class="online-contacts">Some People</h3>
                        <?php } ?>
                    </div>

                    <div class="toggle-off-div" style="display:block">
                        <p id="toggle-off-text">Turn on your online status</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Center -->

    <center>
        <div class="main_div">
            <?php  for($i=0; $i<15; $i++){ ?>
            <a href="debate-detail.php">
                <div class="debates-div">
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
    <footer class="debate-footer">
        <div class="debate-footer">
            <button>Create <br>debate</button>
        </div>
    </footer>
</body>

</html>
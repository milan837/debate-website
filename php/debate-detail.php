<div class="debate-detail-div">
    <div class="debate-detail-upperContents">
        <h1 class="debate-topic">Messi vs Ronaldo in champions league</h1>
        <h2>Hashtags</h2>
        <div class="trendinghashtags">
                    <?php  for($i=0; $i<3; $i++){ ?>
                    <button class="hashtags"> #football</button>
                    <?php } ?>
        </div>
            <div class="start-time"><b>Started 5 minutes  ago</b></div>
            <div>
                <p>Team A is WINNING, considering the score<p>
                <div class="join-debate">
                    <button>Join Debate</button>
                </div>
            </div>
         </div>
</div>
<center>
    <div class="total-team">
        <div class="teamA-details">
            <h3>Messi Team</h3>
            <div class="teamA-total-div">
                <h4 class="teamA-total">Total members<p class="total-members">20</p></h4>
            </div>
            
            <?php  for($i=0; $i<1; $i++){ ?>
                <div class="debate-members">
                    <div class="debate-members--users">
                            <img src="./images/user-icon-temp.png">
                            <div class="badges-user-div">
                                <p>Badges<br><p class="badges-user">45</p></p>
                            </div>
                            <div class="level-user-div">
                                <p>Level<br><p class="level-user">10</p></p>    
                            </div>           
                        <div>
                            <p class="user-name">Some Name</p>
                            <p id="totalParticipation">Total no. of debates</p>
                            <p class="total-debate-part">50</p>
                        </div>
                        <div>
                            <button id="add-to-squad">Add to Squad</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <div>
        <div class="teamB-details">
            <h3>Ronaldo Team</h3>
            <div class="teamB-total-div">
                <h4 class="teamB-total">Total members<p class="total-members">20</p></h4>
            </div>
                <?php  for($i=0; $i<1; $i++){ ?>
                    <div class="debate-members2">
                    <div class="debate-members--users2">
                            <img src="./images/user-icon-temp.png">
                            <div class="badges-user-div2">
                                <p>Badges<br><p class="badges-user2">45</p></p>
                            </div>
                            <div class="level-user-div2">
                                <p>Level<br><p class="level-user2">10</p></p>    
                            </div>           
                        <div>
                            <p class="user-name2">Some Name</p>
                            <p id="totalParticipation2">Total no. of debates</p>
                            <p class="total-debate-part2">50</p>
                        </div>
                        <div>
                            <button id="add-to-squad2">Add to Squad</button>
                        </div>
                    </div>
                </div>
                <?php } ?>
        </div>
     </div>
</center>

    <!-- Aside bar/online -->
    <aside>
    
        <div class="full-aside">
        <div class="aside-main-container">
                    <button> Online</button>
                </div>
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
                <div class="toggle-off-div" style="display:block">
                        <p id="toggle-off-text">Turn on your online status</p>
                    </div>
                <div style="display: inline-block" class="aside-container2">
                    <?php  for($i=0; $i<3; $i++){ ?>
                    <div class="online-contacts-div" style="display:none;">
                        <h3 class="online-contacts">Some People</h3>
                        <?php } ?>
                    </div>

                    
                </div>
            </div>
        </div>
    </aside>

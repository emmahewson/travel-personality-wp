<?php get_header(); ?>

<body>
    <!-- Background Gradient & Logo -->
    <div id="background-div">
        <div class="flex-center" id="logo-div"><img src="<?php echo get_template_directory_uri(); ?>/img/quiz_logo_01.svg" alt="The Travel Personality Quiz"></div>

        <!-- Welcome -->
        <div class="text-centre" id="welcome-div">
            <h1 class="small-heading heading-font">WELCOME!</h1>
            <p>Hey there traveller! Are you looking to get off the beaten-track but have no idea where to go? Are you a
                thrill-seeker or an animal lover? Do you love the buzz of the city or the total silence of
                the
                deepest wilderness?
                <br><br>Take The Travel Personality Quiz to find out and get personalised recommendations
                for your next
                adventure!
                <br><br>Go on... tell us your name and hit the button... you know you want to!
            </p>
            <!-- Name Input & Start Game -->
            <div class="text-centre" id="start-button-div">
                <form id="start-form" method="POST" onsubmit="startGame(event)">
                    <input class="text-centre" id="name-input" type="text" placeholder="Enter your name"
                        aria-label="Enter your name" minlength="2" maxlength="10">
                    <input type="submit" class="btn-game-main weight-500" id="start-game-btn" value="Start Quiz">
                </form>
            </div>
        </div>

        <!-- Game -->
        <div class="text-centre hidden" id="game-div">
            <div class="" id="progress-div">
                <p id="progress-text"></p>
                <div class="progressbar" id="progressbar-fg"></div>
                <div class="progressbar" id="progressbar-bg"></div>
            </div>

            <div class="" id="answer-div-hide">
                <h2 class="weight-500 body-font" id="question-text">Question</h2>
                <div id="answer-div">
                    <button class="btn-choice weight-500 flex-center">Answer 1</button>
                    <button class="btn-choice weight-500 flex-center">Answer 2</button>
                    <button class="btn-choice weight-500 flex-center">Answer 3</button>
                    <button class="btn-choice weight-500 flex-center">Answer 4</button>
                    <button class="btn-choice weight-500 flex-center">Answer 5</button>
                    <button class="btn-choice weight-500 flex-center">Answer 6</button>
                </div>
            </div>
            <div class="hidden" id="answer-tie-div-hide">
                <h2 class="weight-600 body-font" id="tie-break-title">Tie Breaker!</h2>
                <p id="tie-break-text">Uh oh! It seems like you have a split personality!<br>Choose the photo that looks
                    most like your kind of holiday...</p>
                <div class="flex-center" id="answer-tie-div">
                    <button class="btn-choice-tie question-photo culture hidden" id="tie-btn1"
                        aria-label="image of girl standing in front of ancient statues" data-type="culture"></button>
                    <button class="btn-choice-tie question-photo foodie hidden" id="tie-btn2"
                        aria-label="image of girl eating tasty food and smiling" data-type="food"></button>
                    <button class="btn-choice-tie question-photo people hidden" id="tie-btn3"
                        aria-label="image of girl standing on a busy city street" data-type="people"></button>
                    <button class="btn-choice-tie question-photo remote hidden" id="tie-btn4"
                        aria-label="image of man standing in an vast empty valley" data-type="remote"></button>
                    <button class="btn-choice-tie question-photo thrill hidden" id="tie-btn5"
                        aria-label="image of man on a tight-rope high in a ravine" data-type="thrill"></button>
                    <button class="btn-choice-tie question-photo wildlife hidden" id="tie-btn6"
                        aria-label="image of man holding out food to a small alpaca" data-type="wildlife"></button>
                </div>
            </div>


            <div class="" id="restart-button-div">
                <button class="btn-game-main" id="restart-game-btn">Restart Quiz</button>
            </div>
        </div>

        <!-- Results -->
        <div class="hidden" id="results-div">
            <!-- Personality Results -->
            <div class="results-container" id="personality-div">
                <h1 class="text-centre uppercase small-heading heading-font" id="personality-heading">Personality Heading</h1>
                <div id="personality-stats-div">
                    <h2 class="text-centre heading-font">YOUR VITAL STATISTICS</h2>
                    <div class="flex-center" id="stats-key-chart-div">

                        <div id="pie-chart">
                            <canvas id="myChart"></canvas>
                        </div>
                        <div class="uppercase">
                            <div class="stat-key-div">
                                <div class="stat-key"></div>
                                <p><span class="stat-type"></span><span
                                        class="stat-percent weight-600">0%</span></p>
                            </div>
                            <div class="stat-key-div">
                                <div class="stat-key"></div>
                                <p><span class="stat-type"></span><span
                                        class="stat-percent weight-600">0%</span></p>
                            </div>
                            <div class="stat-key-div">
                                <div class="stat-key"></div>
                                <p><span class="stat-type"></span><span
                                        class="stat-percent weight-600">0%</span></p>
                            </div>
                            <div class="stat-key-div">
                                <div class="stat-key"></div>
                                <p><span class="stat-type"></span><span
                                        class="stat-percent weight-600">0%</span></p>
                            </div>
                            <div class="stat-key-div">
                                <div class="stat-key"></div>
                                <p><span class="stat-type"></span><span
                                        class="stat-percent weight-600">0%</span></p>
                            </div>
                            <div class="stat-key-div">
                                <div class="stat-key"></div>
                                <p><span class="stat-type"></span><span
                                        class="stat-percent weight-600">0%</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div>
                        <p id="personality-text-p1"></p>
                        <br>
                        <p id="personality-text-p2"></p>
                        <br>
                        <p id="personality-text-p3"></p>
                    </div>
                    

            </div>

            <!-- Country Results - General -->
            <div class="results-container" id="country-info-div">
                <div class="text-centre heading-font">
                    <h2 id="country-heading">WE RECOMMEND:</h2>
                    <h3 id="country-heading-place" class="uppercase">Winning Country</h3>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/" id="results-image" alt="Mt Cook and Lake Tekapo, New Zealand">
                <p id="country-text-para1"></p>
                <br>
                <p id="country-text-para2"></p>
            </div>
            <!-- Country Results - Highlights -->
            <div class="results-container" id="country-highlights-div">
                <h2 class="text-centre small-heading heading-font">HIGHLIGHTS</h2>
                <p class="text-centre">Click on a pin to find out more about what <span id="highlight-country-name"></span> has to offer!</p>
                <div class="results-container" id="country-map-div">
                    <div id="map"></div>
                    <div id="highlight-info-div" class="hidden">
                        <div id="highlight-content-div">
                            <h3 class="weight-700 body-font" id="highlight-title">Highlight name</h3>
                            <p id="highlight-text"></p>
                        </div>
                        <div class="flex-center" id="highlight-photo-div">
                            <img class="highlight-photo" id="highlight-photo-1" src="<?php echo get_template_directory_uri(); ?>/" alt="Highlight Photo 1">
                            <img class="highlight-photo" id="highlight-photo-2" src="<?php echo get_template_directory_uri(); ?>/" alt="Highlight Photo 2">
                            <img class="highlight-photo" id="highlight-photo-3" src="<?php echo get_template_directory_uri(); ?>/" alt="Highlight Photo 3">
                            <img class="highlight-photo" id="highlight-photo-4" src="<?php echo get_template_directory_uri(); ?>/" alt="Highlight Photo 4">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Restart Game Button -->
            <div class="text-centre" id="start-again-button-div">
                <p class="weight-600">Want to have another go at the quiz?</p>
                <button class="btn-game-main" id="start-again-btn">Start Again</button>
            </div>
        </div>

<?php get_footer(); ?>
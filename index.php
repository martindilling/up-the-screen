<?php

$seed = isset($_GET['seed']) ? $_GET['seed'] : '1';

$imgSide = function ($side, $seed, $width, $height, $class) {
    $attrSrc    = "src='image.php?side={$side}&seed={$seed}'";
    $attrAlt    = "alt='{$side} seed: {$seed}'";
    $attrClass  = "class='{$class}'";
    $attrWidth  = "width='{$width}'";
    $attrHeight = "height='{$height}'";

    return "<img {$attrSrc} {$attrAlt} {$attrClass} {$attrWidth} {$attrHeight}>";
};

$imgLongSide = function ($seed) use ($imgSide) {
    return $imgSide('long', $seed, 825, 102, 'side side__long');
};

$imgShortSide = function ($seed) use ($imgSide) {
    return $imgSide('short', $seed, 542, 102, 'side side__short');
};

?>

<!doctype html>
<html lang="en" class="landscape">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        <div class="book">


<!-- ==========================================================================
   Title page
   ========================================================================== -->

            <div class="page">
                <header class="title">
                    Up the screen
                </header>
                <section>
                    <div class="row clearfix">
                        <div class="col2">
                            <h1>About</h1>
                            <p>
                                This is my entry for the <a href="http://ludumdare.com/" target="_blank">Ludum Dare 31</a>.
                                I decided to make a boardgame after struggling way to long to find a good idea,
                                but I hope this ended well anyway :)
                            </p>
                            <p>
                                <b>Enjoy :D</b>
                            </p>
                            <p>
                                <i>
                                    - by Martin Dilling-Hansen &lt;martindilling@gmail.com&gt;
                                    <br>
                                    <a href="http://martindilling.com" target="_blank">http://martindilling.com</a>
                                    <br>
                                    <a href="http://ludumdare.com/compo/ludum-dare-31/?action=preview&uid=40236">This entry on Ludum Dare site</a>
                                </i>
                            </p>
                        </div>
                        <div class="col2">
                            <h1>Getting started</h1>
                            <p>
                                Print - Cut - Play
                            </p>
                            <p>
                                Yeah I'm sorry, it requires a little efford on your side to try out this game,
                                but I hope it's worth it ;)
                                <br>
                                You need to print the Playfield, Game pieces and as many of the Action Panels
                                you want to cut out (you need 3 of each kind per player plus some for the stack
                                to keep having 3 on hand). You also need a dice.
                                <br>
                                And it will probably also be a good idea to read the rules, or make some up yourself
                                if that's how you roll ;)
                            </p>
                        </div>
                    </div>
                    <div style="text-align:center;">
                        <br>
                        <img src="images/picture.jpg" alt="Picture of the game" width="653" height="367">
                    </div>
                </section>
            </div>


<!-- ==========================================================================
   Rules
   ========================================================================== -->

            <div class="page">
                <header class="title">
                    Rules
                </header>
                <section>
                    <div class="col2">
                        <p>
                            Up the screen is a board game for 2-4 players at all ages.
                            The goal is simple: you start at the bottom of the screen,
                            and the goal is to get to your personal goal at the top.
                        </p>
                        <p>
                            The board has two dimensions: the inner dimension and the
                            outer dimension. The inner dimension consists of the fields
                            where you play the actual game and move your game pieces.
                            The outer dimension is the boarder of the screen,
                            where you place the Action Panels.
                        </p>
                        <p>
                            The Action Panels are the long “cards” with actions, which you
                            place throughout the game. There are two different types:
                            the long ones, which can be placed on the top and bottom of
                            the board, and the short ones, which can be placed at the sides.
                            The Action Panels differs as you place them either on one side
                            or the other, since you will have to turn them around for them
                            to match the borders. An Arrow Up (move one field forward) will
                            thereby be an Arrow Down if you place it at the other side of the board.
                        </p>
                        <p>
                            At the beginning of the game, each player takes three Action Panels
                            of each kind – thereby six in all. Every time a player has used
                            an Action Panel, the player must draw a new one to its hand, so that
                            every player has three of each Action Panel type at all times.
                            <br>
                            To begin the game, place your game piece anywhere at the bottom line
                            of the screen, pointing either left or right. The goal for each player
                            is now to get to the top field above them - meaning the field in the
                            top horizontal row, but in the same vertical row. You can mark
                            this with the goal pieces.
                            <br>
                            The first player (you might choose this by throwing the dice and
                            letting the highest number start) throws the dice and moves their
                            game piece in the direction it is pointing. The arrow you land on
                            indicates on which border you shall place an Action Panel
                            (placing one is obligatory). You have three opportunities – the three
                            matching Action Panels you hold in your hand – and you will want to
                            choose the one that either gives the best outcome for you or the
                            worst for your enemies – preferably both!
                        </p>
                    </div>
                    <div class="col2">
                        <p>
                            If you place a horizontal Action Panel, the actions will work
                            vertically – so if you stand in the 3rd vertical row, the 3rd
                            field on the Action Panel will apply to you, and so with all
                            other players on the board. The actions will only apply at the
                            exact time the panel is placed – after that, the panel is
                            discarded and the game goes on (put all discarded Action Panels
                            in a pile, so that you can mix them together and draw from it
                            if you run low on Action Panels). If it gets nessesary the actions
                            will get applied clockwise starting with the player placing the Action Panel.
                            <br>
                            For example, you might want to give yourself an arrow pointing
                            upwards, so that you will get closer to your goal, and give your
                            enemy a skip turn. You can however also risk to sit with three
                            Action Panels, where the only choices you have are to either do
                            something bad for yourself or good for your enemy. The more players
                            you are, the more difficult is it to do something that
                            will only be good for you.
                        </p>
                        <p>
                            It's not possible to be two players on one field, if you move to a field
                            where a player is standing, you knock thatplayer down on the row below.
                            (the exception to this is if cause the first row).
                        </p>
                        <p>
                            When you reach the top row, your goal is merely to hit your goal
                            field, while trying not to be thrown farther down the
                            board by your emenies.
                        </p>
                    </div>
                </section>
            </div>


<!-- ==========================================================================
   Actions
   ========================================================================== -->

            <div class="page">
                <header class="title">
                    Actions
                </header>
                <section>
                    <p>
                        There are only three different kinds of actions on the Action Panels.
                        Below they are listed with their icon and a description of their effect.
                    </p>
                    <hr>
                    <p>
                        <img src="images/right.png" alt="Arrow action">
                        Move affected players in the arrows direction.
                    </p>
                    <p>
                        <img src="images/skip.png" alt="Skip action">
                        Affected players are skipped at theur turn.
                    </p>
                    <p>
                        <img src="images/swap.png" alt="Swap action">
                        Affected players can swap places with another player of their choice.
                        <span style="font-size: 0.8em">(Here it can be nessesary to go clockwise and let players do their swap one at a time)</span>
                    </p>
                    <hr>
                    <p>
                        If you want new Action Panels, you can define a start seed in the url by adding
                        <a href="http://up-the-screen.martindilling.com/?seed=1337">?seed=yourseednumber</a>.
                        <br>
                        You can see the seeds used in the header of each page with the Action Panels.
                    </p>
                </section>
            </div>


<!-- ==========================================================================
   Playfield
   ========================================================================== -->

            <div class="page">
                <header>
                    Playfield <small>This is where the action happenes!</small>
                </header>
                <section class="center">
                    <br><br><br><br>
                    <img src="images/playfield.png" alt="Playfield" width="825" height="542">
                </section>
            </div>


<!-- ==========================================================================
   Game pieces
   ========================================================================== -->

            <div class="page">
                <header>
                    Game pieces <small>Four colorful game pieces to play with</small>
                </header>
                <section class="center">
                    <br><br><br><br>
                    <img src="images/game-pieces.png" alt="Game Pieces" width="215" height="151">
                </section>
            </div>


<!-- ==========================================================================
   Long Action Panels
   ========================================================================== -->

            <div class="page"> <?php  $startSeed = 1+$seed; $count = 6;  ?>
                <header>
                    Long Action Panels <small>Seeds: <?= $startSeed . '-' . ($startSeed+$count-1) ?></small>
                </header>
                <section class="center">
                    <?php foreach (range(1, $count) as $index): ?>
                        <?= $imgLongSide($startSeed+$index-1) ?>
                    <?php endforeach; ?>
                </section>
            </div>


            <div class="page"> <?php  $startSeed = 7+$seed; $count = 6;  ?>
                <header>
                    Long Action Panels <small>Seeds: <?= $startSeed . '-' . ($startSeed+$count-1) ?></small>
                </header>
                <section class="center">
                    <?php foreach (range(1, $count) as $index): ?>
                        <?= $imgLongSide($startSeed+$index-1) ?>
                    <?php endforeach; ?>
                </section>
            </div>


            <div class="page"> <?php  $startSeed = 13+$seed; $count = 6;  ?>
                <header>
                    Long Action Panels <small>Seeds: <?= $startSeed . '-' . ($startSeed+$count-1) ?></small>
                </header>
                <section class="center">
                    <?php foreach (range(1, $count) as $index): ?>
                        <?= $imgLongSide($startSeed+$index-1) ?>
                    <?php endforeach; ?>
                </section>
            </div>


            <div class="page"> <?php  $startSeed = 19+$seed; $count = 6;  ?>
                <header>
                    Long Action Panels <small>Seeds: <?= $startSeed . '-' . ($startSeed+$count-1) ?></small>
                </header>
                <section class="center">
                    <?php foreach (range(1, $count) as $index): ?>
                        <?= $imgLongSide($startSeed+$index-1) ?>
                    <?php endforeach; ?>
                </section>
            </div>


<!-- ==========================================================================
   Short Action Panels
   ========================================================================== -->

            <div class="page"> <?php  $startSeed = 1+$seed; $count = 12;  ?>
                <header>
                    Short Action Panels <small>Seeds: <?= $startSeed . '-' . ($startSeed+$count-1) ?></small>
                </header>
                <section class="center">
                    <?php foreach (range(1, $count) as $index): ?>
                        <?= $imgShortSide($startSeed+$index-1) ?>
                    <?php endforeach; ?>
                </section>
            </div>


            <div class="page"> <?php  $startSeed = 13+$seed; $count = 12;  ?>
                <header>
                    Short Action Panels <small>Seeds: <?= $startSeed . '-' . ($startSeed+$count-1) ?></small>
                </header>
                <section class="center">
                    <?php foreach (range(1, $count) as $index): ?>
                        <?= $imgShortSide($startSeed+$index-1) ?>
                    <?php endforeach; ?>
                </section>
            </div>


        </div>


        <!-- Scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

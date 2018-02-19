<html>
    
    
    
    <head>
        <meta charset = "utf-8"/>
        <title>Irais Gopar: Random website</title>
        
        <link href ="style/style.css" rel =" stylesheet" type = "text/css"/>
    </head>
    
    
    <body>
        <header>
            <h1 style="font-size:60px;">Music of the Day Plus a Quote</h1>
        </header>
        <!--num = rand(1,3);-->
        <!--num = rand (0,3);-->

       
    <?php
    play();

        // $quotes = array("Believing in yourself.","Cultivating a success mindset.", "Overcoming procrastination.", "Not making excuses.");
        
        
        function playStudy($num, $x)
        {
            echo "<h1>You are listening to the Study playList!</h1> </br> </br>";
            $study = array('1.mp3','2.mp3','3.mp3','4.mp3','5.mp3');
            $quotes = array("<p>Whatever you are, be a good one.</br><i>-Abraham Lincoln</i></p>","<p>If you dream it, you can do it.</br><i>-Walt Disney</i></p>", "<p>Never, never, never give up.</br><i>-Winston Churchill.</i></p>", "<p>Action is the foundational key to all success.</br><i>-Pablo Picasso</i></p>");
            echo "<h2>Your random quote is: </h2></br> </br>";
            echo $quotes[$x];
          echo "<audio autoplay loop>
                    <source src= music/study/$study[$num] type=audio/mpeg>
                    Your browser does not support the audio element.
                    </audio>";
                    // "<audio autoplay>
                    // <source src= music/.$study[$num]. type=audio/mpeg>
                    // Your browser does not support the audio element.
                    // </audio>";
           // echo $quotes[0];
                    
        }
        function playRandom($num, $x)
        {
            echo "<h1>You are listening to the Random Playlist! Enjoy!</h1> </br> </br>";
            $pics = array("bridge.jpg", "buck-full-moon.jpg","cherryBloddem.jpg","korea.jpg","lowTides.jpg","paris2.jpg","rain.png","snow.png","waterfall.gif");
            $random = array('music/random/1.mp3','music/random/2.mp3','music/random/NumaNuma.mp3','music/random/HowFarIllGo.mp3','music/random/DanzaKuduro.mp3');
            //$i = rand(0,3);
            $q2 = array("<p>Be yourself, Everyone else is already taken. </br><i> -OSCAR WILDE</i></p>","<p>SOMETIMES YOU WAKE UP. SOMETIMES THE FALL KILLS YOU. AND SOMETIMES, WHEN YOU FALL, YOU FLY. </br> <i> -NEIL GAIMAN, THE SANDMAN</i></p>", "<p>If you set your goals ridiculously high and it is a failure, you will fail above everyone elses success.</br><i> -James Cameron</i></p>","<p>Be nice to people on your way up because you meet them on your way down.</br><i>-Jimmy Durante</i></p>" );
           echo "<h2>Random quote of the day: </h2></br>".$q2[$x];
           for($i = 0; $i < 9; $i++){
               if($i == 0)
                echo "<audio autoplay loop>
                    <source src= $random[$num] type=audio/mpeg>
                    Your browser does not support the audio element.
                    </audio>";
            echo '<img src="pics/'.$pics[$i].'">';
           }
        }
        // function picture()
        // {
        //     $pics = array('bridge.jpg', 'buck-full-moon.jpg','cherryBloddem.jpg','korea.jpg','lowTides.jpg','paris2.jpg','rain.png','snow.png','waterfall.gif');
        //     echo '<img src="pics/" alt="" />';
        // }
        function play()
        {
            $num = rand(0,4);
            $x = rand(0,3);
            $c = rand(0,1);
            
            if($c == 0)
                playStudy($num, $x);
            else
                playRandom($num, $x);
            
        }
    ?>
    
    </body>
     <footer id="fter">
            <hr>
            CST 336. 2018&copy; Gopar<br />
            <strong>Disclaimer:</strong> This website is used for academic purposes only.<br />
            <img src="https://csumb.edu/sites/default/files/styles/profile_large/public/photo_1_6.jpg?itok=N4I4g9Wl">
        </footer>
    <!--<button type="Study">Study!</button>-->



</html>
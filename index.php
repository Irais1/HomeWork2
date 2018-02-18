<html>
    
    <body>
        <!--num = rand(1,3);-->
        <!--num = rand (0,3);-->

       
    <?php
    play();

        // $quotes = array("Believing in yourself.","Cultivating a success mindset.", "Overcoming procrastination.", "Not making excuses.");
        
        
        function playStudy($num, $x)
        {
            echo "You are listening to the Study playList!";
            $study = array('1.mp3','2.mp3','3.mp3');
            $quotes = array("Believing in yourself.","Cultivating a success mindset.", "Overcoming procrastination.", "Not making excuses.");
            echo "Your random quote is: </br> </br>";
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
            $random = array('music/random/1.mp3','music/random/2.mp3','music/random/1.mp3'
            );
            //$i = rand(0,3);
            $q2 = array("Be yourself, Everyone else is already taken. </br><i> -OSCAR WILDE</i>","SOMETIMES YOU WAKE UP. SOMETIMES THE FALL KILLS YOU. AND SOMETIMES, WHEN YOU FALL, YOU FLY. </br> <i> -NEIL GAIMAN, THE SANDMAN</i>", "If you set your goals ridiculously high and it is a failure, you will fail above everyone elses success.</br><i> -James Cameron</i>","Be nice to people on your way up because you meet them on your way down.</br><i>-Jimmy Durante</i>" );
           echo "Random quote of the day: </br>".$q2[$x];
           echo "<audio autoplay>
                    <source src= $random[$num] type=audio/mpeg>
                    Your browser does not support the audio element.
                    </audio>";
        }
        function play()
        {
            $num = rand(0,2);
            $x = rand(0,3);
            $c = rand(0,1);
            if($c == 0)
                playStudy($num, $x);
            else
                playRandom($num, $x);
            
        }
    ?>
    
    </body>
    
    <!--<button type="Study">Study!</button>-->



</html>
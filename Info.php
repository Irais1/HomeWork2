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
        <nav>
            <hr width ="50%">
            <a href ="index.php">Play</a>
            <a href = "Info.php"><i>Song Information</i></a>
        </nav>
        <!--num = rand(1,3);-->
        <!--num = rand (0,3);-->

       
    <?php
    
    display();
    
    function display()
    {
        $Ssongs = array("<p>Awaiting her Arrival</br> <i>Alex Barry</i></p>","<p>N°034 </br><i>- Relaxdaily</i></p>", "<p>Moonrise </br><i>-Brian Crain</i></p>","<p>River Flows in you </br> <i> -Yiruma</i></p>","<p>Stay With Me Piano Cover</br><i>-Unknown</i></p>");
        $rSongs =array("<p>Danza Kuduro </br><i>-Don Omar</i></p>","<p>How Far I'll Go </br><i>-Alessia Cara</i></p>","<p>Dragostea Din Tei</br><i>~O-Zone</i></p>","<p>Feel This Moment </br><i> - Pitbull ft Christina Aguilera</i></p>","<p>Let Her Go </br> <i>-Passenger</i></p>");
        echo "<h1 class = rSongs>Song Names and Artist of Random Playlist: </br></br> </h1>";
        for($i = 0; $i<10;$i++)
        {
            echo $rSongs[$i];
        }
        echo "<h1 class = sSongs>Song Names and Artist of Study Playlist: </h1>";
        for($i = 0; $i<10;$i++)
        {
            echo $Ssongs[$i];
        }
        
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
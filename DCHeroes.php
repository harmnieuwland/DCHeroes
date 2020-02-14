<html>
<?php 

include("inc/functions.php");

$teams = getTeams();
myDump($teams);

?>
<head>
    <meta charset="utf-8" />
    <meta name="description" content="DCHeroes">
    <link rel="stylesheet" type="text/css" href="css/dcheroes.css">
    <title>DCHeroes.</title>  
</head>
<header>
    <a href="DCHeroes.php">Rocket Heroes</a>
</header>
<body>
    <div id="colums">
        <div id="left-colum">
            <!--linker colum laat de teams zien -->
            <h1>Teams</h1>
            <ul>  <!--hier komen de teams -->  
                <?php 
                    foreach($teams as $key => $team)
                    {
                        ?>
                        <li> <?php echo $team;   ?></li>
                        <?php
                    }
            
                ?>
            </ul>
        </div>
        <div id="middle-colum">
            <!--middel colum laat  de helden zien -->
        </div>
        <div id="right-colum">
            <!--rechter colum laat de reviews en rating zien -->
        </div>
    </div>
</body>
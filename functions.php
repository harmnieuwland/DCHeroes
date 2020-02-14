<?php 
function dBConnect()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "dcheroes";
    //variabellen voor de database connectie
    $connection = mysqli_connect($servername,$username,$password,$dbName) or die(mysqli_error($connection));
    //nieuw object om de connectie met de database te maken
    return $connection;
}

function getTeams()
{
    //verbinding met database
    $connection = dBConnect();
    // definieer een lege array om de teams in op te slaan
    $teams = array();

    $getTeamsSQL = "
        SELECT * FROM `teams` ORDER BY `teamName` ASC
    ";

    $resource = mysqli_query($connection, $getTeamsSQL) or die (mysqli_error($connection));

    while($row = mysqli_fetch_assoc($resource))
    {
        $teams[] = $row;
    }

    //definieer de query om de gegevens op te roepen uit de database
    return $teams;

}

function myDump($myVar)
{
    echo "<pre>";
    var_dump($myVar);
    echo "</pre>";
}
?>
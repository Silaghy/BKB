<?php include "connevents.php";


if (isset($_POST['search'])){

    $EventName = mysqli_real_escape_string($conn, $_POST['EventName']);

    $Location = mysqli_real_escape_string($conn, $_POST['Location']);
    $Date = mysqli_real_escape_string($conn, $_POST['Date']);
    
    $query="SELECT EventName, Location, Date, AdultParticipant, AdultSpectator, ChildParticipant, ChildSpectator FROM events, prices WHERE events.PriceBrand = prices.PriceBrand AND EventName LIKE '%$EventName%' AND Location LIKE '%$Location%' AND Date LIKE '%$Date%'";
    
    $result=mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)){
            $EventName=$row['EventName'];
            $Location=$row['Location'];
            $Date=$row['Date'];
            $AdultParticipant=$row['AdultParticipant'];
            $AdultSpectator=$row['AdultSpectator'];
            $ChildParticipant=$row['ChildParticipant'];
            $ChildSpectator=$row['ChildSpectator'];

echo $EventName . " " . $Location . " " . $Date . " " . $AdultParticipant . " " . $AdultSpectator . " " . $ChildParticipant . " " . $ChildSpectator . "<br />";

        } // end of while loop
    } // end of if statement
    else echo "No records matching your query where found.";
        
}


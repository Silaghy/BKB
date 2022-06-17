<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Pushster&display=swap" rel="stylesheet">
    <title>Events</title>
    <meta name="author" content="Liviu Silaghi">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="description" content="bike king borders, upcoming events, participant fees, events dates">
    <link rel="stylesheet" href="styles.css">
</head>
<main>

    <nav>
        <div class="bkbLogo">
            <img src="images/bkbNewLogo.png" id="bkblogo" alt="bkblogo" style = "max-width: 120px; max-height: 120px;margin-left: 30px;margin-right: 30px;">
        </div>
        <a href="index.html">Home</a> 
        <a href="bikeshop.html">Bike Shop</a>
        <a href="hire.html">Hire</a> 
        <a href="servicing.html">Bike Servicing</a>
        <a href="events.php">Events</a>
        <a href="walking.html">Walking</a>
        <a href="contact.html">Contact</a>
    </nav>

    <header>
        <div class="header">
        
        </div>
    </header>
    <h1>Our Events</h1>
    <div class="eventspage">
    <h1>Events & Prices</h1>
            <form class="filter" action="results.php" method="post">
                <input type="search" name="EventName" placeholder="Search by Name"><br>
                <input type="search" name="Location" placeholder="Search by Location"><br>
                <input type="search" name="Date" placeholder="Search by Date"><br>
                <input type="submit" value="Search" name="search">
            </form>
        
    <table>
        <tr>
        <th>Event Name</th>
        <th>Location</th>
        <th>Date</th>
        <th>Suitability</th>
        <th>AdultParticipant</th>
        <th>AdultSpectator</th>
        <th>ChildParticipant</th>
        <th>ChildSpectator</th>
    <?php
        include 'connevents.php';
        $query="SELECT EventName, Location, Date, Suitability, AdultParticipant, AdultSpectator, ChildParticipant, ChildSpectator FROM events, prices WHERE events.PriceBrand = prices.PriceBrand";
        $result=mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)){
                $EventName=$row['EventName'];
                $Location=$row['Location'];
                $Date=$row['Date'];
                $Suitability=$row['Suitability'];
                $AdultParticipant=$row['AdultParticipant'];
                $AdultSpectator=$row['AdultSpectator'];
                $ChildParticipant=$row['ChildParticipant'];
                $ChildSpectator=$row['ChildSpectator'];
    ?>

    <tr>
        <td>
            <?php echo $EventName;?>
        </td>
        <td>
            <?php echo $Location;?>
        </td>
        <td>
            <?php echo $Date;?>
        </td>
        <td>
            <?php echo $Suitability;?>
        </td>
        <td>
            <?php echo $AdultParticipant;?>
        </td>
        <td>
            <?php echo $AdultSpectator;?>
        </td>
        <td>
            <?php echo $ChildParticipant;?>
        </td>
        <td>
            <?php echo $ChildSpectator;?>
        </td>
    </tr>
    <?php
        } // end of while loop
    } // end of if statement
        else{
            echo "No records matching your query where found.";
        }
    ?>
    </table>
    </div>
        <footer>
            <div class="info">
                <div class="open">
                    <div class="openDays">
                        <h4>Open Times</h4>
                        <h4>Monday-Friday<br>
                            09:30–18:00<br>
                            Saturday<br>
                            09:00–18:00<br>
                            Sunday<br>
                            09:00–18:00</h4>
                    </div>
                </div>
                <div class="address">
                    <div class="location">
                        <h4>Address</h4>
                        <h4>Unit 2 <br>
                            Wilderness Forest<br>
                            Borders<br>
                            Scotland<br>
                            EH99 6TT</h4>
                    </div>
                </div>
                <div class="contact">
                    <h4>Contact</h4>
                    <h4>hello@bikekingborders.co.uk<br>
                        01999721 724 522</h4>
                </div>
            </div>
            <div class="logos">
                <img src="images/FBicon.jfif" alt="Facebook" id="FB" style = "width: 75px; height: 55px;">
                <img src="images/INicon.jfif" alt="Instagram" id="IN" style = "width: 75px; height: 55px;">
                <img src="images/YTicon.jfif" alt="YouTube" id="YT" style = "width: 75px; height: 55px;">
            </div>
        </footer>
    </main>
</html>
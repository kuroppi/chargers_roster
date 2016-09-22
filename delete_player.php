<!DOCTYPE html>
<html lang="en">

<?php include('mysqli_connect.php'); ?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <title>2016 San Diego Chargers Roster</title>

    </head>

    <body>

        <header>
            <a href="http://www.kuroppi.com/chargers"><img src="images/chargers_logo.png" alt="San Diego Chargers logo"></a>
        </header>

        <div class="container">
            
            <div class="col-sm-12">
                <h1>DELETE PLAYER FROM ROSTER</h1>
            </div>
            
            <div class="col-sm-12" id="add">
                <form action="" method="post">
                    <input class="form-control" type="text" name="firstname" placeholder="Player First Name">
                    <input class="form-control" type="text" name="lastname" placeholder="Player Last Name">
                    <button type="submit" class="btn btn-default center-block">Delete Player</button>
                </form>
            </div>
            
        </div>
        
        <?php
        
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $firstname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['firstname'])) );
            $lastname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['lastname'])) );
        
            $query = "DELETE FROM players
                      WHERE player_first_name='$firstname' AND player_last_name='$lastname'";
            
            if (@mysqli_query($dbc, $query)) {
                    echo '<div class="container player-added"><div class="col-sm-12"><p class="alert-success">The player has been deleted!</p></div></div>';
                } else {
                    echo '<div class="container player-added"><div class="col-sm-12"><p class="alert-danger">Could not delete the player:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p></div></div>';
                }
            
            mysqli_close($dbc);
             
         }
             
        ?>
        
        <footer>

        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>

</html>

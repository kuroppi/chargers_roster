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
                <h1>ADD PLAYER TO ROSTER</h1>
            </div>
            
            <div class="col-sm-12" id="add">
                <form action="" method="post">
                    <input class="form-control" type="text" name="firstname" placeholder="Player First Name" requiredZ>
                    <input class="form-control" type="text" name="lastname" placeholder="Player Last Name" requiredZ>
                    <input class="form-control" type="number" name="number" placeholder="Player Number" requiredZ>
                    <input class="form-control" type="text" name="position" placeholder="Position (ex: QB)" requiredZ>
                    <input class="form-control" type="text" name="height" placeholder="Height (ex: 5-10)" requiredZ>
                    <input class="form-control" type="number" name="weight" placeholder="Weight (ex: 250)" requiredZ>
                    <input class="form-control" type="number" name="experience" placeholder="Experience" requiredZ>
                    <input class="form-control" type="text" name="college" placeholder="College" requiredZ>
                    <button type="submit" class="btn btn-default center-block" requiredZ>Add Player</button>
                </form>
            </div>
            
        </div>
        
        <?php
        
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $firstname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['firstname'])) );
            $lastname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['lastname'])) );
            $height = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['height'])) );
            $weight = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['weight'])) );
            $position = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['position'])) );
            $number = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['number'])) );
            $experience = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['experience'])) );
            $college = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['college'])) );
            
            switch ($position) {
                case 'C':
                    $position_id = '1';
                    break;
                case 'CB':
                    $position_id = '2';
                    break;
                case 'DE':
                    $position_id = '3';
                    break;
                case 'DT':
                    $position_id = '4';
                    break;
                case 'FB':
                    $position_id = '5';
                    break;
                case 'G':
                    $position_id = '6';
                    break;
                case 'ILB':
                    $position_id = '7';
                    break;
                case 'K':
                    $position_id = '8';
                    break;
                case 'LS':
                    $position_id = '9';
                    break;
                case 'OLB':
                    $position_id = '10';
                    break;
                case 'P':
                    $position_id = '11';
                    break;
                case 'QB':
                    $position_id = '12';
                    break;
                case 'RB':
                    $position_id = '13';
                    break;
                case 'S':
                    $position_id = '14';
                    break;
                case 'T':
                    $position_id = '15';
                    break;
                case 'TE':
                    $position_id = '16';
                    break;
                case 'WR':
                    $position_id = '17';
                    break;
                default:
                    $position_id = '1';
            }
             
            $query = "INSERT INTO players (player_first_name, player_last_name, position_id, height, weight, player_number, experience, college)
                      VALUES ('$firstname', '$lastname', '$position_id', '$height', '$weight', '$number', '$experience', '$college')";
            
            if (@mysqli_query($dbc, $query)) {
                    echo '<div class="container player-added"><div class="col-sm-12"><p class="alert-success">The player has been added!</p></div></div>';
                } else {
                    echo '<div class="container player-added"><div class="col-sm-12"><p class="alert-danger">Could not add the player:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p></div></div>';
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

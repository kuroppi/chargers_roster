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
            
            <h1>CHARGERS ROSTER</h1>

            <table id="myTable" class="striped-table-odd">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>POS</th>
                        <th>HT.</th>
                        <th>WT.</th>
                        <th>EXP</th>
                        <th>COLLEGE</th>
                    </tr>
                </thead>
                
                <tbody>

                <?php
                $query = 'SELECT p.player_number, p.player_last_name, p.player_first_name, o.position, p.height, p.weight, p.experience, p.college
                          FROM players AS p
                          INNER JOIN
                          position AS o
                          on p.position_id = o.position_id
                          ORDER BY p.player_last_name';
            
                if ($r = mysqli_query($dbc, $query)) {
                    while ($row = mysqli_fetch_array($r)) {
                        print "<tr>
                                   <td>{$row['player_number']}</td>
                                   <td>{$row['player_last_name']}, {$row['player_first_name']}</td>
                                   <td>{$row['position']}</td>
                                   <td>{$row['height']}</td>
                                   <td>{$row['weight']}</td>
                                   <td>{$row['experience']}</td>
                                   <td>{$row['college']}</td>
                               </tr>";
                    }
                }
            
            mysqli_close($dbc);
            
            ?>
            
                 </tbody>
                
            </table>
            <a href="add_player.php" class="btn add-player">Add Player</a>
            <a href="delete_player.php" class="btn delete-player">Delete Player</a>
        </div>
        
        <footer>

        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.tablesorter.js"></script>
        
        <script>
        
                $(document).ready(function() 
                    { 
                        $("#myTable").tablesorter(); 
                    } 
                ); 
        
        </script>

    </body>

</html>

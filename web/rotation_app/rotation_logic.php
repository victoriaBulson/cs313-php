
<?php
    session_start();
    require 'db_connect.php';
    $db=get_db();

    $family = $_SESSION['username'];
    $year = $_GET['year'];

    //get givers name
    $query='SELECT c.reciever, m.name
            FROM combos c JOIN members m
            ON c.giver=m.email
            WHERE c.year=:year
            AND m.family=:family;';
    $stmt=$db->prepare($query);
    $stmt->bindvalue(':year', $year, PDO::PARAM_INT);
    $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
    $stmt->execute();
    $giver_rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    //Year exists in combos
    if(empty($giver_rows)){
        //query number of family members
        $query='SELECT email FROM members
                WHERE family=:family;';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
        $stmt->execute();
        $members = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //query year initialized
        $query='SELECT year_initialized FROM initial_lists
                WHERE family=:family;';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
        $stmt->execute();
        $initialized_years = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //variables for program logic
        $num_members = sizeof($members);
        $rotation_life = $num_members - 2;
        $years_used = 0;
        
        //check for initialized_list
        if(!empty($initialized_years)){
            //TODO: check for most recent initialized year
            $year_initialized = $initialized_years[0]['year_initialized'];
            $years_used = $year - $year_initialized;
        }
        //Initialize new list
        if(empty($initialized_years) || years_used == $rotation_life){
            include 'initialize_list.php';
            $query='INSERT INTO initial_lists (year_initialized, family)
                    VALUES (:year, :family);';
            $stmt=$db->prepare($query);
            $stmt->bindvalue(':year', $year, PDO::PARAM_STR);
            $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
            $stmt->execute();
            
            // Use a PDO for efficiency and ease of use
            // Use the ARRAY_APPEND SQL function to use PDO to add to an array
            $query="UPDATE initial_lists
                    SET initial_list = ARRAY_APPEND(initial_list, :arr)
                    WHERE family=:family AND year_initialized=:year;";
            $stmt=$db->prepare($query);
            $stmt->bindParam(":family", $family);
            $stmt->bindParam(":year", $year);
            // Loop through each element, binding it to the PDO and executing again
            foreach($initial_list as $elem){
                $stmt->bindParam(":arr", $elem);
                $stmt->execute();
            }
        }
    } else{ 
        include 'display_combos.php';
    }


?>


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
    
    //Year dne in combos
    if(empty($giver_rows)){
        
        //PREP TO CHECK FOR LISTS
        //query number of family members
        $query='SELECT email FROM members
                WHERE family=:family;';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
        $stmt->execute();
        $members = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //query year initialized
        $query='SELECT year_initialized FROM initial_lists
                WHERE family=:family
                ORDER BY year_initialized DESC;';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
        $stmt->execute();
        $initialized_years = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //variables for program logic
        $num_members = sizeof($members);
        $rotation_life = $num_members - 2;
        $years_used = 0;
        
        //CHECK FOR INITIALIZED LIST
        //initial list exists
        if(!empty($initialized_years)){
            $year_initialized = $initialized_years[0]['year_initialized'];
            $years_used = $year - $year_initialized;
        }
        //initial list dne or invalid
        if(empty($initialized_years) || $years_used == $rotation_life){
            //create initial list
            include 'initialize_list.php';
            //insert initial list row
            $query='INSERT INTO initial_lists (year_initialized, family)
                    VALUES (:year, :family);';
            $stmt=$db->prepare($query);
            $stmt->bindvalue(':year', $year, PDO::PARAM_STR);
            $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
            $stmt->execute();
            //update with contents of initial list
            $query="UPDATE initial_lists
                    SET initial_list = ARRAY_APPEND(initial_list, :arr)
                    WHERE family=:family AND year_initialized=:year;";
            $stmt=$db->prepare($query);
            $stmt->bindParam(":family", $family);
            $stmt->bindParam(":year", $year);
            foreach($initial_list as $elem){
                $stmt->bindParam(":arr", $elem);
                $stmt->execute();
            }
        }
        include 'create_combos.php';
    }
    include 'display_combos.php';


?>

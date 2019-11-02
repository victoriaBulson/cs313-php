
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

    if(empty($giver_rows)){
        //query number of family members
        $query='SELECT email FROM members
                WHERE family=:family;';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
        $stmt->execute();
        $members = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //query year initialized
        $query='SELECT year_initialized FROM initialized_lists
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
            $year_initialized = $initialized_years[0];
            $years_used = $year - $year_initialized;
        //Initialize new list
        if(empty($initialized_years) || years_used == $rotation_life){
            include 'initialize_list.php';
            $query='INSERT INTO initialized_lists
                    (initial_list, year_initialized, family)
                    VALUES
                    (:initial_list, :year, :family);';
            $stmt=$db->prepare($query);
            $stmt->bindvalue(':initial_list', $initial_list, PDO::PARAM_STR);
            $stmt->bindvalue(':year', $year, PDO::PARAM_STR);
            $stmt->bindvalue(':family', $family, PDO::PARAM_STR);
            $stmt->execute();
        }
        
        
    }
    /*
    foreach ($giver_rows as $giver_row){
        //get recievers name
        $reciever = $giver_row['reciever'];
        $query='SELECT m.name FROM combos c JOIN members m
                ON c.reciever=m.email
                WHERE m.email=:reciever;';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':reciever', $reciever, PDO::PARAM_STR);
        $stmt->execute();
        $reciever_row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //display combo
        echo $giver_row['name']. '......'. $reciever_row[0]['name']. '<br>';
    }
    */


?>

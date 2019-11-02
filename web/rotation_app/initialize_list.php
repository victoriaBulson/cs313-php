<?php
    //Vars
    $skip = [];
    $slots = [];
    $counter = 0;
    
    foreach($members as $member){
        $query='SELECT member1, member2 FROM partners
                WHERE member1=:member AND member2=:member;';
        $stmt=$db->prepare($query);
        $stmt->bindvalue(':member', $member['email'], PDO::PARAM_STR);
        $stmt->execute();
        $partners = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo $partners[0]['member1'];
        
        /*
        echo $partners[0]['member1']. '<br>', $partners[0]['member2'];
        $slots[$counter] = array($partners[0]['member1'], $partners[0]['member2']);
        
        if ($member['email'] == $partners[0]['member1']){
            
        }
        */
    }
    
?>
<?php
    //Vars
    $skip = [];
    $slots = [];
    $slots_counter = 0;
    $skip_counter = 0;
    
    //populate slots with members
    foreach($members as $member){
        if (!in_array($member['email'], $skip)){
            $query='SELECT member1, member2 FROM partners
                WHERE member1=:member OR member2=:member;';
            $stmt=$db->prepare($query);
            $stmt->bindvalue(':member', $member['email'], PDO::PARAM_STR);
            $stmt->execute();
            $partners = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            //if member is part of a couple
            if (!empty($partners)){
                $slots[$slots_counter] = array($partners[0]['member1'], $partners[0]['member2']);
                $slots_counter++;
        
                if ($member['email'] == $partners[0]['member1']){
                    $skip[$skip_counter] = $partners[0]['member2'];
                    $skip_counter++;
                } else{
                    $skip[$skip_counter] = $partners[0]['member1'];
                        $skip_counter++;
                }
            //if member is an individual
            } else{
                $slots[$slots_counter] = array($member['email']);
                $slots_counter++;
            }
        }
    }

    //populate intial list randomly
    $initial_list=[];
    while(sizeof($initial_list) < $num_members){
        //push items in slot into intial_list
        $next_slot= rand(0, (sizeof($slots) -1));
        echo '<br>Next slot: '. $next_slot;
        echo '<br>Max: '. sizeof($slots)-1;
        #foreach($slots[$next_slot] as $member){
         #   array_push($initial_list, $member);
        #}
        unset($slots[$next_slot]);
    }
    
    foreach($initial_list as $member){
        echo $member;
    }
    
?>
num_couples = 0;
num_indiv = 0;

function addCouple(){
    num_couples++;
    
    var couple_div = document.createElement('div');
    couple_div.setAttribute('class', 'new_field');
    
    var form = 'Name 1:<input type="text" name="name1_couple' + num_couples + '"><br>'
                + 'Name 2:<input type="text" name="name2_couple' + num_couples + '"><br>';
    
    couple_div.innerHTML = form;
    document.getElementById('couple_fields').appendChild(couple_div);
}

function addIndiv(){
    num_indiv++;
    
    var indiv_div = document.createElement('div');
    indiv_div.setAttribute('class', 'new_field');
    
    var form = 'Name:<input type="text" name="indiv' + num_indiv + '"><br>';
    
    indiv_div.innerHTML = form;
    document.getElementById('indiv_fields').appendChild(indiv_div);
}

function populateYear(){
    var start = 2016;
    var end = new Date().getFullYear();
    end += 5;
    var options = "";
    for(var year = start ; year <=end; year++){
        options += "<option>"+ year +"</option>";
    }
    document.getElementById("year").innerHTML = options;
}

function saveAccount(){
    var postInfo = "username=" + $_POST[username];
    document.write("HELLO" + $_POST[username])
    document.write($_POST[username]);
    var request = new XMLHttpRequest();
    //request.open('POST', "functions.php", false);
    //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //request.send(postInfo);

    if (request.status === 200) {
      alert(request.responseText);
    }
}
num_couples = 0

function addCouple(){
    num_couples++;
    
    var couple_div = document.createElement('div');
    
    var form = 'Name 1:<input type="text" name="name1_couple' + num_couples + '">'
                + 'Name 2:<input type="text" name="name2_couple' + num_couples + '">';
    
    couple_div.innerHTML = form;
    document.getElementById('couple_fields').appendChild(couple_div);
}
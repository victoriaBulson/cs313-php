function addToCart(btn){
    var getInfo = "functions.php?item=" + btn.value + "&action=add_to_cart";
    var request = new XMLHttpRequest();
    request.open('GET', getInfo, false);
    request.send();

    if (request.status === 200) {
      //alert(request.responseText);
    }
}

function remove(item){
    var removed = item.id + "_div";
    document.getElementById(removed).innerHTML = item.id.strike();
    var getInfo = "functions.php?item=" + item.id + "&action=remove_from_cart";
    var request = new XMLHttpRequest();
    request.open('GET', getInfo, false);
    request.send();

    if (request.status === 200) {
      //alert(request.responseText);
    }
}
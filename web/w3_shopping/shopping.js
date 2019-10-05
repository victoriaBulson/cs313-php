function addToCart(btn){
    var getInfo = "functions.php?item=" + btn.value + "&action=add_to_cart";
    var request = new XMLHttpRequest();
    request.open('GET', getInfo, false);
    request.send();

    if (request.status === 200) {
      alert(request.responseText);
    }
}

function loadCart(){
    var request = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.write(this.responseText);
    }
  };

    request.open('GET', 'browse.php', true),
    request.send();
    
    document.write()
}
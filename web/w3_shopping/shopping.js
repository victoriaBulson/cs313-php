function addToCart(){
    var request = new XMLHttpRequest();
    request.open('GET', 'functions.php', false);
    request.send();

    if (request.status === 200) {
      alert(request.responseText);
    }
}
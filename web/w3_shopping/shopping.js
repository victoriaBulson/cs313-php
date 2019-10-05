function addToCart(){
    $.ajax({
           type: "POST",
           url: 'functions.php',
           data:{action:'add_to_cart'},
           success:function(html) {
             alert(html);
           }
      });
}
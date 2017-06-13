$(function() {
    fetch('api.php')
    .then(function(request) {
    return request.json();
    })
    .then(function(data) {
    var temp = 3 ;
    var products = document.getElementById("products");
       for(var j = 0; j < data.length ; j++) {
         if((temp % 3) == 0)
           products.innerHTML += "<div class='row'>";
         products.innerHTML +=
            '<div class="col s12 m7 l4" id="c"'+data[j].id+'>'+
              '<div class="card">'+
                '<div class="card-image">'+
                  "<img src='images/" + data[j].image + "'/>" +
                '</div>'+
                '<div class="card-content">'+

                "<p id='description' style='font-family: &quot;Microsoft JhengHei&quot;;'>"+ data[j].description + "</p>"+
                "<h6 id='price' style='font-family: &quot;Microsoft JhengHei&quot;;'>$ "+ data[j].price + " 新台幣</h6>"+
                '<a class="waves-effect waves-light right btn" onclick=' + 'getValue('+ data[j].id+');'+'> 我要購買 </a>'+

                '</div>'+

              '</div>'+
            '</div>';

         if((temp % 3) == 0 )
           products.innerHTML += "</div>";
         temp++;

       }
    })
    .catch(function(e) {
      return e;
    })
});

function getValue(id){
  swal({
    title:"確認購買?",
    text: "點選確認後，訂單確認！",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Confirm",
    closeOnConfirm: false
  },
  function(){
    swal("訂單確認!", "您的訂單已加入。", "success");

    // var e = document.getElementById("number" + id);

    console.log("id = " + id);
    document.location.href = './order.php?products_id=' + id;
  });



}

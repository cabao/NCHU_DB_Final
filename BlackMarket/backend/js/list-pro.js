$(function ()
{
  $.ajax({
    url: 'api-pro.php',                  //the script to call to get data
    data: "",                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
    dataType: 'json',                //data format
    success: function(data)          //on recieve of reply
    {
       var list = document.getElementById("pro-list");
       var count = 0 ;
       for(var j = 0; j < data.length ; j++) {
           list.innerHTML +=
             "<ul>"+
             "<li class='collection-item' style='margin-left:25%;margin-right:2%'><a href='edit-pro.php?id="+data[j].id +
             "'><span class='blue badge' style='color:black'>modify</span></a><a href='./action-pro.php?action=Delete&Id="+data[j].id + "'<span class='red badge right' style='color:black'>delete</span></a>"+data[j].name+"</li>"+
            "</ul>";
             count++;
       }
    }
  });
});

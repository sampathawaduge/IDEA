
$(document).ready(function(){

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }
    var today = dd+'/'+mm+'/'+yyyy;
    var dt=new Date();
    var hours=dt.getHours();
    var min;
    if(hours >=12)
    {
        var minutes=dt.getMinutes();
        var min=hours+'.'+minutes+' PM';
    }
    else
    {
        var minutes=dt.getMinutes();
        var min=hours+'.'+minutes+' AM';

    }
    $("#comment").click(function(){

        var comment = $('#note').summernote('code');
        $.ajax({

                url:"http://localhost/IDEA/index.php/Comment/add_comment",
                type:"POST",
                data:{min:min,date:today,comment:comment},
                success:function(data)
                {
                    if(data) {
                        alert("Comment added successfully!");
                        location.reload();
                    }
                    else
                    {
                        alert("Unable to add comment");
                    }


                }
            });

    })


});

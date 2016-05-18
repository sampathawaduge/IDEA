/**
 * Created by AppleFactory on 4/23/2016 AD.
 */
$(document).ready(function(){

    $(".EDIT").click(function(){

        var subid=$(this).attr("subid");

        $('#summernotemodel').summernote();

        $("#myModal").modal();

        $("#edit").click(function(){

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

            var comment = $('#summernotemodel').summernote('code');
            if(comment == '<p><br></p>')
            {
                console.log("empty");
            }
            else 
            {
                $.ajax({

                    url:"http://localhost/IDEA/index.php/Edit_submission_controller/edit",
                    type:"POST",
                    data:{min:min,date:today,comment:comment,id:subid},
                    success:function(data)
                    {
                        alert(data);
                        location.reload();
                    }
                });
            }
        })

    })
    
    $(".DELETE").click(function(){
        
        var subid=$(this).attr("subid");

        $.ajax({

            url:"http://localhost:81/IDEA/index.php/Delete_submission_controller/delete",
            type:"POST",
            data:{id:subid},
            success:function(data)
            {
                alert(data);
                location.reload();
            }
        });
    })
});
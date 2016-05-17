$(document).ready(function(){

    $('.update').click(function () {

        var subid=$(this).attr("subid");

        $('#summernotemodel').summernote();
        $("#myModal").modal();

        $("#update").click(function(){

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

                    url:"http://localhost:81/IDEA/index.php/Edit_submission_controller/edit",
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

    $('.updatecom').click(function () {

        var comid=$(this).attr("comid");

        $('#summernotemodel').summernote();
        $("#myModal").modal();

        $("#update").click(function(){

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

                    url:"http://localhost:81/IDEA/index.php/Edit_submission_controller/edit_comment",
                    type:"POST",
                    data:{min:min,date:today,comment:comment,id:comid},
                    success:function(data)
                    {
                        alert(data);
                        location.reload();
                    }
                });

            }
        })

    })


    $(".delete").click(function(){

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

    $(".Delcom").click(function(){

        var comid=$(this).attr("comid");
         $.ajax({

            url:"http://localhost:81/IDEA/index.php/Delete_submission_controller/delete_com",
            type:"POST",
            data:{id:comid},
            success:function(data)
            {
                alert(data);
                location.reload();
            }
        });

    })
    $(".Deleteuser").click(function(){

        var email=$(this).attr("email");
        $.ajax({
        
            url:"http://localhost:81/IDEA/index.php/Delete_user_controller/delete_user",
            type:"POST",
            data:{email:email},
            success:function(data)
            {
                alert(data);
                location.reload();
            }
        });
        
        
    })
    $(".edittcat").click(function(){
        
        var type=$(this).attr("usertype");
        var category=$(this).attr("usercat");

        $("#myModal").modal();

        $(".catedit").click(function(){

            var newcategory=$("#category").val();
            $.ajax({

                url:"http://localhost:81/IDEA/index.php/Edit_category_controller/edit_category",
                type:"POST",
                data:{type:type,category:category,new:newcategory},
                success:function(data)
                {
                    alert(data);
                    location.reload();
                }
            });


        })



    })
    $(".deletecat").click(function(){

        var usertype=$(this).attr("usertype");
        var usercat=$(this).attr("usercat");

        $.ajax({

            url:"http://localhost:81/IDEA/index.php/Edit_category_controller/deletecategory",
            type:"POST",
            data:{usertype:usertype,usercat:usercat},
            success:function(data)
            {
                alert(data);
                location.reload();
            }
        });

    })

    $(".add").click(function(){

        $("#addmodel").modal();

        $(".addcat").click(function () {

            var usertype=$("#usertype").val();
            var usercat=$("#usercategory").val();

            $.ajax({

                url:"http://localhost:81/IDEA/index.php/Edit_category_controller/addcategory",
                type:"POST",
                data:{usertype:usertype,usercat:usercat},
                success:function(data)
                {
                    alert(data);
                    location.reload();
                }
            });
        });


    })




})
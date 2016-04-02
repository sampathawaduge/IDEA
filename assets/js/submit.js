$(document).ready(function(){
    var selection;

    //$('.dropdown-inverse li > a').click(function(){
    //     selection=$('.btnStatus').text(this.innerHTML);
    //});

    $(".dropdown-menu li a").click( function() {
         selection = $(this).text();
        //alert(selection);
    });

    $("#idea_button").click(function(){

        //var comment=$.trim($("#summernote").val());
        //var selection=$.trim($("#category").val());
        var comment = $('#summernote').summernote('code');
        //var selection=$('.btnStatus').text(this.innerHTML);
        if(comment && selection)
        {

            $.ajax({

                url:"http://localhost:81/IDEA/index.php/add_submission/show",
                type:"POST",
                data:{comment:comment,subcat:selection},
                success:function(data)
                {
                    alert("Submission add successfully!");
                    location.reload();
                }
            });
        }
        else if(!comment)
        {
            alert("Submission Is Empty");
        }
        else if(!selection)
        {
            alert("Select Submission category");
        }


    });
});
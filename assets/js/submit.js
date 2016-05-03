/**
 * Created by AppleFactory on 4/16/2016 AD.
 */
$(document).ready(function(){

    var selection;

    $(".dropdown-menu li a").click( function() {
        selection = $(this).text();

    });

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

    $("#idea_button").click(function(){

        var comment = $('#summernote').summernote('code');

        if(comment && selection)
        {

            $.ajax({

                url:"http://localhost/IDEA/index.php/add_submission/show",
                type:"POST",
                data:{min:min,date:today,comment:comment,subcat:selection},
                success:function(data)
                {
                    if(data) {
                        alert("Submission add successfully!");
                        location.reload();
                    }
                    else
                    {
                        alert("Unable to Submit");
                    }
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

    })
    
    
});

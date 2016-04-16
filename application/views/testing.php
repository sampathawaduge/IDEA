<!DOCTYPE html>
    <html>
        <head>
<!--            <script src="--><?php //echo base_url('assets/js/jquery.min.js')?><!--"></script>-->
            <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
            <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
            <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

            <!-- include summernote css/js-->
            <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
            <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
        </head>
        <body>
        <div id="summernote">Hello Summernote</div>
        <input type="submit" value="Submit" id="sub">
        <script>
            $(document).ready(function() {
            $('#summernote').summernote();

                $("#idea_button").click(function(){
                    var markupStr = $('#summernote').summernote('code');
                    console.log(markupStr);
                })
            });

        </script>
        </body>
    </html>
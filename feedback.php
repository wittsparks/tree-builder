<html>
   <head>
        <meta charset="utf-8">
        <title>Tree Builder</title>
        <style>
           .title {
              font-family:arial;
              color:darkblue;
              font-size:20px;
           }
        </style>
   </head>
   <body>
   <p class="title">Thank You</p>
   <a href="http://tree-builder.com">Back to Tree Builder</a>
   </body>
</html>
<?php
$message = $_POST['comment']."<br/><br/>From:".$_POST['email'];
mail('wittsparks@yahoo.com', 'Comment from Tree Builder', $message);
?>

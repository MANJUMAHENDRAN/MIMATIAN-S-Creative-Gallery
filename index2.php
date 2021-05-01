<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if(isset($_POST['submit']))
{
    header('location:index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div class="content">
            <h1 class="caption">successfully uploaded..</h1><br>
        <br>
        <form action="index2.php" method="post">
            <br>
        <button type="submit" name="submit">UPLOAD</button>
        </form>
        </div>
        
            <style>
                *{
    padding: 0;
    font-family: sans-serif;
}
.content
{
    width: auto;
    color: cadetblue;
    display: flex;
    align-items: center;
}
input[type=text],textarea
{
    width: 45%;
    border: 2px solid #aaa;
    border-radius: 5px;
    margin: 8px;
    padding: 8px;
    box-sizing: border-box;
    
   
}
input[type=file]
{
    
 
  width: 45%;
  border: 2px solid #aaa;
  border-radius: 5px;
  padding: 8px;
  box-sizing: border-box;
 
}

button
{
  padding:0.7em 1.7em;
 margin:0 0.3em 0.3em 0;
 border-radius:0.2em;
 box-sizing: border-box;
}
button:hover
{
    
    background:#aaa ;
}

            </style>
        </div>
    </body>
</html>

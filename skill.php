<html>
    <head>
<title>PHPGurukul Programmin Blog | Dynamically Add or Remove input fields in PHP with JQuery</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://lh3.googleusercontent.com/-HtZivmahJYI/VUZKoVuFx3I/AAAAAAAAAcM/thmMtUUPjbA/Blue_square_A-3.PNG" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
    .tab
    {
        height: 40px;
        width: 300px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-radius: 40px;
    }
    body
    {
    background-image:url('data:image/jpeg;base64,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');
    background-repeat:no-repeat;
    background-size:cover;      
    }
button
{
margin-top: 20px;

}
    table,tr,td
    {
        width: 70%;
        border: 1px solid blue;

    }
    .btf 
    {
        width: 30%;
        
    }
    img
    {
        width: 120px;
        height: 100px;
        margin-top: 20px;
        border-radius: 40px;
        align-items: center;
    }
     .btn_remove:hover
    {
background-color: blue;
    }
    .btn-danger {
    color: #fff;
    background-color: #00008B;
    border-color: #d43f3a;
}
 .btn-danger :hover
 {
    background-color: white;
 }
    body
{
    background-image:url('https://images.all-free-download.com/images/graphiclarge/blue_abstract_background_310971.jpg');
    background-repeat:no-repeat;
    background-size:cover;  
}
input
{
    border-radius: 20px;
}
.sub:hover{
    background-color:#82CAFF;
    color:#fff;
}
.sub{
    width:90%;
    height:40px;
    margin:15px 0 0 5%;
    font-size: 16px;
    border:1px solid rgb(17,67,107);
    background-color:#00008B;
    color :#fff;
}
.col 
{

    color: #00008B;
}
.ta{
    color: white;
    background-color: #00008B;
     height: 40px;
        width: 300px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-radius: 40px;
}
.navbar-default
{
    background-color: #82CAFF;
}
</style>
    </head>
     <header>
    
    <nav class="navbar navbar-default navbar-fixed-top" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="form.php"><img style="height:90px; width:100px;border-radius: 30px;" src="https://3.imimg.com/data3/NR/KQ/MY-2684260/perfect-job-training-250x250.jpeg"></a>
                <center><h5 style="font-size:20px; color: #00008B;"><i>CAMPUS RECRUTMENT SYSTEM</i></h5></center>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                

                      <li class="dropdown" id = "old">
                        <a href="form.php"><button style=" height:30px;border-radius: 30px;width:100px;background-color: #00008B;color: white;">LOGOUT</button></font></span>
                        
                        </a>
                        
                        </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <body>
 
    </body>
<script>
$(document).ready(function(){
    var i=1;
    $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<tr  id="row'+i+'"><td><center><div class = "col">Skill<font color="red">*</font></div><br><input type="text" class="tab" name="skill"  class="form-control name_list" /><br><input class="ta" type="submit" name="submit"  value="SAVE" /></td></center><td ><center><img style="border-radius: 40px;" class="btn btn-danger btn_remove" name="remove" id="'+i+'" src="data:image/png;base64,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"></td></tr>');
    });
    
$(document).on('click', '.btn_remove', function(){
var button_id = $(this).attr("id"); 
$('#row'+button_id+'').remove();
    });
});
</script>
   <div class="container"style="margin-top: 130px;">
    <h2 align="center"><font color="#00008B"><i>TECHNICAL SKILLS</i></font></h2><br />
    <div class="form-group">
<form name="add_name" id="add_name" method="post">
<div class="table-responsive">
    <center>
<table>
<td><center><div class = "col">Skill<font color="red">*</font></div><br><input type="text" class="tab" name="skill"  class="form-control name_list" /><br><input class="ta" type="submit" name="submit"  value="SAVE" /></td></center></tr>
</table>
</center>
</div>
          
            </form>
            </div>
        </div>
</html>
<?php
include "connection.php";

if(isset($_POST['submit']))
{
$skill=$_POST['skill'];




$insertquery="INSERT INTO skill(skill)
 VALUES ('$skill')";
 $res=mysqli_query($conn,$insertquery);
 if($res)
 {
    ?>
    <script>
        alert("REQUIREMENTS SUBMITTED sucessefully");
    </script>
    <?php
 }
 else
 {
    ?>
    <script>
        alert("data not inserted properly");
    </script>
    <?php
 }

}

?>
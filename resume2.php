<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="pdf.js"></script>
	<script type="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
	<title></title>
	<style type="text/css">
		table
		{
			/border: 2px solid;/
			width: 70%;
		}
		/*th 
		{
			border: 2px solid;
		}*/
		.tb{
			width: 100%;
			padding: 5px;
			border: 2px solid;
		}
		.t 
		{
			width: 70%;
    	align-items: left;
    	color: gray;
    	margin-left: 15%;
		}
		.my
		{
			
			width: 50%;
			
		}
		.myclass1
		{
			
			width: 100%;
			margin-left: 2px;
			border: none;
       
		}
		.hr hr { display:none }

		.hr {
        position: relative;
        
        border: none;
        height: 10px;
        background: blue ;
        
        width: 70%;
        margin-left: 15%;
    }
    	  body
  {

background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKttFjmYA0vkXZCOLxMUq9kyYk9F0gCImoRQ&usqp=CAU');
  background-repeat:no-repeat;
  background-size:cover;    

  }
    .tf hr
    {
    	background-color: orange;

    }
    .tl hr
    {
    	background-color: orange;
    }
    fieldset
    {
    	width: 68%;
    	background-color: blue;
    }
    .tl 
    {
    	width: 70%;
    	align-items: left;
    	color: black;
    	margin-left: 15%;
    	font-size: 20px;

    }
    .tt 
    {
    	width: 70%;
    	align-items: left;
    	color: orange;
    	
    }
    .fi 
    {
    margin-left: 15%;	
    }
    .tf 
    {
    	width: 100%;
    	align-items: left;
    	color:orange;

    }
	</style>
</head>
<body>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 550
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Resume.pdf");
                }
            });

        });

    </script>

</body>
</html>
<?php
include_once 'connection.php';

if(isset($_POST['submit']))
{
   $name=$_POST['name'];

$sql = "SELECT personall.pid, objective.number,education.id, skill.sid, project.prid,achiev.aid,hobbies.num,language.nu,personall.name,personall.lname,personall.address,personall.email,personall.phone ,objective.objective,education.course,education.college,education.grade,education.year,skill.skill,project.title,project.description,achiev.achiev,hobbies.hobbies,language.language
FROM personall
LEFT JOIN objective 
ON personall.pid = objective.number
LEFT JOIN education 
ON personall.pid= education.id 
LEFT JOIN skill
ON personall.pid= skill.sid
LEFT JOIN project 
ON personall.pid= project.prid 
LEFT JOIN achiev
ON personall.pid= achiev.aid 
LEFT JOIN hobbies
ON personall.pid= hobbies.num
LEFT JOIN language
ON personall.pid= language.nu 
where username='$name'";
if(! ($result = mysqli_query($conn, $sql)))
{
	
	echo "Errormessage: ".mysqli_error($conn)."\n";
}
else
{
	echo "<center>
	<form action='' method='POST'>
	<table id='tblCustomers'>
	
		<tr>
		<th></th><br>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		</tr>
		
	
		<tr>
		<th></th>
		</tr>
		</fieldset>

		";

	while($row = mysqli_fetch_array($result))
	{

		echo "<tr ><td colspan='2' class='tf'><center><div class='tt'><hr/></div><fieldset>".$row['name'].$row['lname']."<br/>".$row['address']."Contact: ".$row['phone']."<br/>Email: ".$row['email']."</fieldset></td></tr>";
		

		echo "<tr ><td colspan='2'><div class='tl'>objective</div> <br/><div class='t'>".$row['objective']."</div><br><div class='tl'>Education</div><br/><div class='t'>".$row['college']."<br/>".$row['course']."<br/>Passing Year: ".$row['year']."<br/>Score: ".$row['grade']."</div><br></td></tr>";

		echo "<tr ><td colspan='2'> <div class='tl'>Skills</div> <br/><div class='t'>".$row['skill']."</div><br> <div class='tl'>Project</div><br/><div class='t'>".$row['title']."<br/>".$row['description']."</div></div><br></td></tr>";
echo "<tr ><td colspan='2'> <div class='tl' >Languages</div> <br/><div class='t'>".$row['language']."</div><br><div class='tl'>Achievements And Awards</div><br/><div class='t'>".$row['achiev']."</div><br></td></tr>";
echo "<tr><td colspan='2'> <div class='tl'><div class='tf'></div>Hobbies</div><br/><div class='t'>".$row['hobbies']."</div><br></td></tr><br><br>";

	
	echo "<tr><td colspan='2' class='tf'><center><div class='tt'><hr/></div></td></tr>";
	}
	echo "</table>";
echo "<a href='view.html'><input type='button' style='background-color:#00008B; border-radius:20px;color:white;'  value='BACK' /></a>";
echo "    ";
	echo "<input type='button' id='btnExport' style='background-color:#00008B; border-radius:20px;color:white;' value='Download' />";
}

}
?>
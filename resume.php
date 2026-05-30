<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="pdf.js"></script>
	<script type="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
	<title></title>
	<style type="text/css">
		  body
  {

background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKttFjmYA0vkXZCOLxMUq9kyYk9F0gCImoRQ&usqp=CAU');
  background-repeat:no-repeat;
  background-size:cover;    

  }
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
			width: 70%;
			padding: 5px;
			border: 2px solid;
		}

		.my
		{
			
			width: 50%;
			
		}
		.myclass1
		{
			
			width: 20%;
			margin-left: 2px;
			border: none;
       
		}
		.hr hr { display:none }

		.hr {
        position: relative;
        
        border: none;
        height: 10px;
        background: blue;
        margin-bottom: 30px;
    }
    .tl 
    {
    	width: 100%;
    	background-color: blue;
    	color: white;
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

		echo "<tr ><td ><div class='hr'><hr/></div>".$row['name'].$row['lname']."<br/>".$row['address']."</td><td class='myclass1'><div class='hr'><hr/></div>Contact: ".$row['phone']."<br/>Email: ".$row['email']."</td></tr>";
		echo "<tr ><td ><div ><hr/></div></td><td><hr/></td><tr>";

		echo "<tr ><td><fieldset><div class='tl'><hr/>objective</div> <br/>".$row['objective']."</fieldset><div class='hr'><hr/></div></td><br/><td class='my'><fieldset> <div class='tl'><hr/>Education</div><br/>".$row['college']."<br/>".$row['course']."<br/>Passing Year: ".$row['year']."<br/>Score: ".$row['grade']."</fieldset><div class='hr'><hr/></div></td></tr>";
		echo "<tr ><td><fieldset><div class='tl'><hr/>Skills</div> <br/>".$row['skill']."</fieldset><div class='hr'><hr/></div></td><br/><td class='my'><fieldset> <div class='tl'><hr/>Project</div><br/>".$row['title']."<br/>".$row['description']."</fieldset><div class='hr'><hr/></div></td></tr>";

echo "<tr ><td class='my'><fieldset> <div class='tl'><hr/>Languages</div><br/>".$row['language']."</fieldset><div class='hr'><hr/></div></td><br/><td class='my'><fieldset> <div class='tl'><hr/>Achievements And Awards</div><br/>".$row['achiev']."</fieldset><div class='hr'><hr/></div></td></tr>";
	
	echo "<tr><td></div></td><br/><td class='my'><fieldset> <div class='tl'><hr/>Hobbies</div><br/>".$row['hobbies']."</fieldset><div class='hr'><hr/></div></td></tr>";
	}
	echo "</table>";
echo "<a href='view.html'><input type='button' style='background-color:#00008B; border-radius:20px;color:white;'  value='BACK' /></a>";
echo "    ";
	echo "<input type='button' id='btnExport' style='background-color:#00008B; border-radius:20px;color:white;' value='Download' />";
}

}
?>
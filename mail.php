
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Company mail</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="style.css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <style type="text/css">
        
      body
  {

background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKttFjmYA0vkXZCOLxMUq9kyYk9F0gCImoRQ&usqp=CAU');
  background-repeat:no-repeat;
  background-size:cover;    

  }
 .contact{
 padding: 4%;
 height: 400px;
 }
 .col-md-3{
 background: #00008B;

 padding: 4%;
 border-top-left-radius: 0.5rem;
 border-bottom-left-radius: 0.5rem;
 }
 .contact-form{
background-color: bg-primary;
 }
 .contact-info{
 margin-top:10%;

 }
 .contact-info img{
 margin-bottom: 15%;
 }
 .contact-info h2{
 margin-bottom: 10%;
 }
 .col-md-9{
 background: #87CEFA;
 padding: 3%;
 border-top-right-radius: 0.5rem;
 border-bottom-right-radius: 0.5rem;
 border-color: #87CEFA;
 }
 .contact-form label{
 font-weight:600;
 }
 .contact-form button{
 background: #25274d;
 color: #fff;
 font-weight: 600;
 width: 25%;
 }
 .back 
 {
   background-color: bg-primary;
 }
 .contact-form button:focus{
 box-shadow:none;
 } 
      </style>
   </head>
   <header>
  <a href="c.php"><button style=" height:30px;border-radius: 30px;width:100px;background-color: #00008B;color: white;margin-left: 1200px;">LOGOUT</button></font></span></a>
</header>
   <body>
      <div class="container contact">
         <div class="row">
            <div class="col-md-3">
               <div class="contact-info">
                  <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                 
                  <h4 style="color:white;">WELCOME!</h4>
               </div>
            </div>
            <div class="col-md-9">
               <form method="POST" action=""  enctype="multipart/form-data" >
          <div class="contact-form" style="background: #00008B;margin-top: 20px;border-color: #87CEFA;border-radius: 20px;" >
            <div class="form-group">
  <label class="control-label col-sm-2" for="name" style="color: #87CEFA;">Name<font color="red">*</font></label>
  <div class="col-sm-10">          
    <input type="text" class="form-control" id="name" placeholder="Company Name" name="name"
           pattern="[A-Za-z ]+" title="Only alphabets allowed" required>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="role" style="color: #87CEFA;">Role<font color="red">*</font></label>
  <div class="col-sm-10">          
    <input type="text" class="form-control" id="role" placeholder="Role" name="role"
           pattern="[A-Za-z ]+" title="Only alphabets allowed" required>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="ctc" style="color: #87CEFA;">CTC<font color="red">*</font></label>
  <div class="col-sm-10">          
    <input type="text" class="form-control" id="ctc" placeholder="CTC" name="ctc"
           pattern="^[0-9]*\.?[0-9]+$" title="Only numbers allowed (decimals allowed)" required>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2" for="mobile" style="color: #87CEFA;">Mobile<font color="red">*</font></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile"
           pattern="\d{10}" title="Mobile number must be exactly 10 digits" required>
  </div>
</div>

            
            <div class="form-group">
             <label class="control-label col-sm-2" for="eligibility" style="color: #87CEFA;">Criteria<font color="red">*</font></label>
             <div class="col-sm-10">
              <input type="text" class="form-control" id="eligibility" placeholder="Enter eligibility" name="eligibility" required>
             </div>
            </div>
             <div class="form-group">
             <label style="color: #87CEFA;margin-left: 15px;" >Company Details<font color="red">*</font></label>
             <div class="col-sm-10">
               <input type="file" class="resume" style="color:white" name="file"/>
             </div>
            </div>
           
   
            <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10">
             <a href="c.php"> <button type="submit" class="btn btn-default" style="background: #87CEFA;margin-bottom: 10px;" name="btn-upload" id="submit">Submit</button></a>
             
             </div>
            </div>
           </div>
         </form>
            </div>
         </div>
      </div>
    
   </body>
</html>
<?php 
include('connection.php');
$msg="";
if(isset($_POST['btn-upload'])){
  $name=mysqli_real_escape_string($conn,$_POST['name']);
   $role=mysqli_real_escape_string($conn,$_POST['role']);
    $ctc=mysqli_real_escape_string($conn,$_POST['ctc']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
  $eligibility=mysqli_real_escape_string($conn,$_POST['eligibility']);
   $file = rand(1000,100000)."-".$_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
  
  mysqli_query($conn,"insert into company1(name,role,ctc,email,phone,eligibility,file,type,size) values('$name','$role','$ctc','$email','$mobile','$eligibility','$file','$file_type','$file_size')");
  
  $html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Role</td><td>$role</td></tr><tr><td>CTC</td><td>$ctc</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>phone</td><td>$mobile</td></tr><tr><td>Eligibility criteria</td><td>$eligibility</td></tr></table>";
  include('smtp/PHPMailerAutoload.php');
  $mail=new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host="smtp.gmail.com";
  $mail->Port=587;
  $mail->SMTPSecure="tls";
  $mail->SMTPAuth=true;
  $mail->Username="pashay119@gmail.com";
  $mail->Password="xfdw bcya wwkp exks";
  $mail->SetFrom("pashay119@gmail.com");
  $mail->addAddress("pashay119@gmail.com");
  $mail->IsHTML(true);
  $mail->Subject="New Company Arrived";
  $mail->Body=$html;
  $mail->SMTPOptions=array('ssl'=>array(
    'verify_peer'=>false,
    'verify_peer_name'=>false,
    'allow_self_signed'=>false
  ));
  if($mail->send()){
    //echo "Mail send";
  }else{
    //echo "Error occur";
  }
  echo $msg;
}
   ?>
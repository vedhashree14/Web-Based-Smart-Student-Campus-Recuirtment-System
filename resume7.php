<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>A4 Resume</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>

<style>
/* A4 Page */
body {
    background:#ccc;
    font-family: "Segoe UI", sans-serif;
}

.page {
    width: 210mm;
    height: 297mm;
    margin: auto;
    background: white;
    box-shadow: 0 0 15px rgba(0,0,0,.4);
    display: flex;
}

/* LEFT PANEL */
.left {
    width: 32%;
    background: #006d6f;
    color: white;
    padding: 25px;
}

.profile-pic {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid white;
    display: block;
    margin: auto;
}

.left h2 {
    text-align:center;
    margin-top:15px;
}

.left p {
    font-size: 14px;
    margin: 8px 0;
}

/* RIGHT PANEL */
.right {
    width: 68%;
    padding: 30px;
}

.section {
    margin-bottom: 18px;
}

.section-title {
    font-size: 18px;
    color:#006d6f;
    border-bottom: 2px solid #006d6f;
    margin-bottom:8px;
}

.item {
    margin-bottom: 8px;
    font-size: 14px;
}

.btns {
    text-align:center;
    margin:25px;
}

button {
    padding:10px 25px;
    background:#006d6f;
    color:white;
    border:none;
    border-radius:20px;
    cursor:pointer;
}
</style>
</head>

<body>

<?php
include_once "connection.php";

if(isset($_POST['submit'])){

$name = $_POST['name'];

/* PERSONAL */
$personal = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT * FROM personall WHERE username='$name'"
));

/* OBJECTIVE */
$obj = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT objective FROM objective WHERE number='{$personal['pid']}'"
));

/* MULTI DATA */
$edu = mysqli_query($conn,"SELECT * FROM education WHERE id='{$personal['pid']}'");
$skills = mysqli_query($conn,"SELECT * FROM skill WHERE sid='{$personal['pid']}'");
$projects = mysqli_query($conn,"SELECT * FROM project WHERE prid='{$personal['pid']}'");
$languages = mysqli_query($conn,"SELECT * FROM language WHERE nu='{$personal['pid']}'");
$hobbies = mysqli_query($conn,"SELECT * FROM hobbies WHERE num='{$personal['pid']}'");
?>

<div class="page" id="resume">

<!-- LEFT -->
<div class="left">
    <img src="11.jpeg" class="profile-pic">

    <h2><?php echo $personal['name']." ".$personal['lname']; ?></h2>
    <p>📍 <?php echo $personal['address']; ?></p>
    <p>📞 <?php echo $personal['phone']; ?></p>
    <p>✉ <?php echo $personal['email']; ?></p>

    <div class="section">
        <div class="section-title" style="color:white;">Languages</div>
        <?php while($l=mysqli_fetch_assoc($languages)){ ?>
            <p><?php echo $l['language']; ?></p>
        <?php } ?>
    </div>

    <div class="section">
        <div class="section-title" style="color:white;">Hobbies</div>
        <?php while($h=mysqli_fetch_assoc($hobbies)){ ?>
            <p><?php echo $h['hobbies']; ?></p>
        <?php } ?>
    </div>
</div>

<!-- RIGHT -->
<div class="right">

<div class="section">
    <div class="section-title">Career Objective</div>
    <div class="item"><?php echo $obj['objective']; ?></div>
</div>

<div class="section">
    <div class="section-title">Education</div>
    <?php while($e=mysqli_fetch_assoc($edu)){ ?>
        <div class="item">
            <b><?php echo $e['course']; ?></b><br>
            <?php echo $e['college']; ?><br>
            Year: <?php echo $e['year']; ?> | Score: <?php echo $e['grade']; ?>
        </div>
    <?php } ?>
</div>

<div class="section">
    <div class="section-title">Skills</div>
    <?php while($s=mysqli_fetch_assoc($skills)){ ?>
        <div class="item">• <?php echo $s['skill']; ?></div>
    <?php } ?>
</div>

<div class="section">
    <div class="section-title">Projects</div>
    <?php while($p=mysqli_fetch_assoc($projects)){ ?>
        <div class="item">
            <b><?php echo $p['title']; ?></b><br>
            <?php echo $p['description']; ?>
        </div>
    <?php } ?>
</div>

</div>
</div>

<?php } ?>

<div class="btns">
<button onclick="downloadPDF()">Download A4 PDF</button>
<a href="view.html"><button>Back</button></a>
</div>

<script>
function downloadPDF(){
    html2canvas(document.getElementById("resume"), {scale:2}).then(canvas=>{
        var img = canvas.toDataURL("image/png");
        var doc = {
            pageSize: 'A4',
            content:[{image:img, width:595}]
        };
        pdfMake.createPdf(doc).download("Resume_A4.pdf");
    });
}
</script>

</body>
</html>

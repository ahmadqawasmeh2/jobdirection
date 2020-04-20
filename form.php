<?php 


require 'is_login.php';

$categres=$_GET['categories'];

  if(isset($_POST['Submit'])){
    
$Job_Direction=$_POST['user_name'];
    $to="ahmadqawasmeh2@gmail.com";
    $header="From: Rami Marasheh";
  $header .= "MIME-Version: 1.0\r\n";

         $header .= "Content-type: text/html\r\n";

    $subject=" PREFERRED JOB TITLE";

   $message = "<html><body> <b><h1><center>Job Direction</center></h1> </b>";
     $message .= "<h2>User Name : ".$_POST['user_name']."</h2>";
     $message .= "<h2>categres : ".$categres."</h2>";
     $message .= "<h3>User Address :'".$_POST['user_address']."'</h3>";
     $message .= "<h4>User Email : '".$_POST['email']."'</h4>";
     $message .= "<h5> CAREER OBJECTIVE: '".$_POST['user_information']."'</h5>";
      $message .= "<h5>PROFESSIONAL COMPETENCIES : '".$_POST['user_information1']."'</h5>";
       $message .= "<h5> PERSONAL COMPETENCIES: '".$_POST['user_information2']."'</h5>";
        $message .= "<h5> AREAS OF EXPERTISE: '".$_POST['user_information3']."'</h5>";

         $message .= "<h5> CAREER HISTORY
: '".$_POST['user_information4']."'</h5>";
          $message .= "<h5> CAREER HISTORY
: '".$_POST['user_information5']."'</h5>";
           $message .= "<h5> CAREER HISTORY
: '".$_POST['user_information6']."'</h5>";
            $message .= "<h5> CAREER HISTORY
: '".$_POST['user_information7']."'</h5>";
             $message .= "<h5>CAREER HISTORY
 : '".$_POST['user_information8']."'</h5>";

              $message .= "<h5> PREVIOUS JOB TITLE: '".$_POST['user_information9']."'</h5>";
               $message .= "<h5> PREVIOUS JOB TITLE: '".$_POST['user_information10']."'</h5>";
                $message .= "<h5> PREVIOUS JOB TITLE: '".$_POST['user_information11']."'</h5>";
                 $message .= "<h5> PREVIOUS JOB TITLE: '".$_POST['user_information12']."'</h5>";
                  $message .= "<h5> PREVIOUS JOB TITLE: '".$_POST['user_information13']."'</h5>";
                   $message .= "<h5> PREVIOUS JOB TITLE: '".$_POST['user_information14']."'</h5>";

                    $message .= "<h5>ACADEMIC QUALIFICATIONS : '".$_POST['user_information15']."'</h5>";
                     $message .= "<h5>ACADEMIC QUALIFICATIONS : '".$_POST['user_information16']."'</h5>";

                      $message .= "<h5> UNIVERSITY NAME : '".$_POST['user_information17']."'</h5>";
                       $message .= "<h5>UNIVERSITY NAME : '".$_POST['user_information18']."'</h5>";
                        $message .= "<h5>UNIVERSITY NAME : '".$_POST['user_information19']."'</h5>";
                        $message .="</body></html>";
   

   $result= mail ($to,$subject,$message,$header);
    if ($result==true) {
      header("location:home.php?response=success");
    } else
    {
      header("location:form.php?response=fail");
    }

  }

?>



<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    <link rel="shortcut icon" type="image/png" href="images/faviconforn.png"/>
<link rel="shortcut icon" type="image/png" href="images/faviconforn.png"/>
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    
  <meta charset="utf-8">
  <title>form</title>
  <style type="text/css">
  hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 3px;
} 


input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

  #exampleFormControlInput11
  {
     width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
      margin-left: -2px;

  }


  #exampleFormControlInput111
  {
     width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
      margin-left: -2px;

  }
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}


.button {
  background-color: #464646;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
      width: 319px;
          border-radius: 11px;
}



.button_button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>
</head>
<body>
  <div><center><h1>YOUR CURRENT / PREFERRED JOB TITLE</h1></center></div>
<form action="" method="POST" class="login100-form validate-form" enctype="">
  <div class="form-group">
    <center>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="user_name" placeholder="user name">
  </div>
</center>
<center>
  <br>
  <div class="form-group">
    
    <input type="text" class="form-control" id="exampleFormControlInput1" name="user_address" placeholder="Your address">
  </div></center>
  <br>
  <center>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="email"  placeholder="Email address ">
  </div>
</center>
  <hr>
  
   <div class="form-group">
    <label ><h2>CAREER OBJECTIVE</h2></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="user_information" rows="3" placeholder="Use this space to express your career aspirations and goals and to quickly connect with a employer. Stress your most relevant experience and skills for the position you are applying for."></textarea>
  </div>
  <hr>

  <div class="form-group">
    <label ><h2>PROFESSIONAL COMPETENCIES </h2></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="user_information1" rows="3" placeholder=" Use these bullet points to define and explain what you believe to be your key stills and abilities.  "></textarea>
  </div>
  <hr>


  <div class="form-group">
    <label ><h2>PERSONAL COMPETENCIES</h2></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="user_information2" rows="3" placeholder=" Create a list of the personal skills and qualities that you will bring to a new employer."></textarea>
  </div>
  <hr>


  <div class="form-group">
    <label ><h2>AREAS OF EXPERTISE</h2></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="user_information3" rows="3" placeholder="skills"></textarea>
  </div>
  <hr>

  
   <div class="form-group">
    <label ><h2> CAREER HISTORY</h2></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="user_information4" placeholder="YOUR MOST RECENT JOB TITLE ">
    <input type="text" class="form-control" id="exampleFormControlInput111" name="user_information5" placeholder="Employers name ">
     <input type="date" class="form-control" name="user_information6" id="exampleFormControlInput111" placeholder="Employment dates">

    <input type="text" class="form-control" name="user_information7" id="exampleFormControlInput1" placeholder=" DUTIES">

    <textarea class="form-control" id="exampleFormControlTextarea1" name="user_information8" rows="3" placeholder="In concise sentences describe the daily tasks you undertook."></textarea>
  </div>
  <hr>
<center>
  <br>

  <div class="form-group">
    <h3>PREVIOUS JOB TITLE </h3>
    <input type="text" class="form-control" name="user_information9" id="exampleFormControlInput11" placeholder="Employers name ">
     <input type="date" class="form-control" id="exampleFormControlInput11" name="user_information10" placeholder="Employment dates">
  </div></center>

  <center>
  <br>
  <div class="form-group">
    <h3>PREVIOUS JOB TITLE </h3>
    <input type="text" class="form-control" name="user_information11" id="exampleFormControlInput11" placeholder="Employers name ">

     <input type="date" class="form-control" id="exampleFormControlInput11" name="user_information12" placeholder="Employment dates">
  </div></center>


<center>
  <br>
  <div class="form-group">
    <h3>PREVIOUS JOB TITLE </h3>
   <input type="text" class="form-control" name="user_information13" id="exampleFormControlInput11" placeholder="Employers name ">

     <input type="date" class="form-control" name="user_information14" id="exampleFormControlInput11" placeholder="Employment dates">
  </div></center>

<hr>
   
<center>
  <div class="form-group">
    <h3>ACADEMIC QUALIFICATIONS</h3>
    <input type="text" class="form-control" name="user_information15" id="exampleFormControlInput11" placeholder="Grade">
     <input type="date" class="form-control" id="exampleFormControlInput11" name="user_information16" placeholder="Study dates">
  </div></center>
 
<hr>

<center>
  <div class="form-group">
    <h3>UNIVERSITY NAME </h3>
    <input type="text" class="form-control" name="user_information17" id="exampleFormControlInput11" placeholder="Degree name /Grade ">
     <input type="date" class="form-control" id="exampleFormControlInput11" name="user_information18" placeholder="Study dates">
     <input type="text" class="form-control" name="user_information19" id="exampleFormControlInput1" placeholder="NVQ name/Grade ">
  </div></center>
 <hr>
 <div style="text-align: center;">
  <button class="button button2" name="Submit" value="Submit">Submit</button>
 </div>
</form>

</body>
</html>
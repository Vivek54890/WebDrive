<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href="wiz.css">
    <title>WebDrive</title>
</head>


<body>

<style>
  
     body
     {
       background-image: url('img1.jpg');
       background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
     }


     #button
     {
        width: 90px;
        height: 40px;
        margin-top: -40px;
        margin-left: 86px;
        border: none;
        border-radius: 20px;
        font-weight: bold;
        background: deeppink;
     }




     #content1
     {
       width:300px; 
       height: 380px; 
       background: rgba(0, 0, 0, 0.1);  
       padding: 20px; 
       border-radius: 10px; 
       margin-left: 100px; 
       margin-top: 80px;
     }



     #container3
     {
        width:300px; 
        height: 340px; 
        background: skyblue;
        padding: 20px; 
        border-radius: 10px;
        display: none; 
        margin-left: 100px; 
        margin-top: 80px; 
        background: rgba(0, 0, 0, 0.3);
     }

      #container3 h3
      {
        font-weight: 1000; font-size: 30px; margin-bottom: 30px; text-align: center; color: deeppink; margin-top: 20px;
      }
     


     
     #next3
     {
        width: 150px;
        height: 40px;
        margin-top: 20px;
        margin-left: 54Spx;
        border: none;
        border-radius: 20px;
        font-weight: bold;
        background: deeppink;
     }

     #back
     {
        width: 100px;
        height: 40px;
        margin-top: 60px;
        margin-left: 82px;
        border: none;
        border-radius: 20px;
        font-weight: bold;
        background: deeppink;
     }


     title
     {
        background: red;
        color: blue;
     }


 
  #container4
  {
     margin-top:50px; 
     padding: 40px; 
     height: 530px; 
     width: 900px;
  }

  .card
  {
    width: 400px; 
    height:450px; 
    background: rgba(0, 0, 0, 0.4);
    border-radius:15px;
  }

  .card img
  {
     width: 200px; 
     height: 200px; 
     width: 200px; 
     border-radius: 50%; 
     margin-top: 60px; 
     margin-left: 95px; 
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

.login1
{
  margin-left: 100px;
  margin-top: 40px;

}






</style>


<div class="row" id="container0">

               <div class="col-sm-12 col-md-12 col-lg-6 col-12" style=" margin-top: 80px;">
                    <div class="card-body" style="background: none;">

                      <div>
                            <img src="1111.png" style="height: 150px; width: 280px; margin-left: 100px;">          
                      </div>

                      <div>
                            <img src="heading.png" style="height: 60px; width: 500px;">
                            <img src="features.png" style="height: 120px; width: 300px; margin-left:90px; margin-top: 20px;">
                            <img src="LOGOs.png" style="height: 60px; width: 450px; margin-left: 25px; margin-top: 20px;">

                      </div>
                       
                    </div>
               </div>














               <div class="col-sm-12 col-md-12 col-lg-6 col-12">
                    <div class="card-body" style="background: none;">

                      <div id="content1">
                        
                        <form action="pro.php" method="POST">
                           <div id="container1">             
          
                           <h3 style="font-weight: bold; margin-bottom: 30px; text-align: center; color:silver;">Create <span style="color: deeppink;">Account.</span></h3>

                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="User Id." name="Uname"><br>
               
                            <input type="password" class="form-control" id="p1" placeholder="Enter password" name="pass"><br>

                            <input type="password" class="form-control" id="p2" placeholder="Confirm password" name="pass2">
                      

                          <br><br>
  
                           <button onclick="next1()" type="Submit" id="button">Next</button>

                          
                         </div>
                       </form>

                       <button onclick="validation()" style="background:none; border: none; color: blue; margin-left: 62px; margin-top: 10px;">Vailidate Password</button>
                     

                         <button type="button" onclick="login()" id="button" class="btn btn-primary btn-block mb-4" style="font-weight: bold; margin-top: 40px; margin-left: 73px; width: 120px; height: 40px; background: #0ec96c;">Log in</button> 

                       
                     </div>










                    <div id="content3">
                      
                        <div id="container3">
                          <form action="signin.php" method="POST">
          
                            <h3 style="">Log in</h3>

                            <input id="user" name="Uname" type="email" class="form-control" placeholder="User Id." style="margin-top:40px;">   <br>
               
                            <input id="password" name="pass" type="password" class="form-control" placeholder="Enter password">     <br>

                            <div class="d-flex">
                                 
                                 <button type="Submit" id="next3" onclick="next3() name'login1">Submit</button>
                            </div>
                          </form>
                          <button id="back" onclick="back()">Back</button>
                        </div>
                      
                    </div>

                       
                    </div>
               </div>

</div>






<div class="container" id="container4" style="display: none;">


      <div class="row">
  
              <div class="col-sm-12 col-md-12 col-lg-6 col-12">
                <div class="card">
                   
                    <img src="img3.jpg" alt="Profile Image">
                    <h2 class="gradienttext" style="margin-left: 58px; margin-top: 20px; color: white;">Vivek Kumar Singh</h2>
                    <p style="margin-left: 110px; color: white;">Vivek54890@gmail.com</p>
          
                </div>
              </div>


              <div class="col-sm-12 col-md-12 col-lg-6 col-6">
                <div class="card">
                  <div class="card-body">
                      <h1 style="margin-left: 100px; margin-top: 30px; font-weight: bold; color: white;">My Files</h1>  
                  </div>
                </div>
              </div>
      </div>

</div>
















<script type="text/javascript">


  
function validation(){
var id1 = document.getElementById('email1').value;
var p1 = document.getElementById('p1').value;
var p2 = document.getElementById('p2').value;
  
  if(p1 == p2 && p1 !== '' && p2 !== '' && id1 !== '')
  {
    alert("your Password and Confirm Password has been matched..");
    document.getElementById('container1').style.display="block";
    document.getElementById('container2').style.display="none";
  }


  else
  {
    alert("Please enter correct User Id or Password !!")
    document.getElementById('container1').style.display="block";
    document.getElementById('container2').style.display="none";
  }

}






function next3() {

  
  var id1 = document.getElementById('email1').value;
  var id2 = document.getElementById('email2').value;
  var p3 = document.getElementById('p3').value;
  var p1 = document.getElementById('p1').value;

    if(id1 == id2 && p1 == p3)
    {
      document.getElementById('container4').style.display="block";
      document.getElementById('container0').style.display="none";
    }
    else{
      alert("Login fail !!");
    }
}




  function login(){
    document.getElementById('container3').style.background="rgba(0, 0, 0, 0.3)";
    document.getElementById('content1').style.display="none";
    document.getElementById('container3').style.display="block";
  }


 function back(){
    document.getElementById('content1').style.display="block";
    document.getElementById('content3').style.display="none";
    document.getElementById('content1').style.display="block";
  }



</script> 





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>
</html>
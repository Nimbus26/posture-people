<?php 

include "db.php";

if(isset($_POST['submit'])){



    $name=$_POST['name']; 

$email=($_POST['email']);
$article=($_POST['message']);


                
  
    


$sql="INSERT INTO suggestion (name,email,article) VALUES ('$name','$email','$article')";
$result=mysqli_query($conn,$sql);






  header("Location:index.php"); 



}



?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Add Your Article</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/Article.css"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">  
</head>
<body>
     <div class="container">
       
         <h1> Add Your Article </h1>
         <form action="article.php" method="post" class="my-form">

             <div class="form-1">
             <label class="move-up" for="name"> Full Name </label>
          <input type="text" id="name" class="gt-input">
        </div>

        <div class="form-1">
                <label  for="name"> Email  </label>
             <input type="text" id="email" class="gt-input">
           </div>

           <div class="form-1">
                <label for="name"> Your Article </label>
                <textarea name="message"  id="Message" cols="30" rows="80"  class="gt-input gt-text"></textarea>
           </div>
           <div class="form-1">
              <input type="submit" value="submit" class="btn" name="submit">
            </div>
              
        </form>
     </div>
 
   <script src="Article.js"></script>
</body>
</html>
    
 
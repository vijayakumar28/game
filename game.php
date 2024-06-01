<?php
$sucess=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    // $sql="insert into `registration`(username,email,password,cpassword)values('$username','$email','$password','$cpassword')";
    // $result=mysqli_query($con,$sql);
    // if($result){
    //     echo"data insert sucessfully";
    // }
    // else{
    //     die(mysqli_error($con));
    // }
    $sql="select * from `registration` where username='$username'";
    $result=mysqli_query($con,$sql);
    if($result){
      $num=mysqli_num_rows($result);
      if($num>0){
        //echo"user already exist";
        $user=1;
      }
      else{
        $sql="insert into `registration`(username,email,password,cpassword)values('$username','$email','$password','$cpassword')";
        $result=mysqli_query($con,$sql);
        if($result){
             //echo"Signup  sucessfull";
             $sucess=1;
          }
           else{
               die(mysqli_error($con));
          }
      }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="game.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/372701d325.js" crossorigin="anonymous"></script>


</head>
<body>
<?php
if(isset($user)){
  echo' <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg><div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    User already exist
  </div>
</div>';
}
?>
<?php
if (isset($sucess)){
  echo'<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg> <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    Your are sucessfully signed up
  </div>
</div>';
}
?>
  <section id="home">
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="/portfolio/images/gamepng (3).png" alt="Game zone Logo" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#game">Game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <div class=" login-btn">
          <button class="btn btn-warning" type="submit"><a href="sign.php">Login</a></button>
        
        </div>
        </ul>
        
       
  </div>
</nav>
      <!-- Home -->
      <div class="content">
        

<h2 style="text-align: center;" class="main-text">Game <span class="span-text">Zone</span></h2>

<h1 class="second-text">Passionate about <span class=""> immersive gaming </span></h1>
        </div>
      

</div>
      
    
        
      </section>
      <div class="container">
        <div  class="about">
          <div class="title"> <h1>About</h1></div>
          <div class="box">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3">
          <div class="col"><div class="card">
            <i class="fa-solid fa-download "></i>
            <h5 class="about-text">Free Game Downloads</h5>
            <p class="about-para">Offer a section for free downloads of indie games, demos, or full versions of games, ensuring they're legally shareable.</p>
      
          </div></div>
          <div class="col"> <div class="card">
            <i class="fa-solid fa-gamepad"></i>
            <h5 class="about-text">Cloud Saves and Game Syncing</h5>
            <p class="about-para">Offer a cloud save feature that allows users to save their game progress online and access it from any device.</p>
      
          </div></div>
          <div class="col"> <div class="card">
            <i class="fa-solid fa-hands-asl-interpreting"></i>
            <h5 class="about-text">Exclusive Deals and Discounts</h5>
            <p class="about-para">Partner with game developers and publishers to offer exclusive deals, discounts, and early access to games for your website users.</p>
      
          </div></div>
          
        </div>
      </div>
    </div>
  </div>
      </div>
      <!-- <div  class="about">
        <div class="title"> <h1>About</h1></div>
        <div class="box">
          <div class="card">
            <i class="fa-solid fa-download "></i>
            <h5 class="about-text">Free Game Downloads</h5>
            <p class="about-para">Offer a section for free downloads of indie games, demos, or full versions of games, ensuring they're legally shareable.</p>
      
          </div>
          <div class="card">
            <i class="fa-solid fa-gamepad"></i>
            <h5 class="about-text">Cloud Saves and Game Syncing</h5>
            <p class="about-para">Offer a cloud save feature that allows users to save their game progress online and access it from any device, ensuring they never lose their progress and can seamlessly switch between devices.</p>
      
          </div>
          <div class="card">
            <i class="fa-solid fa-hands-asl-interpreting">
            <h5 class="about-text">Exclusive Deals and Discounts</h5>
            <p class="about-para">Partner with game developers and publishers to offer exclusive deals, discounts, and early access to games for your website users.</p>
      
          </div>
        </div>
      </div> -->
    
      
      <section id="blog">
        
        <div class="wrap">
            <div class="promo-wrapper clearfix">
                <div class="promo-column ">
                  <h1 class="blog-font "><i class="fa-solid fa-download "></i></h1>
                    <h5 class="blog-center">Free Game Downloads</h5>
                    <p class="blog-center">Offer a section for free downloads of indie games, demos, or full versions of games, ensuring they're legally shareable.</p>
                </div>
                <div class="promo-column">
                  <h1 class="blog-font "><i class="fa-solid fa-headset"></i></i></h1>

                    <h5 class="blog-center">Full-Time Support</h5>
                    <p class="blog-center">Provide round-the-clock customer service for technical issues, game troubleshooting, and user account support through various channels like live chat, email, and a comprehensive FAQ section. </p>
                </div>
                <div class="promo-column">
                  <h1 class="blog-font "><i class="fa-solid fa-hands-asl-interpreting"></i></i></h1>

                    <h5 class="blog-center">Exclusive Deals and Discounts</h5>
                    <p class="blog-center">Partner with game developers and publishers to offer exclusive deals, discounts, and early access to games for your website users. </p>
                </div>
                <div class="promo-column">
                  <h1 class="blog-font "><i class="fa-brands fa-nfc-directional"></i></i></h1>

                    <h5 class="blog-center">Customizable User Dashboards</h5>
                    <p class="blog-center">Allow users to customize their dashboards with widgets or tools related to game tracking, wish lists, and notifications for game updates or new releases. </p>
                </div>
                <div class="promo-column">
                  <h1 class="blog-font "><i class="fa-solid fa-gamepad"></i></h1>

                  <h5 class="blog-center">Cloud Saves and Game Syncing</h5>
                  <p class="blog-center">Offer a cloud save feature that allows users to save their game progress online and access it from any device, ensuring they never lose their progress and can seamlessly switch between devices.</p>
              </div>
            </div>
        </div>
</section>

     


      <section id="game">
        <div class="container">
          <h1 class="g-head">Popular Games</h1>
          <div class="images">
            <div>
            <span >  <i>
              <button type="button" class="btn btn-warning btnwd" ><a href="https://www.freegames33.com/transfer.php/36c7b92f1e/526942576a4a7a5733736f694e552f616d672e7a55722e79572e4375/3u.20/NarutoNinjaWay9.zip" rel="nofollow">
                <i class="fa-solid fa-download"> Naruto</i></a></button></i></span>
            <img src="https://m.media-amazon.com/images/I/61gzRBKrLoL._SX300_SY300_QL70_FMwebp_.jpg" alt="">
          </div>









          <div>
            <span> <i>
              <button type="button" class="btn btn-warning btnwd"><a href="https://www.freegames33.com/transfer.php/ad005b36d3/526942576a4a7a5733736f6b4e502f616d672e7a55722e79572e4375/ei.9c/GTA2INSTALLER.ZIP" rel="nofollow"><i class="fa-solid fa-download"> GTA</i></a></button></i></span>
            <img src="https://m.media-amazon.com/images/I/81kAitW5qAL._SX385_.jpg" alt="">
          </div>





          <div>
            <span> <i>
              <button type="button" class="btn btn-warning btnwd"><a href="https://www.freegames33.com/transfer.php/b5040ccf01/526942576a4a7a5733746d624b532f616d672e7a55722e79572e4375/pe.k5/nzd_titanquest_fp.zip" rel="nofollow"><i class="fa-solid fa-download"> AOT</i></a></button></i></span>
            <img src="https://i.pinimg.com/236x/05/6c/b3/056cb3543cfd3f9e2382cfbdff293d04.jpg" alt="">
          </div>
          <div>
            <span><i>
              <button type="button" class="btn btn-warning btnwd"><a href="https://www.freegames33.com/transfer.php/e4130b2d55/526942576a4a7a573374706a4c472f616d672e7a55722e79572e4375/hj.bz/nzd_NFS_ProStreet_Demo.exe" rel="nofollow"><i class="fa-solid fa-download"> ASPHALT</i></a></button></i></span>
            <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ0lxonb6nrVivXhfPoIQEFpihs6tlyFqjA0OMP6cyp4gMohfpO" alt="">
          </div>





          <div>
            <span><i>
              <button type="button" class="btn btn-warning btnwd"><a href="https://www.freegames33.com/transfer.php/4ccecf2220/526942576a4a7a57337470614c472f616d672e7a55722e79572e4375/l9.fk/CoD4MWDemoSetup.exe" rel="nofollow"><i class="fa-solid fa-download">PUBG</i></a></button></i></span>
            <img src="https://cdn1.epicgames.com/spt-assets/53ec4985296b4facbe3a8d8d019afba9/pubg-battlegrounds-1m0lf.png" alt="">
          </div>
          <div>
            <span><i>
              <button type="button" class="btn btn-warning btnwd"><a href="https://www.freegames33.com/transfer.php/745ba99f55/526942576a4a7a573…e7a55722e79572e4375/i9.cn/thewhitechamber1.7SETUP-Definitive-Edition.exe" rel="nofollow"><i class="fa-solid fa-download"> It Takes Two</i></a></button></i></span>
            <img src="https://wallpapercosmos.com/w/middle-vertical-retina/5/2/4/84825-1920x2716-mobile-hd-it-takes-two-background-photo.jpg" alt="">
          </div>
          
          <div>
            <span> <i>
             <button type="button" class="btn btn-warning btnwd"><a href="https://www.freegames33.com/transfer.php/6eb980d17b/526942576a4a7a5733746f664b562f616d672e7a55722e79572e4375/g2.al/rawdemo.zip" rel="nofollow"><i class="fa-solid fa-download"> 2K22</i></a></button></i></span>
            <img src="https://store-images.s-microsoft.com/image/apps.35797.13905158543524517.7f5e1531-fd79-401d-b29e-fa8626a200a1.23d13b49-6573-4c9d-a85a-8eedb2e960ad?q=90&w=177&h=265" alt="">
          </div>
          
          <div>
            <span> <i>
              <button type="button" class="btn btn-warning btnwd"><a href="https://www.freegames33.com/transfer.php/6eb980d17b/526942576a4a7a5733746f664b562f616d672e7a55722e79572e4375/g2.al/rawdemo.zip" rel="nofollow"><i class="fa-solid fa-download"> 2K22</i></a></button></i></span>
            <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRHsUodsef6VfLUwPgAxLkGjfy0zYcJpBBeTyz47ZjO-C1K-Xrt" alt="">
          </div>
          <div>
            <span> <i>
              <button type="button" class="btn btn-warning btnwd"><a href="https://www.freegames33.com/transfer.php/059ec9ac59/526942576a4a7a5733746f6147472f616d672e7a55722e79572e4375/hj.bz/nzd_NFS_ProStreet_Demo.exe" rel="nofollow"><i class="fa-solid fa-download"> NFS</i></a></button></i></span>
            <img src="https://staticg.sportskeeda.com/editor/2020/12/ed6f5-16069157093599-800.jpg" alt="">
          </div>
        </div>
      </div>
         <div class="modal">
          <span class="close"><i class="fa-regular fa-circle-xmark"></i></span>
          <div class="modal-content"><img src="/portfolio/images/model.jpg" alt="">
          
         
          </div>
         </div>
        



      </section>


      <body>
        <div style="background-color: black; color: white; padding: 20px; text-align: center;">
            <p style="font-size: 18px;">&copy; 2024 Game Website. All Rights Reserved.</p>
            <p style="font-size: 14px;">Contact: info@gamewebsite.com</p>
        </div>



      
      




         <script src="game.js"></script>

      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>


</html>

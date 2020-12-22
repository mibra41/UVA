

<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
            <link rel="stylesheet" href="muhvies-style.css" />
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
            <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Oswald|ZCOOL+QingKe+HuangYou" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
            <title>Mohvies</title>
    </head>
    <body class="login">
            <?php
                     $userMsg=$pwdMsg="";
                     $user="";
                     $pwd="";

                    if($_SERVER['REQUEST_METHOD']=="POST"){
                        if(isset($_POST['user'])){
                            
                            $user= $_POST['user'];
                            
                            if(strlen($user)<5){
                                $userMsg="Invalid User ID";
                            }
                            
                            if(isset($_POST['pwd'])){
                                
                                 $pwd=$_POST['pwd'];
                                 if(strlen($pwd)<5){
                                     $pwdMsg="Invalid Password";
                                 }else if(($pwd=="kyleguy")){
                                     $pwdMsg="Kyle Guy is Not A Password";
                                 }else if(strlen($user)<5){
                                    $userMsg="Invalid User ID";
                                }
                                 else{
                                     session_start();
                                     $_SESSION['user']=$_POST['user'];
                                     $_SESSION['pwd']=$_POST['pwd'];
                                     header('Location: home-page.php');    
                                 }
                                 
                            }else{
                                $pwdMsg="Please Set Password";
                            }
                        }else{
                            $userMsg= "Please Set User Name" ;
                        }
                        
                    }

                ?>
   
            <header>

                    <!--This is the navigation bar-->
                    <nav class="navbar navbar-expand-md navbar-light  " >
                        <a class="navbar-brand title-style" href="home-page.html">Mohvies</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar">
            
                            <span class="navbar-toggler-icon"></span>
            
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navBar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="home-page.html"> Rankings </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="home-page.html"> Polls </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="home-page.html"> Coming Soon </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="rate-movie.html"> Rate a Movie </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mohvies-login.html"> Sign In </a>
                                </li>
            
                            </ul>
                        </div>
                    </nav>
            
            
            
            
            
                </header>
        <!--
           Contains main banner and sign-in form 
        -->
                <div>
                <div>
                    <br>
                    <h1 style="text-align: center">
                       Experience Movies The Mohvies Way!
                    </h1>
                </div>
                <br>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class = "col-4 login-style" id="sign-in">
                            <h3 style="text-align: center;">Sign-in</h3>
                            <form action= "<?php $_SERVER['PHP_SELF'] ?>" method = "post" style="text-align: center;"> 
                                <div id="user-photo"></div>
                                <label>Mohvies-Id: </label>
                                <input type="text"  name="user" id="mohvies-Id" style="margin-top: 1.5%; margin-bottom: 0.5%;" value = "<?php if(!(empty($_POST['user']))){ echo $user ; }?>"autofocus required>
                                
                                <div id="user-name" style="text-align:center;"><?php echo "$userMsg" ?> </div>
                                

                                
                                <label>Password: </label>

                                <input type="password" placeholder=" Enter Password" name="pwd" id="pwd" style="margin-top: 1.5%; margin-bottom: 0.5%;" required>
                                
                                <div id="psw" style="text-align:center;"><?php echo "$pwdMsg" ?></div>
                                


                                
                               <!-- <div id="psw" style="text-align:center;"><?php echo "Kyle Guy is not a passwword" ?></div>-->
                                
                                
                                <br>
                                <input type="submit">
                                

                            </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        <!--
           footer 
        -->
                <footer class="page-footer">
                        <div>
                            
                            <nav class="navbar navbar-expand-md fixed-bottom" style="color: black;">
                                    <small class="copyright"style="color:black;">Copyright&copy; 2019 MUHSID Corp</small>
                                    <div class="collapse navbar-collapse justify-content-end" id="navBar">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home-page.html"> <small>Rankings</small>  </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home-page.html"> <small>Polls</small> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home-page.html"> <small>Coming Soon</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="rate-movie.html"> <small>Rate a Movie</small> </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="mohvies-login.html"> <small>Sign In</small> </a>
                                                </li>
                            
                                            </ul>
                                        </div>
                
                            </nav>
                                
                
                        </div>
                        
                    </footer>
                <script>
                    var userId= document.getElementById("mohvies-Id");
                    var password= document.getElementById("pwd");
                    var subm= document.getElementById("submit");
                    //When user clicks submit, the checkSuccess function runs
                    subm.addEventListener("click", checkSuccess);
                    //if username is in focus, the clearMessage function runs
                    userId.addEventListener("focus",clearMessage);
                    //if password is in focus, the addImage function runs
                    password.addEventListener("focus",addImage);
                    //Checks if the password is correct and generates a welcome message if not correct it provides a message saying the password is incorrect
                    function checkSuccess(){
                      if(password.value.length<8){
                        //document.getElementById("psw").innerHTML="password is too short";
                      }else{
                          if(password.value == "mohsid007"){
                            var success = document.getElementById("sign-in");
                          var welcome= document.createElement("h2");
                          welcome.setAttribute("style","text-align: center;")
                          var welText= "Welcome " + userId.value;
                          var welcomeText= document.createTextNode(welText);
                          welcome.appendChild(welcomeText)
                          var welcomeImg= document.createElement("img");
                          welcomeImg.setAttribute("src","https://media1.tenor.com/images/f3ca23fc57b44e3103794e381353d203/tenor.gif");
                          welcomeImg.setAttribute("class","img-style-center justify-content-center");
                          success.innerHTML="";
                          success.appendChild(welcome);
                          success.appendChild(welcomeImg);
                              
                          }else{
                            //document.getElementById("psw").innerHTML="Wrong Password";
                          }
                          

                      }
                        
                      
                    }
                    //clears the feedback message under username when it is in focus
                    function clearMessage(){
                        document.getElementById("user-name").innerHTML= "";
                        document.getElementById("user-photo").innerHTML= "";
                    }
                    //When password is on focus,adds profile photo of user if username is valid or provides message that username is invalid
                    function addImage(){
                        if(password.value.length>=8){
                            document.getElementById("psw").innerHTML="";
                        }
                        
                        if(userId.value.length<5){
                           // document.getElementById("user-name").innerHTML= "Your Id is Too Short";
                        }else if(userId.value=="muhammad"){
                            var photo=document.getElementById("user-photo");
                            var createPhoto = document.createElement("img");
                            photo.innerHTML=" ";
                            createPhoto.setAttribute("src","moh-pic.jpg");
                            createPhoto.setAttribute("class","profile-style");
                            photo.appendChild(createPhoto);

                        }else if(userId.value=="siddharth"){
                            var photo=document.getElementById("user-photo");
                            var createPhoto = document.createElement("img");
                            photo.innerHTML=" ";
                            createPhoto.setAttribute("src","sid-pic.jpg");
                            createPhoto.setAttribute("class","profile-style");
                            photo.appendChild(createPhoto);

                        }
                        else{
                            var photo=document.getElementById("user-photo");
                            var createPhoto = document.createElement("img");
                            photo.innerHTML=" ";
                            createPhoto.setAttribute("src","https://cdn2-www.superherohype.com/assets/uploads/2017/03/deadpool-thumbs-1.png");
                            createPhoto.setAttribute("class","profile-style");
                            photo.appendChild(createPhoto);
                        }
                    }
                    
                </script>

                
    
    </body>

</html>
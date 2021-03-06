<?php
    session_start();  
    if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html>

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="muhvies-style.css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald|ZCOOL+QingKe+HuangYou" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <title>Mohvies</title>
</head>

<body>


        <!--
            header includes the navbar and the name in the top left    
        -->
    <header>
        
        <nav class="navbar navbar-expand-md navbar-light" >
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
           jumbotron 
        -->
    <div class="container">
            <div class="jumbotron">
                    <div class="container">
                        <h1>Welcome <?php echo $_SESSION['user'] ?> </h1>
                        <h3>It's Time To Experience Movies The Mohvies Way!</h3>
                    </div>
            </div>

    </div>
    <!--
        main section of the whole page 
        -->
    <section class="main-content">
        <!--
           main heading 
        -->
        <div class="row">
            <div class="container">
                <h2>What's popular in Movies & TV</h2>
            </div>
        </div>
        <!--
           contains left column 
        -->
        <div class="container">
            <div class="row">
            <?php
                
                $xml=simplexml_load_file("movies.xml") or die("Error: Cannot create object");


                function plus_one($value){
                    return $value + 1;
                }

                if(isset($_GET['movie-name'])){
                    
                    foreach($xml->children() as $movie){
                        if($movie->title == $_GET['movie-name'] ){
                            $newValue = plus_one($movie->UsersWatched);
                            $movie->UsersWatched = $newValue;
                            $moviename= $_GET['movie-name'];
                            

                            $xml->asXML("movies.xml");
                            
                        }
                    }
                        
                    
                }
                //$xml->Movie[0]->UsersWatched=123;

                //$xml->asXML("movie.xml");

                

               foreach($xml->children() as $movie){
                   $ranklist[]= (integer) $movie->UsersWatched;
               }

              rsort($ranklist);

               
               
            
                   
                foreach($ranklist as $rank){
                    foreach($xml->children() as $movie){
                        if($movie->UsersWatched == $rank){
                            $movielist[] = $movie->title;
                            $linklist[]=$movie->link;
                        }
                    }
                }
                
              

            ?>
                <div class="col-md-2">
                    <img class="re-size" src="<?php echo $linklist[0]; ?>"
                        alt="Russian Doll">
                    <h5><?php echo $movielist[0]; ?></h5>
                    <p style="color:black;"><?php echo $ranklist[0] ; ?> users watched</p>
                </div>
                <div class="col-md-2">
                    <img class="re-size" src="<?php echo $linklist[1]; ?>"
                        alt="Russian Doll">
                    <h5><?php echo $movielist[1]; ?></h5>
                    <p style="color:black;"><?php echo $ranklist[1] ; ?> users watched</p>
                </div>
                <div class="col-md-2">
                    <img class="re-size" src="<?php echo $linklist[2]; ?>"
                        alt="Russian Doll">
                    <h5><?php echo $movielist[2]; ?></h5>
                    <p style="color:black;"><?php echo $ranklist[2] ; ?> users watched</p>
                </div>
                <div class="col-md-2">
                    <img class="re-size" src="<?php echo $linklist[3]; ?>"
                        alt="Russian Doll">
                    <h5><?php echo $movielist[3]; ?></h5>
                    <p style="color:black;"><?php echo $ranklist[3] ; ?> users watched</p>
                </div>
                <div class="col-md-2">
                    <img class="re-size" src="<?php echo $linklist[4]; ?>"
                        alt="Russian Doll">
                    <h5><?php echo $movielist[4]; ?></h5>
                    <p style="color:black;"><?php echo $ranklist[4] ; ?> users watched</p>
                </div>
                <div class="col-md-2">
                    <img class="re-size" src="<?php echo $linklist[5]; ?>"
                        alt="Russian Doll">
                    <h5><?php echo $movielist[5]; ?></h5>
                    <p style="color:black;"><?php echo $ranklist[5] ; ?> users watched</p>
                </div>
                
                
            </div>


        </div>
        <br>
        <div class="row">
            <div class="container">
                <h3>Have you watched any of these? Even If Not Log What You Watched This Week!</h3>
                <form action= "<?php $_SERVER['PHP_SELF'] ?>" method = "get" name= "log-movie">
                    <input type="text"  name="movie-name" id="mohvies-Id" style="margin-top: 1.5%; margin-bottom: 0.5%;" autofocus required>
                    <input type= "submit" value="Log Movie">
                </form>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table-represent">
                        <tr style=" font-size: 1.7em; ">
                            <th class="heading-style">
                                <h2">TOP 10 MOVIES OF THE WEEK</h2>
                            </th>

                        </tr>
                        <tr>
                            <td>The Lego Movie 2</td>
                        </tr>
                        <tr>
                            <td>Spiderman Into The Spiderverse</td>
                        </tr>
                        <tr>
                            <td>Gully Boy</td>
                        </tr>
                        <tr>
                            <td>Fyre The Greatest Party That Never Happened</td>
                        </tr>
                        <tr>
                            <td>Glass</td>
                        </tr>
                        <tr>
                            <td>Sorry To Bother You</td>
                        </tr>
                        <tr>
                            <td>Captain Marvel</td>
                        </tr>
                        <tr>
                            <td>The Favourite</td>
                        </tr>
                        <tr>
                            <td>Shoplifters</td>
                        </tr>
                        <tr>
                            <td>Burning</td>
                        </tr>

                    </table>
                </div>
                <!--
                contains second column 
                -->
                <div class="col">
                    <div class="poll-style">
                        <h2 class="poll-heading" id="poll-title">Poll of The Day</h2>
                        <form style="text-align: center;" action="" method="">
                            <h4 id="winner">What is The Best Edgar Wright Movie?</h4>
                            <p id="winner-pic">
                                <img src="http://www.gstatic.com/tv/thumb/v22vodart/34914/p34914_v_v8_ae.jpg" alt="Shaun of the Dead"
                                    style="vertical-align:middle; padding-left:5%; max-width: 20%; margin-left: auto;
                                                margin-right: auto;">
                                <img src="https://is5-ssl.mzstatic.com/image/thumb/Video/40/6a/a5/mzl.tptpbnzp.jpg/268x0w.jpg"
                                    alt="Hot Fuzz" style="vertical-align:middle; padding-left:5%; max-width: 20%; margin-left: auto;
                                                margin-right: auto;">
                                <img src="https://m.media-amazon.com/images/M/MV5BMTMxMjgyMjQ4NF5BMl5BanBnXkFtZTcwMTU0ODk2Mw@@._V1_UY317_CR6,0,214,317_AL_.jpg"
                                    alt="Edgar Wright" style="vertical-align:middle; padding-left:5%; max-width: 20%; margin-left: auto;
                                                margin-right: auto;">
                                <img src="https://upload.wikimedia.org/wikipedia/en/1/14/Scott_Pilgrim_vs._the_World_teaser.jpg"
                                    alt="image of Scott pilgrim" style="vertical-align:middle; padding-left:5%; max-width: 20%; margin-left: auto;
                                                margin-right: auto;">


                            </p>
                            <div class="answer-style">
                                <span id="e1"> Shaun of The Dead <input type="radio" name="movie"  id="Shaun"
                                        onclick="itsclicked()"> </span>

                                </br>
                                <span id="e2">Hot Fuzz <input type="radio" name="movie"  id="Hot" onclick="itsclicked()">
                                </span>
                                </br>

                                <span id="e3">Scott Pilgrim vs The World <input type="radio" name="movie"
                                         id="Scott" onclick="itsclicked()"></span>

                                </br>
                                <span id="e4"> The World's End <input type="radio" name="movie"  id="world" onclick="itsclicked()"> </span>
                                
                                </br>
                                <span id="e5"> Baby Driver <input type="radio" name="movie"  id="baby" onclick="itsclicked()"> </span>
                                
                                </br>

                            </div>


                            </br>


                            <button type="button" class="btn btn-primary" id="submit" onclick="modify()">
                                submit
                            </button>
                            <p id="error"></p>



                        </form>

                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col" style= "margin-bottom: 5%;">
                        <table class="table-represent" >
                                <tr style=" font-size: 1.7em; ">
                                    <th class= "heading-style"><h2>TOP 10 TV SHOWS OF THE WEEK</h2></th>
                            
                                </tr>
                                <tr>
                                    <td>Bodyguard</td>
                                </tr>
                                <tr>
                                    <td>Russian Doll</td>
                                </tr>
                                <tr>
                                     <td>Daredevl</td>
                                </tr>
                                <tr>
                                    <td>The Crown</td>
                                </tr>
                                <tr>
                                    <td>Peaky Blinders</td>
                                </tr>
                                <tr>
                                   <td>Game of Thrones</td>
                               </tr>
                               <tr>
                                   <td>Patrick Melrose</td>
                               </tr>
                               <tr>
                                   <td>American Vandal</td>
                               </tr>
                               <tr>
                                   <td>The Assassination of Gianni Versace</td>
                               </tr>
                               <tr>
                                   <td>Brooklyn Nine-Nne </td>
                               </tr>
                            
                             
                            </table> 
                </div>
                <div class="col">
                        <div class="poll-style" id=fact>
            
            
                                <h2 style="margin-top: 5px; background-color: teal;text-align: center">FUN FACT GENERATOR</h2> 
                                <!--<img src="https://i.imgur.com/kKgjm6x.gif" alt="image showing highlight2" style="vertical-align:middle; padding-left:5%; max-width: 70%; margin-left: auto;
                                margin-right: auto;"  > <br/>-->
                              
                                <!--<p > Spider-Man: Into the Spider-Verse has some of the most complicated animation work in
                                film. The film is so complicated that it took a week to animate only one second of
                                footage. In general, it takes a week to animate four seconds of footage.</p>-->
                                <div id= "fact-content">
                                        <br>
                                        <br>
                                        
                                  
                                        <button type="button" class="btn-info" id="generateFact" >
                                                generate Fun Fact
                                        </button>   

                                        <br>
                                        <br>
                                        <br>
                                    
                                </div>
                                 
                       </div>
                </div>
            </div>
        </div>

    </section>
    <!--
           footer 
        -->
    <footer class="page-footer">
        <div>
            
                <nav class="navbar navbar-expand-md navbar-light" >
                    <small class="copyright" style="color: black">Copyright&copy; 2019 MUHSID Corp</small>
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
        var shaun = document.getElementById("Shaun");
        var hot = document.getElementById("Hot")
        var world = document.getElementById("world")
        var baby = document.getElementById("baby");
        var scott = document.getElementById("Scott");
        var poll = document.getElementById("poll-title");
        var submit = document.getElementById("submit");
        var fact= document.getElementById("generateFact")
      
        //when generate fun fact is clicked, getFact runs
        fact.addEventListener("click", getFact);

        var edgarMovies = [{ name: "Shaun", votes: 54 }, { name: "Hot", votes: 54 }, { name: "World", votes: 36 }, { name: "Baby", votes: 29 }, { name: "Scott", votes: 54 }];
        var max = 54;
        //Anonymous function calculates the total amount of user votes
        var totalVotes = function(){
            return  edgarMovies[0].votes+ edgarMovies[1].votes+edgarMovies[2].votes+edgarMovies[3].votes+edgarMovies[4].votes;
        }
        var votes = totalVotes();
        add = (a, b) => a + b;
        //arrow function returns the percentage of votes for each movie
        divide = (a, b) => a / b * 100;
        function itsclicked() {
            document.getElementById("error").innerHTML = "";
        }
        //generates a fun fact when the fun fact generator is used and manipulates the DOM
        function getFact(){
            var content= document.getElementById("fact-content");
            var pic = document.createElement("img");
            pic.setAttribute("src", "https://i.imgur.com/kKgjm6x.gif");
            pic.setAttribute("class", "img-style")
            var descript= document.createTextNode("Spider-Man: Into the Spider-Verse has some of the most complicated animation work in film. The film is so complicated that it took a week to animate only one second of footage. In general, it takes a week to animate four seconds of footage.");
            var text1= document.createElement("p");
            text1.appendChild(descript);

           
            content.innerHTML="";
            content.appendChild(pic);
            content.appendChild(text1);
           
            
        }
       
        //function generates the winner of the poll when it is submitted
        function modify() {
            if (!shaun.checked && !hot.checked && !world.checked && !baby.checked && !scott.checked) {
                document.getElementById("error").innerHTML = "Please submit a response";
            } else {
                votes += 1;
                poll.innerHTML = "POLL RESULTS FOR " + votes + " VOTES";
                if (shaun.checked == true) {
                    edgarMovies[0].votes += 1;
                }else if(hot.checked== true){
                    edgarMovies[1].votes+=1;
                }else if(world.checked){
                    edgarMovies[2].votes +=1;
                }else if(baby.checked){
                    edgarMovies[3].votes +=1;
                }else {
                    edgarMovies[4].votes +=1;
                }


                if (edgarMovies[0].votes > max) {
                    max = edgarMovies[0].votes;
                    document.getElementById("winner").innerHTML = "As of Now The Winner is Shaun of The Dead";
                    var pic = document.createElement("img");
                    pic.setAttribute("src", "https://i.imgur.com/0vGVo7s.gif");
                    pic.setAttribute("class", "img-style")
                    document.getElementById("winner-pic").innerHTML = " ";
                    document.getElementById("winner-pic").appendChild(pic);
                }else if (edgarMovies[1].votes > max) {
                    max = edgarMovies[1].votes;
                    document.getElementById("winner").innerHTML = "As of Now The Winner is Hot Fuzz";
                    var pic = document.createElement("img");
                    pic.setAttribute("src", "https://i.imgur.com/fSZWD.gif");
                    pic.setAttribute("class", "img-style")
                    document.getElementById("winner-pic").innerHTML = " ";
                    document.getElementById("winner-pic").appendChild(pic);
                }else if (edgarMovies[2].votes > max) {
                    max = edgarMovies[2].votes;
                    document.getElementById("winner").innerHTML = "As of Now The Winner is The World's End";
                    var pic = document.createElement("img");
                    pic.setAttribute("src", "https://thumbs.gfycat.com/SlipperySkeletalJabiru-small.gif");
                    pic.setAttribute("class", "img-style")
                    document.getElementById("winner-pic").innerHTML = " ";
                    document.getElementById("winner-pic").appendChild(pic);
                }else if (edgarMovies[3].votes > max) {
                    max = edgarMovies[3].votes;
                    document.getElementById("winner").innerHTML = "As of Now The Winner is Baby Driver";
                    var pic = document.createElement("img");
                    pic.setAttribute("src", "https://media.giphy.com/media/l1J9zEl6TBGfKNuNO/giphy.gif");
                    pic.setAttribute("class", "img-style-x")
                    document.getElementById("winner-pic").innerHTML = " ";
                    document.getElementById("winner-pic").appendChild(pic);
                }else{
                    max = edgarMovies[4].votes;

                    document.getElementById("winner").innerHTML = "As of Now The Winner is Scott Pilgrim vs The World";
                    var pic = document.createElement("img");
                    pic.setAttribute("src", "https://images.amcnetworks.com/ifc.com/wp-content/uploads/2014/11/ScottPilgrim_MF.jpg");
                    pic.setAttribute("class", "img-style-x")
                    document.getElementById("winner-pic").innerHTML = " ";
                    document.getElementById("winner-pic").appendChild(pic);

                }

                document.getElementById("e1").innerHTML = "Shaun of The Dead: " + divide(edgarMovies[0].votes, votes).toFixed(2) + "% (" + edgarMovies[0].votes + " votes)";
                document.getElementById("e2").innerHTML = "Hot Fuzz: " + divide(edgarMovies[1].votes, votes).toFixed(2) + "% (" + edgarMovies[1].votes + " votes)";
                document.getElementById("e3").innerHTML = "Scott Pilgrim Vs The World: " + divide(edgarMovies[4].votes, votes).toFixed(2) + "% (" + edgarMovies[4].votes + " votes)";
                document.getElementById("e4").innerHTML = "The World's End: " + divide(edgarMovies[2].votes, votes).toFixed(2) + "% (" + edgarMovies[2].votes + " votes)";
                document.getElementById("e5").innerHTML = "Baby Driver: " + divide(edgarMovies[3].votes, votes).toFixed(2) + "% (" + edgarMovies[3].votes + " votes)";
                submit.disabled=true;
            }

        }


    </script>




</body>

</html>
<?php
    }else{
        echo 'Please <a href="mohvies-login.php">Log in</a>';


    }
?>
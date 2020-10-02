


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KELILING.COM</title>
    
    <link rel = "icon" href =  "../Project_SE/image/skuy_travel.png"  type = "image/x-icon"> 
    <link rel="stylesheet" href="css/itinenary_list.css">
    <link rel="icon" href="../Assets/Logo-Kelilingcom.png">
</head>
<body>
    <?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("location:connect-login.php");
        exit();
    }

    
    $username = $_SESSION['username'];
    
    ?>

    <!-- Navbar Header -->
    <div id="navbar-container">

        <!-- Mavbar Logo -->
        <div id="navbar-left-container">
            <img src="./image/skuy_travel.png" alt="not found" height="50px" width="50px">
            <span class="navbar-text"><b>KELILING.COM</b></span>  
        </div>

        <!-- Navbar Right -->
        <div id="navbar-right-container">
            <span class="navbar-text">Collection</span>
            <?php

            

            echo "<div class='navbar-button'>";
            echo "Hello"."<br>";
            echo "<span class='username'>$username</span>";
            echo "</div>";

            echo "<a href='../logout.php' class='navbar-button-p'>";
            echo "Logout";
            echo "</a>"

            ?>



        </div>
    </div>

    <!-- SlideShow -->

    
    <div class="slideshow-container">

        <div class="mySlides fade">
            
            <div class="container">
                <?php
                    $url = "../forum-page/Bandung.php?username=" . $username;
                ?><?php
                echo "<a href='$url'>";
                    echo "<div class='numbertext'><h2>1 / 11</h2></div>";
                    
                    echo "<img src='image/bandung1.jpg' class='image' style='width:100%'>";
                    echo "<div class='middle'>";
                    echo "<div class='text'><h2>BANDUNG</h2></div>";
                    echo "</div>";
                echo"</a>";
                ?>
            </div>
        </div>
  
        <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>2 / 11</h2></div>
                    <img src="image/karimun.jpg" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><h2>KARIMUN JAWA</h2></div>
                </div>
            </div>
        </div>
        
       <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>3 / 11</h2></div>
                    <img src="image/Malang.jpg" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><h2>MALANG</h2></div>
                </div>
            </div>
        </div>
        
        <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>4 / 11</h2></div>
                    <img src="image/semarang.jpg" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><h2>SEMARANG</h2></div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>5 / 11</h2></div>
                    <img src="image/jogja.jpg" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><h2>JOGJA</h2></div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>6 / 11</h2></div>
                    <img src="image/bandung2.jpg" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><h2>BANDUNG</h2></div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>7 / 11</h2></div>
                    <img src="image/bondowoso.jpg" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><h2>BONDOWOSO</h2></div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>8 / 11</h2></div>
                    <img src="image/lembang.jpg" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><h2>LEMBANG</h2></div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>9 / 11</h2></div>
                    <img src="image/puncak.jpg" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><h2>PUNCAK</h2></div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>10 / 11</h2></div>
                    <img src="image/semarang2.jpg" class="image" style="width:100%">
                <div class="middle">
                    <div class="text"><h2>SEMARANG</h2></div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="container">
                <div class="numbertext"><h2>11 / 11</h2></div>
                    <img src="image/bogor.jpg" class="image" style="width:100%">
                 <div class="middle">
                    <div class="text"><h2>BOGOR</h2></div>
                </div>
            </div>
        </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>
  
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
        <span class="dot" onclick="currentSlide(9)"></span>
        <span class="dot" onclick="currentSlide(10)"></span>
        <span class="dot" onclick="currentSlide(11)"></span>
    </div>
      
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1){slideIndex = slides.length}

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }   

            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }

    </script>
      
</body>
</html>
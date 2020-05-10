<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <script src="https://kit.fontawesome.com/afa4fc3610.js" crossorigin="anonymous"></script>
    
    <title>Giriş Sayfası</title>
    
     <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="giris.css">
    
</head>
<body>
   
   <nav>
       <div class="container">
           <div id="nav-links" class="responsive">
               <ul class="text-uppercase">
                  <li class="nav-items" >
                        <a href="#" class="nav-icon">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                   <li class="nav-items">
                       <a href="../index.html">HAKKIMDA</a>
                   </li>
                   <li class="nav-items ">
                       <a href="../ÖZGEÇMİŞ/ozgecmis.html">ÖZGEÇMİŞ</a>
                   </li>
                   <li class="nav-items ">
                       <a href="../ŞEHRİM/sehrim.html">ŞEHRİM</a>
                   </li>
                   <li class="nav-items ">
                       <a href="../TAKIMIMIZ/takımımız.html">TAKIMIMIZ</a>
                   </li>
                   <li class="nav-items ">
                       <a href="../İLETİŞİM/iletisim.html">İLETİŞİM</a>
                   </li>
                   <li class="nav-items ">
                       <a href="#">GİRİŞ</a>
                   </li>
               </ul>
           </div>
       </div>
    </nav>
    
   
    
    
    <section>
        <div class="container section-options rounded">
             <?php

		if($_GET["durum"]=="girildi"){
			echo " <h1>HOŞ GELDİNİZ MERT BEY</h1>";
		}
		elseif($_GET["durum"]=="hatali"){
			echo " <h1>HATALI GİRİŞ</h1>";
		}
		

		?>
            <div class="login">
					<form action="sorgulama.php" method="POST" class="login-container">
						<p><input type="email" placeholder="Email" name="mail" autofocus required class="form-controls"></p>
						<p><input type="password" placeholder="Password" name="sifre" required class="form-controls"></p>
						<p><input id="submit" type="submit" value="GİRİŞ" name="giris" class="form-controls"></p>
					</form>
				</div>
        </div>
    </section>
    
 
   <footer>
        <div id="social">
            <a href="https://github.com/mertmutlu16/WEB_TEKNOLOJILERI_PROJE" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.instagram.com/mutlummert/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://twitter.com/explore" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://tr.linkedin.com/" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
        <p>
            Copyright © 2020 by MERT MUTLU
        </p>
    </footer>
   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $('.nav-icon').click(function() {
            $('#nav-links').toggleClass("responsive");
            return false;
        })
    </script>

</body>
</html>
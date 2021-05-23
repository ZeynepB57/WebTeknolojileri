<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/hakkimda.css">
  <link href="./style/css" rel="stylesheet">
  <!-- BOOSTRAP LİNK -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Giriş Kontrol Sayfası</title>
</head>

<body style="background-color:rgb(183, 201, 204);">
  
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-info py=3">
      <div class="container">
        <h5 class="navbar-brand mb-0 " >Zeynep Bezirci</h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Hakkımda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ozgecmisim.html">Özgeçmişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mirasim.html">Mirasımız</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ilgialanlarim.html">ilgi alanlarım</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="iletisim.html">iletişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="giriş.html">Giriş</a>
            </li>
            
          </ul>
          
        </div>
      </div>
    </nav>
  

  <div class="container mt-5 p-4 align-items-center w-75">
    <div class ="h2">HAKKIMDA</div>
  </div>
    
  
  <div class="container mt-5 w-50 text-center p-5">
	
  <?php 

include("kullanici.php");
if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
{
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;

echo( "GİRİŞ BAŞARILI");

}

else 
{
     echo "Kullancı Adı veya Şifre Yanlış.<br>";
     echo "!!!TEKRAR DENEYİNİZ!!!";
     header("Refresh: 1; url=giris.html");
}

?>
			
    </div>

    
</body>
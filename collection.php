<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css.css" />
    <title>Fine Die's</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <h1 class="logo-title">Fine Die's</h1>
        </div>
        <ul class="list-items">
          <li><a href="home.html" class="link">HOME</a></li>
          <li><a href="collection.php" class="link">COLLECTION</a></li>
          <li><a href="contat.php" class="link">CONTACT US</a></li>
          <li><a href="about.html" class="link">ABOUT US</a></li>
        </ul>
        <div class="nav-btns">
        
        </div>
      </nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewpoint" content="width=device-width", initial scale="1">
    <style>
     .bar {
	display: inline-block;
	cursor: pointer;
  }
  
  .bar1, .bar2, .bar3 , .bar4{
	width: 35px;
	height: 5px;
	background-color: #333;
	margin: 6px 0;
	transition: 0.4s;
  }
  
  .change .bar1 {
	-webkit-transform: rotate(-45deg) translate(-9px, 6px);
	transform: rotate(-45deg) translate(-9px, 6px);
  }
  
  .change .bar2 {opacity: 0;}
  
  .change .bar3 {
	-webkit-transform: rotate(45deg) translate(-8px, -8px);
	transform: rotate(45deg) translate(-8px, -8px);

}
.change .bar4 {
	-webkit-transform: rotate(45deg) translate(-8px, -8px);
	transform: rotate(45deg) translate(-8px, -8px);
}
    </style>
    <title> Fine Die's-Collection</title>
    <!-- CUSTOM CSS-->
    <link rel="stylesheet" href="style.css.css">
</head>
<body>
    <div class="bar" onclick="myFunction(this)">
        <a href="home.html" class="bar1"></a>
        <a href="collection.php" class="bar2"></a>
        <a href="contat.html" class="bar3"></a>
        <a href="about.html" class="bar4"></a> 
      </div>
      <script>
        function myFunction(x) {
          x.classList.toggle("change");
        }
        </script>
    
<input type="radio" name="photos" id="check1" checked>
<input type="radio" name="photos" id="check2">
<input type="radio" name="photos" id="check3">
   

<div class="container">
  
<h1>Fine Die's Collections</h1>
<div class="top-content">
<h3>Product</h3>
<label for="check1">All photos</label>
<label for="check2">Shoes Collection</label>
<label for="check3">Tie-Dye Collection</label>
</div>
<div class="main-collection" >
  <div class="social-media">
    <a target="_blank" href="https://www.facebook.com/Fine-Dies-109439154995805/photos/?ref=page_internal" class="s-btn" ><i class="fab fa-facebook-f"></i></a>
    <a target="_blank" href="#" class="s-btn"><i class="fab fa-twitter"></i></a>
    <a target="_blank" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F%3Ffbclid%3DIwAR1Ui0TzXZIj_k_4DJdWuf4FDlbBYPZxCgeYyZGljaHjzSdexrDS4DfDCcQ&h=AT1yB6gsR2BjpkhVDNyssqZq9MZ5pGasLxqKzSP8yAXE-fzVwtyswqnHfDyyxao5TKbquU4HbpHVg2OgLcXRjRipHFHZeDZcBiuU0z5RKq7kwsvkIRkTiG6tl_RBEVFxwBP2DQ" class="s-btn"><i class="fab fa-instagram"></i></a>
  </div>
  <div class="Product">
    <?php
      require 'conn.php';
      $rows = $conn->query('select* from `collections`') or die($conn->error);
      while($row= mysqli_fetch_array($rows)){
        echo '<div class="'. $row['collection_type'] .'">
              <img src="'. $row['image'] .'" >
              <p class="product-name">'. $row['name']  .'
              </p>
       </div>';
      }
    ?>
    
</div>

</div>

    
    


</body>

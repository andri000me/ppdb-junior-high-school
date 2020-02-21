<style>
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  box-shadow:0px 0px 7px 2px #404142;
}

/* Next & previous buttons */

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 12px 20px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<table width="120%" border="0" style="margin-left: 100px;">
  <tbody>
    <tr>
      <td width="70%" rowspan="6" align="center" valign="middle" style="padding-right: 30px;">
      <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/image1.jpg" style="width:100%">
  <!-- <div class="text">Caption Text</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="image/image2.jpg" style="width:100%">
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/image3.png" style="width:100%">
  <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div style="text-align:center;">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div></td>
      <td width="50" height="88" align="center" valign="middle"><a href="index.php?page=pendaftar" title="Peserta PPDB">
      <img src="image/icon/peserta.png" width="100" height="100" alt=""/>
      </a>
      <tr>
        <td align="center" valign="middle"> <br>
        Peserta PPDB
      </td>
      </tr>
      </td>
    </tr>
    <tr>
      <td height="71" align="center" valign="middle"><a href="index.php?page=sekolahd" title="Sekolah Dasar">
      <img src="image/icon/sekolah.png" width="100" height="100" alt=""/>
      </a>
      <tr>
        <td align="center" valign="middle"> <br>
        Sekolah Dasar
      </td>
      </tr>
      </td>
    </tr>
    <tr>
      <td height="128" align="center" valign="middle"><a href="index.php?page=sekolahmp" title="Sekolah Menengah Pertama">
      <img src="image/icon/sekolah2.png" width="100" height="100" alt=""/>
      </a>
      <tr>
        <td align="center" valign="middle">
        Sekolah Menengah Pertama
      </td>
      </tr>
      </td>
      </tr>
      </tbody>
      </table>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
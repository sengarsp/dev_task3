<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100% 100%;
}

/* Images used */
.img2 { background-image: url("/images/mount.jpg"); }


/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font: 30px times new roman;
  border: 5px solid #f1f1f1;
  width: 90%;
  padding: 30px;
  margin:60px auto;
  text-align:justify;
}

.container{
     position:relative;
     height:100%;
     width:100%;
 }
 .up {
     position:absolute;
  }

 .down {
   position:absolute;
   height:100%;
   width:100%;
  }
img {
  width: 50%;
  text-align: center;
}

.img-container {
        text-align: center;
      }

</style>
</head>
<body>

<h1 style="background-color:powderblue;color:red;text-align:center;font-size:40px;">Jaipur</h1>
<div class="img-container">
<img src="/images/amer.jpg" alt="HTML5 Icon" style="width:280px;height:270px;">


<img src="/images/jalnightmode.jpg" alt="HTML5 Icon" width="120" height="350">
<img src="/images/hawamahal.jpg" alt="HTML5 Icon" style="width:280px;height:270px;">

</div>
<div class="container">
 <div class="down">


   <!-- place your all the backgrounds div here  -->
<div class="bg-image img2"></div>


  </div>
 <div class="up">
 <div class="bg-text">

<h4 style="text-align:center;">Jaipur is the capital and the largest city of the Indian state of Rajasthan. As of 2011, the city had a population of 3.1 million, making it the tenth most populous city in the country. Jaipur is also known as the Pink City, due to the dominant color scheme of its buildings. It was constructed within a period of four years and Jaipur is the only city that has been planned as per rules & regulations of the Vastu Shastra and the Shilpa Shastra. It is located 268 km (167 miles) from the national capital New Delhi.

Jaipur was founded in 1727 by the Rajput ruler Jai Singh II, the ruler of Amer, after whom the city is named. It was one of the earliest planned cities of modern India, designed by Vidyadhar Bhattacharya.During the British Colonial period, the city served as the capital of Jaipur State. After independence in 1947, Jaipur was made capital of the newly-formed state of Rajasthan.</h3> 
</div>


</div>

</body>
</html>



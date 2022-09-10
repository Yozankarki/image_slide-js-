<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Slideshow Animation | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="content">
      <div class="images">
        <img src="bg1.jpeg">
        <img src="bg2.jpg">
        <img src="bg3.jpeg">
        <img src="bg4.jpeg">
        <img src="bg5.jpg">
      </div>
    </div>

    <script>
      var indexValue = 0;
      function slideShow(){
        setTimeout(slideShow, 2500);
        var x;
        const img = document.querySelectorAll("img");
        for(x = 0; x < img.length; x++){
          img[x].style.display = "none";
        }
        indexValue++;
        if(indexValue > img.length){indexValue = 1}
        img[indexValue -1].style.display = "block";
      }
      slideShow();
    </script>

  </body>
</html>

<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="dist/app.css">
</head>
<body>
  <header>
    <img class="img" src="https://cdn.pixabay.com/photo/2016/10/22/00/15/spotify-1759471__340.jpg" alt="">

  </header>
  <div id="app">
    <main>
      <div class="mir">
        <!-- <div class="one">
          <img src="" alt="">
          <p>hello</p>
          <p>hello</p>

        </div> -->
        <!-- <div class="two">
          <img src="" alt="">
          <p>hello</p>
          <p>hello</p>

        </div> -->




          <div class="two" v-for="s in song">
            <img class="img" :src="s.img" alt="">

            <h2>Title :{{s.title}}</h2>
            <span>Artist :{{s.artist}}</span>
            <p> Released Year :{{s.year}}</p>
            <p v-if= "s.year == 2019"> Click to watch my video <a href="">{{s.link}}</a> </p>




          </div>







      </div>


    </main>

  </div>




  <script src="script.js" charset="utf-8"></script>
</body>
</html>

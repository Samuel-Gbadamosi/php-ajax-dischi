<?php
$song = [
  [
    'title' => 'billie jean',
    'artist' => 'Micheal jackson',
    'year' => '1994'
  ],
  [
    'title' => 'press',
    'artist' => 'cardi b',
    'year' => '2020'
  ],
  [
    'title' => 'summer days',
    'artist' => 'spartgarfield',
    'year' => '2019'
  ],
  [
    'title' => 'bitch steal my money',
    'artist' => 'renegator brothrs',
    'year' => '1950'
  ],
  [
    'title' => 'trapped in the closet',
    'artist' => 'r kelly',
    'year' => '2002'
  ],
  [
    'title' => 'do me',
    'artist' => 'p square',
    'year' => '2008'
  ]

];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="dist/app.css">
</head>
<body>
  <header>
    <img class="img" src="https://cdn.pixabay.com/photo/2016/10/22/00/15/spotify-1759471__340.jpg" alt="">

  </header>
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

      <?php
        foreach ($song as $s){?>



        <div class="two">

          <p> Title: <?php echo $tit = $s['title'] ?></p>
          <p> Artist:<?php echo $art = $s['artist'] ?></p>
          <p>Year :<?php echo $yr = $s['year'] ?></p>


        </div>

      <?php } ?>



    </div>


  </main>



  <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>

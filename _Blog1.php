<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
}
.title {
    width: 100%;
    height: 400px;
    display: flex;
    align-items: center;
   /* background-image: url('./Assets/Images/world_cleanup_day_2024_lead_image.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover; */
}

.title h1 {
    text-align: left;
    font-size: 100px;
    font-weight: bold;
    text-transform: uppercase;
    color: #CFCDC4;
    margin-left: 50px;
}
.container .banner img{
    width: 100%;
    height: 400px;
}


    </style>
  </head>
  <body>
  <?php include './_MainHeader.php'; ?>
  <div class="title">
        <h1>World Cleanup Day 20 September</h1>
    </div>
    <div class="container">
        <div class="banner">
            <img src="./Assets/Images/world_cleanup_day_2024_lead_image.jpg">
        </div>
        <div class="content">
            <h3>World Cleanup Day 2024: Arctic Cities and Marine Litter</h3>
            <p>The theme of the inaugural event, taking place on 20 September in the city of Tromsø, Norway, is “Arctic Cities and Marine Litter”. The event, convened with support from UN-Habitat, GRID-Arendal, and the Norwegian Retailers’ Environment Fund, and in collaboration with the Ministry of Local Government and Regional Development, the municipality of Tromsø, the Fram Centre, and Let’s Do It World, aims to inspire global communities to adopt sustainable practices that protect the arctic regions.<br><br>

The Arctic’s delicate ecosystem necessitates focused efforts on plastic and marine litter clean-up. Cities like Tromsø, within the Arctic Circle, face unique challenges due to extreme weather, isolation, and costly infrastructure.<br><br>

The inaugural World Cleanup Day in Tromsø showcases Norway’s innovative waste management strategies tailored to harsh climates. The event will highlight the role of innovation, community involvement, and collaboration in creating sustainable waste systems that protect the Arctic environment and contribute to global waste reduction efforts. It also emphasizes the importance of professional cleanups and innovative funding mechanisms in tackling waste management challenges in complex urban settings.</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
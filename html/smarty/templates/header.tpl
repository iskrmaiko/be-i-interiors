<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .container{
            padding: 3rem 4rem;
            margin-bottom: 0;
        }
        .grid { 
          display: grid;
          grid-template-columns: repeat(5, 1fr);
          grid-gap: 10px;
          align-items: start;
          justify-items: center;
          }
        .grid img {
          border: 1px solid rgba(0,0,0,0.3);
          box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);
          max-width: 100%;
        }
        .grid a:nth-child(2) {
          grid-column: span 3;
          grid-row: span 2;
          }
        .intro{
            padding: 2rem 0 2rem 0;
            background-color: #042326;
            box-shadow:#0D0000 0px 5px 30px -10px; }
        h1{
            text-align: center;
            color: whitesmoke;
            font-family:Georgia;
        }
        h3{
            text-align: center;
            color: #8AA3A6;
            font-family: 游明朝 ;
        }
        h5{
            text-align: center;
            color: #8AA3A6;
            font-family: 游明朝 ;
        }
        p{
            font-size: 120%;
            color: #8AA3A6;
            font-family: 游明朝 ;
        }
        footer{
            padding-top: 7px;
            text-align: center;
            color: #79717A;
            font-family:Georgia;
            height:40px;
            width:100%;
            background:#0D0000;
            margin-bottom: 0;
            position:absolute;
            bottom:0;
            width:100%;

        }
        .room{
            border: 1px solid rgba(0,0,0,0.3);
            box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 60%;
            margin-bottom: 2rem;
        }
        .desc-box{
            padding: 0 6rem;
        }
        .navbar{
            padding: 0 3rem;
            height: 3rem;
            background-color: #0D0000;
        }
        .dropdown-menu{
            background-color: #0D0000;
            
        }
        .dropdown-item{
            color: rgb(186, 179, 179);
            
        }
        .grid2 { 
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 20px;
            align-items: stretch;
            justify-items: center;
         }
        .grid2 img {
            border: 1px solid #ccc;
            box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
            max-width: 100%;
        }
        .tile{
           width: 350px;
           height: 450px;
           position: relative;
           margin: 0 auto;
        }
         .tile:hover .overlay {
          clip-path: polygon(0 0,100% 0,100% 100%,0% 100%); 
        }
        .home-image1{
          position: absolute;
          width: 100%;
          height: 100%;
          background-image: url('/img/home-images/bed.jpg');
          background-size: cover;
          box-shadow: 0px 50px 50px 30px  rgba(0,0,0,0.3);
        }
        .home-image2{
          position: absolute;
          width: 100%;
          height: 100%;
          background-image: url('/img/home-images/living.jpg');
          background-size: cover;
          box-shadow: 0px 50px 50px 30px  rgba(0,0,0,0.3);
        }
        .overlay {
          position: absolute;
          width: 100%;
          height: 100%;
          display: flex;
          flex-direction: column;
          backdrop-filter: blur(8px);
          transition: all 0.5s;
          clip-path: polygon(0 calc(100% - 100px), 100% calc(100% - 100px), 100% 100%, 0% 100%);
        }
        .row {
          display: flex;
        }

        .column {
          flex: 33.33%;
          padding: 5px;
        }
  
        </style>
</head>
<body style="background-color: #112620;">

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">BE-I INTERIORS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            GALLERY
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/bedrooms.php">BEDROOM</a></li>
            <li><a class="dropdown-item" href="/livingrooms.php">LIVING ROOM</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about.php">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact.php">CONTACT</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div style="background-color:rgb(44, 57, 73); height: 10px">
</div>
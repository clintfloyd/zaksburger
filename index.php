<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Zaks Burger - The number 1 buger in town</title>
    <meta name="description" content="Zaks Burger, your number 1 burger in town. The original chargrilled burger. Wooden aromatic that will delight your tastebuds! " />
    <meta name="keyword" content="burger, fast food, zaks burger, chargrilled burger, burger shop" />
    <style>
      body{
        background-image: url("bg.jpg");
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      img.logo{
        width: 300px;
        margin-top: 50px;
      }
      div.burger {
        position: relative;
        width: 600px;
        margin-top: 0;
        height: 880px;
        transform: scale(0.8);
      }
      div.burger img{
        position: absolute;
        width: 600px;
        margin: auto;
        opacity: 0;
      }
      @keyframes b1{
        from {
          transform: translate(0px, 200px);
          opacity: 0;
        }
        60%{
          opacity: 1;
        }
        to{
          opacity: 1;
          transform: translate(0px, 390px);
        }
      }
      @keyframes b2{
        from {
          transform: translate(0px, 170px);
          opacity: 0;
        }
        60%{
          opacity: 1;
        }
        to{
          opacity: 1;
          transform: translate(0px, 260px);
        }
      }
      @keyframes b3{
        from {
          transform: translate(0px, 60px);
          opacity: 0;
        }
        60%{
          opacity: 1;
        }
        to{
          opacity: 1;
          transform: translate(0px, 174px);
        }
      }

      @keyframes b4{
        from {
          transform: translate(0px, -100px);
          opacity: 0;
        }
        60%{
          opacity: 1;
        }
        to{
          opacity: 1;
          transform: translate(0px, -10px);
        }
      }

      @keyframes b5{
        from {
          transform: translate(0px, -400px);
          opacity: 0;
        }
        60%{
          opacity: 1;
        }
        to{
          opacity: 1;
          transform: translate(0px, -300px);
        }
      }

      @keyframes b6{
        from {
          transform: translate(0px, -220px);
          opacity: 0;
        }
        60%{
          opacity: 1;
        }
        to{
          opacity: 1;
          transform: translate(0px, -120px);
        }
      }

      .b1{
        transform: translateY(390px);
        animation-name: b1;
        animation-duration: 1s;
        animation-fill-mode: forwards;
      }
      .b2{
        transform: translateY(250px);
        animation-name: b2;
        animation-duration: 1s;
        animation-fill-mode: forwards;
        animation-delay: 0.4s;
      }
      .b3{
        transform: translateY(190px);
        animation-name: b3;
        animation-duration: 1s;
        animation-fill-mode: forwards;
        animation-delay: 0.6s;
      }
      .b4{
        transform: translateY(20px);
        animation-name: b4;
        animation-duration: 1s;
        animation-fill-mode: forwards;
        animation-delay: 0.8s;
      }
      .b5{
        transform: translateY(-270px);
        animation-name: b5;
        animation-duration: 1s;
        animation-fill-mode: forwards;
        animation-delay: 1.2s;
      }
      .b6{
        transform: translateY(-80px);
        animation-name: b6;
        animation-duration: 1s;
        animation-fill-mode: forwards;
        animation-delay: 1s;
      }
    </style>
  </head>
  <body>
      <img class="logo" src="logo.svg" />
      <div class="burger">
        <img class="b1" src="bun.png" />
        <img class="b2" src="veg.png" />
        <img class="b3" src="patty.png" />
        <img class="b5" src="bun-top.png" />
        <img class="b6" src="tomato.png" />
        <img class="b4" src="cheese.png" />
      </div>
      <script>
      </script>
  </body>
</html>
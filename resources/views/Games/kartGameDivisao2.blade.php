<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#00A5ED" />

    <title>Divisão por 2 - Kart</title>
    <style>
      body {
        height: 100vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
      }
      canvas {
        /* margin: auto; */
      }
      @media (max-width: 768px) {
        body {
          margin: 0;
        }
        canvas {
          width: calc(100vw);
          height: calc(100vh);
        }
      }
    </style>
  </head>
  <body>
    <!-- Required Scripts -->
    <script src="/games/common/SheetLoader.js"></script>

    <canvas id="canvas" width="1024" height="720"></canvas>
    <script src="/games/divisao2-kart.js"></script>
  </body>
</html>

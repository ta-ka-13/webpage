<!DOCTYPE html>
  <html>

  <head>
  <meta charset="UTF-8">
  <script>
    window.onload = function(){
      setInterval(function(){
        var dd = new Date();
        document.getElementById("T1").innerHTML = dd.toLocaleString();
      }, 1000);
    }
  </script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>


  <body>
@include("parts.header")
<!-- <div id="T1"></div> -->

  <div main>
    ハローワールド
    <div top>
      トップ
    </div>
    <div mid>
      真ん中
    </div>
    <div>
      下
    </div>

  </div>

@include("parts.footer")
  </body>
  </html>
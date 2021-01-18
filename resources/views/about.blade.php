<!DOCTYPE html>
<html>
<head>
<script>
    window.onload = function(){
      setInterval(function(){
        var dd = new Date();
        document.getElementById("T1").innerHTML = dd.toLocaleString();
      }, 1000);
    }
  </script>
<link rel="stylesheet" href="{{  asset('css/style.css') }}" />
</head>
<body>
@include("parts.header")
<main>
	<h1>自分概要ページ</h1>
</main>
@include("parts.footer")
</body>
</html>
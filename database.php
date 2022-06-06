<html>
<head>
 <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>
Happy Birthday <?php echo $_GET['name']; ?> </title>
<style>
body, html {
  margin: auto;
    background-color: #b94c4c;
    width: 90%;

}
#date {
	color: #b94c4c;
}
.bgimg {
 background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
   width: 100%;
     height:80%;
   text-align: center;
   font-size: 50px;
   font-family: Elephant;
}

.bottomleft {
  position: absolute;
  bottom: 0;
}

#middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  font-size: 30px;

}

hr {
  margin: auto;
  width: 40%;
}

#paras {
  /* Start the shake animation and make the animation last for 0.5 seconds */
  animation: shake 1s;
  box-shadow: 0 0 0 gray;

  /* When the animation is finished, start again */
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
#before {
  /* Start the shake animation and make the animation last for 0.5 seconds */
  animation: shakee 0.70s;
  box-shadow: 0 0 0 gray;

  /* When the animation is finished, start again */
  animation-iteration-count: infinite;
}

@keyframes shakee {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

</style></head>

<body>

<div class="bgimg">
  <div class="topleft">
    <p id="paras">HAPPY BIRTHDAY</p>
  </div>
  <div id="middle">
<p id="yenamehai" style="font-family: Copperplate Gothic;text-transform: uppercase;">To You <?php echo $_GET['name']; ?></p>
    <h1 style="font-family:Imprint MT Shadow" id="before">BEFORE</h1>
    <hr>
    <p id="demo"></p>
  </div>
</div>
<p id="date"><?php echo $_GET['date']; ?> </p>
<script>
var date = document.getElementById('date').innerText + " 00:00:00";
var countDownDate = new Date(date).getTime();


var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    

  document.getElementById("demo").innerHTML = days + "day " + hours + "hours "
  + minutes + "minutes " + seconds + "sec. Before Happy Birthday ";
    
   
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("before").style.display = "none";
    document.getElementById('demo').style.display = "none";
    document.getElementById('middle').style.top = '30%';
	document.getElementById("yenamehai").style.fontSize = "40px";
  }
}, 1000);









 var preview = document.querySelector('#preview');
  var files   = document.querySelector('input[type=file]').files;

  function readAndPreview(file) {

    // Make sure `file.name` matches our extensions criteria
    if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
      var reader = new FileReader();

      reader.addEventListener("load", function () {
        var image = new Image();
        image.height = 100;
        image.title = file.name;
        image.src = this.result;
        preview.appendChild( image );
      }, false);

      reader.readAsDataURL(file);
    }

  }

  if (files) {
    [].forEach.call(files, readAndPreview);
  }

</script>


</body></html>
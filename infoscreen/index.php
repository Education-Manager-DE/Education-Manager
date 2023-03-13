<link href="style.css" rel="stylesheet" type="text/css">
<figure id="container" onclick="fullScreen(this)">
  <figure id="slideshow">
    <img src="../admin/images-infoscreen/1.jpg" alt>
    <img src="../admin/images-infoscreen/2.jpg" alt>
    <img src="../admin/images-infoscreen/3.jpg" alt>
    <img src="../admin/images-infoscreen/4.jpg" alt>
  </figure>
</figure>
<script>
function cancelFullScreen() {
    if (document.cancelFullScreen) {
        document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
        document.webkitCancelFullScreen();
    } else if (document.msCancelFullScreen) {
        document.msCancelFullScreen();
    }
    link = document.getElementById("container");
    link.removeAttribute("onclick");
    link.setAttribute("onclick", "fullScreen(this)");
}

function fullScreen(element) {
    if (element.requestFullScreen) {
        element.requestFullScreen();
    } else if (element.webkitRequestFullScreen) {
        element.webkitRequestFullScreen();
    } else if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
    }
    link = document.getElementById("container");
    link.removeAttribute("onclick");
    link.setAttribute("onclick", "cancelFullScreen()");
}
window.onload = function() {
  imgs = document.getElementById('slideshow').children;
  interval = 8000;
  currentPic = 0;
  imgs[currentPic].style.webkitAnimation = 'fadey '+interval+'ms';
  imgs[currentPic].style.animation = 'fadey '+interval+'ms';
  var infiniteLoop = setInterval(function(){
    imgs[currentPic].removeAttribute('style');
    if ( currentPic == imgs.length - 1) { currentPic = 0; } else { currentPic++; }
    imgs[currentPic].style.webkitAnimation = 'fadey '+interval+'ms';
    imgs[currentPic].style.animation = 'fadey '+interval+'ms';
  }, interval);
}</script>



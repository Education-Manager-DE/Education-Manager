function notify(){

if (Notification.permission !== "granted") {
Notification.requestPermission();
}
 else{
var notification = new Notification('Education-Manager', {
  body: "System läuft störungsfrei!",
  icon:"https://education-manager-script-server.julianzillner.de/image/logo.png",
});
notification.onclick = function () {
  window.open("http://julianzillner.de");
};
}
}
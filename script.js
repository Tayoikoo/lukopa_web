//time
var tampilWaktu = document.getElementById("time");

function waktu(){
  var stringWaktu = new Date().toLocaleTimeString("id-ID",{timeZone: "Asia/Jakarta"});
  var formatString = stringWaktu.replace("." , ":");
  tampilWaktu.innerHTML = formatString;
}

setInterval(waktu, 1000);

// Image
function reloadImage() {
  var image = document.getElementById("myProfile");
  var imageUrl = image.src.split("?")[0]; // Get image URL without existing query parameters
  image.src = imageUrl + "?idleMessage=An Unexpected Event might happend..&t=" + new Date().getTime(); // Add cache-busting query parameter
}

setInterval(reloadImage, 1000);

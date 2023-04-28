isDark = true;
var btn = document.getElementById("btn-toggle");
// btn.innerHTML= '<img src="https://http.cat/404" style="max-width:100px; max-height:100px;">';
btn.innerHTML= 'Dark Mode: OFF';
btn.addEventListener("click", function(){
  var body = document.body;

  if (!isDark) {
    // Dark
    body.classList.remove("bg-white");
    body.classList.add("bg-dark");
    isDark = true;
    btn.innerHTML= 'Dark Mode: ON';
    btn.classList.remove("btn-white");
    btn.classList.add("btn-dark");
  } else {
    // White
    body.classList.remove("bg-dark");
    isDark = false;
    btn.innerHTML= 'Dark Mode: OFF';
    btn.classList.remove("btn-dark");
    btn.classList.add("btn-white");
  }
});

//time
var tampilWaktu = document.getElementById("time");

function waktu(){
  var stringWaktu = new Date().toLocaleTimeString("id-ID",{timeZone: "Asia/Jakarta"});
  var formatString = stringWaktu.replace("," , "-");
  tampilWaktu.innerHTML = formatString;
}

setInterval(waktu, 1000);

// Image
function reloadImage() {
  var image = document.getElementById("myProfile");
  var imageUrl = image.src.split("?")[0]; // Get image URL without existing query parameters
  image.src = imageUrl + "?idleMessage=Currently not doing anything..&t=" + new Date().getTime(); // Add cache-busting query parameter
}

setInterval(reloadImage, 1000);

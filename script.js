var date = new Date();

//time
var tampilWaktu = document.getElementById("time");
var tampilHari = document.getElementById("day");
// make a date 
var week = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday","Saturday"];
var monthList = ["January","February","March","April","May","June","July","August","September","October","November","December"];
var day = week[date.getDay()];
var month = monthList[date.getMonth()];
var year = date.getFullYear();

// output date
var printDate = day + ", " + date.getDate() + " " + month + " " + year;

if (month === "October" && date.getDate() === 15 && year === year) {
  var bd = document.getElementById("bd");
  bd.innerHTML = "It's my birthday! Happy Birthday for me 🎉";
}


function waktu(){
  var newDate = new Date();
  var stringWaktu = newDate.toLocaleTimeString("id-ID",{timeZone: "Asia/Jakarta"});
  var formatString = stringWaktu.replace("." , ":");
  tampilWaktu.innerHTML = formatString;
  tampilHari.innerHTML = printDate;
}

setInterval(waktu, 1000);

// Image
function reloadImage() {
  var newDate = new Date();
  var image = document.getElementById("myProfile");
  var imageUrl = image.src.split("?")[0]; // Get image URL without existing query parameters
  image.src = imageUrl + "?idleMessage=An Unexpected Event might happend..&t=" + newDate.getTime(); // Add cache-busting query parameter
}

setInterval(reloadImage, 1000);

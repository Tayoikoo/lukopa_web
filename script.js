function waktu(){  
  
  var date = new Date();
  
  var week = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday","Saturday"];
  var monthList = ["January","February","March","April","May","June","July","August","September","October","November","December"];
  var day = week[date.getDay()];
  var month = monthList[date.getMonth()];
  var year = date.getFullYear();
  var getDate = day + ", " + date.getDate() + " " + month + " " + year;
  
  if (month === "October" && date.getDate() == 15) {
    var bd = document.getElementById("bd");
    bd.innerHTML = "Happy Birthday, Lukopa!";
  }

  var newDate = new Date();
  var stringWaktu = newDate.toLocaleTimeString("id-ID",{timeZone: "Asia/Jakarta"});
  var formatString = stringWaktu.replace(/\./g , ":");
  var tampilWaktu = document.getElementById("time");
  var tampilHari = document.getElementById("day");  
  tampilWaktu.innerHTML = formatString;
  tampilHari.innerHTML = getDate;  
}
setInterval(waktu, 1000);

// Image
function reloadImage() {
  var newDate = new Date();
  var image = document.getElementById("myProfile");
  var imageUrl = image.src.split("?")[0];
  image.src = imageUrl + "?idleMessage=Just Empty Message~&t=" + newDate.getTime();
}
setInterval(reloadImage, 1000);

async function fetchPinnedRepos() { 
  const repoContainer = document.getElementById("repo-container");

  const publicRepos = [
    { username: "Tayoikoo", repo: "VirusSR" },
    { username: "Tayoikoo", repo: "lukopa_web" },
  ];

  const privateRepos = [
    {
      name: "FireflySR 2.0",
      description: "Some Private Server for Train game, from FireflySR by Xeon. Updated by Lukopa.",
      html_url: "https://github.com/Tayoikoo/FireflySR-2.0",
      stargazers_count: 0,
      forks_count: 0,
    }
  ];

  repoContainer.innerHTML = "";

  try {
    const fetchPromises = publicRepos.map(({ username, repo }) =>
      fetch(`https://api.github.com/repos/${username}/${repo}`).then((res) => res.json())
    );

    const fetchedRepos = await Promise.all(fetchPromises);

    const repos = [...fetchedRepos, ...privateRepos];

    repos.forEach((repo) => {
      const repoCard = document.createElement("div");
      repoCard.className = "col-md-4";
      repoCard.innerHTML = `
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">
              <a href="${repo.html_url}" target="_blank" class="text-decoration-none">${repo.name}</a>
            </h5>
            <p class="card-text">${repo.description || "No description available."}</p>
          </div>
          <div class="card-footer text-muted d-flex justify-content-between">
            <span>⭐ ${repo.stargazers_count}</span>
            <span>🍴 ${repo.forks_count}</span>
          </div>
        </div>
      `;
      repoContainer.appendChild(repoCard);
    });
  } catch (error) {
    console.error(error);
    repoContainer.innerHTML = `<p class="text-center text-danger">Failed to fetch repositories. Please try again later.</p>`;
  }
}

window.addEventListener("DOMContentLoaded", () => {
  fetchPinnedRepos();
});
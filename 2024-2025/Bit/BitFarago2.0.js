let lepes = 0;
let palya = 0;
while (palya < 2) {
  palya = prompt("Hányszor hányas pálya legyen: x*x x= (min:2)");
}
document.getElementById("lepesek").innerHTML = Math.round(
  parseInt((palya * palya) / 2)
);
let tabla = document.createElement("table");
tabla.setAttribute("id", "palya");
let ures = 0;
let szam = Math.floor(Math.random() * palya * 2);
for (let i = 0; i < palya; i++) {
  let y = document.createElement("tr");
  for (let z = 0; z < palya; z++) {
    let q = document.createElement("td");
    q.setAttribute("id", ures);
    if (ures != szam) {
      q.innerHTML = Math.floor(Math.random() * 9) + 1;
      q.addEventListener("click", function () {
        q.style.backgroundColor = "red";
        const pont = parseFloat(document.getElementById("pontok").innerHTML);
        const pont2 = parseFloat(q.innerHTML);
        document.getElementById("pontok").innerHTML = pont + pont2;
        lepes++;
        console.log(lepes);
        if (lepes === Math.round((palya * palya) / 2)) {
          let szoveg = document.createElement("label");
          szoveg.innerHTML = "Vesztettél!";
          szoveg.style.fontSize = "300px";
          szoveg.style.textAlign = "center";
          document.body.innerHTML = "";
          document.body.appendChild(szoveg);
        }
        if(document.getElementById("lepesek").innerHTML)
        document.getElementById("lepesek").innerHTML =
          document.getElementById("lepesek").innerHTML - 1;
      });
    } else {
      q.style.backgroundColor = "red";
    }

    y.appendChild(q);
    ures++;
  }
  tabla.appendChild(y);
}
document.body.appendChild(tabla);

function megfelel() {
  for (let i = 0; i <= ures - 1; i++) {}
}
megfelel();

/* Prettier, Dracula Theme, Material Icon, GitLens */

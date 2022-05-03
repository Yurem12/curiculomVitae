// fonction theme de couleur

const icon = document.getElementById("lightAndDarkIcon");

icon.onclick = function() {
    document.body.classList.toggle("lightTheme");
    if(document.body.classList.contains("lightTheme")){
        icon.src = "./pics/moon.png";
        var Theme = 'clair';
    } else {
        icon.src = "./pics/sun.png";
        var Theme = 'sombre';
    }
    console.log(`Le theme de couleur à bien été modifié. Le nouveau est le theme ${Theme}.`);
}

// autres fonctions non créées
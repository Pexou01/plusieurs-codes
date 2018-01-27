var addForm = document.getElementById("addForm");
var input = document.getElementById("inputFruits");
var list = document.querySelector("ul");

for (item of list.children) {
    addDeleteButton(item);
}

function addDeleteButton(item){
    var btDelete = document.createElement("button");
    btDelete.textContent = "Supprimer";
    btDelete.addEventListener("click", deleteElement);
    item.appendChild(btDelete);
}

function deleteElement(event){
    var targetElement = event.path[1];
    targetElement.remove();
}


//Gestionnaire d'ajout de fruit
function addFruit(event) {
    //Récupération de la saisie 
    var inputValue = input.value.trim();
    //Ajout d'un fruit uniquement si la saisie n'est pas vide
    if (inputValue != "") {
        //Création d'un nouvel élément
        var newFruit = document.createElement("li");
        //Définition du texte
        newFruit.textContent = inputValue;

        //Ajout du bouton suprrimer
        addDeleteButton(newFruit);

        //Insertion de l'élément dans le DOM
        list.appendChild(newFruit);
        //Réinitilisation de la zone de saisie
        input.value = "";
    }
    event.preventDefault();
}

//Définition de l'événement
addForm.addEventListener("submit", addFruit);
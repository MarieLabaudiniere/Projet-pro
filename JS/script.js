//création d'une variable correspondant à l'élément p (objet Element de JS)
//l'objet document correspond à notre page
let para = document.querySelector('p');

//ajout d'un écouteur sur notre élément para qui
//appelera la fonction updateName lorsque l'évènement click aura lieu
//attention à l'orthographe et la casse du nom de l'évènement
//attention mettre uniquement le nom de la fonction sans parenthèse
para.addEventListener('click', updateName);

function updateName() {
    //prompt est la fonction qui ouvre une fen^tre de saisie
    //récupération de la valeur saisie dans le prompt dans une variable name
    let name = prompt('Enter a new name');
    //instanciation de la propriété textContent de l'élément para
    //le + réalise une concaténation
    para.textContent = 'Player 1: ' + name;
}
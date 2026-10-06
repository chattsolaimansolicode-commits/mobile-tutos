fetch("../backend/categories.php")
.then(Response=> Response.json())
.then(categories=>{
    const ul = document.getElementById("liste-categorie");
    categories.forEach(categorie => {
        const li = document.createElement('li');
        li.textContent= categorie.nom;
        ul.appendChild(li);        
    });
})
.catch(erreur => console.error("error communication", error));

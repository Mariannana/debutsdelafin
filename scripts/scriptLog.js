// Page d'inscription

const formInscription= document.querySelector(".formInscrip");
console.log(formInscription);

formInscription.addEventListener("submit", function(event) {
        event.preventDefault(); // Empêcher la soumission du formulaire

        const formData = new FormData(formInscription);
        formData.append("submit", "");
        console.log([...formData.entries()]);

        fetch("http://localhost/debutsdelafin/serveur/createAccount.php", {
            method: 'POST',
            body: formData
        })
        .then(response => {
            console.log(response);
            return response.json();
        })
        .then(data=>{
        console.log(data);
        })
        .catch(error => {
            console.error(error);
        });
    });

         
    //Page de connexion

const formConnexion= document.querySelector(".formConnexion");
console.log(formConnexion);

formConnexion.addEventListener("submit", function(event) {
    event.preventDefault(); 

    const formData = new FormData(formConnexion);
    formData.append("submit", "");
    console.log([...formData.entries()]);

    fetch("http://localhost/debutsdelafin/serveur/connection.php", {
        method: 'POST',
        body: formData
    })
    .then(response => {
        console.log(response);
        return response.json();
    })
    .then(data=>{
        console.log(data);
    })
    .catch(error => {
        console.error(error);
    });
});
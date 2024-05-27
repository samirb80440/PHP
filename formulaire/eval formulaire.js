document.addEventListener('DOMContentLoaded', function () {
    const formulaire = document.getElementById("formulaire");

    formulaire.addEventListener('submit', function (e) {
    {
        e.preventDefault();

    caract=document.getElementById("nom").value
     envoyer= true
    ListeCaract=new RegExp("^[A-Za-z]+$")
    ListeCodepost=new RegExp("^([0-9]{5})+$")
    ListeEmail=new RegExp("^[_A-Za-z0-9.-]+@[a-z0-9.-]+.[a-z]{2,4}$")
    ListeNaissance=new RegExp("^[0-9]+-[0-9]+-[0-9]+$") 
    test= ListeCaract.test(caract)
    if (test==false){
        envoyer=false
        alert("Entrer votre nom")
    }
    caract=document.getElementById("prenom").value
    test=ListeCaract.test(caract)
    if(test==false){
        envoyer=false
        alert("Entrer votre prenom")
    }
    sexe=document.getElementById("Sexe")
    sexe2=document.getElementById("Sexe2")
    if(sexe.checked==false && sexe2.checked==false){
        envoyer=false
        alert("Sélectionner un Sexe ")
        
    }
    Datenaissance=document.getElementById("date").value
    test2=ListeNaissance.test(Datenaissance)
    if(test2==false){
        envoyer=false
        alert("Entrer votre date de naissance")
    }
    codepost=document.getElementById("Codepostal").value
    test3=ListeCodepost.test(codepost)
    if(test3==false){
        envoyer=false
        alert("Entrer votre code postal")
    }
    Email=document.getElementById("email").value
    test4=ListeEmail.test(Email)
    if(test4==false){
        envoyer=false
        alert("Entrer votre email")
    }
    sujet=document.getElementById("Sujet").value
    if(sujet==""){
        envoyer=false
        alert("Sélectionner un sujet")
    }
    caract=document.getElementById("VotreQuestion").value
    test=ListeCaract.test(caract)
    if(test==false){
        envoyer=false
        alert("Entrer votre question")
    }
    valid=document.getElementById("validation")
    if(valid.checked==false){
        envoyer=false
        alert("Cocher la case ")
       
    }
    if (envoyer) 
    {
        console.log("Formulaire valide, prêt à être soumis.");
        formulaire.submit();
    }
}
})
})
const re=document.getElementById("sujet1")
const Sujetelement=document.getElementById("Sujet")

Sujetelement.addEventListener("change",() => {
    re.remove("sujet1")
})






















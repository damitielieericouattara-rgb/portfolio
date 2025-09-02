const btn = document.querySelector("#btn");
const btnText = document.querySelector("#btnText");

btn.onclick = () =>{
    btnText.innerHTML = "D'accord !";
    btn.classList.add("active");

    // Attendre un petit moment avant de rediriger (optionnel)
setTimeout(() => {
    window.location.href = "./page\index_portfolio.html"; // ⬅️ mets ici le nom de ta page cible
}, 3000); // délai de 1 seconde (1000 ms)
};
// Deze functie is de start
const startpage = () => {
  
    const button7a = document.getElementById("item7aknop");
    const button7b = document.getElementById("item7bknop");
    button7a.addEventListener("click",toon7a);
    button7b.addEventListener("click",toon7b);
};
const toon7a = () => {
    const item7a = document.getElementById("item7a");
    const item7b = document.getElementById("item7b");
    item7a.className = "";
    item7b.className = "hidden";
};
const toon7b = () => {
    const item7a = document.getElementById("item7a");
    const item7b = document.getElementById("item7b");
    item7a.className = "hidden";
    item7b.className = "";
};


window.addEventListener("DOMContentLoaded", startpage);

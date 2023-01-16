const btn = document.querySelectorAll(".btn");
const result = document.querySelector("#result");



// if (result.textContent == ""){
//     result.textContent = "0";
// } else{
//     result.textContent += e.target.id
// }


btn.forEach((bouton) => {
    bouton.addEventListener("click", (e) => {
        result.textContent += e.target.id;

    });
});

egal.addEventListener("click", () => {
    result.textContent = eval(result.textContent)
});

clear.addEventListener("click", () => {
    result.textContent = ""
});



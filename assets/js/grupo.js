// Obtém todas as divs na página
const divs = document.querySelectorAll('.glider');

// Itera sobre cada div
divs.forEach((div, index) => {
    // Verifica se a div já possui uma classe
    if (div.classList.length > 0) {
        // Adiciona um número à classe existente
        div.classList.add(`${div.classList[0]}-${index + 1}`);
    } else {
        // Se não tiver classe, adiciona uma classe com o número
        div.classList.add(`minha-div-${index + 1}`);
    }
});

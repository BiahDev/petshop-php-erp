
const passadores = Array.from(document.querySelectorAll(".passador-do-input"));
passadores.forEach((passador) => {
    passador.addEventListener("click", ({currentTarget}) => {
        const {valor, input} = currentTarget.dataset;
        const valorArray = valor.split(',')
        const inputArray = input.split(',')

        for (let i = 0; i < valorArray.length; i++) {
          const elementoInput = document.querySelector(`#${inputArray[i]}`);
          if (elementoInput) elementoInput.value = valorArray[i];
          else throw new Error("O elemento não foi encontrado");
          
        }
    });
});

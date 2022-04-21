// | Mascaras
$('.cep').mask('00000-000');
$('.telefone').mask('(00) 0 0000-0000');

$(document).ready(function() {
  $('#example').DataTable({
    scrollX:true
  });
} );

// | Passador de input
const passadores = Array.from(document.querySelectorAll(".passador-do-input"));
passadores.forEach((passador) => {
  passador.addEventListener("click", ({
    currentTarget
  }) => {
    const {
      valor,
      input
    } = currentTarget.dataset;
    const valorArray = valor.split(',')
    const inputArray = input.split(',')

    for (let i = 0; i < valorArray.length; i++) {
      const elementoInput = document.querySelector(`#${inputArray[i]}`);
      if (elementoInput) elementoInput.value = valorArray[i];
      else throw new Error("O elemento não foi encontrado");
    }
  });
});


// | O usuario pode digitar apenas letras
const inputApenasLetras = Array.from(document.querySelectorAll(".apenasLetras"))
inputApenasLetras.forEach((apenasLetras) => {
  let letters = /[A-Z]+/;
  apenasLetras.addEventListener("keydown", function(e) {
    if (!(e.key.match(letters))) {
      e.preventDefault();
    }
  });
});



// | Switch wpp cadastro de cliente
const inputSwitch = document.getElementById('inputSwitchTelWpp')
const telefone = document.getElementById('telefone')
const wpp = document.getElementById('wpp')
if (inputSwitch && telefone && wpp) {
  wpp.value == telefone.value ? inputSwitch.setAttribute('checked', 'true') :
    inputSwitch.addEventListener('change', () =>{
      inputSwitch.checked ? wpp.value = telefone.value : wpp.value = ""
    })
}
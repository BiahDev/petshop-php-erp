// | Mascaras
$('.cep').mask('00000-000');
$('.telefone').mask('(00) 0 0000-0000');

$(document).ready(function() {
  $('table.index').DataTable({
    scrollX: true,
    pagingType: "numbers",
    language: {
      lengthMenu: "Mostrar _MENU_ registros",
      zeroRecords: "Nenhum registro encontrado",
      info: "Página _PAGE_ de _PAGES_",
      infoEmpty: "Nenhum registro encontrado",
      infoFiltered: "(Filtrado de _MAX_ registros no total)",
      sSearch: "Buscar: _INPUT_",
      paginate: {
        previous: "Anterior",
        next: "Próximo",
        first: "Primeira página",
        last: "Última página"
      }
    }
  });
});


// | Passador de input com value
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


// | Passador de input com html/text/
const passadoresHtml = Array.from(document.querySelectorAll(".passador-do-input-html"));
passadoresHtml.forEach((passador) => {
  passador.addEventListener("click", ({
    currentTarget
  }) => {
    const {
      valorhtml,
      inputhtml
    } = currentTarget.dataset;
    const valorArray = valorhtml.split(',')
    const inputArray = inputhtml.split(',')
    console.log(valorhtml , '-------',inputhtml)

    for (let i = 0; i < valorArray.length; i++) {
      const elementoInput = document.querySelector(`#${inputArray[i]}`);
      if (elementoInput) elementoInput.innerHTML = valorArray[i];
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
  wpp.value == telefone.value && wpp.value != "" ?
    inputSwitch.setAttribute('checked', 'true') : inputSwitch.removeAttribute('checked')

    inputSwitch.addEventListener('change', () => {
      inputSwitch.checked ? wpp.value = telefone.value : wpp.value = ""
    })

}

wpp.addEventListener('keyup', () => {
  if (wpp.value !== telefone.value) {
    inputSwitch.removeAttribute('checked')
  } else {
    inputSwitch.setAttribute('checked', 'true')
  }
})

telefone.addEventListener('keyup', () => {
  if (wpp.value !== telefone.value) {
    inputSwitch.removeAttribute('checked')
  } else {
    console.log(wpp.value)
    inputSwitch.setAttribute('checked','true')
  }
})
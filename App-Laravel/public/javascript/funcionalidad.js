//obtener los valores del rango-->DOM
const min = document.getElementById("min");
const max = document.getElementById("max");
const minValor= document.getElementById("minValor");
const maxValor = document.getElementById("maxValor");

// actualiza los precios en los input text
function updateValores(){
    minValor.value = min.value;
    maxValor.value = max.value;
}

//reconocer el evento en los rangos, cuando los valores cambien 

min.addEventListener("input",updateValores);
max.addEventListener("input",updateValores);

updateValores();
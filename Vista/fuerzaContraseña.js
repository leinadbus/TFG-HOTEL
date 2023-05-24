const input = document.getElementById("password");
const fuerzaDiv = document.getElementById("fuerza");

console.log(input);


input.addEventListener("input", function (event) {
    const valorInput = event.target.value;
    let mayusculas = 0, minusculas = 0, especiales = 0, numeros = 0, total = 0;

    // Obtener la 'fuerza' de la contraseña
    for (let index = 0; index < valorInput.length; index++) {
        console.log(valorInput[index]);
        let letra = valorInput[index];
        if (letra === letra.toUpperCase() && letra !== letra.toLowerCase()) {
            mayusculas++;
        } else if (letra === letra.toLowerCase() && letra !== letra.toUpperCase()) {
            minusculas++;
        } else if (letra.match(/[^a-zA-Z0-9]/g)) {
            especiales++;
        } else if (letra.match(/[0-9]/g)) {
            numeros++;
        }
    }

    total = mayusculas + minusculas + especiales + numeros;
    console.log('mayusculas ', mayusculas);
    console.log('minusculas ', minusculas);
    console.log('especiales ', especiales);
    console.log('numeros ', numeros);
    console.log('total ', total);

    // Cambiar el color de fondo del div basado en la longitud del valor del input
    if (total <= 5) {
        fuerzaDiv.style.color = "red";
        fuerzaDiv.textContent = "contraseña debil";
    } else if (total <= 10) {
        fuerzaDiv.style.color = "orange";
        fuerzaDiv.textContent = "contraseña moderada";
    } else {
        fuerzaDiv.style.color = "green";
        fuerzaDiv.textContent = "contraseña fuerte";
    }

});
console.log("pepe")


// Formatear número de tarjeta en grupos de 4 dígitos
const numeroTarjetaInput = document.getElementById('numeroTarjeta');

numeroTarjetaInput.addEventListener('input', function (event) {
    const input = event.target;
    const trimmedValue = input.value.replace(/\s+/g, ''); // Eliminar espacios en blanco existentes

    // Dividir el valor en grupos de cuatro dígitos
    const groups = trimmedValue.match(/.{1,4}/g);
    if (groups) {
        const formattedValue = groups.join(' ');
        input.value = formattedValue;
    }
});

// Formatear fecha de caducidad con barra delimitadora entre meses y años
const caducidadTarjetaInput = document.getElementById('caducidadTarjeta');

    caducidadTarjetaInput.addEventListener('input', function (event) {
        const input = event.target;
        const trimmedValue = input.value.replace(/\s+/g, ''); // Eliminar espacios en blanco existentes

        let formattedValue = trimmedValue;

        if (trimmedValue.length == 2) {
            const month = Math.max(1, Math.min(12, parseInt(trimmedValue.slice(0, 2), 10)));
            const year = trimmedValue.slice(2);

            formattedValue = `${String(month).padStart(2, '0')}/${year}`;
        }

        input.value = formattedValue;
    });

    // Solo permite números en el campo de número de tarjeta
    numeroTarjetaInput.addEventListener('input', function (event) {
        const input = event.target;
        input.value = input.value.replace(/[^\d\s]/g, ''); // Elimina todos los caracteres que no sean dígitos o espacios en blanco para el agrupamiento
    });

    // Solo permite números en el campo de fecha de caducidad
    caducidadTarjetaInput.addEventListener('input', function (event) {
        const input = event.target; 
        input.value = input.value.replace(/[^\d\/]/g, ''); // Elimina todos los caracteres que no sean dígitos o / para el agrupamiento
    });
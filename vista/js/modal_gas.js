document.addEventListener('DOMContentLoaded', function() {

    // Obtener referencias a los elementos del formulario
    const precio_potencia_punta_gas = document.getElementById('precio_potencia_punta_gas');
    const precio_potencia_valle_gas = document.getElementById('precio_potencia_valle_gas');
    const precio_potencia_contratada_gas = document.getElementById('precio_potencia_contratada_gas');

    const factura_sin_impuestos_gas = document.getElementById('factura_sin_impuestos_gas');
    const factura_con_impuestos_gas = document.getElementById('factura_con_impuestos_gas');

    const resultadoDiv_gas = document.getElementById('resultadoDiv_gas'); // Nuevo: Obtener el div de resultados


    // Función para calcular el resultado
    function calcularFacturas_gas() {

        // Obtener los valores actuales de los campos Termino de potencia
        const potenciaPunta_gas = parseFloat(precio_potencia_punta_gas.value) || 0;
        const potenciaValle_gas = parseFloat(precio_potencia_valle_gas.value) || 0;
        const potenciaContratada_gas = parseFloat(precio_potencia_contratada_gas.value) || 0;


        if (potenciaPunta_gas === 0 || potenciaValle_gas === 0 || potenciaContratada_gas === 0 ) {
            resultadoDiv_gas.style.visibility = 'hidden';
            return;
        }

        // Realizar los cálculos  Termino de potencia
        const resultadoPunta = potenciaPunta_gas * potenciaContratada_gas * 30;
        const resultadoValle = potenciaValle_gas * potenciaContratada_gas * 30;
        const totalTerminoPotencia_gas = resultadoPunta + resultadoValle;



        // Aplicar factor de conversión para impuestos (ejemplo del 10%)
        const factorImpuestos = 0.10;
        const totalConImpuestos = totalSinImpuestos * (1 + factorImpuestos);

        // Mostrar resultados en los campos de resultado
        factura_sin_impuestos.value = totalSinImpuestos.toFixed(2);
        factura_con_impuestos.value = totalConImpuestos.toFixed(2);

        resultadoDiv.style.visibility = 'visible'; // Mostrar resultados
    }

    // Escuchar cambios en los inputs para recalcular
    precio_potencia_punta.addEventListener('input', calcularFacturas);
    precio_potencia_valle.addEventListener('input', calcularFacturas);
    precio_potencia_contratada.addEventListener('input', calcularFacturas);
    kilovatio_ofrecido.addEventListener('input', calcularFacturas);
    consumo_cliente.addEventListener('input', calcularFacturas);

    // Llamar a la función una vez al cargar la página para asegurar que los campos iniciales se procesen
    calcularFacturas_gas();
});

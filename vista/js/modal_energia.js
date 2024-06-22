    document.addEventListener('DOMContentLoaded', function() {

        // Obtener referencias a los elementos del formulario
        const precio_potencia_punta = document.getElementById('precio_potencia_punta');
        const precio_potencia_valle = document.getElementById('precio_potencia_valle');
        const precio_potencia_contratada = document.getElementById('precio_potencia_contratada');
        const kilovatio_ofrecido = document.getElementById('kilovatio_ofrecido');
        const consumo_cliente = document.getElementById('consumo_cliente');
        const factura_sin_impuestos = document.getElementById('factura_sin_impuestos');
        const factura_con_impuestos = document.getElementById('factura_con_impuestos');

        const resultadoDiv = document.getElementById('resultadoDiv'); // Nuevo: Obtener el div de resultados


        // Función para calcular el resultado
        function calcularFacturas() {

            // Obtener los valores actuales de los campos Termino de potencia
            const potenciaPunta = parseFloat(precio_potencia_punta.value) || 0;
            const potenciaValle = parseFloat(precio_potencia_valle.value) || 0;
            const potenciaContratada = parseFloat(precio_potencia_contratada.value) || 0;

            // Obtener los valores actuales de los campos Termino de energia
            const kilovatioOfrecido = parseFloat(kilovatio_ofrecido.value) || 0;
            const consumoCliente = parseFloat(consumo_cliente.value) || 0;

            if (potenciaPunta === 0 || potenciaValle === 0 || potenciaContratada === 0 || kilovatioOfrecido === 0 || consumoCliente === 0) {
                resultadoDiv.style.visibility = 'hidden';
                return;
            }

            // Realizar los cálculos  Termino de potencia
            const resultadoPunta = potenciaPunta * potenciaContratada * 30;
            const resultadoValle = potenciaValle * potenciaContratada * 30;
            const totalTerminoPotencia = resultadoPunta + resultadoValle;

            // Realizar los cálculos  Termino de energia
            const totalConsumoEnergia = kilovatioOfrecido * consumoCliente;
            const totalSinImpuestos = totalTerminoPotencia + totalConsumoEnergia;

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
        calcularFacturas();
    });

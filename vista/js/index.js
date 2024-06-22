function redirectToCampaña(idCampaings, nombreCampaings) {
    // Crear un formulario dinámicamente
    var form = document.createElement('form');
    form.method = 'post';
    form.action = './vista/campanias/campaniaSeleccionada.php';

    // Crear un input para el ID de la campaña
    var inputId = document.createElement('input');
    inputId.type = 'hidden';
    inputId.name = 'id_campaings';
    inputId.value = idCampaings;

    // Crear un input para el nombre de la campaña
    var inputNombre = document.createElement('input');
    inputNombre.type = 'hidden';
    inputNombre.name = 'nombre_campaings';
    inputNombre.value = nombreCampaings;

    // Agregar los inputs al formulario
    form.appendChild(inputId);
    form.appendChild(inputNombre);

    // Agregar el formulario al cuerpo del documento
    document.body.appendChild(form);

    // Enviar el formulario
    form.submit();
}
$(document).ready(function() {
    $('.btn-editar').click(function(e) {
        e.preventDefault();
        //console.log('Ver');
        var user_id = $(this).closest('tr').find('.user_id').text();
        //console.log(user_id);
        $.ajax({
            method: "POST",
            url: '../../controlador/administrador/modal_editar_campaniaSeleccionado.php',
            data: {
                'click_btn_editar': true,
                'user_id': user_id,
            },
            success: function(response) {
                console.log(response);
                $('#campaniaId').val(response[0]['id']);
                $('#name').val(response[0]['name']);

                $('#termino_potencia1').val(response[0]['termino_potencia1']);
                $('#termino_potencia2').val(response[0]['termino_potencia2']);
                $('#termino_energia').val(response[0]['termino_energia']);

                $('#Potencia_V').val(response[0]['Potencia_V']);
                $('#consumo_energia').val(response[0]['consumo_energia']);

                $('#termino_rl1').val(response[0]['termino_rl1']);
                $('#termino_rl2').val(response[0]['termino_rl2']);
                $('#termino_rl3').val(response[0]['termino_rl3']);

                $('#tv1').val(response[0]['tv1']);
                $('#tv2').val(response[0]['tv2']);
                $('#tv3').val(response[0]['tv3']);

                $('#editar_info_campania').modal('show');
            }
        });
    });
});
$(function () {

    // Lista de estados
    $.post('controller/estados_controller.php').done(function (respuesta) {
        $('#estados').html(respuesta);
    });

    // lista municipios
    $('#estados').change(function () {
        var mostrar_municipio = $(this).val();

        // Lista de municipios
        $.post('controller/municipios_controller.php', { estado: mostrar_municipio }).done(function (respuesta) {
            $('#municipios').html(respuesta);
        });
    });

    // Lista de Parroquias
    $('#municipios').change(function () {
        var mostrar_parroquia = $(this).val();

        // Lista de Parrroquias
        $.post('controller/parroquias_controller.php', { municipio: mostrar_parroquia }).done(function (respuesta) {
            $('#parroquias').html(respuesta);
        });
    });

})

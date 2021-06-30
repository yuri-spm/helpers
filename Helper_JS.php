<script>

$(function() {

    $('#pesquisar-cep').click(function() {
        var cep = $('#cep').val();


        $.ajax({
        url: `https://viacep.com.br/ws/${cep}/json/`,
        type: 'get',

        success: function(response) {
            console.log(response);
            if (response){
                // var json = JSON.parse(response);
                $('#rua').val(response.logradouro)


            }

        },
        error: function(ex, hre) {
            console.log('error')
        }
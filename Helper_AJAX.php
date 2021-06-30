<script>
    $(function() {

        $('#pesquisar-cep').click(function() {

            $.ajax({
                url: 'insert.php',
                type: 'post',
                data: {'cep' : $('#cep').val()},
                success: function(response) {
                    console.log(response);
                    if (response){
                        var json = JSON.parse(response);
                        $('#rua').val(json.logradouro)

                    }

                },
                error: function(ex, hre) {
                    console.log()
                }


            })

        })

    })


</script>
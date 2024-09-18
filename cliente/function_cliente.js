document.write('<script src="../js/jquery-3.3.1.min.js"></script>');
document.write('<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>');

function retCidade(val, id_cidade = 0, cidade = ''){
    $.ajax({
        url: 'ajax_busca_cidade.php',
        method: 'POST',
        dataType: 'json',
        data: {
            id_estado: val
        },
        success: function(resp){
            $('#cidade').html('');
            if(id_cidade != 0){
                $('#cidade').html('<option value="'+ id_cidade +'">'+ cidade +'</option>');
            } else {
                $('#cidade').html('<option value="-1">--SELECIONE--</option>');
            }
            $.each(resp, function(k,v){
                var html = '';
                html = `
                    <option value='${v['id']}'>${v['nome']}</option>
                `;
                $('#cidade').append(html);
            });
        },
        error: function(xhr, status, error){
            console.log(status, error);
        }
    });
}

function altDiv(param){
    if(param == 1){
        $('#nome_razaosocial').html('NOME COMPLETO');
        $('#cpf_cnpj').html('CPF');
    } else {
        $('#nome_razaosocial').html('RAZÃO SOCIAL');
        $('#cpf_cnpj').html('CNPJ');
    }
    $('#cpfcnpj').val('');
    $('#nomerazao').val('');
    $('#email').val('');
    $('#celular').val('');
    $('#cep').val('');
    $('#logradouro').val('');
    $('#numero').val('');
    $('#bairri').val('');
    $('#complemento').val('');
    $('#estado').val('-1');
    $('#cidade').val('-1');
}

function consultaCnpj(val){
    if(val.length == 14){
        $.ajax({
            url: '../cliente/ajax_consulta_cnpj.php',
            method: 'POST',
            dataType: 'json',
            data: {
                cnpj: val,
            },
            success: function(data){
                $('#nomerazao').val(data.razao)
                $('#cep').val(data.cep);
                $('#numero').val(data.numero_log);
                $('#complemento').val(data.complemento_log);
                $('#celular').val(data.telefone);
                $('#email').val(data.email);
                if(data.cep != ''){
                    consultaCep(data.cep);
                } 
            }
        });
    }
}

function consultaCep(cep){
    if(cep.length == 8){
        $.ajax({
            url: '../cliente/ajax_consulta_cep.php',
            method: 'POST',
            dataType: 'json',
            data: {
                cep: cep,
            },
            success: function(data){
                if(data != ''){
                    $('#logradouro').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    if(data.uf != ''){
                        retornaUf(data.uf, data.cidade);
                    }
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "CEP Inexistente!",
                      });
                }
            }
        });
    } else {
        $('#logradouro, #numero, #bairro, #complemento').val('');
        $('#estado').val('-1');
        $('#cidade').val('-1');
    }
}

function retornaUf(uf, cidade){
    $.ajax({
        url: '../cliente/ajax_retorna_uf.php',
        method: 'POST',
        dataType: 'json',
        data: {
            uf: uf,
            cidade: cidade,
        },
        success: function(data){
            console.log(data)
            $('#estado').val(data.id_uf);
            retCidade(data.id_uf, data.id_cidade, cidade);
        }
    });
}
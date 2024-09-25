<?php

require "../links/head.php";
require "../parts/nav.php";
require "../connection/conn.php";

?>
<style>
    body {
        height: auto;
    }
</style>
<script src="../cliente/function_cliente.js"></script>
<title>TECFIT | Cliente</title>

<form action="proc_cliente.php" method="POST">
    <div class="container my-3" align="center">
        <h1>Quero assinar o sistema</h1>
        <div class="border border-1 p-4 mt-4 rounded" align="left">
            <h4 class="mb-4">Fazer cadastro</h4>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <label for="">NOME ACADEMIA</label>
                    <input type="text" name="nome_academia" id="nome_academia" class="form-control" required>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label for="">TIPO</label>
                    <div class="row px-4">
                        <div class="col-6 form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" onchange="altDiv(1);" value="cpf">
                            <label class="form-check-label" for="flexRadioDefault1">
                                FÍSICA
                            </label>
                        </div>
                        <div class="col-6 form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" onchange="altDiv(2);" value="cnpj" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                JÚRIDICA
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="p-0 m-0">
                    <div class="p-0 m-0">
                        <div class="col-sm-12 col-md-12">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="" id="cpf_cnpj">CNPJ</label>
                                    <input type="text" name="cpfcnpj" id="cpfcnpj" onblur="consultaCnpj(this.value);" class="form-control" required>
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        const campo = $('#cpfcnpj');

                                        function aplicarMascara() {
                                            const tipo = $('input[name="flexRadioDefault"]:checked').val();
                                            campo.unmask();

                                            if (tipo === 'cpf') {
                                                campo.mask('000.000.000-00');
                                            } else if (tipo === 'cnpj') {
                                                campo.mask('00.000.000/0000-00');
                                            }
                                        }

                                        $('input[name="flexRadioDefault"]').change(function() {
                                            aplicarMascara();
                                        });

                                        aplicarMascara();
                                    });
                                </script>
                                <div class="col-sm-12 col-md-6">
                                    <label for="" id="nome_razaosocial">RAZÃO SOCIAL</label>
                                    <input type="text" name="nomerazao" id="nomerazao" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6">
                                    <label for="">EMAIL</label>
                                    <input type="text" name="email" id="email" class="form-control" required>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">CELULAR</label>
                                    <input type="text" name="celular" id="celular" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6">
                                    <label for="">CEP</label>
                                    <input type="text" name="cep" id="cep" onkeyup="consultaCep(this.value);" class="form-control" maxlength="8" required>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">&nbsp;</label>
                                    <input type="button" value="CONSULTAR" onclick="consultaCep($('#cep').val());" class="form-control btn btn-primary">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-6">
                                    <label for="">LOGRADOURO</label>
                                    <input type="text" name="logradouro" id="logradouro" class="form-control" required>
                                </div>
                                <div class="col-sm-12 col-md-2">
                                    <label for="">Nº</label>
                                    <input type="text" name="numero" id="numero" class="form-control" required>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <label for="">BAIRRO</label>
                                    <input type="text" name="bairro" id="bairro" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-12 col-md-7">
                                    <label for="">COMPLEMENTO</label>
                                    <input type="text" name="complemento" id="complemento" class="form-control">
                                </div>
                                <div class="col-sm-12 col-md-2">
                                    <label for="">ESTADO</label>
                                    <select name="estado" id="estado" onchange="retCidade(this.value);" class="form-select" required>
                                        <option value="-1">--SELECIONE--</option>
                                        <?php
                                        $sql = "SELECT id , uf FROM tecfit_estado;";
                                        $res = $dba->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($res as $r) {
                                            echo "<option value=" . $r['id'] . ">" . $r['uf'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <label for="">CIDADE</label>
                                    <select name="cidade" id="cidade" class="form-select" required>
                                        <option value="-1">--SELECIONE--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-3 pt-3">
                                <div class="col-sm-12 col-md-4">
                                    <input type="radio" class="btn-check" name="planos" id="option1" autocomplete="off" onchange="altPlan(1);">
                                    <label class="btn btn-secondary w-100" for="option1">Anual</label>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <input type="radio" class="btn-check" name="planos" id="option2" autocomplete="off" onchange="altPlan(2);">
                                    <label class="btn btn-secondary w-100" for="option2">Trimestral</label>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <input type="radio" class="btn-check" name="planos" id="option3" autocomplete="off" onchange="altPlan(3);">
                                    <label class=" btn btn-secondary w-100" for="option3">Mensal</label>
                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="col-sm-0 col-md-4"></div>
                                <div class="col-sm-0 col-md-4"></div>
                                <div class="col-sm-12 col-md-4">
                                    <label>
                                        <p id="plan_l1"></p>
                                    </label>
                                    <label>
                                        <p id="plan_l2"></p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-3 pb-3" align="center">
                    <input type="submit" value="Iniciar Teste Grátis" class="btn btn-lg btn-primary form-control w-30">
                </div>
            </div>
        </div>
    </div>
</form>
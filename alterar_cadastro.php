<?php

// Debug
// error_reporting(E_ALL);
// ini_set("display_errors", 1);

require_once('config/mysql.conf.php');

$conn = new mysqli($servername, $username, $password, $database);

$id = $_GET['id'];

$conn->set_charset("utf8");

$stmt = $conn->prepare("SELECT * FROM T_ROBINAPP_CADASTRO WHERE ID = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$stmt->bind_result($id, $nome, $sobrenome, $dt_nascimento, $pais, $estado, $cidade, $cep, $bairro, $logradouro, $numero, $raio, $email, $senha, $foto);

$stmt->fetch();

$dt_nascimento = implode("/",array_reverse(explode("-",$dt_nascimento)));

$states = array("AC","AL","AP","AM","BA","CE","DF","GO","ES","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SP","SC","SE","TO");

$kms = array(1, 2, 3, 4 , 5);

?>

<DOCTYPE! html>
    <html lang="pt">
        <head>
            <title>Robin App</title>
            <meta name="google-site-verification" content="mcY5mr4zeb6SmwSVqbdU90t8KqsglZA-5u8S_tjfx6A" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" />
            <link rel="shortcut icon" href="img/robinfavicon.png" type="image/png"/>
            <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        </head>
        <body>
            <header class="header-default">
                <div class="r-logo"></div>
            </header>
            <section class="signup">
                <div class="sucess-form">
                    <p>Você foi cadastrado com sucesso!</p>
                </div>
                <p>Alterar Cadastro</p>
                <form id="form-signup-update" method="post" action="">
                    <input type="hidden" name="idUpdate" id="idUpdate" value="<?php echo $id; ?>">
                    <input type="hidden" name="imgOldUpdate" id="imgOldUpdate" value="<?php echo $foto; ?>">
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="firstnameUpdate" id="firstnameUpdate" type="text" value="<?php echo $nome; ?>" class="validate">
                            <label class="active" for="firstnameUpdate">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="lastnameUpdate" id="lastnameUpdate" type="text" value="<?php echo $sobrenome; ?>" class="validate">
                            <label class="active" for="lastnameUpdate">Sobrenome</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input name="dateUpdate" id="dateUpdate" type="date" value="<?php echo $dt_nascimento; ?>" class="datepicker">
                            <label class="active" for="dateUpdate">Data de Nascimento</label>
                        </div>
                        <div class="file-field input-field col s7">
                            <div class="btn">
                                <span>ALTERAR FOTO</span>
                                <input type="file" name="imgUpdate" id="imgUpdate">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <div class="file-field input-field col s1">
                            <img src="<?php echo $foto; ?>" width="50px" height="50px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <input name="countryUpdate" id="countryUpdate" type="text" value="<?php echo $pais; ?>" class="validate">
                            <label class="active" for="countryUpdate">País</label>
                        </div>
                        <div class="input-field col s2">
                            <select name="stateUpdate" id="stateUpdate" class="validate">
                            <?php
                                foreach ($states as $state) {
                                    if($state == $estado) { $attr = 'selected="selected"'; } else { $attr = ''; }
                                    echo '<option value="'.$state.'" '.$attr.'>'.$state.'</option>';
                                }
                            ?>
                            </select>
                            <label class="active" for="stateUpdate">Estado</label>
                        </div>
                        <div class="input-field col s5">
                            <input name="cityUpdate" id="cityUpdate" type="text" value="<?php echo $cidade; ?>" class="validate">
                            <label class="active" for="cityUpdate">Cidade</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="cepUpdate" id="cepUpdate" type="text" value="<?php echo $cep; ?>" class="validate">
                            <label class="active" for="cepUpdate">CEP</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="neighborhoodUpdate" id="neighborhoodUpdate" type="text" value="<?php echo $bairro; ?>" class="validate">
                            <label class="active" for="neighborhoodUpdate">Bairro</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s9">
                            <input name="addressUpdate" id="addressUpdate" type="text" value="<?php echo $logradouro; ?>" class="validate">
                            <label class="active" for="addressUpdate">Endereço</label>
                        </div>
                        <div class="input-field col s3">
                            <input name="numberUpdate" id="numberUpdate" type="text" value="<?php echo $numero; ?>" class="validate">
                            <label class="active" for="numberUpdate">Número</label>
                        </div>
                    </div>
                    <div class="row hr">
                        <div class="input-field col s12">
                            <select name="radiusUpdate" id="radiusUpdate" class="validate">
                                <?php
                                    foreach ($kms as $km) {
                                        if($km == $raio) { $attr = 'selected="selected"'; } else { $attr = ''; }
                                        echo '<option value="'.$km.'" '.$attr.'>'.$km.' km</option>';
                                    }
                                ?>
                            </select>
                            <label class="active" for="radiusUpdate">Qual raio você gostaria de receber notificações?</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="emailUpdate" id="emailUpdate" type="email" value="<?php echo $email; ?>" class="validate">
                            <label class="active" for="SignupNew">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="passwordUpdate" id="passwordUpdate" type="password" value="<?php echo $senha; ?>" class="validate">
                            <label class="active" for="passwordUpdate">Senha</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="passwordConfirmUpdate" id="passwordConfirmUpdate" type="password" value="<?php echo $senha; ?>" class="validate">
                            <label class="active" for="passwordConfirmUpdate">Confirme sua Senha</label>
                        </div>
                    </div>
                    <button class="btn-large waves-effect waves-light right" type="submit" name="action">Atualizar</button>
                </form>
            </section>
            <footer>
                <p>Robin App. Todos os direitos reservados ® 2016</p>
            </footer>
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="js/bin/materialize.min.js"></script>
            <script src="js/script3.js"></script>
        </body>
    </html>
</DOCTYPE!>

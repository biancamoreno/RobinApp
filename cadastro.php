<DOCTYPE! html/>
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
            <p>Preencha seus dados e comece a usufruir o seu bairro!</p>
            <form id="form-signup" method="post" action="">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="firstnameSignup" id="firstnameSignup" type="text" class="validate">
                        <label class="active" for="firstnameSignup">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="lastnameSignup" id="lastnameSignup" type="text" class="validate">
                        <label class="active" for="lastnameSignup">Sobrenome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input name="dateSignup" id="dateSignup" type="date" class="datepicker">
                        <label class="active" for="dateSignup">Data de Nascimento</label>
                    </div>
                    <div class="file-field input-field col s8">
                        <div class="btn">
                            <span>FOTO</span>
                            <input type="file" name="imgSignup" id="imgSignup">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input name="countrySignup" id="countrySignup" type="text" class="validate">
                        <label class="active" for="countrySignup">País</label>
                    </div>
                    <div class="input-field col s2">
                        <select name="stateSignup" id="stateSignup" class="validate">
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="GO">GO</option>
                            <option value="ES">ES</option>
                            <option value="MA">MA</option>
                            <option value="MT">MT</option>
                            <option value="MS">MS</option>
                            <option value="MG">MG</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PR">PR</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SP">SP</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="TO">TO</option>
                        </select>
                        <label class="active" for="stateSignup">Estado</label>
                    </div>
                    <div class="input-field col s5">
                        <input name="citySignup" id="citySignup" type="text" class="validate">
                        <label class="active" for="citySignup">Cidade</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="cepSignup" id="cepSignup" type="text" class="validate">
                        <label class="active" for="cepSignup">CEP</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="neighborhoodSignup" id="neighborhoodSignup" type="text" class="validate">
                        <label class="active" for="neighborhoodSignup">Bairro</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s9">
                        <input name="addressSignup" id="addressSignup" type="text" class="validate">
                        <label class="active" for="addressSignup">Endereço</label>
                    </div>
                    <div class="input-field col s3">
                        <input name="numberSignup" id="numberSignup" type="text" class="validate">
                        <label class="active" for="numberSignup">Número</label>
                    </div>
                </div>
                <div class="row hr">
                    <div class="input-field col s12">
                        <select name="radiusSignup" id="radiusSignup" class="validate">
                            <option value="1">1 km</option>
                            <option value="2">2 km</option>
                            <option value="3">3 km</option>
                            <option value="4">4 km</option>
                            <option value="5">5 km</option>
                        </select>
                        <label class="active" for="radiusSignup">Qual raio você gostaria de receber notificações?</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="emailSignup" id="emailSignup" type="email" class="validate">
                        <label class="active" for="SignupNew">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="passwordSignup" id="passwordSignup" type="password" class="validate">
                        <label class="active" for="passwordSignup">Senha</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="passwordConfirmSignup" id="passwordConfirmSignup" type="password" class="validate">
                        <label class="active" for="passwordConfirmSignup">Confirme sua Senha</label>
                    </div>
                </div>
                <button class="btn-large waves-effect waves-light right" type="submit" name="action">CADASTRAR</button>
            </form>
        </section>
        <footer>
            <p>Robin App. Todos os direitos reservados ® 2016</p>
        </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/bin/materialize.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>

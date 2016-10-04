<?php include("includes/header.php") ?>
        <body>
            <header class="header-default">
                <div class="r-logo"></div>
            </header>
            <section class="signup">
                <div class="sucess-form">
                    <p>Você foi cadastrado com sucesso!</p>
                </div>
                <p>Faça o cadastro e acompanhe seu bairro em tempo real!</p>
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
                        <div class="input-field col s6">
                            <input name="emailSignup" id="emailSignup" type="email" class="validate">
                            <label class="active" for="SignupNew">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="passwordSignup" id="passwordSignup" type="password" class="validate">
                            <label class="active" for="passwordSignup">Senha</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="cepSignup" id="cepSignup" type="text" class="validate">
                            <label class="active" for="cepSignup">CEP</label>
                        </div>
                        <div class="input-field col s3">
                            <input name="numberSignup" id="numberSignup" type="text" class="validate">
                            <label class="active" for="numberSignup">Número</label>
                        </div>
                    </div>
                    <button class="btn-large waves-effect waves-light right" type="submit" name="action">CADASTRAR</button>
                </form>
            </section>
            <footer>
                <p>Robin App. Todos os direitos reservados ® 2016</p>
            </footer>
<?php include("includes/footer.php") ?>
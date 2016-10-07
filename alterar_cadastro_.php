<?php include("includes/header.php") ?>
<body>
    <div id="modalDelete">
        <div class="modal-content center">
            <p>Para excluir sua conta, digite sua senha abaixo: <span class="icon-heart-broken"></span></p>
            <div class="input-field col s6">
                <input name="passwordDelete" id="passwordDelete" type="password" class="validate">
                <label class="active" for="passwordUpdate">Senha</label>
            </div>
            <div>
                <button class="btn waves-effect waves-light modal-close" name="action6">CANCELAR</button>
                <button class="btn-default" id="deleteUser" name="action7">EXCLUIR</button>
            </div>
        </div>
    </div>
    <header class="header-default">
        <a class="r-logo" href="home.php"></a>
        <div class="picture-user circle right dropdown-button" data-beloworigin="true" data-activates='dropdown1'></div>
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="home.php">Home</a></li>
            <li><a href="index.php" id="logoutUser">Sair</a></li>
        </ul>
    </header>
    <section class="signup">
        <div class="sucess-form">
            <p>Você foi cadastrado com sucesso!</p>
        </div>
        <p>Alterar Cadastro</p>
        <form id="form-update" method="post" action="">
            <div class="row">
                <div class="file-field input-field col s10">
                    <div class="btn">
                        <span>FOTO</span>
                        <input type="file" name="imgUpdate" id="imgUpdate">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="file-field input-field col s2">
                    <img src="img/LogoRobinDefault.png" name="fotoUpdate" id="fotoUpdate" width="50px" height="50px" />
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="firstnameUpdate" id="firstnameUpdate" type="text" class="validate">
                    <label class="active" for="firstnameUpdate">Nome</label>
                </div>
                <div class="input-field col s6">
                    <input name="lastnameUpdate" id="lastnameUpdate" type="text" class="validate">
                    <label class="active" for="lastnameUpdate">Sobrenome</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="emailUpdate" id="emailUpdate" type="email" class="validate">
                    <label class="active" for="UpdateNew">Email</label>
                </div>
                <div class="input-field col s6">
                    <input name="passwordUpdate" id="passwordUpdate" type="password" class="validate">
                    <label class="active" for="passwordUpdate">Senha</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input name="cepUpdate" id="cepUpdate" type="text" class="validate">
                    <label class="active" for="cepUpdate">CEP</label>
                </div>
                <div class="input-field col s3">
                    <input name="numberUpdate" id="numberUpdate" type="text" class="validate">
                    <label class="active" for="numberUpdate">Número</label>
                </div>
            </div>

            <a class="modal-delete left" href="#modalDelete">Excluir conta</a>
            <button class="btn-large waves-effect waves-light right" type="submit" name="action">ALTERAR</button>
        </form>
    </section>
    <?php include("includes/footer.php") ?>

    <script>
        firebase.auth().onAuthStateChanged(function(user) {
            var userId = firebase.auth().currentUser.uid;
            return firebase.database().ref('/usuarios/' + userId).once('value').then(function(snapshot) {
                data = snapshot.val();

                $('#firstnameUpdate').val(data.nome);
                $('#lastnameUpdate').val(data.sobrenome);
                $('#emailUpdate').val(data.email);
                $('#passwordUpdate').val(data.senha);
                $('#cepUpdate').val(data.endereco.cep);
                $('#numberUpdate').val(data.endereco.numero);
                $('#fotoUpdate').val(data.foto);

                $(function() {
                    Materialize.updateTextFields();
                });
            });
        });
    </script>

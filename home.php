<?php include("includes/header.php") ?>
<body class="home-page">
    <header class="header-default">
        <a class="r-logo" href="home.php"></a>
        <div class="header-search input-field">
            <i class="icon-search prefix hide-on-small-only"></i>
            <input type="text" placeholder="Buscar um local" id="map-search">
        </div>
        <div class="picture-user circle right dropdown-button" data-beloworigin="true" data-activates='dropdown1'></div>
        <ul id='dropdown1' class='dropdown-content'>
            <li><a href="alterar_cadastro.php">Configurações</a></li>
            <li><a href="index.php" id="logoutUser">Sair</a></li>
        </ul>
    </header>
    <section class="local-map">
        <div id="googleMap"></div>
        <div class="filter-box active">
            <div class="header-filter"><span>Filtros</span><i class="icon-ctrl"></i></div>
            <ul id="alert-types">
                <li><span class="icon icon-perigo"></span><span>Perigo e assalto</span></li>
                <li><span class="icon icon-agua"></span><span>Falta de água</span></li>
                <li><span class="icon icon-evento"></span><span>Evento</span></li>
                <li><span class="icon icon-incendio"></span><span>Incêndio</span></li>
                <li><span class="icon icon-acidente"></span><span>Acidente</span></li>
                <li><span class="icon icon-construcao"></span><span>Construção</span></li>
                <li><span class="icon icon-energia"></span><span>Problema elétrico</span></li>
                <li><span class="icon icon-users amigos"></span><span>Amigos</span></li>
                <li><span class="icon icon-users outros"></span><span>Outros Vizinhos</span></li>
            </ul>
        </div>
        <a class="btn-floating btn-large waves-effect waves-light modal-trigger modal-newpin active" href="#modal-add"><i class="icon-plus"></i></a>
        <div id="modal-add" class="modal-add">
            <div class="modal-content">
                <h4>Novo Alerta</h4>
                <form id="form-pin" method="post" action="">
                    <div>
                        <span>Tipo</span>
                        <div id="pin-alerts">
                            <span value="1" data-value="perigo" class="icon icon-perigo active"></span>
                            <span value="2" data-value="agua" class="icon icon-agua"></span>
                            <span value="3" data-value="evento" class="icon icon-evento"></span>
                            <span value="4" data-value="incendio" class="icon icon-incendio"></span>
                            <span value="5" data-value="acidente" class="icon icon-acidente"></span>
                            <span value="6" data-value="construcao" class="icon icon-construcao"></span>
                            <span value="7" data-value="energia" class="icon icon-energia"></span>
                        </div>
                    </div>
                    <input type="hidden" name="alertPin" id="alertPin" value="1">
                    <input type="hidden" name="latPin" id="latPin" value="-23.574761">
                    <input type="hidden" name="lngPin" id="lngPin" value="-46.622472">
                    <div class="row">
                        <div class="browser-default col s12">
                            <label class="active" for="titlePin">Título</label>
                            <input name="titlePin" id="titlePin" type="text" class="validate">
                        </div>
                        <div class="browser-default col s12">
                            <label class="active" for="descriptionPin">Descrição</label>
                            <textarea name="descriptionPin" id="descriptionPin" type="text"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div id="googleMapModal"></div>
                    </div>
                    <button class="btn waves-effect waves-light left" type="submit" name="action">ADICIONAR</button>
                </form>
            </div>
        </div>
        </div>
    <div class="icon-menu active"></div>
    <div class="box-right active">
        <div class="tabs">
            <div class="tab-feed tab active"><span class="icon-location"></span></div>
            <div class="tab-friends tab"><span class="icon-users"></span></div>
            <div class="tab-msgs tab"><span class="icon-envelop"></span></div>
            <div class="tab-groups tab"><span class="icon-bubbles4"></span></div>
            <div class="tab-ads tab"><span class="icon-bullhorn"></span></div>
        </div>
        <ul class="lists-box-right feed" id="tab-feed"></ul>
        <ul class="lists-box-right list-friends">
            <li>
                <div class="photo-user1 circle"></div>
                <div class="content-msg">
                    <p class="name-user">Will Smith</p>
                    <p class="simple">Rua Tenente Afonso, 230.</p>
                    <div>
                        <button class="btn-default" name="action2">VER NO MAPA</button>
                        <button class="btn-default" name="action3">MENSAGEM</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="photo-user2 circle"></div>
                <div class="content-msg">
                    <p class="name-user">Angelina Jolie</p>
                    <p class="simple">Rua Mário Clóvis, 10.</p>
                    <div>
                        <button class="btn-default" name="action2">VER NO MAPA</button>
                        <button class="btn-default" name="action3">MENSAGEM</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="photo-user3 circle"></div>
                <div class="content-msg">
                    <p class="name-user">Justin Timberlake</p>
                    <p class="simple">Rua Louis Vasconcelos, 1220.</p>
                    <div>
                        <button class="btn-default" name="action2">VER NO MAPA</button>
                        <button class="btn-default" name="action3">MENSAGEM</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="photo-user4 circle"></div>
                <div class="content-msg">
                    <p class="name-user">Katy Perry</p>
                    <p class="simple">Rua Carlos Afonso Nóbrega, 120.</p>
                    <div>
                        <button class="btn-default" name="action2">VER NO MAPA</button>
                        <button class="btn-default" name="action3">MENSAGEM</button>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="lists-box-right messages">
            <li>
                <div class="photo-user5 circle"></div>
                <div class="content-msg">
                    <p class="name-user">Beyoncé</p>
                    <p class="simple">Podemos combinar.</p>
                </div>
                <div class="icon-forward"></div>
            </li>
            <li>
                <div class="photo-user6 circle"></div>
                <div class="content-msg">
                    <p class="name-user">Felipão</p>
                    <p class="simple">Vou falar com o Julião.</p>
                </div>
                <div class="icon-checkmark"></div>
            </li>
        </ul>
        <ul class="lists-box-right groups row">
            <button class="btn waves-effect waves-light left col s12" name="action4">NOVO GRUPO</button>
            <li>
                <div class="content-msg">
                    <p class="featured">Caronas</p>
                    <p class="simple">Grupo destinado a vizinhos do bairro Aclimação para disponibilização de caronas.</p>
                </div>
                <button class="btn-default" name="action5">DEIXAR DE PARTICIPAR</button>
            </li>
            <li>
                <div class="content-msg">
                    <p class="featured">Festa Fim de Ano 2016</p>
                    <p class="simple">Estamos organizando uma festa para a despedida de 2016 do pessoal da Vl. Mariana. Junte-se a nós!</p>
                </div>
                <button class="btn-default" name="action5">DEIXAR DE PARTICIPAR</button>
            </li>
            <li>
                <div class="content-msg">
                    <p class="featured">Policiamento no Bairro Sta. Lúcia</p>
                    <p class="simple">Nos juntamos para reivindicar mais segurança no bairro Sta. Lúcia através de um abaixo assinado</p>
                </div>
                <button class="btn-default" name="action5">PARTICIPAR</button>
            </li>
            <li>
                <div class="content-msg">
                    <p class="featured">Ajuda para o Orfanato Júlia Maria</p>
                    <p class="simple">Estamos arrecadando roupas, sapatos, utensílios domésticos, tudo o que servir para as crianças ou para o bazar de lá.</p>
                </div>
                <button class="btn-default" name="action5">PARTICIPAR</button>
            </li>
            <li>
                <div class="content-msg">
                    <p class="featured">Medidas para assaltos no ponto da Rua 5</p>
                    <p class="simple">Este grupo está reunindo pessoas para cobrarmos da prefeitura por abaixo assinado mais segurança no ponto de ônibus da Rua 5.</p>
                </div>
                <button class="btn-default" name="action5">PARTICIPAR</button>
            </li>
        </ul>
        <ul class="lists-box-right local-ads">
            <li class="gold">
                <div class="photo-product1"></div>
                <div class="content-msg">
                    <p class="featured">Tênis Importado</p>
                    <p class="simple">num. 39, pouco usado</p>
                    <p class="price-product">R$ 30,00</p>
                </div>
                <div class="km-local">
                    <p>4 km</p>
                </div>
            </li>
            <li class="bronze">
                <div class="photo-product2"></div>
                <div class="content-msg">
                    <p class="featured">Jeans Preto</p>
                    <p class="simple">num. 42, usado</p>
                    <p class="price-product">R$ 15,00</p>
                </div>
                <div class="km-local">
                    <p>2,5 km</p>
                </div>
            </li>
            <li>
                <div class="photo-product3"></div>
                <div class="content-msg">
                    <p class="featured">Batedeira Charme</p>
                    <p class="simple">Lacrada</p>
                    <p class="price-product">R$ 100,00</p>
                </div>
                <div class="km-local">
                    <p>3,2 km</p>
                </div>
            </li>
        </ul>
    </div>
    </section>
<?php include("includes/footer.php") ?>
<?php include("includes/auth.php") ?>

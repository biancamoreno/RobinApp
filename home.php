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
        <body class="home-page">
            <div id="modalDelete">
                <div class="modal-content center">
                    <p>Tem certeza que deseja excluir sua conta? <span class="icon-sad"></span></p>
                    <button class="btn waves-effect waves-light" name="action6">CANCELAR</button>
                    <button class="btn-default" name="action7">EXCLUIR</button>
                </div>
            </div>
            <header class="header-default">
                <div class="r-logo"></div>
                <div class="picture-user circle right dropdown-button" data-beloworigin="true" data-activates='dropdown1'></div>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Configurações</a></li>
                    <li><a href="#!">Sair</a></li>
                    <hr>
                    <li><a class="modal-delete" href="#modalDelete">Excluir conta</a></li>
                </ul>
            </header>
            <section class="local-map">
                <div id="googleMap"></div>
                <div class="filter-box">
                    <div class="header-filter"><span>Filtros</span><i class="icon-ctrl"></i></div>
                    <ul id="alert-types">
                        <li><span class="icon icon-alerta"></span><span>Perigo e assalto</span></li>
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
                <a class="btn-floating btn-large waves-effect waves-light modal-trigger" href="#modal-add"><i class="icon-plus"></i></a>
                <div id="modal-add" class="modal-add">
                    <div class="modal-content">
                        <h4>Novo Alerta</h4>
                        <div>
                            <span>Tipo</span>
                            <div>
                                <span class="icon icon-alerta active"></span>
                                <span class="icon icon-agua"></span>
                                <span class="icon icon-evento"></span>
                                <span class="icon icon-incendio"></span>
                                <span class="icon icon-acidente"></span>
                                <span class="icon icon-construcao"></span>
                                <span class="icon icon-energia"></span>
                            </div>
                        </div>
                        <form id="form-pin" method="post" action="">
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
                        </form>
                        <div id="googleMapModal"></div>
                        <button class="btn waves-effect waves-light left" type="submit" name="action">ADICIONAR</button>
                    </div>
                </div>
                </div>
            <div class="box-right">
                <div class="tabs">
                    <div class="tab-feed tab active"><span class="icon-location"></span></div>
                    <div class="tab-friends tab"><span class="icon-users"></span></div>
                    <div class="tab-msgs tab"><span class="icon-envelop"></span></div>
                    <div class="tab-groups tab"><span class="icon-bubbles4"></span></div>
                    <div class="tab-ads tab"><span class="icon-bullhorn"></span></div>
                </div>
                <ul class="lists-box-right feed">
                    <li>
                        <div class="photo-user circle"></div>
                        <div class="content-msg">
                            <p class="name-user">Will Smith</p>
                            <p class="simple">Marcou um evento próximo a Washington Square Park.</p>
                            <p class="time-notification">2 min. atrás</p>
                        </div>
                        <div class="type-notification evento"></div>
                    </li>
                    <li>
                        <div class="photo-user circle"></div>
                        <div class="content-msg">
                            <p class="name-user">Will Smith</p>
                            <p class="simple">Marcou um evento próximo a Washington Square Park.</p>
                            <p class="time-notification">2 min. atrás</p>
                        </div>
                        <div class="type-notification evento"></div>
                    </li>
                </ul>
                <ul class="lists-box-right list-friends">
                    <li>
                        <div class="photo-user circle"></div>
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
                        <div class="photo-user circle"></div>
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
                        <div class="photo-user circle"></div>
                        <div class="content-msg">
                            <p class="name-user">Will Smith</p>
                            <p class="simple">Rua Tenente Afonso, 230.</p>
                            <div>
                                <button class="btn-default" name="action2">VER NO MAPA</button>
                                <button class="btn-default" name="action3">MENSAGEM</button>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="lists-box-right messages">
                    <li>
                        <div class="photo-user circle"></div>
                        <div class="content-msg">
                            <p class="name-user">Will Smith</p>
                            <p class="simple">Podemos combinar.</p>
                        </div>
                    </li>
                    <li>
                        <div class="photo-user circle"></div>
                        <div class="content-msg">
                            <p class="name-user">Felipão</p>
                            <p class="simple">Vou falar com o Julião.</p>
                        </div>
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
                            <p class="featured">Festa Junina 2016</p>
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
                    <li>
                        <div class="photo-product"></div>
                        <div class="content-msg">
                            <p class="featured">Tênis Importado</p>
                            <p class="simple">num. 39, pouco usado</p>
                            <p class="price-product">R$ 30,00</p>
                        </div>
                        <div class="km-local">
                            <p>4 km</p>
                        </div>
                    </li>
                    <li>
                        <div class="photo-product"></div>
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
                        <div class="photo-product"></div>
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
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBR0zGAYKFZF1d69z0gkAtVG_awNaxXJpE&amp;sensor=false"></script>
        <script src="js/maps.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/bin/materialize.min.js"></script>
        <script src="js/script3.js"></script>
        </body>
    </html>
<script type="text/javascript">
    $(document).ready(function(){
        $('.modal-trigger').leanModal();
        $('.modal-delete').leanModal();
    });
</script>
</DOCTYPE!>

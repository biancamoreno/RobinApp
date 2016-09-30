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
            <header class="header-default">
                <div class="r-logo"></div>
                <div class="picture-user circle right dropdown-button" data-beloworigin="true" data-activates='dropdown1'></div>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">Configurações</a></li>
                    <li><a href="#!">Sair</a></li>
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
                    </div>
                    <div class="modal-footer">
                       <button class="btn waves-effect waves-light left" type="submit" name="action">ENVIAR</button>
                    </div>
                </div>
                </div>
            <div class="box-right">
                <div class="tabs">
                    <div class="tab active"><span class="icon-location"></span></div>
                    <div class="tab"><span class="icon-users"></span></div>
                    <div class="tab"><span class="icon-envelop"></span></div>
                    <div class="tab"><span class="icon-bubbles4"></span></div>
                    <div class="tab"><span class="icon-bullhorn"></span></div>
                </div>
                <ul class="feed">
                    <li>
                        <div class="photo-user circle"></div>
                        <div class="content-msg">
                            <p class="name-user">Will Smith</p>
                            <p class="notification-feed">Marcou um evento próximo a Washington Square Park.</p>
                            <p class="time-notification">2 min. atrás</p>
                        </div>
                        <div class="type-notification evento"></div>
                    </li>
                    <li>
                        <div class="photo-user circle"></div>
                        <div class="content-msg">
                            <p class="name-user">Will Smith</p>
                            <p class="notification-feed">Marcou um evento próximo a Washington Square Park.</p>
                            <p class="time-notification">2 min. atrás</p>
                        </div>
                        <div class="type-notification event"></div>
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
    });
</script>
</DOCTYPE!>

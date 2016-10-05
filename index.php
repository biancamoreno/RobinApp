    <?php include("includes/header.php") ?>
            <header>
                <a class="r-logo" href="index.php"></a>
                <div class="row form-login">
                    <form class="col s12" id="form-login">
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="email" type="text" class="validate">
                                <label class="active" for="email">Email</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="password" type="password" class="validate">
                                <label class="active" for="password">Senha</label>
                            </div>
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light" type="submit" name="action">ENTRAR</button>
                                <a href="cadastro.php" class="waves-effect waves-teal btn-flat">Cadastrar</a>
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
                <!--
                <div class="box-available">
                <i class="icon-display"></i>
                <div>
                <span>Acesso via</span>
                <span>Browser</span>
                </div>
                </div>
                <div class="box-available">
                <i class="icon-play3"></i>
                <div>
                <span>Download Disponível</span>
                <span>Google Play</span>
                </div>
                </div>
                <div class="box-available">
                <i class="icon-appleinc"></i>
                <div>
                <span>Download Disponível</span>
                <span>App Store</span>
                </div>
                </div>
                -->
            </header>
            <section class="drag-map">
                <div class="hide-on-med-and-down">
                    <i class="icon-clock"></i>
                    <span>Seu bairro em tempo real</span>
                </div>
                <div class="hide-on-med-and-down">
                    <i class="icon-point-up"></i>
                    <span>Arraste o mapa</span>
                </div>
                <div class="glass-v"></div>
                <div class="glass-h"></div>
                <div id="googleMap"></div>
            </section>
            <section class="rb-description">
                <div class="infos">
                    <p>Receba e envie notificações em tempo real do seu bairro</p>
                    <p>Você pode alertar seus vizinhos sobre algum acontecimento em seu bairro em tempo real. Ele ficará marcado com um pin no mapa, de acordo com a categoria definida para que todos possam ver.</p>
                    <p>Nós selecionamos as notificações mais relevantes sobre o seu bairro e enviamos um alerta para todos os moradores em tempo real.</p>
                    <p>Essas notificações podem ser das seguintes categorias:</p>
                    <ul id="alert-types">
                        <li><span class="icon icon-alerta"></span><span>Perigo e violências</span></li>
                        <li><span class="icon icon-agua"></span><span>Problemas no abastecimento de água</span></li>
                        <li><span class="icon icon-evento"></span><span>Festas ou eventos públicos</span></li>
                        <li><span class="icon icon-incendio"></span><span>Incêndios</span></li>
                        <li><span class="icon icon-acidente"></span><span>Acidentes</span></li>
                        <li><span class="icon icon-construcao"></span><span>Construções e interdições</span></li>
                        <li><span class="icon icon-energia"></span><span>Problemas elétricos</span></li>
                    </ul>
                </div>
                <div class="exemple-cel hide-on-med-and-down"></div>
            </section>
            <section class="rb-video">
                <div>
                    <p>Assista nosso vídeo com um exemplo prático</p>
                    <div class="video-container">
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/qDXbcOcLADw" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            <section class="rb-description2 hide-on-med-and-down">
                <div class="box-info">
                    <div class="box-text">
                        <p>Adicione seus amigos para ver seus alertas e sua localização</p>
                        <p>Você pode adicionar um vizinho como amigo, e caso ele aceite, você recebe suas notificações no seu feed.</p>
                        <p>Também é possível conversar no chat com seu vizinho e manter seu número de celular, email e outras redes sociais ocultos, tendo assim mais privacidade.</p>
                    </div>
                </div>
                <div class="box-info">
                    <div class="exemple-cel2"></div>
                </div>
                <div class="box-info">
                    <div class="exemple-cel3"></div>
                </div>
                <div class="box-info">
                    <div class="box-text">
                        <p>Crie e participe de grupos sobre assuntos de interesse do bairro</p>
                        <p>Com o Robin é possível criar grupos de interesses locais para organizar festas, caronas, etc ou discutir assuntos como melhorias, segurança e sociais de interesse comum</p>
                    </div>
                </div>
            </section>
            <section class="signup">
                <div class="sucess-form">
                    <p>Seu email foi cadastrado com sucesso</p>
                </div>
                <p>SEJA O PRIMEIRO A CONHECER O NOSSO APP!</p>
                <form id="form-mailing" method="post" action="">
                    <div class="row">
                        <div class="input-field">
                            <input name="emailNew" id="emailNew" type="email" class="validate">
                            <label class="active" for="emailNew">Email</label>
                        </div>
                        <div class="input-field">
                            <input name="nameNew" id="nameNew" type="text" class="validate">
                            <label class="active" for="nameNew">Nome</label>
                        </div>
                        <button class="btn-large waves-effect waves-light right" type="submit" name="action">ENVIAR</button>
                    </div>
                </form>
            </section>
            <footer>
                <p>Robin App. Todos os direitos reservados ® 2016</p>
            </footer>
            <?php include("includes/footer.php") ?>

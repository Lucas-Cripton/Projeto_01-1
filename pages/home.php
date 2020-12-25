        <?php
            if(isset($_POST['submit'])){
                new Email($_POST['email']);
            }
        ?>
        <section class="banner-container">
            <div style="background-image: url('<?php echo INCLUDE_PATH;?>images/bg-form.jpg');" class="banner-single"></div><!--banner-single-->
            <div style="background-image: url('<?php echo INCLUDE_PATH;?>images/bg-01.jpg');" class="banner-single"></div><!--banner-single-->
            <div style="background-image: url('<?php echo INCLUDE_PATH;?>images/bg-02.jpg');" class="banner-single"></div><!--banner-single-->
            <div class="overlay"></div><!--overlay-->
            <div class="center">
                <form method="POST">
                    <h2>Receba notícias em primeira mão!</h2>
                    <input type="email" name="email" placeholder="Email..." required>
                    <input type="submit" name="submit" value="Enviar">
                </form>
            </div><!--center-->
            <div class="bullets">
                <span class="active-slider"></span>
                <span></span>
                <span></span>
            </div><!--bullets-->
        </section><!--banner-container-->

        <section id='sobre' class="descricao-empresa">
            <div class="center">
                <div class="w50 left">
                    <h2>Marca</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                        culpa qui officia deserunt mollit anim id est laborum.</p>
                </div><!--w50-->
                <div class="w50 left">
                    <img class="right" src="images/logo.png">
                </div><!--w50-->
                <div class="clear"></div><!--clear-->
            </div><!--center-->
        </section><!--descricao-empresa-->

        <section class="especialidades">
            <div class="center">
                <h2 class="title">Especialidades</h2>
                <div class="w33 left box-especialidade">
                    <h3><i class="fas fa-film"></i></h3>
                    <h4>4K</h4>
                    <p>A marca oferece a melhor qualidade para proporcionar uma ótima experiência com seus clientes!</p>
                </div><!--box-especialidade-->
                <div class="w33 left box-especialidade">
                    <h3><i class="fas fa-stopwatch"></i></h3>
                    <h4>Rápido</h4>
                    <p>A marca também possui o sistema de alta perfomance para não te deixar na mão quando estiver vendo os seus animes!</p>
                </div><!--box-especialidade-->
                <div class="w33 left box-especialidade">
                    <h3><i class="fas fa-info"></i></h3>
                    <h4>Variedade</h4>
                    <p>Temos a maior variedade do nordeste, contamos com mais de 4000 animes!</p>
                </div><!--box-especialidade-->
                <div class="clear"></div><!--clear--> 
            </div><!--center-->
        </section><!--Especialidades-->

        <section class="extras">
            <div class="center">
                <div class="w50 left depoimentos-container">
                    <h2 class="title">Depoimentos</h2>
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">"Excelente plataforma, super intuitiva, tudo de alta qualidade!"</p>
                        <p class="nome-autor">Fulano</p>
                    </div><!--depoimento-single-->
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">"Amei a plataforma, a qualidade dos animes é sem igual!"</p>
                        <p class="nome-autor">Ciclano</p>
                    </div><!--depoimento-single-->
                    <div class="depoimento-single">
                        <p class="depoimento-descricao">"Nunca achei uma plataforma tão perfeita pra mim!"</p>
                        <p class="nome-autor">Beutrano</p>
                    </div><!--depoimento-single-->
                </div><!--w50-->
                <div class="w50 left servicos-container">
                    <h2 class="title">Serviços</h2>
                    <div class="servicos">
                        <ul>
                            <li>Catálogo individual</li>
                            <li>Recomendações diárias de animes</li>
                            <li>Suporte 12hrs por dia</li>
                        </ul>
                    </div><!--servicos-->
                    </div><!--depoimento-single-->
                </div><!--w50-->
                <div class="clear"></div><!--clear-->
            </div><!--center-->
        </section><!--extras-->
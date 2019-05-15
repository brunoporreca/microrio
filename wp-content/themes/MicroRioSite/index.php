        <!doctype html>
        <html lang="pt-br">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->

            <link rel="stylesheet" href="css/jquery.galereya.css">
            <link rel="stylesheet" href="css/jquery.galereya.ie.css">

            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


            <!-- Icon-->

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


            <title>Micro Rio - Válvulas Industriais</title>
          </head>
          <body>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header"> <!-- Titulo do modal -->
                <h5 class="modal-title" id="exampleModalLabel">Entre na sua Conta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body"> <!-- CORPO DO MODAL -->
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Informe seu E-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">Informe seu e-mail de cadastro.</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Senha</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Lembrar-me da senha</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Logar</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- NavBAR -->

           <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top box-shadow">
            <div class="container">
            <div class="logo">
             <a href="index.html">
               <img src="img/logo-teste-nav.png" class="img-fluid">
             </a>
             </div>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto menu-center lead">
              <li class="nav-item">
                <a class="nav-link meunav navcolor cool-link" href="empresa.html">Empresa <span class="sr-only">(current)</span></a>
              </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle meunav navcolor" href="index.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos <span class="sr-only">(current)</span></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item meunav navcolor cool-link" href="v-de-esfera-tripartida.html">Válvula Esfera Tripartida</a>
                 <a class="dropdown-item meunav navcolor cool-link" href="v-de-esfera-tripartida-flangeada.html">Válvula Esfera Tripartida Flageada</a>
                 <a class="dropdown-item meunav navcolor cool-link" href="v-de-esfera-tripartida-fl300.html">Válvula Esfera Tripartida Flageada 300.LBS</a>
                 <a class="dropdown-item meunav navcolor cool-link" href="v-de-esfera-bipartida.html">Válvula de Esfera Bipartida</a>
                 <a class="dropdown-item meunav navcolor cool-link" href="v-borboleta.html">Válvula Borboleta</a>
                 <a class="dropdown-item meunav navcolor cool-link" href="v-borboleta-revestida-ptre.html">Válvula Borboleta Revestida</a>
                 <a class="dropdown-item meunav navcolor cool-link" href="v-retencao-dupla-portinhola.html">Válvula de Retenção</a>
                 <a class="dropdown-item meunav navcolor cool-link" href="flange-sobreposto.html">Flange Sobreposto</a>
                 <a class="dropdown-item meunav navcolor cool-link" href="vedacao.html">Vedaçāo</a>
                </div>
              </li>
            <li class="nav-item">
                <a class="active nav-link meunav navcolor cool-link" href="revendedores.html">Revendedores <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link meunav navcolor cool-link" href="noticias.html">Notícias <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link meunav navcolor cool-link" href="contato.html">Contatos <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
          </div>
           </nav>

          <!--Carousel -->

     <section class="container-fluid">
          <div class="row bg-dark text-white">

            <div class="col-lg-12 p-0">
              <div id="carouselCidades" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselCidades" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselCidades" data-slide-to="1"></li>
                  <li data-target="#carouselCidades" data-slide-to="2"></li>
                  <li data-target="#carouselCidades" data-slide-to="3"></li>
                  <li data-target="#carouselCidades" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="d-block w-100 img-fluid" src="img-slide/Banner_Arpoador.png" alt="California">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="img-slide/Banner_Buzios.png" alt="California">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="img-slide/Banner_Copacabana.png" alt="California">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="img-slide/Banner_Ipanema.png" alt="California">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="img-slide/Banner_CRCPetrobras.png" alt="California">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselCidades" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselCidades" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>
            </div>
          </div>
        </section>

           <section class="bg-azul text-white py-3">
            <div class="row">
             <div class="container">
               <h1 class="display-4 text-center p-2 caixa-alta font-azul">Enciclopedia do Valvuleiro</h1>
             </div>
            </div>       
           </section>

           <!--GALERIA NOTICIAS -->
           <section class="container-fluid p-0">
            <div class="row">
              <div class="col-md-3 img-fluid p-0 m-0">
                <a><img class="img-fluid" src="img-noticias/3PassosEvitarVazamentos_Post.png"></a>
                <a><img class="img-fluid" src="img-noticias/AtuadorEletricoPneumatico_Post.png"></a>
                <a><img class="img-fluid" src="img-noticias/AumentoProd_Post.png"></a>
                <a><img class="img-fluid" src="img-noticias/ComoFuncBiPartida_Post.png"></a>
              </div>

              <div class="col-md-2 col-12 img-fluid p-0 m-0">
                 <a><img class="img-fluid" src="img-noticias/DifFireSafe_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/ImportanciaPadraoCores_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/InstalandoRetencao_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/OqSaberAutomacao_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/QuaisTiposValvulas_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/QualMelhorRetencao_Post.png"></a>
              </div>

                <div class="col-md-4 col-12 p-0 m-0 ">
                 <a><img class="img-fluid esconde-img" src="img-noticias/OQueEhUmaTubulacaoInd_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/OqueNaoFazerComValvula_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/PassagemPPPR_Post.png"></a>

              </div>

                <div class="col-md-3 col-12 p-0 m-0">
                 <a><img class="img-fluid esconde-img" src="img-noticias/PqAtendimentoDiferencial_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/PqAtuarValvula_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/PqPensarAutomacao_Post.png"></a>
                 <a><img class="img-fluid esconde-img" src="img-noticias/QuaisNormas_Post.png"></a>
              </div>
            </div>
           </section>

            <section class="container-fluid bg-azul mt-4 py-3">
              <div class="row">
                <div class="col-12">
                  <h2 class="display-4 text-white caixa-alta text-center font-azul">Nossa Familia</h2>
                </div>
              </div>
            </section>

              <!--Carousel do body -->
              <section class="container-fluid">
            <div class="row">
               <div class="col-md-12 col-12 p-0">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/teste-carosel-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/img-recortada-carosel-body.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
            </div>
            </div>
           </section>

            <!--Titulo Qualidade -->
            <section class="container">
             <div class="row">
               <div class="col-12">
                 <div class="my-5 text-center">
                 <h2 class="display-4 azul caixa-alta font-azul">Conheça nossa linha de Produtos</h2>
             </div>
               </div>
             </div>
            </section>


            <!--Imagens de Produtos -->
            <section class="container">
             <div class="row d-flex ">
              <!--Card 1 -->
               <div class="col-12 col-md-3 d-flex align-items-stretch">
                 <div class="card box-shadow-card aument-transi margem-cards">
                    <a href="v-de-esfera-tripartida-fl300.html"><img class="card-img-top " src="img-cards/teste-card-3.png" alt="Card image cap"></a>
                    <div class="card-body">
                      <h6 class="text-center card-color lead">Válvula Tripartida</h6>
                      <p class="card-text size">A Válvula de Retenção, tem a finalidade de evitar a reversão do sentido de fluxo e golpes em sistemas hidráulicos, protegendo e prevenindo danos, aos equipamentos instalados na tubulação. Aplicação em indústrias químicas, petroquímicas, sucroalcooleiras, saneamento, refrigeração, siderúrgicas, geração de energia, papel e celulose.</p>

                    </div>
                  </div>
               </div>

               <!--Card 2 -->
               <div class="col-12 col-md-3  d-flex d-flex align-items-stretch">
                 <div class="card box-shadow-card aument-transi margem-cards">
                    <a href="v-de-esfera-tripartida-flangeada.html"><img class="card-img-top " src="img-cards/teste-card-ipanema.png"></a>
                    <div class="card-body">
                      <h6 class="text-center card-color lead">Válvula Tripartida Flangeada</h6>
                      <p class="card-text size">Tipo wafer para instalaçao entre flanges. Classe 150Lbs. Desenvolvida para ser instalada entre flanges, proporcionando controle de líquidos em processos contínuos de elevadas vazões, baixas pressões diferenciais e baixas temperaturas. Com acionamento manual por alavanca, manual por caixa de redução ou pneumático dupla ação e retorno mola.</p>
                    </div>
                  </div>
               </div>

               <!--Card 3 -->
               <div class="col-12 col-md-3  d-flex d-flex align-items-stretch">
                 <div class="card box-shadow-card aument-transi margem-cards">
                    <a href="v-de-esfera-bipartida.html"><img class="card-img-top" src="img-cards/teste-card-arpuador.png" alt="Card image cap"></a>
                    <div class="card-body">
                      <h6 class="text-center card-color lead">Válvula Esfera Bipartida</h6>
                      <p class="card-text size">A válvula de esfera bipartida com passagem plena tem como objetivo controlar o bloqueio de fluxo de diversos líquidos, gases e vapores. Válvula conforme ASME B16.34, indicada para aplicações em diversos tipos de fluidos, ampla faixa de temperatura e pressão. Baixo torque de operação evitando os danos as sedes. Haste a prova de expulsão.</p>
                    </div>
                  </div>
               </div>

               <!--Card 4 -->
               <div class="col-12 col-md-3  d-flex d-flex align-items-stretch">
                 <div class="card  box-shadow-card aument-transi margem-cards">
                   <a href="v-borboleta.html"> <img class="card-img-top " src="img-cards/teste-card-1.png" alt="Card image cap"></a>
                    <div class="card-body">
                     <h6 class="text-center card-color lead">Válvula Borboleta</h6>
                      <p class="card-text size">Linha de válvulas mais versátil da Microrio, podendo ser utilizada em uma infinidade de aplicações. Passagem plena e reduzida: Composta de válvulas tripartidas roscadas ou para solda Classe 300, permitem a manutenção sem a necessidade de retirada das tampas na tubulação, além de oferecer suporte para acessórios, possibilitando o acionamento por atuador.</p>
                    </div>
                  </div>

               </div>
             </div>
            </section>

           <!--Parte de Perguntas do Site -->
           <section class="container mb-5">
              <div class="my-5 text-center">
               <h2 class="display-4 azul caixa-alta font-azul">Perguntas Frequentes!</h2>
             </div>

             <div class="row justify-content-center">
              <div class="col-12">
               <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header text-center" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h5 class="azul">Como faço para me tornar revendedor do grupo Micro Rio?</h5>
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <p style="text-align: justify">Para se tornar revendedor certificado do grupo Micro Rio, basta você enviar sua ficha cadastral com referencias para o e-mail atendimento@microrio.com.br. Dentro de 24 horas nosso time comercial irá avaliar o seu cadastro e entrará em contato para te conhecer melhor e te ajudar com os próximos passos.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header text-center" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h5 class="azul">Posso comprar válvulas diretamente com o grupo Micro Rio?</h5>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <p style="text-align: justify">O grupo Micro Rio não trabalha diretamente com consumidores finais. Para adquirir os nossos produtos, entre em contato com nosso time comercial para que possamos indicar um revendedor mais próximo de você.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header text-center" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h5 class="azul">Quais certificações o grupo Micro Rio tem?</h5>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <p style="text-align: justify">A Micro Rio possui certificação ISO 9001:2016 em seu sistema de gestão e CRC Petrobras para suas linhas de Válvulas Tripartida, Bipartida, Borboleta e Retenção Dupla Portinhola.</p>
              </div>
            </div>
          </div>
        </div>
            </div>
             </div>
           </section>

           <!--Footer contatos -->
           <section class="container-fluid bg-azul y-3 mt-2">
             <div class="container">
             <div class="row">
               <div class="col-md-4">
                <a href="#" class="d-flex align-items-center h5 text-white"><i class="fas fa-phone-square display-4 color-icon meuicon p-4"></i>Telefone:<br>+55 (19) 3851.7900</a> 
               </div>
                <div class="col-md-4"> 
                   <a href="contato.html" class="d-flex align-items-center h5 text-white"><i class="fas fa-envelope-open-text display-4 color-icon meuicon p-4"></i>Fale Conosco:<br> vendas@microrio.com.br</a>
                </div>

                 <div class="col-md-4"> 
                   <a href="contato.html" class="d-flex align-items-center h5 text-white"><i class="fas fa-map-marked display-4 color-icon meuicon p-4"></i>Rua Marcio Carlin, 463 <br>Mogi Guaçu</a>
                </div>
             </div>
             </div>
            </section>

           <!--Footer Rodapé-->
           <footer class="bg-verde ">
              <div class="container ">
                 <div class="row">
                      <div class="col-md-5 col-12 mt-5">
                         <h4 class="text-white">A Micro Rio ®</h4>
                       <p class="size pb-3 " id="unstyle" >

                         A Micro Rio ® é fabricante de válvulas industriais do tipo esfera bipartida, tripartida, tripartida flangeada, borboleta e retenção dupla portinhola. Instalada em Mogi Guaçu, interior de São Paulo e centro de distribuição logístico na cidade de São Paulo.
                       </p>
                      </div>
                      <div class="col-sm-3 col-12 d-flex align-items-center justify-content-center">
                       <img class="d-flex align-items-center" src="img/logo-branco-teste.png">
                      </div>
                      <div class="col-md-4 col-12  py-4 d-flex align-items-center justify-content-center">
                       <img class="" src="img/teste-certificado.png">
                      </div>
                      </div>
                    </div>
           </footer>

           <section class="container-fluid bg-dark">
           <div class="container">
            <div class="row">

             <!--Icons Redes Sociais -->
              <div class="col-md-4 col-4">
               <a href="https://www.facebook.com/microriovalvulas/" class="color-icon h1 fab fa-facebook pt-2 pr-2 meuicon"></a>
               <a href="https://instagram.com/microriovalves" class="color-icon h1  pt-2 pr-2 meuicon"><i class="fab fa-instagram"></i></a>
               <a href="https://www.linkedin.com/company/24425855/admin/" class="color-icon h1 fab fa-linkedin pt-2 pr-2 meuicon"></a>
               <a href="https://twitter.com/Microriovalves" class="color-icon h1 pt-2 pr-2 meuicon"><i class="fab fa-twitter"></i></a> 
               <a href="https://www.youtube.com/channel/UCVqsGUH68cRV05Y13uHcU0Q" class="color-icon h1 pt-2 pr-2 meuicon"><i class="fab fa-youtube"></i></a> 
              </div>


              <div class="col-md-8 col-8 d-flex align-items-center justify-content-end">
                <ul class="nav">
                  <li class="nav-item ">
                    <a class="nav-link active navcolor-footer" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navcolor-footer" href="empresa.html">Empresa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navcolor-footer" href="index.html">Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navcolor-footer" href="revendedores.html">Revendedores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navcolor-footer" href="noticias.html">Notícias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navcolor-footer" href="contato.html">Contatos</a>
                  </li>
                </ul>
              </div>
            </div>
            </div>
           </section>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->


         <script src="js/jquery.galereya.js"></script>
          <script src="js/jquery.galereya.min.js"></script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <script type="text/javascript" src="app.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
          </body>
        </html>
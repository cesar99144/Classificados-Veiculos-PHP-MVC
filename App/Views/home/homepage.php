<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Classificados</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="" type="<?php echo URL_BASE; ?>Resource/image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/jquery.mCustomScrollbar.min.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
     
      <!-- end loader -->
   
   <div class="wrapper">

      


      <div id="content">


      <!-- section -->
      <section id="home" class="top_section">
         <div class="row">
            <div class="col-lg-12">
               <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.html"><img src="<?php echo URL_BASE; ?>Resource/images/logomarca.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="right_header_info">
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="<?php echo URL_BASE; ?>anuncios/geral">Ve??culos</a></li>
                        <li><a href="#why_choose_us">Sobre</a></li>
                        <li><a href="#contact">Contatos</a></li>
                       
                         <li>
                          
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <section>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="full slider_cont_section">
                     <h4>Classificados</h4><br>
                     <h3>Ve??culos</h3>
                     <p>Anuncie e compre ve??culos de uma forma r??pida, eficaz e segura.</p>
                     <div class="button_section">
                        <a id="buttonLogin" href="<?php echo URL_BASE; ?>usuarios/login">Login</a>
                        <a class="buttonsCenter" id="buttonSignup" href="<?php echo URL_BASE; ?>usuarios/cadastro">Cadastre-se</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                 <div id="home-busca" class="full slider_cont_section">
                     <form id="busca-form" action="<?php echo URL_BASE; ?>anuncios/pesquisar" method="POST">
                       <div id="tituloFormulario">
                           <br><br><h4 id="titulo-form">Buscar por an??ncio</h4>
                       </div>
                       <div id="select-formulario">
                           <select id="marcasBusca" name="marcasBusca" class="select-formulario">
                              <option onselect="">Marcas...</option>
                              <?php foreach($data['marcas'] as $marcas): ?>
                                    <option value="<?php echo $marcas['marca']; ?>"><?php echo $marcas['marca']; ?></option>
                              <?php endforeach; ?>
                           </select>
                       </div>
                       <div id="palavra-formulario">
                         <input class="input-formulario" type="search" id="palavraBusca" name="tituloBusca" placeholder="Buscar por palavra chave">
                       </div>
                       <div id="button-form">
                          <input type="submit" id="submit-Form" class="buttonsCenter" value="Buscar">
                       </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end header -->
            </div>
         </div>
      </section>
      <!-- end section -->
      
      <!-- section --> 
      <div id="about" class="section layout_padding">
         <div class="container">
            
            <div class="row">

                 <div class="col-lg-4 margin_top_30">
               <div class="full margin_top_30">
                  <h3 class="main_heading _left_side margin_top_30">Anuncie conosco</h3>
                  <p class="large">Anuncie aqui para milhares de compradores e venda r??pido</p>
               </div>
               <div class="full button_section margin_top_30">
                        <a id="anuncieLerMais" class="buttonsCenter" href="#">Ler mais</a>
                     </div>
            </div>

            <div class="col-lg-8">
               <div class="full margin_top_50_rs">
                  <img id="imgCompra" class="img-responsive" src="<?php echo URL_BASE; ?>Resource/images/carroNovo.jpg" alt="#" />
               </div>
            </div>

               </div>

         </div>
      </div>
      <!-- end section -->

      <!-- section --> 
      <div class="section layout_padding padding_top_0">
         <div class="container">
            
            <div class="row">

              <div class="col-lg-8">
               <div class="full text_align_right r-img">
                  <img class="img-responsive" src="<?php echo URL_BASE; ?>Resource/images/about_us_2.png" alt="#" />
               </div>
            </div>

                 <div class="col-lg-4 margin_top_30">
               <div class="full margin_top_30">
                  <h3 class="main_heading _left_side margin_top_30">Nossos carros</h3>
                  <p class="large">Nosso portal conta com uma grande variedade de ve??culos das melhores e mais diversas marcas</p>
               </div>
               <div class="full button_section margin_top_30">
                    <a id="anuncieLerMais" href="#">Ler mais</a>
                  </div>
            </div>

               </div>

         </div>
      </div>
      <!-- end section -->

      <!-- section -->
      <section id="why_choose_us" class="dark_bg_blue layout_padding cross_layout padding_top_0">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="full center">
                  <h2 class="heading_main orange_heading">Benef??cios</h2>
               </div>
             </div>
           </div>
           <div class="row">
              <div class="col-lg-4">
                 <div class="full">
                    <div class="choose_blog text_align_center">
                        <img src="<?php echo URL_BASE; ?>Resource/images/c1_icon.png" />
                        <h4>VENDA SEU VE??CULO</h4>
                        <p>Anuncie aqui para milh??es de compradores e venda r??pido</p>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <div class="full">
                    <div class="choose_blog text_align_center">
                        <img src="<?php echo URL_BASE; ?>Resource/images/c2_icon.png" />
                        <h4>VASTA GAMA DE MARCAS</h4>
                        <p>Nosso portal conta com uma grande variedade de ve??culos das melhores e mais diversas marcas</p>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <div class="full">
                    <div class="choose_blog text_align_center">
                        <img src="<?php echo URL_BASE; ?>Resource/images/c3_icon.png" />
                        <h4>CONFIADO POR MILHARES</h4>
                        <p>Contamos com usu??rios com perfil verificado</p>
                    </div>
                 </div>
              </div>
              
           </div>
        </div>
      </section>
      <!-- end section -->

       <!-- section -->
      <section id="testimonial" class="dark_bg_orange layout_padding cross_layout_o padding_top_0">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="full center">
                 <h2 class="heading_main orange_heading">Testemunhos</h2>
               </div>
             </div>
           </div>
           <div class="row">
              <div class="col-md-12">
                <div class="full">
                  <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                           <ul class="carousel-indicators">
                               <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
                               <li data-target="#testimonial_slider" data-slide-to="1"></li>
                               <li data-target="#testimonial_slider" data-slide-to="2"></li>
                           </ul>
                     <!-- The slideshow -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="testomonial_section">
                              <div class="full center">
                                
                              </div>
                              <div class="full testimonial_cont text_align_center">
                                <p><strong>Juliana</strong><br><strong class="ornage_color"></strong><br><i>"Venho aqui expressar como estou satisfeita com o carro que adquiri nessa renomado site, carro com excelente proced??ncia, bem transparente durante todo o processo de aquisi????o do ve??culo"</i></p>
                                <div class="full text_align_center margin_top_30">
                                   <img src="<?php echo URL_BASE; ?>Resource/images/testimonial_qoute.png">
                                </div>
                              </div>
                            </div> 
                        </div>
                        <br>
                        <div class="carousel-item active">

                           <div class="testomonial_section">
                              
                              <div class="full testimonial_cont text_align_center">
                                <p><strong>Ricardo</strong><br><strong class="ornage_color"></strong><br><i>Meu primeiro carro que compro pelo o site e posso afirmar que fiz uma excelente escolha, muito prestativo, certeza que quando trocar por outro carro vou buscar aqui novamente!</i></p>
                                <div class="full text_align_center margin_top_30">
                                   <img src="<?php echo URL_BASE; ?>Resource/images/testimonial_qoute.png">
                                </div>
                              </div>
                            </div>  

                        </div>

                        <div class="carousel-item">

                           <div class="testomonial_section">
                              <div class="full center">
                                <div class="client_img">
                                  <img src="<?php echo URL_BASE; ?>Resource/images/testimonial.png" alt="#" />
                                </div>
                              </div>
                              <div class="full testimonial_cont text_align_center">
                                <p><strong>Due markes</strong><br><strong class="ornage_color">Rental</strong><br><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i></p>
                                <div class="full text_align_center margin_top_30">
                                   <img src="<?php echo URL_BASE; ?>Resource/images/testimonial_qoute.png">
                                </div>
                              </div>
                            </div>  

                        </div>

                     </div>
                    
                  </div>
                </div>
              </div>
           </div>
        </div>
      </section>
      <!-- end section -->

      <!-- section -->
      <section id="contact" class="dark_bg_blue layout_padding cross_layout padding_top_0 margin_top_0">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <div class="full center">
                 <h2 class="heading_main orange_heading">Contatos</h2>
               </div>
             </div>
           </div>
           <div class="row">
              <div class="col">
                 <div class="full">
                    <div class="contact_form">
                        <form>
                          <fieldset class="row">
                            <div class="col-md-12">
                            <div class="full field">
                              <input type="text" placeholder="Seu nome" name="name" />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="full field">
                              <input type="email" placeholder="Email" name="email" />
                            </div>
                          </div>
                            <div class="col-md-12">
                            <div class="full field">
                              <input type="text" placeholder="Telefone" name="number" />
                            </div>
                          </div>
                            <div class="col-md-12">
                            <div class="full field">
                              <textarea placeholder="Mensagem"></textarea>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="full center">
                              <button class="submit_bt">Enviar</button>
                            </div>
                          </div>
                          </fieldset>
                        </form>
                    </div>
                 </div>
              </div>
              
            </div>
        </div>
      </section>
      <!-- end section -->

      <!-- footer -->
      <footer>
         <div class="container">
           <div class="row">
              <div class="col-md-6">
                <div class="full">
                  <h3>Classificados ve??culos</h3>
                </div>
              </div>
              <div class="col-md-6">
                <div class="full">
                   <ul class="social_links">
                      <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="full">
                    <h4 class="widget_heading">SE INSCREVER</h4>
                 </div>
                 <div class="full subribe_form">
                    <form>
                      <fieldset>
                         <div class="field">
                           <input type="email" name="mail" placeholder="Digite seu e-mail" />
                         </div>
                         <div class="field">
                           <button class="submit_bt">Sumbit</button>
                         </div>
                      </fieldset>
                    </form>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="full">
                   <h4 class="widget_heading">LINKS ??TEIS</h4>
                 </div>
                 <div class="full f_menu">
                    <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">Ve??culos</a></li>
                       <li><a href="#">Sobre</a></li>
                       <li><a href="#">Contatos</a></li>
                    </ul>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="full">
                   <h4 class="widget_heading">DETALHES DO CONTATO</h4>
                   <div class="full cont_footer">
                     <p><strong>Classificados : Endere??o</strong><br><br>Caruaru, PE<br>Telefone: (xx) xxxx-xxxx<br>classificados@gmail.com</p>
                   </div>
                 </div>
              </div>
           </div>
         </div>
      </footer>
      <!-- end footer -->

      <!-- copyright -->

     

      <!-- right copyright -->

   </div>
</div>

   <div class="overlay"></div>
      
      <!-- Javascript files-->
      <script src="<?php echo URL_BASE; ?>Resource/javascript/jquery.min.js"></script>
      <script src="<?php echo URL_BASE; ?>Resource/javascript/popper.min.js"></script>
      <script src="<?php echo URL_BASE; ?>Resource/javascript/bootstrap.bundle.min.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="<?php echo URL_BASE; ?>Resource/javascript/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?php echo URL_BASE; ?>Resource/javascript/custom.js"></script>
      <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>
    
      

   </body>
</html>
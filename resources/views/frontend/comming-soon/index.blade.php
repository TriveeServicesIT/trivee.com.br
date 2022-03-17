
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="images/favicon.png" rel="icon" />
    <title>Trive Services IT</title>
    <meta name="description" content="A Trive Services IT é uma empresa de tecnologia da informação que nasceu em 2018 com a missão de oferecer soluções inteligentes para auxiliar empresas de pequeno e médio porte no trabalho deste setor que se tornou parte vital de qualquer negócio.">

    <link rel="apple-touch-icon" sizes="57x57" href="frontend/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="frontend/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="frontend/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="frontend/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="frontend/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="frontend/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="frontend/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="frontend/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="frontend/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="frontend/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="frontend/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="frontend/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="frontend/favicon/favicon-16x16.png">
    <link rel="manifest" href="frontend/favicon/manifest.json">

    <!-- Web Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900'
        type='text/css'>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="frontend/comming-soon/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="frontend/comming-soon/vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="frontend/comming-soon/vendor/magnific-popup/magnific-popup.min.css" />
    <link rel="stylesheet" type="text/css" href="frontend/comming-soon/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="frontend/comming-soon/css/color-yellow.css" id="color-switcher" />
</head>

<body>

    <!-- Preloader -->
    <div class="preloader preloader-dark">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Document Wrapper -->
    <div id="main-wrapper">
        <div class="container-fluid px-0">
            <div class="row g-0 min-vh-100">

                <!-- Intro -->
                <div class="col-lg-7 d-flex flex-column bg-dark">
                    <!-- Domain Details -->
                    <div class="container py-5 px-4 px-lg-5 my-auto">
                        <div class="row text-center">
                            <div class="col-12 mx-auto mb-4">
                                <!-- Logo -->
                                <a class="logo" href="./" title="Trivee"> <img src="frontend/comming-soon/images/logo-yellow.png" alt="Zoon"/></a>
                                <!-- Logo End -->
                            </div>
                            <div class="col-12 mx-auto">
                                <h2 class="text-15 text-white fw-600 mb-4">Nosso site esta sendo reformulado.</h2>
                            </div>
                        </div>
                    </div>
                    <div class="container pb-2 px-3">
                        <div class="row text-white">
                            <div
                                class="col-sm-6 col-md-4 d-flex align-items-center justify-content-center justify-content-md-start">
                                <span class="me-2"><i class="fas fa-info-circle"></i></span><a class="text-white"
                                    data-bs-toggle="modal" data-bs-target="#about" href="#">Sobre a Trivee</a>
                            </div>
                            <div
                                class="col-sm-6 col-md-4 d-flex align-items-center justify-content-center mt-2 mt-sm-0">
                                <span class="me-2"><i class="fas fa-phone-alt"></i></span>(+55) 86 99541-5491
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Intro End -->

                <!-- Contact Us -->
                <div class="col-lg-5 d-flex flex-column text-center bg-dark-2">
                    <div class="container my-auto py-5 pt-lg-4 pb-lg-2">
                        <div class="row mx-0">
                            <div class="col-11 col-lg-10 mx-auto">
                                <h3 class="mb-3 text-white fw-600">Contato</h3>
                                <p class="text-white-50 mb-4" style="font-size: x-large;">Para suporte ao cliente, solicitações ou sugestões, preencha o formulario e nos envie sua mensagem.</p>

                                <!-- Contact Form -->
                                <form class="form-dark" method="post" action="{{route('contact.save')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <input id="name" name="name" type="text" class="form-control border-2" placeholder="Nome">
                                        <!-- Show error -->
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <input data-mask="(00) 00000-0000" id="phone" name="phone" class="form-control border-2" placeholder="Whatsapp">
                                        <!-- Show error -->
                                        @if ($errors->has('phone'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('phone') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <input id="email" name="email" type="email" class="form-control border-2" placeholder="Email">
                                        <!-- Show error -->
                                        @if ($errors->has('email'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <textarea id="message" name="message" class="form-control border-2" rows="3" placeholder="Deixe sua mensagem aqui"></textarea>
                                        <!-- Show error -->
                                        @if ($errors->has('message'))
                                            <div class="alert alert-danger">
                                                {{ $errors->first('message') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="d-grid mt-4">
                                        <button class="btn btn-primary" type="submit">Enviar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Footer -->
                    <footer class="container">
                        <p class="text-2 text-light mb-2">Copyrigh © 2022 <a href="#">Trivee</a>. Todos os Direitos Reservados.</p>
                    </footer>
                </div>
                <!-- Contact Us End -->
            </div>
        </div>
    </div>
    <!-- Document Wrapper End -->


  <!-- About Popup -->
  <div id="about" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-600 text-7 mx-auto">Sobre a Trivee</h5>
                <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="lead text-center">
                    A TRIVEE auxilia você a desmistificar a TI de sua empresa desde 2018, trazendo soluções para que essa
                    área trabalhe a seu favor. Somos uma empresa diferente, que tem uma preocupação real com nossos clientes
                    e conta com uma equipe altamente capacitada.
                </p>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-primary"> <i class="far fa-thumbs-up"></i></div>
                            <h4 class="fw-600">Porque escolher a Trivee</h4>
                            <p class="text-3">
                                Temos know-how no segmento de pequenas e médias empresas, o que nos permite ser a
                                TI do CLIENTE e ir além do suporte convencional, agregando valor ao seu negócio.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-primary"> <i class="far fa-paper-plane"></i></div>
                            <h4 class="fw-600">Suporte 24h/7</h4>
                            <p class="text-3">
                                Operamos com padrão de atendimento compatível com as melhores empresas do mundo,
                                utilizando ferramentas de monitoramento e automação associadas a uma equipe compromitida com o cliente.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-box text-center">
                            <div class="featured-box-icon text-primary"> <i class="far fa-eye"></i></div>
                            <h4 class="fw-600">Retorno de Investimento</h4>
                            <p class="text-3">
                                Simplificar a operação e aumentar a produtividade, racionalizar investimentos, ajudar a reduzir
                                custos é nosso foco para exceder as expectativas e demonstrar o valor das nossas soluções.</p>
                        </div>
                    </div>
                </div>

                <hr class="my-5">
                <!-- Recent Work -->
                <h3 class="text-center my-5">Centralizamos seu departamento de TI.</h3>

                <p class="lead text-center">
                    Ter uma equipe de especialistas para os problemas de TI é essencial para manter um fluxo e otimizar processos.
                    A Trivee está preparada para ser esse canal de suporte para dúvidas de seus colaboradores, com uma base de conhecimento online sempre atualizada e disponível.
                    Atuamos também junto aos seus fornecedores de TI para recuperação de serviços e/ou implantação de novos recursos.
                </p>

            </div>
        </div>
    </div>
</div>
<!-- About Popup End -->

    @include('sweetalert::alert')

    <!-- Script -->
    <script src="frontend/comming-soon/vendor/jquery/jquery.min.js"></script>
    <script src="frontend/comming-soon/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/comming-soon/js/jquery.mask.js"></script>
    <script src="frontend/comming-soon/js/theme.js"></script>
</body>

</html>

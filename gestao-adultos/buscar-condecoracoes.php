<?php
        $url = "http://localhost:8080/solicitacoes/solicitacao-condecoracao";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        $resultado = json_decode(curl_exec($ch));

        //var_dump($resultado);

        /*foreach ($resultado as $solicitacao) { 
            var_dump($solicitacao);
            echo "identificador: " . $solicitacao->identificador . "<br>";
            echo "identificadorSolicitacao: " . $solicitacao->identificadorSolicitacao . "<br>";   
            echo "historicoSolicitacao: " . $solicitacao->agraciado->nome . "<br>";  
        }*/

        function returnLabelTipoStatusSolicitacao($statusSolicitacao) 
        { 
           /*switch ($statusSolicitacao) { 
                case 'RECEBIDA'
                    $label = 'label label-primary';
                    break;
                case 'EM_ANALISE'
                    $label =   'label label-primary' ;
                    break;
                case 'INDEFERIDO'
                    $label = 'label label-danger';
                    break;
                case 'DEFERIDO'
                    $label =   'label label-success';
                    break;
                case 'APROVADO_AGUARDANDO_PAGAMENTO'
                    $label =   'label label-info';
                    break;
                case 'AGUARDANDO_ALTERACOES_SOLICITADAS'
                    $label =    'label label-warning';
                    break;
                case 'EMITIDO'
                    $label =   'label label-success';
                    break;
                case 'ENVIADO_AO_ESCRITORIO_NACIONAL'
                    $label =   'label label-warning';
                    break;
                case 'ENVIADO_AO_SOLICITANTE'
                    $label =   'label label-info';
                    break;
                default:
                    $label =   'label label-primary';
                    break; 
            }*/
            $label =   'label label-primary';
            $label =   'label label-primary';
            return $label;
        } 

        function returnNomeTipoStatusSolicitacao($statusSolicitacao)
        { 
            /*switch (statusSolicitacao) { 
                case 'RECEBIDA'
                    return  'Recebido';
                    break;
                case 'EM_ANALISE'
                    return  'Em Analise';
                    break;
                case 'INDEFERIDO'
                    return  'Indeferido';
                    break;
                case 'DEFERIDO'
                    return  'Deferido';
                    break;
                case 'APROVADO_AGUARDANDO_PAGAMENTO'
                    return  'Aprovado Aguardando Pagamento';
                    break;
                case 'AGUARDANDO_ALTERACOES_SOLICITADAS'
                    return  'Aguardando Alteracoes Solicitadas';
                    break;
                case 'EMITIDO'
                    return  'Emitido';
                    break;
                case 'ENVIADO_AO_ESCRITORIO_NACIONAL'
                    return  'Enviado Ao Escritorio Nacional';
                    break;
                case 'ENVIADO_AO_SOLICITANTE'
                    return  'Enviado Ao Solicitante';
                    break;
                default:
                    return  'Status Desconhecido';
                    break; 
            } */

            return  'Recebido';
        }
?>

<!DOCTYPE html> 
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Varius - Responsive Bootstrap Admin Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation"> 
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="../assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="../assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div> 
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Menu</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Gestão de Adultos</span></a>
                        <ul>
                            <li><a href="pages-condecoracoes.html"><span class="fa fa-image"></span>Condecorações</a></li>
                            <li><a href="pages-formacao.html"><span class="fa fa-graduation-cap"></span>Nível de Formação</a></li>
                            <li><a href="pages-config.html"><span class="fa fa-cogs"></span>Configurações</a></li>                             
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span><span class="xn-text">Métodos Educativo</span></a>
                        <ul>
                            <li><a href="pages-gallery.html"><span class="fa fa-image"></span>Distintivos Especiais</a></li>
                            <li><a href="pages-edit-profile.html"><span class="fa fa-cogs"></span>Configurações</a></li>                         
                        </ul>
                    </li> 
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
               <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->                    
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            <li><a href="pages-lock-screen.html"><span class="fa fa-lock"></span> Lock Screen</a></li>
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->         
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Gestão Adultos</a></li>
                    <li class="active">Configurações</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Solicitações de Condecorações</h2>
                </div>
                <!-- END PAGE TITLE -->                

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>Identificador</th>
                                                    <th>Data Solicitação</th>
                                                    <th>Nome Agraciado</th>
                                                    <th>Registro Agraciado</th>
                                                    <th>Condecoração Solicitada</th>
                                                    <th>Nome Solicitante</th>
                                                    <th>Registro Solicitante</th>
                                                    <th>Status Solicitação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  foreach ($resultado as $solicitacao) { 
                                                    $date=date_create($solicitacao->criacao);
                                                    ?>
                                                    <tr>
                                                        <td><a href="#"><?php echo $solicitacao->identificadorSolicitacao ; ?></a></td>
                                                        <td><?php echo date_format($date,"d/m/Y H:i:s"); ?></td>
                                                        <td><?php echo $solicitacao->agraciado->nome ; ?></td>
                                                        <td><?php echo $solicitacao->agraciado->registro ; ?></td>
                                                        <td><?php echo $solicitacao->condecoracao->nome ; ?></td> 
                                                        <td><?php echo $solicitacao->solicitante->nome ; ?></td>
                                                        <td><?php echo $solicitacao->solicitante->registro ; ?></td>
                                                        <td><span class= " <?php echo returnLabelTipoStatusSolicitacao($solicitacao->statusAtual->statusEnum) ?> ">
                                                                <?php echo returnNomeTipoStatusSolicitacao($solicitacao->statusAtual->statusEnum); ?>
                                                            </span></td>
                                                    </tr>  
                                                <?php   }   ?> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE --> 

                        </div>
                    </div>                                
                    
                </div>
                <!-- PAGE CONTENT WRAPPER -->                                
            </div>    
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->       
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="../audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="../audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                       
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>        
        
        <!-- END PLUGINS -->                

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='../js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="../js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="../js/plugins/datatables/jquery.dataTables.min.js"></script>
        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="../js/settings.js"></script>
        
        <script type="text/javascript" src="../js/plugins.js"></script>        
        <script type="text/javascript" src="../js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->        
    </body>
</html>
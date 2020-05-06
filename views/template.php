<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style4.css">
     <link rel="stylesheet" href="<?php echo BASE_URL.'admin/assets/css/admin.css'; ?>">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL.'admin/assets/js/grafico.js'; ?>"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Emprega +</h3>
                <strong>E+</strong>
            </div>

            <ul class="list-unstyled components">
              
                  <li>
                      <a href="<?php echo BASE_URL.'admin/'; ?>">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
            
                <li>
                    <a href="<?php echo BASE_URL.'login'; ?>">
                       <i class="fas fa-sign-in-alt"></i>
                        Entrar
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL.'cadastro'; ?>">
                      <i class='fas'>&#xf25b;</i>
                        Cadastra-se
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contato
                    </a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <?php if(empty($posts)): ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn search">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    
                    <button id="pesquisa" class="btn search btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fas fa-search"></i>
                    </button>
                    <div class="title" id="title">
                        Emprega+<br/>Marabá
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                               <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="search btn my-2 my-sm-0" type="submit">Search</button>
    </form>
                            </li>
                            
                        </ul>
                    </div>
                </div>
              
            </nav>
            <div class="slogan">O primeiro de Marabá e região</div>
            <?php endif; ?>
            
          

            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</div>
            
            
            
            
            
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"</script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/system.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
        
       
    </script>
    
    
</body>


</html>
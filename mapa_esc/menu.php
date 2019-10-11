<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">



      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
      </form>
      <?php $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);?>
      <!-- /.search form -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->       
        
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-exclamation-sign"></i> <span>Problema nos Produtos</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
            <li><a href="assuntos_errados.php" <?php if($paginaCorrente == 'assuntos_errados.php') {echo 'class="active"';} ?>><i class="glyphicon glyphicon-exclamation-sign"></i> <span>Assunto errado</span></a></li>
            <li><a href="editora_dif_grupo.php" <?php if($paginaCorrente == 'editora_dif_grupo.php') {echo 'class="active"';} ?>><i class="glyphicon glyphicon-exclamation-sign"></i> <span>Editora diferente de Grupo</span></a></li>
            </ul>
        </li>              
        <li><a href="orcamento.php" <?php if($paginaCorrente == 'orcamento.php') {echo 'class="active"';} ?>><i class="fa fa-link"></i> <span>Orçamento</span></a></li>         
      

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
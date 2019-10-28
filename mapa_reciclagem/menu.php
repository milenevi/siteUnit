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
        <li><a href="cadastro.php" <?php if($paginaCorrente == 'cadastro.php') {echo 'class="active"';} ?>><i class="fa fa-link"></i> <span>Cadastrar</span></a></li>     
        <li><a href="lista-reciclagem.php" <?php if($paginaCorrente == 'lista-reciclagem.php') {echo 'class="active"';} ?>><i class="fa fa-link"></i> <span>Local de reciclagem</span></a></li>     
      

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
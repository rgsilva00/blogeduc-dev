<!-- #Left Sidebar -->
<aside class="main-sidebar">
  <!-- #Sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- #Sidebar User Panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('img/avatar.jpeg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Jasper Knees</p>
        <span>co-owner</span><br/>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- #Search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="pesquisar...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat">
            <i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- .Search Form -->
    <!-- #Sidebar Menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegação Principal</li>
      <li class="active treeview menu-open">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Gerenciar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('paineladmin/painelsite') }}"><i class="fa fa-circle-o"></i>Painel Site</a></li>
          <li><a href="{{ url('paineladmin/postblog') }}"><i class="fa fa-circle-o"></i>Painel Blog</a></li>
          <li><a href="{{ url('paineladmin/gerenciar/midia') }}"><i class="fa fa-circle-o"></i>Mídia</a></li>
          <li><a href="{{ url('paineladmin/categorias') }}"><i class="fa fa-circle-o"></i>Categorias</a></li>
          <li><a href="{{ url('paineladmin/comentarios') }}"><i class="fa fa-circle-o"></i>Comentários</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
           <i class="fa fa-files-o"></i>
          <span>Configurar</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i>Perfil</a></li>
           <li><a href="#"><i class="fa fa-circle-o"></i>Pessoas</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Configurações</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- .Sidebar -->
</aside>
<!-- .Left Sidebar -->
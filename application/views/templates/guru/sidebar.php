 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Siakad SMP IT NH</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="text-align: center;">MENU ADMIN</li>
        <li class="<?= ($this->uri->segment(1)=='' || $this->uri->segment(2)=='Dashboard') ? 'active':'' ?>">
          <a href="<?php echo base_url(); ?>Admin/Dashboard">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
         <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Akademik') ? 'active':'' ?>">
          <a href="<?php echo base_url(); ?>Admin/Akademik">
            <i class="fa fa-graduation-cap"></i> <span>Akademik</span>
          </a>
        </li>
        <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Guru') ? 'active':'' ?>">
          <a href="<?php echo base_url(); ?>Admin/Guru">
            <i class="fa fa-graduation-cap"></i> <span>Guru</span>
          </a>
        </li>
         <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Angkatan') ? 'active':'' ?>">
          <a href="<?php echo base_url(); ?>Admin/Angkatan">
            <i class="fa fa-institution"></i> <span>Angkatan</span>
          </a>
        </li>
        <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Siswa') ? 'active':'' ?>">
          <a href="<?php echo base_url(); ?>Admin/Siswa">
            <i class="fa fa-users"></i> <span>Siswa</span>
          </a>
        </li>
        <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Mapel') ? 'active':'' ?>">
          <a href="<?php echo base_url(); ?>Admin/Mapel">
            <i class="fa fa-edit"></i> <span>Mata Pelajaran</span>
          </a>
        </li>
        <li class="treeview <?= ($this->uri->segment(2)=='Kelas' || $this->uri->segment(2)=='Kelas_Siswa' || $this->uri->segment(2)=='Kelas_Guru' || $this->uri->segment(2)=='Pindah' )  ? 'active':'' ?>">
          <a href="">
            <i class="fa fa-building-o"></i> <span>Kelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Kelas') ? 'active':'' ?>"><a href="<?php echo base_url(); ?>Admin/Kelas"><i class="fa fa-circle-o"></i> Kelas</a></li>
            <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Kelas_Siswa') ? 'active':'' ?>"><a href="<?php echo base_url(); ?>Admin/Kelas_Siswa"><i class="fa fa-circle-o"></i>Kelas Siswa</a></li>
            <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Kelas_Guru') ? 'active':'' ?>"><a href="<?php echo base_url(); ?>Admin/Kelas_Guru"><i class="fa fa-circle-o"></i>Kelas Guru</a></li>
            <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Pindah') ? 'active':'' ?>"><a href="<?php echo base_url(); ?>Admin/Pindah"><i class="fa fa-circle-o"></i>Pindah Kelas</a></li>
          </ul>
        </li>
         <li class="treeview <?= ($this->uri->segment(2)=='Input' || $this->uri->segment(2)=='Bank')  ? 'active':'' ?>">
          <a href="">
            <i class="fa fa-table"></i> <span>Nilai</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Input') ? 'active':'' ?>"><a href="<?php echo base_url(); ?>Admin/Input"><i class="fa fa-circle-o"></i> Input Nilai</a></li>
            <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Bank') ? 'active':'' ?>"><a href="<?php echo base_url(); ?>Admin/Bank"><i class="fa fa-circle-o"></i>Bank Nilai</a></li>
          </ul>
        </li>
         <li class="<?= ($this->uri->segment(1)=='Admin' && $this->uri->segment(2)=='Mapel') ? 'active':'' ?>">
          <a href="<?php echo base_url(); ?>Admin/Mapel">
            <i class="fa fa-edit"></i> <span>Admin</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
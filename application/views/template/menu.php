
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('admin')?>">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-archive menu-icon"></i>
              <span class="menu-title">Data Master</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('guru')?>">Guru</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('siswa')?>">Siswa</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('kelas')?>">Kelas</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('mapel')?>">Mata Pelajaran</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('penilaian')?>">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Penilaian</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('sekolah')?>">Sekolah</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?=base_url('tahun')?>">Tahun Ajaran</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('petugas')?>">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Petugas</span>
            </a>
          </li>
        </ul>
      </nav>
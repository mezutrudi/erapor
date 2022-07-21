<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Ubah Kelas</h4>
<!--                   <p class="card-description">
                    Basic form elements
                  </p> -->
                  <?php echo form_open('kelas/ubah_kelas'); ?>
                  <?php echo form_hidden('id', $kelas->id_kelas); ?>
                    <div class="form-group">
                      <label for="nama">Nama Kelas</label>
                      <?php echo form_input('nama', $kelas->namakls, array('class'=>'form-control', 'id'=>'nama', 'placeholder'=>'Nama')); ?>
                    </div>
                    <div class="form-group">
                      <label for="wali">Wali Kelas</label>
                      <?php echo form_input('wali', $kelas->id_guru, array('class'=>'form-control', 'id'=>'wali', 'placeholder'=>'Wali Kelas')); ?>
                    </div>
                    <div class="form-group">
                      <label for="tahun">Tahun</label>
                      <?php echo form_input('tahun', $kelas->id_ta, array('class'=>'form-control', 'id'=>'tahun', 'placeholder'=>'Tahun Ajaran')); ?>
                    </div>

                    <?php echo form_submit('edit', 'Ubah', array('class'=>'btn btn-primary mr-2')); ?>
                    <a href="<?=base_url('kelas/')?>" class="btn btn-light">Batal</a>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
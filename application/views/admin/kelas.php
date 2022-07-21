<div class="flash-data" data-flashdata="<?= $this->session->flashdata('info'); ?>"></div>
<?php if ($this->session->flashdata('info')) :  ?>

<?php endif; ?>

                                    <button type="button" id="button">button</button>
<div class="col-md-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
		 	<p class="card-title">Halaman Kelas</p>
		 	<div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <?php echo anchor('kelas/tambah_kelas', 'Tambah Kelas', array('class' => 'btn btn-primary btn-md')); ?>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <br><table id="kelas" class="display expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Nama Kelas</th>
                              <th>Wali Kelas</th>
                              <th>Tahun Ajaran</th>
                              <th>Aksi</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                          	<?php 
                          		if ($kelas->num_rows() > 0) {
                          			$no=1;
                          			foreach ($kelas->result_object() as $r) {
                          	?>
	                          	<tr>
	                          		<td><?=$no?></td>
	                          		<td><?=$r->namakls?></td>
	                          		<td><?=$r->id_guru?></td>
	                          		<td><?=$r->id_ta?></td>
	                          		<td width="20%">
	                          				<a href="<?=base_url('kelas/formubah_kelas/'.$r->id_kelas)?>" class="btn btn-inverse-info btn-fw"><i class="mdi mdi-grease-pencil"></i></a>
	                          				<a href="#" onclick="konfirmasi(<?=$r->id_kelas?>)" class="btn btn-inverse-danger btn-fw" onclick={toombolhapus}><i class="mdi mdi-delete"></i></a>
	                          			</ul>
	                          		</td>
	                          	</tr>

                          	<?php
                          	$no++;
                          			}
                          		} else {
                          	?>
                          	<tr>
                          		<td colspan="5" align="center">Data Kosong</td>
                          	</tr>
                          	<?php
                          		}
                          		
                          	 ?>

                          </tbody>
                      </table>
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
<script>
  function konfirmasi(parameter_id){
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href="<?=base_url('kelas/hapus_kelas')?>/"+parameter_id;
      } else if(result.dismiss === Swal.DismissReason.cancel){
        Swal.fire(
            'Gagal',
            'Data Amannnnn',
            'info'
        )
      }
    })
  }
</script>
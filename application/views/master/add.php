
    


    <h2>Tambah Data</h2>

    <div class="row g-5">
      <form action="<?= base_url('master/aksi_add') ?>" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Aktivitas</label>
    <input type="text" class="form-control" name="aktivitas" id="exampleFormControlInput1" placeholder="Input Aktivitas">
    <?php echo form_error('aktivitas','<small class="text-danger pl-3">','</small>'); ?>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Jam</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="jam" placeholder="Input Jam">
    <?php echo form_error('jam','<small class="text-danger pl-3">','</small>'); ?>
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Kegiatan</label>
    <input type="text" name="kegiatan" class="form-control" id="exampleFormControlInput1" placeholder="Input Kegiatan">
    <?php echo form_error('kegiatan','<small class="text-danger pl-3">','</small>'); ?>
  </div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Keterangan</label>
    <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
    <?php echo form_error('keterangan','<small class="text-danger pl-3">','</small>'); ?>
  </div>
  <br>
  <button type="submit" class="btn btn-primary mb-2">Save</button>
</form>
    </div>

      <div class="">
                        

      
    </div>
  </main>
  

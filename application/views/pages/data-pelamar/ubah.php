    <!-- Main content -->
    <section class="content">

      <div class="row">
          <div id ="text_dumet" class="col-md-12">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title"><?= $judul; ?></h3>
              </div>
                
              <div class="box-body">
                <form action="" enctype="multipart/form-data" method="post" class="form-horizontal">
                  <input type="hidden" name="id" id="id" value="<?= $user['id']; ?>">
                  <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Nama Lengkap &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $user['nama'] ?>" >
                    </div>
                      <small id="" class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-key"></i>
                      </div>
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user['username'] ?>">
                      <!-- <input type="text" class="form-control" id="username" name="username" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alfanumerik 6 hingga 12 karakter tidak boleh ada spasi" placeholder="Username" value="<?php echo $row['username']; ?>" required> -->
                    </div>
                      <small id="" class="form-text text-danger"><?= form_error('username'); ?></small>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input type="text" class="form-control" id="" name="password" value="<?= $user['password'] ?>" readonly>
                      <!-- <input type="password" class="form-control" id="password" name="password" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,12}$" title="alfanumerik 6 hingga 12 karakter tidak boleh ada spasi" placeholder="Password" value="<?php echo $row['password']; ?>" required> -->
                    </div>
                    </div>
                  </div>
                 
                 <!--  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Kelamin &nbsp;*</label>
                  <div class="col-sm-7">
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" 
                     class="flat-red"> &nbsp;Laki-laki &nbsp;
                     <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" 
                     class="flat-red"> &nbsp;Perempuan
                  </div>
                  </div> -->
                 <!--  <div class="form-group">
                    <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                      </div>
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Lahir &nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="tanggal_lahir" class="form-control pull-right" id="datepicker" placeholder="Tanggal Lahir" required>
                    </div>
                  </div>
                   
                  </div> -->
                  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <input type="email" class="form-control" id="email" name="email" placeholder="xyz@gmail.com" value="<?= $user['email'] ?>" >
                      <!-- <input type="email" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@gmail.com" placeholder="xyz@gmail.com" value="<?php echo $row['email']; ?>" required> -->
                    </div>
                      <small id="" class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="umur" class="col-sm-3 control-label">Umur &nbsp;*</label>
                    <div class="col-sm-7">
                      <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="number" class="form-control" id="umur" name="umur" placeholder="Umur Anda" value="<?= $user['umur'] ?>" >
                    </div>
                      <small id="" class="form-text text-danger"><?= form_error('umur'); ?></small>
                    </div>
                  </div>
                  <!--  <div class="form-group">
                  <label class="col-sm-3 control-label">Status &nbsp;*</label>
                  <div class="col-sm-7">
                    <select class="form-control" name="status" id="status" style="width: 100%;" required>
                      <option value="">- Pilih -</option>
                      <option value="Administrator">Administrator</option>
                      <option value="Pakar">Pakar</option>
                    </select>
                  </div>
                </div> -->
                  <div class="form-group">
                    <label for="no_telp" class="col-sm-3 control-label">No Telepon &nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" value="<?= $user['no_telp'] ?>" >
                    </div>
                      <small id="" class="form-text text-danger"><?= form_error('no_telp'); ?></small>
                  </div>
                </div>
                 <div class="form-group">
                    <label for="pendidikan" class="col-sm-3 control-label">Pendidikan Terakhir &nbsp;*</label>
                  <div class="col-sm-7">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-graduation-cap"></i>
                      </div>
                      <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" value="<?= $user['pendidikan'] ?>" >
                    </div>
                      <small id="" class="form-text text-danger"><?= form_error('pendidikan'); ?></small>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <label for="foto" class="col-sm-3 control-label">Foto &nbsp;**</label>

                  <div class="col-sm-7">
                    <input type="file" class="form-control" id="foto" name="foto"> -->
			                 <!--  <div style="padding-top:5px">
			                    <input type="checkbox" class="flat-red" name="upload_foto" value="true"> &nbsp;Ceklis jika ingin mengupload foto</br>
			                  </div> -->
                  <!-- </div> -->
			                  <!-- <div>
			                    <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto</br>
			                  </div> -->
                <!-- </div> -->
                <!-- <div class="form-group">
                    <label for="alamat" class="col-sm-3 control-label">Alamat &nbsp;*</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat ..." required></textarea>
                  </div>
                </div> -->
                <div class="form-group">
                    <label for="alamat" class="col-sm-3 control-label"></label>
                  <div class="col-sm-7">
                    <p align="left">* &nbsp;&nbsp;Wajib di Isi (Required)</p>
                    <p align="left">** &nbsp;&nbsp;Tidak Wajib di Isi (Optional)</p>
                  </div>
                </div>
             
                    <div class="box-footer">
                      <a href="<?= base_url(); ?>index.php/admin/dataPelamar" type="button" name="kembali" class="btn btn-default"><i class="fa  fa-refresh"></i> &nbsp;Kembali</a>
                      <button type="submit" name="submit" class="btn btn-info pull-right" onClick="ValidateForm(this.form)"><i class="fa fa-save"></i> &nbsp;Ubah</button>
                    </div>
                   
                  </form>
                </div>
              </div>
            </div>


          </div>
        </section>

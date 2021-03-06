<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Tambah Calon</h2>
            </div>
            <div class="body">
                <?= form_open_multipart() ?>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_calon" value="<?= $calon->nama_calon ?>">
                            <label class="form-label">Nama Calon</label>
                        </div>
                        <?= form_error('nama_calon', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="foto_calon">Foto Calon</label>
                            <input type="file" id="foto_calon" class="form-control" name="foto_calon">
                        </div>
                        <img src="<?= base_url('uploads/'.$calon->foto_calon) ?>" class="img img-thumbnail bs-mt-3">
                    </div>
                    <div class="form-group">
                        <label for="editor">Visi Calon</label>
                        <textarea name="visi" id="editor" cols="30" rows="10"><?= $calon->visi ?></textarea>
                        <?= form_error('visi', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="ckeditor">Misi Calon</label>
                        <textarea name="misi" id="ckeditor" cols="30" rows="10"><?= $calon->misi ?></textarea>
                        <?= form_error('misi', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <label for="jenis_calon">Jenis Calon</label>
                            <select class="form-control show-tick" name="jenis_calon" id="jenis_calon">
                                <option value="0" <?php if( $calon->jenis_calon == '0' ) { echo "selected"; } ?>>CALON OSIS</option>
                                <option value="1" <?php if( $calon->jenis_calon == '1' ) { echo "selected"; } ?>>OSIS SEKARANG</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="bs-btn btn btn-primary waves-effect"><i class="fas fa-save fw"></i> SIMPAN</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <main style="height: 1300px">
      <center>
        <h2>Daftar Beasiswa</h2>
      </center>
      <div class="box">
        <h3>Registrasi Beasiswa</h3>
        <hr />
        <form action="/save" method="POST" enctype="multipart/form-data">
          <label for="">Masukkan Nama</label><br />
          <input type="text" name="nama" id="nama" class="" onkeyup="isi_otomatis()"/>

          <label for="">Masukkan Email</label><br />
          <input type="email" name="email" id="email" class="" required />

          <label for="">Nomor HP</label><br />
          <input type="number" name="hp" id="hp" class="" required />

          <label for="">Semester Saat Ini</label><br />
          <select name="semester" id="semester">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>

          <label for="">IPK Terakhir</label><br />
          <input type="text" name="ipk" id="ipk" disabled />


          <label for="">Pilihan Beasiswa</label><br />
          <select name="pilihan" id="pilihan">
            <option value="akademik">akademik</option>
            <option value="olahraga">olahraga</option>
            <option value="seni">seni</option>
          </select>

          <label for="#">Upload Berkas Syarat</label>
          <input type="file" name="berkas" id="berkas">

          <div class="btn">
            <input type="submit" class="daftar" id="daftar" value="Daftar" disabled>
            <a href="/"><div class="batal">Batal</div></a>
          </div>
        </form>
      </div> 
    </main> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        
        <script type="text/javascript">
          $("#nama")
                function isi_otomatis(){
                    var nama = $("#nama").val();
                    $.ajax({
                        url: '/ajax',
                        data:"nama="+nama ,
                    }).success(function (data) {
                        const json = data,
                        obj = JSON.parse(json);
                        if (!isNaN(obj?.ipk)) {
                          $('#ipk').val(obj.ipk)
                                    if( obj.ipk >= 3.5) $('#daftar').prop('disabled', false);
                                    else $('#daftar').prop('disabled', true);
                          }
                    });
                }
        </script>


    <?= $this->endSection() ?>
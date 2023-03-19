<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <main>
      <center>
        <h2>Daftar Beasiswa</h2>
      </center>
      <div class="boxx">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">No HP</th>
              <th scope="col">Semester</th>
              <th scope="col">IPK</th>
              <th scope="col">Jenis Beasiswa</th>
              <th scope="col">Bukti</th>
              <th scope="col">Aksi</th>
            </tr>
          
          </thead>
          <tbody>
          <?php foreach($beasiswa as $b): ?>
            <tr>
              <th scope="row">1</th>
              <td><?= $b['nama']; ?></td>
              <td><?= $b['email']; ?></td>
              <td><?= $b['hp']; ?></td>
              <td><?= $b['semester']; ?></td>
              <td><?= $b['ipk']; ?></td>
              <td><?= $b['pilihan']; ?></td>
              <td style="font-size: 9px;"><img src="/berkas/<?= $b['berkas']; ?>" width="100px" alt=""><br><?= $b['berkas']; ?></td>
              <td style="display: flex;">
                <a href="#"><div class="icaksi view"></div></a>
                <a href="#"><div class="icaksi trash"></div></a>
                
              </td>
            </tr>
            <?php endforeach; ?>
            
          </tbody>
        </table>
      </div>
    </main>
    <?= $this->endSection() ?>
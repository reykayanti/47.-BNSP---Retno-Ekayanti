<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <header>
      <div class="bg">
        <h1>PROGRAM BEASISWA TAHUNAN</h1>
        <p>
          Beasiswa Universitas Nasional merupakan skema beasiswa prestisius kolaborasi antara Kementerian dan Universitas Nasional untuk mahasiswa yang ingin mengembangakan karier, pengalaman, dan jaringan kampus di dalam dan luar
          negeri.<br />
          Melalui program gelar (degree program), Beasiswa ini berkomitmen untuk menyiapkan pemimpin, pendidik, dan profesional masa depan serta mendorong inovasi demi terwujudnya Indonesia yang rukun dan harmonis
        </p>

        <div class="buttonn"><a href="/daftar">Daftar Sekarang</a></div>
      </div>
    </header>
    <section>
      <div class="card">
        <br /><br />
        <div class="logo" style="background-image: url('img/mortarboard.png')"></div>
        <p>Prestasi Akademik</p>
      </div>
      <div class="card">
        <br /><br />
        <div class="logo" style="background-image: url('img/sports.png')"></div>
        <p>Prestasi Akademik</p>
      </div>
      <div class="card">
        <br /><br />
        <div class="logo" style="background-image: url('img/art.png')"></div>
        <p>Prestasi Akademik</p>
      </div>
    </section>
<?= $this->endSection() ?>
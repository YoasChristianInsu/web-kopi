<?php include ("koneksi.php"); ?>
<section>
    <form method="POST" action="sv_pendaftaran.php">
        <label>Nama Lengkap:</label>
        <input type="text" name="name" placeholder="Nama Lengkap">

        <label>Email:</label>
        <input type="email" name="email" placeholder="contoh@gmail.com">

        <label>Nomor Whatsapp:</label>
        <input type="text" name="wa" placeholder="081234567890">
    
        <label>Kelas yang Dipilih:</label>
        <select name="course_id">
            <option value="">Pilih Kelas</option>
            <?php foreach($kelasList as $namaKelas => $harga): ?>
                <option value="<?= htmlspecialchars($namaKelas) ?>">
                    <?= htmlspecialchars($namaKelas) ?> - Rp <?= number_format($harga, 0, ',', '.') ?></option>
            <?php endforeach; ?>
        </select>

        <label>Jumlah Peserta:</label>
        <input type="number" name="participant_count" min="1" value="1">
    
        <button type="submit">Daftar Sekarang</button>
    </form> 
</section>
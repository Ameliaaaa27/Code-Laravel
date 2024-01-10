<?php echo $this->session->get_flash('flash_message'); ?>

<form action="<?= APP_URL; ?>/manajemenuser/simpan" method="post">
    <label>Nama :</label>
    <input type="text" name="name" id="name" placeholder="Masukkan Nama" required><br>
    
    <label>Username :</label>
    <input type="text" name="username" id="username" placeholder="Masukkan Username" required><br>
    
    <label>Password :</label>
    <input type="password" name="password" id="password" placeholder="Masukkan Password" required><br>
    
    <label>Ulangi Password :</label>
    <input type="password" name="ulangi_password" id="ulangi_password" required><br>
    
    <button type="submit">Simpan</button>
    <a href="<?= APP_URL; ?>/manajemenuser" class="btn">Batal</a>
</form>
<div class="spinning-form">
    <h2>Tambah Pengguna Baru</h2>
    <?php echo $this->session->get_flash('flash_message'); ?>
    <form action="<?= APP_URL; ?>/manajemenuser/simpan" method="post">
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" placeholder="Masukkan Nama" required>
        </div>
        
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Masukkan Username" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Masukkan Password" required>
        </div>
        
        <div class="form-group">
            <label for="ulangi_password">Ulangi Password:</label>
            <input type="password" name="ulangi_password" id="ulangi_password" required>
        </div>
        
        <div class="form-actions">
            <button type="submit" class="spin-button">Simpan</button>
            <a href="<?= APP_URL; ?>/manajemenuser" class="btn cancel-button">Batal</a>
        </div>
    </form>
</div>


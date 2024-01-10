<a href="<?= APP_URL; ?>/manajemenuser/tambah" class="btn">Tambah User</a>

<?php echo $this->session->get_flash('flash_message'); ?>

<form name="form_search" id="form_search" action="<?= APP_URL; ?>/manajemenuser/cari" method="post">
    <input type="text" name="katakunci">
    <button type="submit">Cari Data</button>
    <a href="<?= APP_URL; ?>/manajemenuser" class="btn">Reset</a>
</form>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data['data_user'] as $row): ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row->username; ?></td>
                <td><?= $row->name; ?></td>
                <td>
                    <a href="<?= APP_URL; ?>/manajemenuser/edit/<?= $row->id; ?>">Edit</a>
                    <a href="<?= APP_URL; ?>/manajemenuser/hapus/<?= $row->id; ?>" onclick="return confirm('Hapus data?');">Hapus</a>
                </td>
            </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </tbody>
</table>
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


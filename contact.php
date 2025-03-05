<?php
include 'header.php';
?>

<div class="container my-5">
    <h1>Hubungi Kami</h1>
    <form >
        <div class="form-group">
            <label for="name">Nama:</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control" 
                placeholder="Masukkan nama anda" 
                required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="form-control" 
                placeholder="Masukkan email anda" 
                required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telpon:</label>
            <input 
                type="tel" 
                name="phone" 
                id="phone" 
                class="form-control" 
                placeholder="Masukkan nomor telpon anda" 
                required>
        </div>
        <div class="form-group">
            <label for="subject">Subjek:</label>
            <input 
                type="text" 
                name="subject" 
                id="subject" 
                class="form-control" 
                placeholder="Subjek" 
                required>
        </div>
        <div class="form-group">
            <label for="message">Pesan:</label>
            <textarea 
                name="message" 
                id="message" 
                rows="5" 
                class="form-control" 
                placeholder="Masukkan pesan anda..." 
                required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

<?php

include 'footer.php';
?>

# Setup dan Instalasi

Apa yang perlu diperlukan terlebih dahulu sebelum memulai coding PHP? Berikut list aplikasi yang perlu diinstal :

- <b>Visual Studio Code</b>
> Digunakan sebagai teks editor untuk menulis sebuah code pemrograman.

- <b>XAMPP</b>
> Digunakan sebagai server web lokal agar dapat menjalankan kode PHP di device seperti laptop/komputer.

Semua file kode PHP harus berada di folder `XAMPP/htdocs` karena web server untuk mengelola dan menampilkan file PHP berada di folder tersebut.

Coba kita buka Visual Studio Code dan membuat sebuah file `index.php`. Terkadang, pertama kali masuk ke teks editor-nya akan muncul pop up untuk setting `php.validate.executablePath`. 

Fungsi-nya bermanfaatkan untuk kita karena dapat memberikan fitur-fitur pengkodean yang lebih baik berdasarkan interpreter PHP yang terpasang di sistem.

Setting-nya bisa dengan cara klik pop up tersebut dan masuk ke setting terus edit `settings.json`. Namun jika pop up lupa ter klik bisa juga dengan cara klik menu gear dibawah kiri Visual Studio Code dan pilih setting serta masukkan tulisan `php.validate.executablePath` ini ke dalam kolom pencarian.

Isi dari executablePath adalah tempat menyimpan php yang berada di folder XAMPP tadi. Berikut contoh url-nya :

```bash
C:/xampp/php/php.exe
```

# Menjalankan file PHP secara Realtime

Kita perlu extention di visual studio code bernama `live server`. Namun tidak hanya itu saja karena `live server` ini tidak dapat menjalankan kode PHP, mungkin untuk HTML, CSS, dan Javascript masih bisa dijalankan.

Untuk mencegah hal itu, kita perlu extensiton `live server` yang berada di web browser-nya langsung. Kita bisa buka chrome webstore (untuk browser chromium based). Cari yang nama-nya `Live Server Web Extension` dan install.


Setelah di install, silahkan buka extention-nya, aktifkan Live Reload dan untuk mengisi `Actual Server Address` bisa dengan cara gunakan url localhost yang aktif waktu XAMPP dijalankan.

Untuk `Live Server Address` bisa diisi dengan url dari live server yang ada di Visual Studio Code.

Berikut contoh gambar settingan sesuai yang dipakai (settingan bisa berbeda tergantung banyak atau tidak-nya folder.)

![Gambar Setting Live Server](ss.jpg)
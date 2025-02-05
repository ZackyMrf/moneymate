# MoneyMate

MoneyMate adalah aplikasi web untuk mencatat transaksi keuangan menggunakan framework CodeIgniter.

## Fitur

- Menambahkan transaksi baru
- Menambahkan kategori transaksi baru
- Melihat daftar transaksi
- Menghapus transaksi
- Menghapus kategori transaksi
- Melihat laporan keuangan secara real-time
- Mengatur anggaran dan mencapai tujuan keuangan

## Persyaratan

- PHP >= 7.2
- Composer
- Web server (Apache, Nginx, dll.)
- Database MySQL

## Instalasi

1. Clone repositori ini:
    ```bash
    git clone https://github.com/zackymrf/moneymate.git
    ```

2. Masuk ke direktori proyek:
    ```bash
    cd moneymate
    ```

3. Instal dependensi menggunakan Composer:
    ```bash
    composer install
    ```

4. Salin file [env](http://_vscodecontentref_/1) menjadi [.env](http://_vscodecontentref_/2) dan sesuaikan konfigurasi database:
    ```bash
    cp env .env
    ```

5. Migrasi database:
    ```bash
    php spark migrate
    ```

6. Jalankan server pengembangan:
    ```bash
    php spark serve
    ```

7. Akses aplikasi di browser melalui URL:
    ```
    http://localhost:8080
    ```

## Penggunaan

1. Buka aplikasi di browser.
2. Daftar akun baru Anda.
3. Login ke akun Anda.
4. Tambahkan transaksi baru melalui formulir yang disediakan.
5. Lihat, atau hapus transaksi dari daftar transaksi.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan fork repositori ini dan buat pull request dengan perubahan Anda.

## Lisensi

Proyek ini dilisensikan di bawah MIT License.


credit https://github.com/RulfaDev/
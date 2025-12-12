# PHP Print-Ready CV Template

Sebuah template CV/Resume sederhana namun modern yang dibangun menggunakan **PHP Native**. Template ini dirancang untuk memisahkan data (konten) dari tampilan (desain), serta dioptimalkan untuk diekspor ke **PDF ukuran A4 (1 Halaman)**.

<div align="center">
  <img height="600" src="https://github.com/user-attachments/assets/e19c4d14-ad82-47e5-8355-1357bf98a658" alt="cv-achmadichzan">
</div>

## Fitur

- **Pemisahan Data & Tampilan:** Konten diatur melalui array PHP (`$data`) tanpa perlu mengubah struktur HTML.
- **Print-Friendly:** Menggunakan CSS Grid & Flexbox yang dioptimalkan dengan `@media print`.
- **A4 Layout:** Layout presisi untuk kertas A4 (satu halaman).
- **Styling Mudah:** Menggunakan CSS Variables agar warna & font mudah disesuaikan.
- **Clean Code:** Struktur kode sederhana dan mudah dimodifikasi.

## Cara Menjalankan

Pastikan sudah menginstal **PHP**.

### 1. Clone repositori

```bash
git clone https://github.com/achmadichzan/latihan-php.git
cd latihan-php
```

### 2. Jalankan server lokal

```bash
php -S localhost:8000
```

### 3. Buka di browser

Akses:

```
http://localhost:8000
```

## Cara Mengedit Data

Edit file `index.php` dan ubah variabel `$data`:

```php
$data = [
    'profile' => [
        'name_first' => 'Nama',
        'name_last' => 'Kamu',
        // ...
    ],
    // ...
];
```

Pastikan file foto (misalnya `achmad.jpg`) dan ikon (`arrow.svg`) berada di folder yang sama.

## Cara Export ke PDF

Tekan **Ctrl + P**, lalu atur:

- **Destination:** Save as PDF  
- **Paper Size:** A4  
- **Margins:** None  
- **Scale:** 100%  
- **Options:**  
  - Background graphics: **On**  
  - Headers and footers: **Off**

## Kustomisasi Warna

```css
:root {
    --bg-color: #fcf7f2;
    --accent-color: #e85021;
    --text-color: #333333;
}
```

**Dibuat oleh Achmad Ichzan**

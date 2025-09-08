# NOTA LATIHAN MYSQL - MODUL 1-4

## MODUL 1: PENGENALAN KEPADA PANGKALAN DATA DAN MYSQL

### Apakah Pangkalan Data?

Pangkalan data ialah koleksi data yang tersusun yang boleh diakses, diurus dan dikemas kini dengan mudah. Anggap ia seperti kabinet pemfailan digital di mana maklumat disimpan secara berstruktur.

**Mengapa kita memerlukan pangkalan data?**
- Menyimpan jumlah data yang besar dengan cekap
- Membenarkan ramai pengguna mengakses data secara serentak
- Menyediakan keselamatan dan sandaran (backup) data.
- Membolehkan carian dan penapisan pantas
- Mengekalkan ketekalan dan integriti data

### Konsep Pangkalan Data Hubungan.

**Jadual (Tables):** Seperti hamparan elektronik (spreadsheets), ia menyimpan data dalam baris dan lajur.
- Contoh: Jadual "pelanggan" (customers) dengan maklumat pelanggan

**Baris (Rows/Records):** Setiap baris mewakili satu entri lengkap
- Contoh: Maklumat lengkap seorang pelanggan

**Lajur (Columns/Fields):** Setiap lajur mewakili satu jenis data
- Contoh: nama_pelanggan, e-mel, nombor_telefon

### Apakah itu MySQL?

MySQL ialah sistem pengurusan pangkalan data hubungan (RDBMS) sumber terbuka yang popular yang menggunakan SQL untuk mengurus data.

**Ciri-ciri utama:**
- Percuma dan sumber terbuka
- Pantas dan boleh dipercayai
- Berfungsi pada banyak sistem pengendalian
- Digunakan secara meluas dalam aplikasi web

### Alatan MySQL

**Antara Muka Baris Perintah (CLI):** Interaksi berasaskan teks dengan MySQL

**Alatan GUI:**
- phpMyAdmin (berasaskan web)
- MySQL Workbench (aplikasi desktop)
- Menyediakan antara muka visual untuk pengurusan pangkalan data

## MODUL 2: ASAS-ASAS SQL

### Apakah itu SQL?

SQL (Structured Query Language) ialah bahasa standard untuk berkomunikasi dengan pangkalan data hubungan. Ia digunakan untuk mencipta, membaca, mengemas kini dan memadam data.

### Peraturan Sintaks SQL

- Penyata SQL diakhiri dengan koma bernoktah (;)
- SQL tidak peka huruf (case-sensitive) untuk kata kunci, tetapi mengikut kelaziman, huruf BESAR digunakan
- Nilai rentetan (string) mesti disertakan dalam tanda petikan tunggal (' ')
- MySQL membenarkan tanda petikan berganda (" ") untuk rentetan, tetapi tanda petikan tunggal lebih diutamakan

**Contoh:**
```sql
SELECT * FROM customers;
SELECT * from customers;  -- Kedua-duanya berfungsi sama
```

### Komen dalam SQL

**Komen satu baris:**
```sql
-- Ini adalah komen
SELECT * FROM customers; -- Ini juga adalah komen
```

**Komen berbilang baris:**
```sql
/* Ini adalah
   komen berbilang baris */
```

### Ciri-ciri Khusus MySQL

- Menggunakan tanda petik belakang (`) untuk nama jadual/lajur dengan aksara khas
- Kepekaan huruf (case sensitivity) bergantung pada sistem pengendalian
- Menyokong pelbagai enjin storan (InnoDB, MyISAM)

## MODUL 3: MENCIPTA DAN MENGURUS PANGKALAN DATA

### Mencipta Pangkalan Data

```sql
CREATE DATABASE nama_pangkalan_data;
```

**Contoh:**
```sql
CREATE DATABASE syarikat_db;
```

### Memilih Pangkalan Data untuk Digunakan

```sql
USE nama_pangkalan_data;
```

**Contoh:**
```sql
USE syarikat_db;
```

### Melihat Pangkalan Data yang Tersedia

```sql
SHOW DATABASES;
```

Ini memaparkan semua pangkalan data yang anda boleh akses.

### Memadam Pangkalan Data (Gunakan dengan Sangat Berhati-hati!)

```sql
DROP DATABASE nama_pangkalan_data;
```

**Contoh:**
```sql
DROP DATABASE syarikat_lama_db;
```

⚠️ **Amaran:** `DROP DATABASE` memadamkan keseluruhan pangkalan data dan semua datanya secara kekal!

### Amalan Terbaik

- Gunakan nama pangkalan data yang deskriptif
- Ikut konvensyen penamaan (huruf kecil, garis bawah)
- Sentiasa buat sandaran (backup) sebelum memadam pangkalan data
- Gunakan nama bermakna yang menerangkan tujuan pangkalan data

## MODUL 4: MENCIPTA DAN MENGUBAH SUAI JADUAL

### Sintaks CREATE TABLE

```sql
CREATE TABLE nama_jadual (
    nama_lajur1 jenis_data kekangan,
    nama_lajur2 jenis_data kekangan,
    nama_lajur3 jenis_data kekangan
);
```

### Jenis Data Umum MySQL

**Jenis Numerik:**
- `INT` - Nombor integer (-2,147,483,648 hingga 2,147,483,647)
- `DECIMAL(m,d)` - Nombor titik tetap (m=jumlah digit, d=tempat perpuluhan)
- `FLOAT` - Nombor titik terapung

**Jenis Rentetan (String):**
- `VARCHAR(n)` - Rentetan berubah-panjang (n = aksara maksimum)
- `CHAR(n)` - Rentetan panjang-tetap
- `TEXT` - Data teks yang besar

**Jenis Tarikh/Masa:**
- `DATE` - Nilai tarikh (YYYY-MM-DD)
- `TIME` - Nilai masa (JJ:MM:SS)
- `DATETIME` - Gabungan tarikh dan masa
- `TIMESTAMP` - Nilai cap masa (timestamp)

### Kunci Primer dan AUTO_INCREMENT

**Kunci Primer (Primary Key):** Pengecam unik untuk setiap baris dalam jadual

```sql
CREATE TABLE pelanggan (
    id_pelanggan INT PRIMARY KEY,
    nama_pelanggan VARCHAR(100),
    emel VARCHAR(150)
);
```

**AUTO_INCREMENT:** Menjana nombor unik secara automatik

```sql
CREATE TABLE pelanggan (
    id_pelanggan INT AUTO_INCREMENT PRIMARY KEY,
    nama_pelanggan VARCHAR(100),
    emel VARCHAR(150)
);
```

### Contoh Jadual Lengkap

```sql
CREATE TABLE pekerja (
    id_pekerja INT AUTO_INCREMENT PRIMARY KEY,
    nama_pertama VARCHAR(50),
    nama_akhir VARCHAR(50),
    emel VARCHAR(100),
    tarikh_mula_kerja DATE,
    gaji DECIMAL(10,2)
);
```

### Mengubah Suai Jadual dengan ALTER TABLE

**Menambah lajur:**
```sql
ALTER TABLE nama_jadual 
ADD COLUMN nama_lajur jenis_data;
```

**Contoh:**
```sql
ALTER TABLE pekerja 
ADD COLUMN nombor_telefon VARCHAR(15);
```

**Memadam lajur:**
```sql
ALTER TABLE nama_jadual 
DROP COLUMN nama_lajur;
```

**Contoh:**
```sql
ALTER TABLE pekerja 
DROP COLUMN nombor_telefon;
```

### Melihat Struktur Jadual

```sql
DESCRIBE nama_jadual;
-- ATAU
DESC nama_jadual;
```

### Melihat Semua Jadual dalam Pangkalan Data

```sql
SHOW TABLES;
```

### Memadam Jadual

```sql
DROP TABLE nama_jadual;
```

**Contoh:**
```sql
DROP TABLE pekerja_lama;
```

### Amalan Terbaik untuk Reka Bentuk Jadual

- Gunakan nama jadual dan lajur yang deskriptif
- Pilih jenis data yang sesuai
- Sentiasa takrifkan kunci primer
- Gunakan konvensyen penamaan yang konsisten
- Ambil kira had saiz data apabila memilih panjang VARCHAR

---
**TAMAT MODUL 1-4**
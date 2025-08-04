# KEM-PHP-MULA-DARI-KOSONG

# Asas HTML - Sesi 1
**Pengenalan 2 Jam kepada Pembangunan Web**

---

## Selamat Datang & Agenda
**Apa yang Akan Kita Pelajari Hari Ini (2 Jam)**
- Apa itu HTML dan bagaimana web berfungsi
- Struktur dokumen HTML
- Sintaks elemen dan atribut
- Elemen pemformatan teks
- Membuat senarai
- Menambah pautan dan imej
- Latihan praktikal sepanjang sesi

---

## Apa itu HTML?
**HyperText Markup Language**
- HTML = struktur dan kandungan laman web
- Menggunakan "tag" untuk menandakan kandungan
- Memberitahu pelayar cara memaparkan maklumat
- Berfungsi bersama CSS (gaya) dan JavaScript (tingkah laku)
- Dicipta pada tahun 1990, sentiasa berkembang

---

## Bagaimana Web Berfungsi
**Versi Mudah**
1. Anda taip URL dalam pelayar
2. Pelayar meminta fail HTML dari pelayan
3. Pelayan menghantar semula kod HTML
4. Pelayar membaca HTML dan memaparkan laman web
5. HTML memberitahu pelayar: "Ini tajuk, ini perenggan, ini imej"

---

## Struktur Dokumen HTML
**Setiap Laman HTML Mempunyai Struktur Asas Ini**
```html
<!DOCTYPE html>
<html>
<head>
    <title>Tajuk Halaman</title>
</head>
<body>
    <!-- Kandungan yang boleh dilihat di sini -->
</body>
</html>
```

---

## Pecahan Struktur Dokumen
**Memahami Setiap Bahagian**
- `<!DOCTYPE html>` - Memberitahu pelayar ini adalah HTML5
- `<html>` - Elemen akar, membungkus semua kandungan
- `<head>` - Maklumat tentang halaman (tidak kelihatan)
- `<title>` - Dipaparkan di tab pelayar
- `<body>` - Semua kandungan yang boleh dilihat diletakkan di sini

---

## Sintaks Elemen
**Bagaimana Tag HTML Berfungsi**
```html
<namatag>kandungan di sini</namatag>
```

**Peraturan Utama:**
- Tag pembuka: `<namatag>`
- Tag penutup: `</namatag>` (ada garis miring!)
- Kandungan di antara tag
- Sesetengah tag adalah penutup sendiri: `<br>`, `<img>`

---

## Atribut
**Menambah Maklumat Tambahan pada Elemen**
```html
<namatag atribut="nilai">kandungan</namatag>
```

**Contoh:**
```html
<img src="photo.jpg" alt="Matahari terbenam yang indah">
<a href="https://google.com">Lawati Google</a>
<p class="highlight">Teks penting</p>
```

---

## Peraturan Bersarang
**Elemen di Dalam Elemen Lain**

**✅ Betul:**
```html
<p>Ini adalah <strong>teks tebal</strong> dalam perenggan.</p>
```

**❌ Salah:**
```html
<p>Ini adalah <strong>teks tebal</p></strong>
```

**Ingat:** Yang dibuka dahulu, ditutup terakhir!

---

## Elemen Teks - Tajuk
**Membina Struktur Halaman**
```html
<h1>Tajuk Utama</h1>
<h2>Tajuk Seksyen</h2>
<h3>Subseksyen</h3>
<h4>Sub-subseksyen</h4>
<h5>Tajuk lebih kecil</h5>
<h6>Tajuk paling kecil</h6>
```

**Amalan Terbaik:** Gunakan tajuk mengikut urutan (jangan lompat dari h1 ke h4)

---

## Elemen Teks - Perenggan & Pemformatan
**Penandaan Teks Asas**
```html
<p>Ini adalah perenggan.</p>
<p>Ini adalah perenggan lain dengan <strong>teks tebal</strong>.</p>
<p>Anda juga boleh gunakan <em>teks condong</em>.</p>
<br> <!-- Pecahan baris -->
<hr> <!-- Garis mendatar -->
```

---

## Jom Berlatih!
**Latihan 1: Cipta Halaman HTML Pertama Anda**

**Tugas:** Cipta laman web ringkas tentang diri anda
- Gunakan struktur dokumen yang betul
- Tambah tajuk utama dengan nama anda
- Tambah 2-3 perenggan tentang hobi anda
- Sertakan beberapa teks tebal dan condong

**Masa:** 10 minit

---

## Senarai - Tidak Tersusun
**Membuat Butir Peluru**
```html
<ul>
    <li>Item pertama</li>
    <li>Item kedua</li>
    <li>Item ketiga</li>
</ul>
```

**Hasil:**
- Item pertama
- Item kedua
- Item ketiga

---

## Senarai - Tersusun
**Membuat Senarai Bernombor**
```html
<ol>
    <li>Langkah pertama</li>
    <li>Langkah kedua</li>
    <li>Langkah ketiga</li>
</ol>
```

**Hasil:**
1. Langkah pertama
2. Langkah kedua
3. Langkah ketiga

---

## Senarai Bersarang
**Senarai di Dalam Senarai**
```html
<ul>
    <li>Buah-buahan
        <ul>
            <li>Epal</li>
            <li>Pisang</li>
        </ul>
    </li>
    <li>Sayur-sayuran</li>
</ul>
```

---

## Pautan - Asas Web
**Membuat Hiperpautan**
```html
<a href="https://www.google.com">Lawati Google</a>
<a href="about.html">Tentang Kami</a>
<a href="mailto:hello@example.com">Hantar Emel</a>
<a href="#section1">Lompat ke Seksyen 1</a>
```

**Atribut href = ke mana pautan pergi**

---

## Jenis Pautan
**Pelbagai Jenis Pautan**
- **Pautan luar:** `href="https://website.com"`
- **Pautan dalaman:** `href="page.html"`
- **Pautan emel:** `href="mailto:email@example.com"`
- **Pautan telefon:** `href="tel:+1234567890"`
- **Sauh:** `href="#section-id"` (lompat ke seksyen halaman)

---

## Imej
**Menambah Gambar ke Halaman Anda**
```html
<img src="photo.jpg" alt="Deskripsi imej">
```

**Atribut penting:**
- `src` - laluan ke fail imej
- `alt` - deskripsi untuk pembaca skrin dan jika imej gagal dimuatkan
- `width` dan `height` - kawal saiz (pilihan)

---

## Laluan Imej
**Di Mana Nak Cari Imej Anda**

**Folder sama:**
```html
<img src="photo.jpg" alt="Foto saya">
```

**Dalam subfolder:**
```html
<img src="images/photo.jpg" alt="Foto saya">
```

**Dari internet:**
```html
<img src="https://example.com/photo.jpg" alt="Foto saya">
```

---

## Masa Berlatih!
**Latihan 2: Halaman Peribadi Dipertingkat**

**Tambah ke halaman anda sebelum ini:**
- Senarai 5 filem kegemaran anda
- Senarai bernombor matlamat hidup anda
- Pautan ke laman web kegemaran anda
- Satu imej (boleh dari internet)
- Pastikan semua imej ada teks alt!

**Masa:** 15 minit

---

## Kesilapan Lazim
**Apa yang Perlu Dielakkan**
- ❌ Lupa tag penutup
- ❌ Bersarang salah: `<p><div></p></div>`
- ❌ Tiada teks alt pada imej
- ❌ Tidak menggunakan tanda petik pada nilai atribut
- ❌ Melangkau tahap tajuk (h1 → h4)

---

## Organisasi Fail
**Amalan Terbaik**
- Simpan fail HTML dengan sambungan `.html`
- Guna nama fail huruf kecil: `about.html` bukan `About.HTML`
- Tiada ruang dalam nama fail: `my-page.html` bukan `my page.html`
- Simpan imej dalam folder `images`
- Halaman utama patut dinamakan `index.html`

---

## Alat Yang Anda Perlukan
**Penyunting Teks untuk HTML**
- **Percuma:** VS Code, Sublime Text, Atom, Notepad++
- **Atas talian:** CodePen, JSFiddle, Repl.it
- **Elakkan:** Microsoft Word, Google Docs (mereka menambah kod tambahan)

**Pelayar:** Mana-mana pelayar moden untuk ujian

---

## Latihan Akhir
**Latihan 3: Laman Web Peribadi Lengkap**

**Cipta halaman baru dengan:**
- Struktur HTML5 yang betul
- Nama anda sebagai tajuk utama (h1)
- Seksyen tentang diri dengan perenggan
- Senarai kemahiran (tidak tersusun)
- Senarai matlamat (tersusun)
- Pautan ke emel anda
- Foto anda dengan teks alt yang betul

**Masa:** 20 minit

---

## Apa Seterusnya?
**Pratonton Sesi 2 (Kelas Seterusnya)**
- Elemen HTML5 semantik
- Susun atur dan struktur halaman
- Jadual untuk data
- Borang untuk input pengguna
- Membina laman web berbilang halaman lengkap

---

## Sumber & Kerja Rumah
**Teruskan Pembelajaran**
- **Latihan:** Cipta 2 lagi halaman HTML sebelum kelas seterusnya
- **Sumber:**
  - Tutorial HTML W3Schools
  - MDN Web Docs
  - Panduan Rujukan HTML5
- **Kerja rumah:** Bina laman web 3 halaman ringkas tentang apa-apa topik yang anda minati

---

## Soalan & Ulasan
**Mari Ulas Apa yang Telah Dipelajari**
- Struktur dokumen HTML
- Sintaks elemen dan atribut
- Pemformatan teks (tajuk, perenggan, tebal, condong)
- Senarai (tersusun dan tidak tersusun)
- Pautan dan imej
- Amalan terbaik dan kesilapan lazim

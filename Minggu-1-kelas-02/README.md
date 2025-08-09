Asas CSS - Nota Pengajaran Sesi 2
Pengenalan kepada Asas CSS ( Beri Gaya/Rupa(Style) pada HTML )


---

### Jam 1: Pengenalan CSS dan Kegunaan.

**Pembukaan: Apa itu CSS & Kenapa Perlu CSS?**  
- Masalah tanpa CSS: Laman web nampak kosong & tidak menarik  
- Contoh HTML tanpa gaya (tunjuk kod HTML asas)


**Tujuan & Kelebihan CSS:**  
- Menarik: Laman lebih profesional  
- Pengalaman Pengguna: Mudah dibaca & dinavigasi  
- Penjenamaan: Warna, fon, jarak konsisten  
- Susun Atur: Letak elemen di mana-mana  
- Responsif: Sesuai semua peranti

**Prinsip Pemisahan:**  
- HTML = Struktur & kandungan  
- CSS = Persembahan & gaya  
- JavaScript = Tingkah laku & interaktif

**Kelebihan Pemisahan:**  
- Mudah diselenggara  
- Tukar reka bentuk tanpa ubah HTML  
- Banyak halaman kongsi gaya  
- Prestasi lebih baik (CSS boleh cache)

---

### Cara Menambah CSS ke HTML

**Kaedah 1: CSS Luaran (Most Common Practice)**
```html
<head>
  <link rel="stylesheet" href="styles.css">
</head>
```
**Kaedah 2: CSS Dalaman**
```html
<head>
  <style>
    body { font-family: Arial, sans-serif; }
    h1 { color: blue; }
  </style>
</head>
```
**Kaedah 3: CSS Inline (Elak jika boleh)**
```html
<h1 style="color: blue; text-align: center;">Tajuk Saya</h1>
```
**Bila Guna:**  
- Luaran: Untuk laman penuh  
- Dalaman: Untuk satu halaman/ujian  
- Inline: Pembaikan cepat sahaja

---

### Sintaks & Struktur CSS

**Peraturan Asas CSS**
```css
selector {
  property: value;
  property: value;
}
```
**Contoh:**
```css
h1 {
  color: red;
  font-size: 24px;
  text-align: center;
}
```
**Bahagian:**  
- Selector: Elemen yang digayakan  
- {}: Blok deklarasi  
- property: value; = Deklarasi

**Kesalahan Biasa:**  
- Tertinggal titik dua/semicolon/quotes

---

### Demo: Ubah HTML Kosong ke Cantik

1. Mulakan dengan HTML tanpa gaya
2. Tambah CSS langkah demi langkah:
   - Gaya asas badan
   - Gaya header
   - Gaya navigasi
   - Gaya kandungan utama

---

### Pemilih & Gaya Asas

#### Jenis Pemilih CSS

1. **Pemilih Elemen**
   - Gaya semua elemen `<h1>`, `<p>`, `<a>`
   - Contoh:
     ```css
     h1 { 
        color: blue; 
        font-size: 32px; 
     }

     p { 
        line-height: 1.6; 
        margin-bottom: 15px; 
     }
     a { 
        color: #007bff; 
        text-decoration: none; 
     }
     ```

2. **Pemilih Kelas**
   - Gaya elemen dengan atribut(Attribute) `class`
   - Contoh HTML:
     ```html
     <p class="highlight">...</p>
     <button class="btn warning">...</button>
     ```
   - Contoh CSS:

     ```css
     .highlight { 
        background: yellow; 
        padding: 10px; 
        border-radius: 5px; 
    }


     .warning { 
        color: red; 
        border: 2px solid red; 
        font-weight: bold; 
     }
     .btn { 
        padding: 10px 20px; 
        border-radius: 5px; 
     }
     ```
   - Nota: Kelas boleh digunakan banyak kali & boleh digabung
   - Tips: Cuba buat copy dan paste css di atas ke dalam stylesheet. Kemudian, letak attribute class="hightlght" pada p atau h tags (h1-h6).

3. **Pemilih ID**
   - Gaya satu elemen unik dengan atribut(Attribute) `id`
   - Contoh HTML:
     ```html
     <header id="main-header">...</header>
     ```
   - Contoh CSS:
     ```css
     #main-header { background: #333; color: white; padding: 20px; }
     ```
   - Nota: ID mesti unik, lebih spesifik dari kelas

**Bila Guna:**  
- Umum → Elemen  
- Berulang → Kelas  
- Unik → ID

---

### Sifat CSS Asas yang paling kerap digunakan.

**Teks & Fon**
```css
font-family: Arial, sans-serif;
font-size: 16px;
font-weight: bold;
font-style: italic;
color: #333;
text-align: center;
text-decoration: underline;
line-height: 1.5;
```
**Warna & Latar**
```css
color: red;
color: #ff0000;
color: rgb(255,0,0);
background-color: lightblue;
```
**Jarak & Susun Atur**
```css
padding: 20px;
margin: 0 auto;
width: 300px;
max-width: 600px;
height: 200px;
```

---

### Cara Guna Dokumentasi (W3Schools)

- Tiada siapa hafal semua sifat CSS
- Rujuk dokumentasi untuk contoh & pilihan nilai
- **Langkah:**  
  1. Fikir apa nak dicapai  
  2. Cari sifat di W3Schools  
  3. Baca penerangan & contoh  
  4. Cuba & ubah suai

---

### Latihan Praktikal: Kad Peribadi

**Kod HTML Permulaan:**  
(Bina kad peribadi dengan nama, tentang, kemahiran, kontak)

**Tugas CSS:**
1. Gaya badan & kad (warna latar, radius, padding)
2. Gaya header & subtitle
3. Gaya seksyen, senarai kemahiran, info kontak

**Cabaran Tambahan:**
- Tambah hover pada kemahiran
- Guna text-shadow pada tajuk
- Latar belakang gradient
- Jadikan email boleh diklik

---

### Penutup & Ulangkaji

**Intipati:**
- CSS buat laman web lebih menarik & mudah guna
- 3 jenis pemilih utama: elemen, kelas, ID
- Dokumentasi sangat penting (W3Schools)
- Elak kesilapan biasa: tertinggal semicolon, ejaan salah, guna inline CSS

**Kerja Rumah:**
- Bina halaman "About Me" dengan HTML semantik & CSS luaran
- Guna semua jenis pemilih
- Guna sekurang-kurangnya 10 sifat CSS
- Cari & guna satu sifat baru dari W3Schools

---

**Rujukan Pantas CSS**
```css
/* Elemen */
h1 { }

/* Kelas */
.my-class { }

/* ID */
#my-id { }

/* Sifat penting */
color: blue;
font-family: Arial, sans-serif;
font-size: 16px;
text-align: center;
margin: 20px;
padding: 10px;
background-color: lightblue;
width: 300px;
height: 200px;
```
Sesi ini memberi asas kukuh CSS dan menekankan kepentingan dokumentasi serta pembelajaran kendiri.
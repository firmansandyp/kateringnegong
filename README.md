# HALAMAN

## Pemilik

/statistik

-   /pesanan?range=
-   /menu?range=
-   /bahan?range=
-   /pelanggan/{id}

## Pegawai (tidak bisa semua route di atas)

/pesanan (GET)

-   /{id}/detail (GET)
-   /{id}/selesai (POST)

/menu (GET)

-   /{id}/detail (GET)
-   /tambah (POST)
-   /{id}/update (POST)
-   /{id}/hapus (DELETE)

/bahan (GET)

-   /{id}/detail (GET)
-   /tambah (POST)
-   /{id}/update (POST)
-   /{id}/hapus (DELETE)

## Pelanggan (tidak bisa semua route di atas)

/profil (GET)

-   /update (POST)
-   /delete (DELETE)

/pesanan (GET)

-   /daftar (GET)
-   /{id}/detail (GET)
-   /pesan (POST)

## Semua

/auth (GET)

-   /masuk (POST)
-   /daftar (POST)

/about

# TABEL & MODEL

## Note

-   Migrasi tabel pivot terurut berdasarkan tanggal pembuatan source code migrasi (tanggal yang menjadi prefix dari nama file source code migrasi). Oleh karena itu, pastika tabel pivot (dan tabel dengan foreign id) dibuat belakangan.

## Tabel Utama

Pesanan | pesanan (N-to-N menu)

-   [guarded] bigincrement id
-   [fillable] timestamp tanggal_pesan
-   [fillable] timestamp tanggal_deadline
-   [fillable] foreignid pengguna_id

Menu | menu (N-to-N pesanan)(N-to-N bahan)

-   [guarded] bigincrement id
-   [fillable] [unique] string nama
-   [fillable] [nullable] text deskripsi
-   [fillable] timestamp tanggal_tambah

Bahan | bahan (N-to-N menu)

-   [guarded] bigincrement id
-   [fillable] [unique] string nama
-   [fillable] [nullable] text deskripsi
-   [fillable] [nullable] timestamp tanggal_restok

Pengguna | pengguna

-   [guarded] bigincrement id
-   [fillable] [unique] string email
-   [fillable] string password
-   [fillable] [nullable] string nama
-   [fillable] enum peran (pemilik/pegawai/pelanggan)
-   [fillable] [nullable] string telepon
-   [fillable] timestamp tanggal_daftar

RiwayatPembayaran | riwayat_pembayaran

-   [guarded] bigincrement id
-   [fillable] foreignid pesanan_id
-   [fillable] string pembayaran_1
-   [fillable] string pembayaran_2
-   [fillable] timestamp tanggal_bayar_1
-   [fillable] [nullable] timestamp tanggal_bayar_2
-   [fillable] boolean lunas

## Tabel Pivot (N-to-N)

bahan_menu

-   [guarded] bigincrement id
-   [fillable] foreignid bahan_id
-   [fillable] foreignid menu_id

menu_pesanan

-   [guarded] bigincrement id
-   [fillable] foreignid menu_id
-   [fillable] foreignid pesanan_id
-   [fillable] integer jumlah_porsi
-   [fillable] [nullable] text permintaan_tambahan

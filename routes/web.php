<?php

Route::post('/tambahAdmin', 'Admin@tambahAdmin');
Route::post('/loginAdmin', 'Admin@loginAdmin');
Route::post('/hapusAdmin', 'Admin@hapusAdmin');
Route::post('/listAdmin', 'Admin@listAdmin');

Route::post('/tambahKonten', 'Konten@tambahKonten');
Route::post('/ubahKonten', 'Konten@ubahKonten');
Route::post('/hapusKonten', 'Konten@hapusKonten');
Route::post('/listKonten', 'Konten@listKonten');
Route::post('/listKontenPeserta', 'Konten@listKontenPeserta');

Route::post('/registrasiPeserta', 'Peserta@registrasiPeserta');
Route::post('/loginPeserta', 'Peserta@loginPeserta');

Route::post('/listSoal', 'Ujian@listSoal');
Route::post('/jawab', 'Ujian@jawab');
Route::post('/hitungSkor', 'Ujian@hitungSkor');
Route::post('/selesaiUjian', 'Ujian@selesaiUjian');

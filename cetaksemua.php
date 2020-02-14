<?php

require_once __DIR__ . '/vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);
$mpdf->AddPage('p');

            
                        
	       
 
$mpdf->SetHTMLFooter('
<table align="right" border="1" cellpadding="5" cellspacing="0" width="30%">
    <tr>
        <td width="20%" height="10%" align="center"><h6> Paraf </h6></td>
        
    </tr>
</table>
<table align="right" border="1" cellpadding="5" cellspacing="0" width="30%">
    <tr>
        <td width="20%" height="10%" align="center"><h6> PIHAK KESATU </h6></td>
        <td width="20%" height="10%" align="center"><h6> PIHAK KEDUA </h6></td>
    </tr>
</table>
<table align="right" border="1" cellpadding="5" cellspacing="0" width="30%">
    <tr>
        <td width="25%" height="10%" align="center"><h6> <br> <br> <br></h6></td>
        <td width="20%" height="10%" align="center"><h6> <br> <br> <br></h6></td>
    </tr>
</table>
<br>
<p style="text-align: right;"> Halaman {PAGENO}/{nbpg} </p>');

//$mpdf->setFooter('Halaman {PAGENO}');

// $mpdf->WriteHTML('<P><h4 align="center"> <b>DAFTAR BERKAS ARSIP AKTIF</b> <br>SEMESTER I TAHUN 2019</br></h4></p>');

// $mpdf->WriteHTML($html);

$pengemudi = 'pengemudi';

$pengamanan = 'satuan pengamanan';

$pramubakti = 'pramubakti';

$teknisi = 'teknisi';

$cs = 'Cs';

$i = 1;
$ktp = $_GET['NOMORKTP'];
$conn = new mysqli("localhost", "root", "", "ptt");

 $sql = $conn->query("SELECT * FROM data_ptt WHERE NOMORKTP =$ktp ");
  foreach ($sql as $row ) {

 $nomorkontrak = $row['nomorkontrak'].'/2020'; 

 $instansicek = $row['INSTANSI']; 

 $tahun = date(Y)-1;

 $html2 = 1;
                }

if ($instansicek == "PENGEMUDI" ) {
	$html2 = '<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p style="text-align: center;"><strong>PERJANJIAN KERJA</strong></p>
<p style="text-align: center;"><strong>ANTARA</strong></p>
<p style="text-align: center;"><strong>PEJABAT PEMBUAT KOMITMEN (PPK)</strong><strong>&nbsp;I</strong></p>
<p style="text-align: center;"><strong>DENGAN</strong></p>
<p style="text-align: center;"><strong>TENAGA PENGEMUDI</strong></p>
<p style="text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nomor :'.$row['nomorkontrak'].'/2020 &nbsp;</p>
<p>&nbsp;</p>
<p>Pada hari ini XXXXXXXX,</p>
<p>yang bertanda tangan dibawah ini :</p>
<table style="height: 21px; width: 674px;">
<tbody>
<tr style="height: 74px;">
<td style="width: 345px; height: 74px;">&nbsp;1. Gatot Wibowo</td>
<td style="width: 331px; height: 74px; text-align: justify;">Selaku Pejabat Pembuat Komitmen (PPK) I Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral, berkedudukan di Jalan Patra Kuningan Raya No 1 B, Jakarta Selatan, yang diangkat berdasarkan Keputusan Kuasa Pengguna Anggaran/Kuasa Pengguna Barang Satuan Kerja Inspektorat Jenderal Nomor 194.K/82/SIJ/2019 tanggal 30 Desember 2019 selanjutnya disebut PIHAK KESATU;&nbsp;</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="height: 5px; width: 670px;">
<tbody>
<tr>
<td style="width: 340.358px;">2. '.$row['USERNAME'].'</td>
<td style="width: 320.642px; text-align: justify;">Selaku Orang Pribadi, bertempat tinggal di'.$row['ALAMAT'].',tempat dan tanggal lahir di '.$row['TANGGALLAHIR'].' sesuai dengan nomor KTP '.$row['NOMORKTP'].' yang bertindak untuk dan atas nama sendiri yang selanjutnya disebut <strong>PIHAK KEDUA</strong></td>
</tr>
</tbody>
</table>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&nbsp;Bahwa sesuai dengan rencana kegiatan pada DIPA Inspektorat Jenderal KESDM T.A. 2019 Nomor DIPA SP DIPA-020.02.1.412540/20120 tanggal 12 November 2019 Kegiatan Layanan Perkantoran : Operasional dan Pemeliharaan Kantor &ndash; Honorarium Satuan Pengamanan dan Pengemudi (KODE M.A.K. 020.02.03.1891.994.002.G.521111); dan telah berakhirnya Surat Perjanjian Kerja Terbatas atas nama <strong>PIHAK KEDUA</strong>&nbsp; Nomor '.$row['kontraklama'].' tanggal&nbsp; 29 Desember '.$tahun.'; dirasa perlu melakukan perikatan kerja dengan tenaga dimaksud. Dengan ini <strong>PIHAK PERTAMA</strong> dan <strong>PIHAK KEDUA</strong> sepakat melakukan perikatan kerja yang diatur dengan ketentuan-ketentuan sebagai berikut:</p>
<p style="text-align: center;"><strong>Pasal 1</strong></p>
<p style="text-align: center;"><strong>RUANG LINGKUP</strong></p>
<ol>
<li style="text-align: justify;"><strong>PIHAK KESATU</strong> memberikan pekerjaan kepada <strong>PIHAK KEDUA</strong> sebagai Tenaga Pengemudi untuk melaksanakan tugas mengemudi kendaraan dinas pada kantor Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral Jalan Patra Kuningan Raya No. 1 B Jakarta Selatan, yang terdiri dari<br />
<ol style="list-style-type: lower-alpha;">
<li>melaksanakan pelayanan antar jemput pegawai/pimpinan;</li>
<li>melaksanakan pelayanan operasional kantor;</li>
<li>menjaga kebersihan kendaraan</li>
<li>menjaga keutuhan dan kelengkapan kendaraan;</li>
<li>melaksanakan pekerjaan lain atas perintah kantor/pimpinan walaupun di luar hari/atau jam kerja;&nbsp;</li>
</ol>
</li>
<li style="text-align: justify;"><strong>PIHAK KEDUA</strong> menerima pekerjaan tersebut dan bersedia mentaati serta melaksanakan peraturan-peraturan dan ketentuan-ketentuan yang berlaku di lingkungan Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral;</li>
<li style="text-align: justify;"><strong>PIHAK KESATU</strong> menunjuk Kepala Bagian Umum c.q. Kepala Sub Bagian Rumah Tangga Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral untuk mengatur lebih lanjut rincian tugas <strong>PIHAK KEDUA.</strong></li>
</ol>
<p style="text-align: center;"><strong>Pasal 2</strong></p>
<p style="text-align: center;"><strong>PENGAWAS</strong></p>
<ol style="text-align: justify;">
<li style="text-align: justify;"><strong>PIHAK KESATU</strong> menunjuk Kepala Bagian Umum c.q. Kepala Sub Bagian Rumah Tangga Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral sebagai wakil <strong>PIHAK KESATU</strong> dalam mengawasi pelaksanaan <strong>Perjanjian Kerja</strong> ini;</li>
<li style="text-align: justify;">Kepala Bagian Umum c.q. Kepala Sub Bagian Rumah Tangga Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral menyusun Rekam Kerja Harian <strong>PIHAK KEDUA</strong> yang akan dievaluasi berkala setiap 3 (tiga) bulan sekali;<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></li>
<li style="text-align: justify;">Koordinator Pengemudi adalah orang yang diberikan tanggung jawab oleh Kepala Bagian Umum c.q. Kepala Sub Bagian Rumah Tangga Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral untuk melaksanakan pengawasan langsung atas kerja harian <strong>PIHAK KEDUA</strong> ini.</li>
</ol>
<p style="text-align: center;"><strong>Pasal 3</strong></p>
<p style="text-align: center;"><strong>JAM KERJA DAN KEHADIRAN</strong></p>
<ol>
<li style="text-align: justify;">Jam kerja disesuaikan dengan jam kerja kantor, yaitu :<br />
<ul>
<li>pukul 07.30 - 16.00 WIB ( Senin &ndash; Kamis)</li>
<li>pukul 07.30 &ndash; 16.30 WIB (Jum&rsquo;at)<br />Kecuali Pengemudi Kendaraan Dinas Jabatan Pimpinan Eselon I dan Eselon II dan/atau ada pekerjaan yang sifatnya mendesak dan harus segera diselesaikan untuk kepentingan dinas maka jam kerja sampai dengan terselesaikannya pekerjaan tersebut<br /><br /></li>
</ul>
</li>
<li style="text-align: justify;"><strong>PIHAK KEDUA</strong> wajib melakukan dan atau mengisi absen dengan mesin absensi yang telah disediakan atau daftar absensi manual sebagai alternatif apabila mesin mengalami kerusakan sebagai bukti kehadiran pada waktu datang dan waktu pulang sesuai dengan jam kerjanya.</li>
<li style="text-align: justify;"><strong>PIHAK KEDUA</strong> tidak diperkenankan untuk terlambat dari jam kerja. <strong>PIHAK KESATU</strong> memberikan kompensasi sampai pukul 08.00 WIB. Apabila kehadiran melewati jam kompensasi lebih dari 3 (tiga) hari selama 1 (satu) bulan, maka <strong>PIHAK KEDUA</strong> menerima sanksi sebagaimana diatur pada pasal pemutusan perjanjia</li>
<li style="text-align: justify;">Selama jam kerja <strong>PIHAK KEDUA </strong>wajib berada di tempat kerja. Apabila <strong>PIHAK KEDUA</strong> keluar kantor untuk keperluan pribadi/kantor harus memperoleh izin dari <strong>PIHAK KESATU</strong> melalui Kepala Bagian Umum c.q. Kepala Sub Bagian Rumah Tangga Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral dan/atau kepada atasan langsung yang dilayani.</li>
<li style="text-align: justify;">Apabila <strong>PIHAK KEDUA</strong> berhalangan hadir dikarenakan sakit atau alasan lain yang dapat diterima oleh <strong>PIHAK KESATU</strong> wajib memberitahukan ketidakhadirannya baik secara lisan maupun tulisan pada hari kerja yang sama kepada <strong>PIHAK KESATU</strong> melalui Kepala Bagian Umum c.q. Kepala Sub Bagian Rumah Tangga Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral dan/atau kepada koordinator pengemudi/atasan langsung yang dilayani</li>
</ol>
<p style="text-align: center;"><strong>Pasal 4</strong></p>
<p style="text-align: center;"><strong>UPAH KERJA DAN PEMBAYARAN</strong></p>
<ol>
<li style="text-align: justify;"><strong>PIHAK KESATU</strong> akan memberikan upah kerja sebesar Rp. 4.468.000,- (Empat Juta Empat Ratus Enam Puluh Delapan Ribu Rupiah) kepada <strong>PIHAK </strong>KEDUA setiap bulannya, berdasarkan DIPA Satuan Kerja Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral Tahun Anggaran 2019 Nomor DIPA-020.02.1.412540/2020 tanggal 12 November 2019 dengan MAK 020.02.03.1891.994.002.G.521111<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></li>
<li style="text-align: justify;">Apabila <strong>PIHAK KEDUA</strong> terlambat hadir atau pulang lebih cepat dari jam kerja sesuai Pasal 3 ayat (1) tanpa memperoleh izin dari <strong>PIHAK KESATU</strong>&nbsp; melalui Kepala Bagian Umum c.q. Kepala Sub Bagian Rumah Tangga Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral dan/atau kepada atasan langsung yang dilayani, maka <strong>PIHAK KEDUA</strong> akan dikenakan pemotongan upah sebagai berikut :<br />&nbsp;
<ol style="list-style-type: lower-alpha;">
<li>Terlambat hadir atau pulang lebih cepat selama 30 menit diberikan pemotongan upah sebesar 2% dari gaji bersih yang diterima atau sebesar Rp 89.360,- (delapan puluh sembilan ribu tiga ratus enam puluh rupiah);</li>
<li>Terlambat hadir atau pulang lebih cepat selama 60 menit diberikan pemotongan upah sebesar 4% dari gaji bersih yang diterima atau sebesar Rp 178.720,- (seratus tujuh puluh delapan ribu tujuh ratus dua puluh ribu rupiah)</li>
<li>Terlambat hadir atau pulang lebih cepat selama 90 menit diberikan pemotongan upah sebesar 6% dari gaji bersih yang diterima atau sebesar Rp 268.080,- (dua ratus enam puluh delapan ribu delapan puluh rupiah);</li>
<li>Terlambat hadir atau pulang lebih cepat selama 120 menit atau lebih diberikan pemotongan upah sebesar 8% dari gaji bersih yang diterima atau sebesar Rp 440,- (tiga ratus lima puluh tujuh ribu empat ratus empat puluh rupiah)</li>
</ol>
</li>
<li style="text-align: justify;"><strong>PIHAK KEDUA</strong> yang diberikan tugas kerja lembur oleh <strong>PIHAK KESATU</strong> akan diberikan uang lembur sebesar Rp13.000,- per jam dan uang makan lembur sebesar Rp30.000,- jika lembur lebih dari 2 (dua) jam (sesuai dengan Peraturan Menteri Keuangan Nomor 78 Tahun 2019, tentang Standar Biaya Masukan Tahun 2020)</li>
</ol>
<p style="text-align: center;"><strong>Pasal 5</strong></p>
<p style="text-align: center;"><strong>JANGKA WAKTU</strong>&nbsp;</p>
<ol>
<li>Untuk Pengemudi Kendaraan Jemputan, <strong>Perjanjian Kerja </strong>ini mulai berlaku pada tanggal 2 Januari 2019 sampai dengan 31 Desember 2019.</li>
<li style="text-align: justify;">Untuk Pengemudi Kendaraan Dinas Jabatan Pimpinan Eselon I dan Eselon II, <strong>Perjanjian Kerja </strong>ini mulai berlaku pada tanggal 2 Januari 2019 sampai dengan 31 Desember 2019 atau berakhirnya Masa Jabatan Pimpinan Eselon I dan Eselon II pada Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral.<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></li>
</ol>
<p style="text-align: center;"><strong>Pasal 6</strong></p>
<p style="text-align: center;"><strong>HAK DAN KEWAJIBAN</strong></p>
<ol>
<li style="text-align: justify;"><strong>PIHAK KESATU</strong> berhak atas jasa yang disediakan oleh <strong>PIHAK KEDUA</strong> sesuai dengan kualifikasi yang diinginkan oleh <strong>PIHAK KESATU</strong></li>
<li style="text-align: justify;">&nbsp;<strong>PIHAK KESATU</strong> berkewajiban membayar jasa yang telah disediakan oleh <strong>PIHAK KEDUA</strong></li>
<li style="text-align: justify;"><strong>PIHAK KESATU</strong> berkewajiban melunasi bea materai dan pajak/pungutan-pungutan lainnya yang timbul berkenaan dengan adanya <strong>Perjanjian Kerja </strong>ini</li>
<li style="text-align: justify;">&nbsp;<strong>PIHAK KEDUA</strong> berhak atas pembayaran jasa dari <strong>PIHAK KESATU</strong>&nbsp;</li>
<li style="text-align: justify;"><strong>PIHAK KESATU</strong> tidak memberikan jaminan atau asuransi kesehatan serta uang pesangon/tunjangan kepada <strong>PIHAK KEDUA</strong> selama masa <strong>Perjanjian Kerja </strong>ini</li>
<li style="text-align: justify;"><strong>PIHAK KEDUA</strong> bertanggung jawab atas tugas yang diberikan oleh <strong>PIHAK KESATU</strong> sebagai Tenaga Pengemudi dan melaporkan kepada koordinator pengemudi dan/atau atasan langsung apabila mengalami kendala dalam melaksanakan tugasnya</li>
<li style="text-align: justify;"><strong>PIHAK KEDUA</strong> bersedia ditempatkan dimana saja selama tenaga dan kualifikasinya dibutuhkan.</li>
<li style="text-align: justify;"><strong>PIHAK KEDUA</strong> Berhak mendapatkan cuti selama 12 (dua belas) hari setiap tahun dipotong cuti bersama dan bagi pekerja perempuan berhak mendapatkan cuti melahirkan selama 3 (tiga) bulan.</li>
</ol>
<p style="text-align: center;"><strong>Pasal 7</strong></p>
<p style="text-align: center;"><strong>PEMUTUSAN PERJANJIAN</strong></p>
<ol>
<li style="text-align: justify;">Apabila terjadi pemutusan <strong>Perjanjian Kerja </strong>sebagai mana dimaksud pada ayat (1), Maka kepada <strong>PIHAK KEDUA</strong> tidak diberikan tunjangan apapun seperti uang pesangon dan lain sebagainya:<br />
<ol style="list-style-type: lower-alpha;">
<li>melalaikan kewajiban;</li>
<li>tidak masuk kerja/absen selama 3 (tiga) hari berturut-turut tanpa keterangan;</li>
<li>melakukan/turut serta dalam tindak pidana yang mengakibatkan kerugian <strong>PIHAK KESATU</strong> atau <strong>PIHAK KETIGA</strong>;</li>
<li>tidak bersedia melanjutkan pekerjaan/kegiatan yang belum dianggap selesai;</li>
<li>terlambat hadir selama 3 (tiga) hari kerja kumulatif selama 1 (satu) bulan;</li>
<li>memiliki catatan evaluasi kinerja buruk berdasarkan penilaian bersama <strong>PIHAK PERTAMA</strong> dan Kepala Bagian Umum q. Kepala Sub Bagian Rumah Tangga Inspektorat Jenderal Kementerian Energi dan Sumber Daya Mineral;</li>
<li>tidak bersedia ditempatkan dimana saja dan ditugaskan apa saja.</li>
</ol>
</li>
<li style="text-align: justify;">Apabila terjadi pemutusan <strong>Perjanjian Kerja </strong>sebagai mana dimaksud pada ayat (1), Maka kepada <strong>PIHAK KEDUA</strong> tidak diberikan tunjangan apapun seperti uang pesangon dan lain sebagainya<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></li>
</ol>
<p style="text-align: center;"><strong>Pasal 8</strong></p>
<p style="text-align: center;"><strong>KEADAAN KAHAR</strong></p>
<ol>
<li style="text-align: justify;"><strong>PIHAK KESATU</strong> maupun <strong>PIHAK KEDUA</strong> dibebaskan dari tanggung jawab atas kegagalan atau keterlambatan dalam melaksanakan kewajibannya berdasarkan <strong>Perjanjian Kerja </strong>ini, yang di sebabkan oleh hal-hal diluar kemampuan yang wajar dari kedua belah pihak dan bukan disebabkan kesalahan kedua belah pihak, yang selanjunya dalam <strong>Perjanjian Kerja &nbsp;</strong>ini disebut keadaan kahar, kecuali kewajiban untuk melaksanakan pembayaran yang timbul sebelum terjadinya keadaan kahar tersebut;</li>
<li style="text-align: justify;">Keadaan kahar adalah kejadian-kejadian yang terjadi diluar kehendak dan kekuasaan <strong>PARA PIHAK</strong> yang secara langsung dan material dapat mempengaruhi pelaksanaan kewajiban <strong>PARA PIHAK</strong> berdasarkan <strong>Perjanjian Kerja </strong>ini,&nbsp;&nbsp;namun tidak terbatas pada terjadinya peristiwa alam seperti gempa bumi, angin topan, banjir, tanah longsor, sambaran petir, gunung meletus, dan bencana alam lainnya, kebakaran, huru hara, terorisme, sabotase, embargo, dan pemogokan masal (kecuali mogok kerja yang dilakukn oleh <strong>PIHAK KEDUA</strong> secara bersama-sama) serta keadaan perang baik yang dinyatakan atau tidak;</li>
<li style="text-align: justify;">Pihak yang mengalami keadaan kahar harus segera memberitahukan Pihak lainnya secara tertulis selambat-lambatnya dalam waktu 7 (tujuh) hari setelah terjadinya keadaan kahar tersebut, disertai dengan bukti atau keterangan resmi instansi berwenang, dan perkiraan atau upaya-upaya yang akan atau dilakukan dalam rangka mengatasi keadaan kahar tersebut;</li>
<li style="text-align: justify;">Pihak yang diberitahu dapat menolak atau menyetujui keadaan kahar selambat-lambatnya dalam waktu 7 (tujuh) hari setelah diterimanya pemberitahuan sebagaimana dimaksud pada ayat (3);</li>
<li style="text-align: justify;">Apabila keadaan kahar ditolak oleh Pihak lainnya, maka pihak lainnya akan meneruskan kewajiban-kewajibannya sesuai dengan ketentuan-ketentuan dalam <strong>Perjanjian Kerja </strong> Jika keadaan kahar tersebut disetujui oleh kedua belah pihak maka <strong>PIHAK KESATU</strong> dan <strong>PIHAK KEDUA</strong> akan merundingkan kembali kelanjutan <strong>Perjanjian Kerja </strong>ini serta hal-hal lain yang dianggap penting oleh <strong>PARA PIHAK</strong> dalam pelaksanaan <strong>Perjanjian Kerja &nbsp;</strong>selanjutnya;</li>
<li style="text-align: justify;"><strong>PARA PIHAK</strong> dapat bersepakat memutuskan <strong>Perjanjian Kerja </strong>apabila terjadi keadaan kahar dalam waktu lebih dari 7 (tujuh) hari kalender. Dalam hal masing-masing pihak tidak dapat menuntut ganti rugi atau konpensasi kepada pihak lainnya dalam bentuk apapun juga, kecuali pemenuhan hak dan kewajiban sampai dengan terjadinya keadaan kahar.<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></li>
</ol>
<p style="text-align: center;"><strong>Pasal 9</strong></p>
<p style="text-align: center;"><strong>PENYELESAIAN PERSELISIHAN</strong></p>
<ol>
<li style="text-align: justify;">Apabila terjadi perselisihan diantara <strong>PARA PIHAK</strong> yang mungkin timbul sebagai akibat dari perbedaan&nbsp;&nbsp;penafsiran dan/atau pelaksanaan <strong>Perjanjian Kerja </strong>ini maka akan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;diselasaikan terlebih dahulu secara musyawarah untuk mufakat;</li>
<li style="text-align: justify;">Apabila penyelesaian perselisihan secara musyawarah untuk mufakat sebagaimana dimaksud pada ayat (1) tidak dapat menyelesaikan perselisihan yang timbul, <strong>PARA PIHAK</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sepakat untuk menyelesaikan untuk melalui Pengadilan Negeri Jakarta Selatan;</li>
<li style="text-align: justify;">Untuk pelaksanaan <strong>Perjanjian Kerja </strong>ini dan segala akibatnya <strong>PARA PIHAK</strong> sepakat untuk memilih domisili hukum yang tetap dan tidak berubah yaitu pada Kantor Panitera &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Pengadilan Negeri Jakarta Selatan.</li>
</ol>
<p style="text-align: center;"><strong>Pasal 10</strong></p>
<p style="text-align: center;"><strong>KETENTUAN KHUSUS</strong></p>
<p style="text-align: justify;"><strong>PIHAK KEDUA</strong> tidak akan menuntut untuk diangkat sebagai Pegawai Negeri Sipil sebagaimana dimaksud dalam Undang-Undang Nomor 5 tahun 2014 tentang Aparatur Sipil Negara dan/atau menuntut hak lainnya.<strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong><br /></strong><strong>Pasal 11</strong></p>
<p style="text-align: center;"><strong>LAIN-LAIN</strong></p>
<ol>
<li style="text-align: justify;">Hal-hal yang belum diatur atau perubahan-perubahan dalam <strong>Perjanjian Kerja</strong> ini akan diatur tersendiri dalam bentuk Addendum dan merupakan suatu kesatuan dan bagian yang tidak terpisahkan dari <strong>Perjanjian Kerja </strong>ini;</li>
<li style="text-align: justify;"><strong>Perjanjian Kerja </strong>hanya dapat diubah dengan <strong>Perjanjian Kerja </strong>tertulis yang ditandatangani oleh <strong>PARA PIHAK</strong><strong>;</strong>&nbsp;</li>
<li style="text-align: justify;"><strong>Perjanjian Kerja </strong>ini ditandatangani oleh <strong>PARA PIHAK</strong> dalam keadaan sadar;</li>
<li style="text-align: justify;">Semua lampiran yang disebutkan dalam <strong>Perjanjian Kerja </strong>ini atau lampiran-lampiran/<strong>Perjanjian Kerja </strong>tambahan yang akan dibuat kemudian oleh <strong>PARA PIHAK</strong> merupakan bagian yang tidak terpisahkan dari <strong>Perjanjian Kerja</strong> ini.<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></li>
</ol>
<p style="text-align: center;"><strong>Pasal 12</strong></p>
<p style="text-align: center;"><strong>PENUTUP</strong></p>
<p style="text-align: justify;"><strong>Perjanjian Kerja </strong>ini dibuat dalam 2 (dua) rangkap ditandatangani oleh <strong>PARA PIHAK</strong> dan mempunyai kekuatan hukum yang sama, sedangkan salinan dapat dibuat menurut keperluan <strong>PARA PIHAK</strong>.</p>
<p style="text-align: justify;">Demikianlah <strong>Perjanjian Kerja </strong>ini dibuat dan di tandatangani di Jakarta pada tanggal sebagaimana tersebut di atas.</p>
<p><strong>&nbsp;</strong></p>
<p><strong>PIHAK PERTAMA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PIHAK KEDUA</strong></p>
<p><strong>Pejabat Pembuat Komitmen</strong><strong> Penunjang</strong></p>
<p><strong>Inspektorat&nbsp; Jenderal KESDM</strong></p>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>&nbsp; &nbsp;</strong></p>
<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
<p><strong>Gatot Wibowo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>'.$row['firstname'].'</strong></p>
<p><strong>NIP 197</strong><strong>60702 200312 1 002</strong></p>
<p style="text-align: center;"><strong>Menyetujui,</strong></p>
<p style="text-align: center;"><strong>Kuasa Pengguna Anggaran</strong><strong>,</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>&nbsp;</strong></p>
<p style="text-align: center;"><strong>Budiyantono</strong></p>
';
} 


elseif($instansicek == "SATUAN PENGAMANAN") {
	$html2 = $pengamanan;

}
elseif($instansicek == "PRAMUBAKTI") {
	$html2 = $pramubakti;

}
elseif($instansicek == "TEKNISI") {
	$html2 = $teknisi;

}
elseif($instansicek == "PETUGAS KEBERSIHAN") {
	$html2 = $cs;

}
else{
	$html2 = $nomorkontrak ;

}

$cetakpengemudi2 = 
//$mpdf->WriteHTML('<div class="autor"> Mengetahui <br> Inspektur I <br> <br> <br> Umi Asngadah <br> NIP 196006231989032001 </div>');

$mpdf->WriteHTML($html2);

$NAMADOKUMEN='Kontrak PTT';

$mpdf->Output($NAMADOKUMEN.".PDF",'I');

?>
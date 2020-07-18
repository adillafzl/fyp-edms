<!--PENYELIA FYP-->
<style type="text/css">

table.page.header, table.page.footer {
    width: 100%;
    border: none;
    background-color: #245eBa;
    padding: 2mm;
    color: white;
}
div.note {
    color: #333;
    font-style: normal;
    width: 100%;
}
div.title {
    color: #333;
    font-weight: bold;
    text-decoration: underline;
    width: 100%;
}
body {
  background-image: url('temp.jpg');
}
h1 {
    text-align: center;
    font-size: 20mm;
}
h3 {
    text-align: center;
    font-size: 14mm;
}
a {
    text-decoration: none;
    color: white;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
<page backimg="temp.jpg" backtop="14mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size: 12pt;">

<page_header>
    <table class="page_header">
    <tr>
        <td style="width: 50%; text-align: left;">
        E-Document Management System
        </td>
        <td style="width: 50%; text-align: right;">
        by Farah Adilla
        </td>
    </tr>
    </table>
</page_header>

<page_footer>
    <table class="page_footer">
    <tr>
        <td style="width: 100%; text-align: left;">
            www.fypfarah.herokuapp.com
        </td>
        <td style="width: 100%; text-align: right;">
            <?php echo date('d.m.Y h.m.sA'); ?>
        </td>
        <td>
            <img src="qr-code-link.png" alt="qr" width="50" height="50">
        </td>
    </tr>
    </table>
</page_footer>

<br><br><br><br><br><br><br><br><br><br>
<!--
<div style="text-align: center; width: 100%;">
    <img src="edms.jpg" alt="edms" style="width: 50mm;">
    <h3 style="fonst-style: Italic; color: #333;"> FAF</h3>
</div>
-->
<div class="note" style="text-align: left;">
   Tuan/Puan,
</div>
<br><br><br>

<div class="title" style="text-align: left;">
PELANTIKAN SEBAGAI PENYELIA PROJEK ILMIAH TAHUN AKHIR SARJANA MUDA SAINS KOMPUTER
</div>
<br><br><br>

<div class="note" style="text-align: left;">
    Dengan segala hormatnya perkara di atas adalah dirujuk.
</div>
<br>

<div class="note" style="text-align: left;">
    2. 	Sukacita dimaklumkan bahawa tuan/puan telah dilantik sebagai Pemeriksa Projek Ilmiah 
    Tahun Akhir (FYP) peringkat Sarjana Muda FSKM bagi dua kod kursus yang terlibat. Berikut 
    adalah butiran lantikan tuan/puan sebagai pemeriksa Projek Ilmiah Tahun Akhir FSKM.
</div>
<br>

<div class="note" style="text-align: left;">		
    <table style="width:100%">
  <tr>
    <th>KOD KURSUS</th>
    <th>SEMESTER</th> 
    <th>PROGRAM</th>
    <th>SESI <?php echo nl2br($sesi); ?></th>
  </tr>
  <tr>
    <td><?php echo nl2br($code); ?></td>
    <td><?php echo nl2br($sem); ?></td>
    <td><?php echo nl2br($prog); ?></td>
    <td><?php echo nl2br($start); ?> - <?php echo nl2br($end); ?> </td>
  </tr>
  <tr>
    <td><?php echo nl2br($code1); ?></td>
    <td><?php echo nl2br($sem1); ?></td>
    <td><?php echo nl2br($prog); ?></td>
    <td><?php echo nl2br($start1); ?> - <?php echo nl2br($end1); ?> </td>
  </tr>
    </table>
</div>
<br>

<div class="note" style="text-align: left;">
    3.	Tugas utama tuan/puan adalah membuat penilaian ke atas laporan proposal, pembentangan projek 
    yang telah dibangunkan serta laporan tesis akhir bagi pelajar-pelajar yang terlibat. Senarai pelajar 
    di bawah tanggungjawab tuan/puan adalah seperti dalam lampiran.
</div>
<br>

<div class="note" style="text-align: left;">
    4.	Di harapkan pihak tuan/puan dapat melaksanakan tugas ini dengan baik dan segala kerjasama dari tuan/puan 
    didahului dengan ucapan terima kasih.
</div>
<br>

<div class="note" style="text-align: left;">
    Sekian.
</div>
<br>
</page>
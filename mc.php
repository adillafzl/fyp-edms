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
    PERKARA : TIDAK HADIR BEKERJA
</div>
<br><br><br>

<div class="note" style="text-align: left;">
    Merujuk perkara di atas, saya <?php echo nl2br($fname); ?> ingin menjelaskan ketidakhadiran saya pada <?php echo nl2br($datea); ?> lalu.
</div>
<br>

<div class="note" style="text-align: left;">
    2. Untuk pengetahuan tuan, saya mengalami <?php echo nl2br($illness); ?> pada <?php echo nl2br($datea); ?> 
    dan telah berjumpa doktor di <?php echo nl2br($hosp); ?> untuk mendapat rawatan. Atas nasihat doktor, 
    saya mengambil keputusan untuk berehat di rumah.
</div>
<br>

<div class="note" style="text-align: left;">
    3. Dengan ini, saya sertakan sijil cuti sakit yang diberikan doktor bagi membolehkan saya bercuti.
    <?php echo nl2br($data); ?>
</div>
<br>

<div class="note" style="text-align: left;">
    Segala perhatian serta pertimbangan yang sewajarnya dari pihak tuan amat dihargai.
</div>
<br>

<div class="note" style="text-align: left;">
    Sekian terima kasih.
</div>
<br>
</page>
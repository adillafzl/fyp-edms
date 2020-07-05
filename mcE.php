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
    MEMOHON CUTI SELAMA <?php echo nl2br($days); ?> HARI
</div>
<br><br><br>

<div class="note" style="text-align: left;">
    Merujuk perkara di atas, 
</div>
<br>

<div class="note" style="text-align: left;">
    Saya  <?php echo nl2br($fname); ?>, <?php echo nl2br($id); ?> memohon kebenaran cuti selama <?php echo nl2br($days); ?>
    hari iaitu pada <?php echo nl2br($sdate); ?> hingga  <?php echo nl2br($edate); ?>.
</div>
<br>

<div class="note" style="text-align: left;">
    2. Tujuan saya memohon cuti adalah kerana saya mempunyai <?php echo nl2br($reason); ?> yang perlu diselesaikan pada 
    hari tersebut.
</div>
<br>

<div class="note" style="text-align: left;">
    3. Sehubungan dengan itu, saya berharap agar pihak tuan dapat mempertimbangkan dan meluluskan cuti tersebut. Keprihatihan 
    daripada pihak Tuan amat saya hargai.

</div>
<br>

<div class="note" style="text-align: left;">
    Sekian terima kasih.
</div>
<br>
</page>
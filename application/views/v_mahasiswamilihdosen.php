<html>
    <head>
        <title>Tampil Buku</title>
    </head>
<body>
<?php
    echo "<div class=judul><blink><marquee>$title</marquee></blink></div>";
    echo "<br><br>";
    echo "<table border='1'>
            <tr><th>id_judul</th>
            <th>Nim</th>
            <th>Nip</th>
            <th>Judul</th>
            <th>Ringkasan</th>
            </tr>";
            $no=1;
            foreach($db_pengajuanjudul as $b)
            {
            echo "<tr>
            <td>$id_judul</td>
            <td>$b->nim</td>
            <td>$b->nip</td>
            <td>$b->nama_judul</td>
            <td>$b->ringkasan</td>
            </tr>";
    $no++;}
    echo "</table>";
    ?>
    </body>
    </html>
    <style type="text/css">
    .table
    {
    float:left;
    margin-left:500px;
    }
    .judul
    {
    float:left;
    font-size:30px;
    color:Blue;
    }
    th
    {
    background-color:green;
    font-color:white;
    }
    tr,td,th{
    padding-left:40px;
    padding-top:20px;}
    </style>
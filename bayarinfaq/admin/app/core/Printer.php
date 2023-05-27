<?php
require_once __DIR__ . '/vendor/autoload.php';
class Printer
{
    public static function Print1($total_muzakki, $total_jiwa, $total_beras, $total_uang)
    {
        $date = date('d F Y');
        $mpdf = new \Mpdf\Mpdf();
        $html = '
        <!DOCTYPE html>
        <html>
        
        <head>
            <style>
        .header{
            text-align: center; 
            font-family: Times New Roman; 
            font-weight: bold; 
            font-size: 12pt; 
            margin-top: 100px; 
            margin-bottom: 10px; 
        }
        .header1{
            text-align: center; 
            font-family: Times New Roman;  
            font-size: 12pt;
        }
        .line{
            color : black;
            margin-top: 20px;
            margin-bottom: 50px;
        }
        .title{
            text-align: center; 
            font-family: Times New Roman; 
            font-weight: bold; 
            font-size: 12pt; 
            margin-bottom: 50px; 
        }
        .content{
            text-align: justify; 
            font-family: Times New Roman; 
            font-size: 12pt; 
            margin-left: 50px;
            margin-right: 50px;
        }
        table,th,td{
            width: 50%;
            border-collapse: collapse;
            border: 1;
            text-align: center; 
            font-family: Times New Roman; 
            font-size: 12pt; 
            margin-left: 50px;
            margin-right: 50px;
        }
        .signature{
            text-align: right; 
            font-family: Times New Roman; 
            font-size: 12pt; 
            margin-left: 50px;
            margin-right: 50px;
            margin-bottom: 50px;
            margin-top: 350px;
        }
            </style>
        </head>
        
        <body>
            <div class="header">
                PANITIA AMIL ZAKAT FITRAH DKM MIFTAHUL KHOER
            </div>
            <div class="header1">
                Kp. Margalaksana, Kel. Kahuripan, Kec. Tawang
            </div>
            <div class="header1">
                Kota Tasikmalaya, Jawa Barat 46115
            </div>
            <hr class="line">
            <div class="title">
                PENGUMPULAN ZAKAT FITRAH
            </div>
            <div class="content">
                <p>Dengan dikeluarkannya laporan ini kami selaku panitia amil zakat fitrah
                memberitahukan bahwa hasil dari pengumpulan zakat fitrah adalah sebagai
                berikut :</p>
            </div>
            <table class="table">
            <thead>
                <tr>
                    <th>Total Muzakki</th>
                    <th>Total Jiwa</th>
                    <th>Total Beras</th>
                    <th>Total Uang</th>
                </tr>
            </thead>
            <tbody>';

        // foreach ($data["bayar_zakat"] as $bayar_zakat) {
        $html .= '
                    <tr>
                        <td>' . $total_muzakki . '</td>
                        <td>' . $total_jiwa . '</td>
                        <td>' . $total_beras . ' Kg</td>
                        <td>Rp. ' . $total_uang . '</td>
                    </tr>';
        // }
        $html .= '</tbody>
        </table>
        <div class="content">
            <p>Demikian laporan pengumpulan zakat fitrah ini dibuat dengan sebenar-benarnya.</p>
        </div>
        <div class="signature">
            <p>Tasikmalaya, ' . $date . '</p>
        </div>
        <div class="signature" style=" margin-top: 50px;">
            <p>Ketua Panitia Zakat Fitrah</p>
        </div>
        </body>
        </html>       
';
        $mpdf->WriteHTML($html);

        $mpdf->Output();
    }
    public static function Print2($data)
    {
        $date = date('d F Y');
        $mpdf = new \Mpdf\Mpdf();
        $html = '
        <!DOCTYPE html>
        <html>
        
        <head>
            <style>
        .header{
            text-align: center; 
            font-family: Times New Roman; 
            font-weight: bold; 
            font-size: 12pt; 
            margin-top: 100px; 
            margin-bottom: 10px; 
        }
        .header1{
            text-align: center; 
            font-family: Times New Roman;  
            font-size: 12pt;
        }
        .line{
            color : black;
            margin-top: 20px;
            margin-bottom: 50px;
        }
        .title{
            text-align: center; 
            font-family: Times New Roman; 
            font-weight: bold; 
            font-size: 12pt; 
            margin-bottom: 50px; 
        }
        .content{
            text-align: justify; 
            font-family: Times New Roman; 
            font-size: 12pt; 
            margin-left: 50px;
            margin-right: 50px;
        }
        table,th,td{
            width: 50%;
            border-collapse: collapse;
            border: 1;
            text-align: center; 
            font-family: Times New Roman; 
            font-size: 12pt; 
            margin-left: 50px;
            margin-right: 50px;
        }
        .signature{
            text-align: right; 
            font-family: Times New Roman; 
            font-size: 12pt; 
            margin-left: 50px;
            margin-right: 50px;
            margin-bottom: 50px;
            margin-top: 150px;
        }
            </style>
        </head>
        
        <body>
            <div class="header">
                PANITIA AMIL ZAKAT FITRAH MESJID JAMI AL-IKHLAS
            </div>
            <div class="header1">
                Kp. Condong, RT/RW 02/02, Ds. Condong, Kec. Jamanis
            </div>
            <div class="header1">
                Kab. Tasikmalaya, Jawa Barat 46175
            </div>
            <hr class="line">
            <div class="title">
                DISTRIBUSI ZAKAT FITRAH
            </div>
            <div class="content">
                <p>Dengan dikeluarkannya laporan ini kami selaku panitia amil zakat fitrah
                memberitahukan bahwa hasil dari pendistribusian zakat fitrah adalah sebagai
                berikut :</p>
                <p style="font-weight: bold; ">A.	Distribusi Ke Mustahik Warga</p>
            </div>
            <table class="table">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Hak Beras</th>
                    <th>Jumlah KK</th>
                    <th>Total Beras</th>
                </tr>
            </thead>
            <tbody>';
        // $i = 1;
        // foreach ($data["mustahik_warga"] as $mustahik_warga) {
        $html .= '
                    <tr>
                        <td>' . $data["mustahik_warga"]['fakir']['kategori'] . '</td>
                        <td>' . $data["mustahik_warga"]['fakir']['hak_fakir']['hak_fakir'] . ' Kg</td>
                        <td>' . $data["mustahik_warga"]['fakir']['total_fakir']['total_fakir'] . '</td>
                        <td>' . $data["mustahik_warga"]['fakir']['hak_fakir']['hak_fakir'] . ' Kg</td>
                    </tr>
                    <tr>
                        <td>' . $data["mustahik_warga"]['miskin']['kategori'] . '</td>
                        <td>' . $data["mustahik_warga"]['miskin']['hak_miskin']['hak_miskin'] . ' Kg</td>
                        <td>' . $data["mustahik_warga"]['miskin']['total_miskin']['total_miskin'] . '</td>
                        <td>' . $data["mustahik_warga"]['miskin']['hak_miskin']['hak_miskin'] . ' Kg</td>
                    </tr>
                    <tr>
                        <td>' . $data["mustahik_warga"]['mampu']['kategori'] . '</td>
                        <td>' . $data["mustahik_warga"]['mampu']['hak_mampu']['hak_mampu'] . ' Kg</td>
                        <td>' . $data["mustahik_warga"]['mampu']['total_mampu']['total_mampu'] . '</td>
                        <td>' . $data["mustahik_warga"]['mampu']['hak_mampu']['hak_mampu'] . ' Kg</td>
                    </tr>';
        // }
        $html .= '</tbody>
        </table>
        <div class="content">
        <p style="font-weight: bold; ">B.	Distribusi Ke Mustahik Lainnya</p>
    </div>
    <table class="table">
    <thead>
        <tr>
            <th>Kategori</th>
            <th>Hak Beras</th>
            <th>Jumlah KK</th>
            <th>Total Beras</th>
        </tr>
    </thead>
    <tbody>';
        // $i = 1;
        // foreach ($data["mustahik_warga"] as $mustahik_warga) {
        $html .= '
            <tr>
                <td>' . $data["mustahik_lainnya"]['amilin']['kategori'] . '</td>
                <td>' . $data["mustahik_lainnya"]['amilin']['hak_amilin']['hak_amilin'] . ' Kg</td>
                <td>' . $data["mustahik_lainnya"]['amilin']['total_amilin']['total_amilin'] . '</td>
                <td>' . $data["mustahik_lainnya"]['amilin']['hak_amilin']['hak_amilin'] . ' Kg</td>
            </tr>
            <tr>
                <td>' . $data["mustahik_lainnya"]['fisabilillah']['kategori'] . '</td>
                <td>' . $data["mustahik_lainnya"]['fisabilillah']['hak_fisabilillah']['hak_fisabilillah'] . ' Kg</td>
                <td>' . $data["mustahik_lainnya"]['fisabilillah']['total_fisabilillah']['total_fisabilillah'] . '</td>
                <td>' . $data["mustahik_lainnya"]['fisabilillah']['hak_fisabilillah']['hak_fisabilillah'] . ' Kg</td>
            </tr>
            <tr>
                <td>' . $data["mustahik_lainnya"]['mualaf']['kategori'] . '</td>
                <td>' . $data["mustahik_lainnya"]['mualaf']['hak_mualaf']['hak_mualaf'] . ' Kg</td>
                <td>' . $data["mustahik_lainnya"]['mualaf']['total_mualaf']['total_mualaf'] . '</td>
                <td>' . $data["mustahik_lainnya"]['mualaf']['hak_mualaf']['hak_mualaf'] . ' Kg</td>
            </tr>
            <tr>
                <td>' . $data["mustahik_lainnya"]['ibnu_sabil']['kategori'] . '</td>
                <td>' . $data["mustahik_lainnya"]['ibnu_sabil']['hak_ibnu_sabil']['hak_ibnu_sabil'] . ' Kg</td>
                <td>' . $data["mustahik_lainnya"]['ibnu_sabil']['total_ibnu_sabil']['total_ibnu_sabil'] . '</td>
                <td>' . $data["mustahik_lainnya"]['ibnu_sabil']['hak_ibnu_sabil']['hak_ibnu_sabil'] . ' Kg</td>
            </tr>';
        // }
        $html .= '</tbody>
</table>
        <div class="content">
            <p>Demikian laporan pendistribusian zakat fitrah ini dibuat dengan sebenar-benarnya.</p>
        </div>
        <div class="signature">
            <p>Tasikmalaya, ' . $date . '</p>
        </div>
        <div class="signature" style=" margin-top: 50px;">
            <p>Ketua Panitia Zakat Fitrah</p>
        </div>
        </body>
        </html>       
';
        $mpdf->WriteHTML($html);

        $mpdf->Output();
    }
}

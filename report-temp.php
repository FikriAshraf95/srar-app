<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    
    <style>

    @media print {
        @page {
            size: landscape;
        }

        thead {
                display: table-header-group;
            }

        td {
            page-break-inside: avoid;
        }
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .align-left {
	    float: left;
    }

    .align-right {
        float: right;
    }

    .report-center {
        text-align: center;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Adjust as needed */
    }

    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:nth-child(odd) {
        background-color: #ffffff;
    }

    th {
        padding: 5px;
        font-size: 12px;

    }

    td {
        padding: 10px;
        font-size: 12px;
    }

    .total {
        font-weight: bold;
        text-align: center;
    }

    .no {
        font-weight: bold;
        text-align: center;
    }
    
    </style>
</head>
<body>

    <!-- <div class="report-header" style="clear: both;">
        <span class="label-left">test1</span>
        <span class="label-center">test2</span>
        <span class="label-right">test3</span>
    </div> -->
    <div id="report-header">
        <span class="align-left">Text on the left.</span>
        <span class="align-right">21 Januari 2023</span>
        <div style="clear: both;"></div>
    </div>

    <div class="report-center">
        <div class="" style="padding: 10px 0px 20px 0px;">
            <span>Laporan Pembayaran Bulanan</span><br/>
            <span>Untuk Tahun <1></span>
        </div>
    </div>

    <table style="width:100%">
    <thead>
        <tr>
            <th width="4%" rowspan="2">No.</th>
            <th rowspan="2">Nama</th>
            <th width="10%">Jan / No. Resit</th>
            <th width="10%">Feb / No. Resit</th>
            <th width="10%">Mac / No. Resit</th>
            <th width="10%">Apr / No. Resit</th>
            <th width="10%">Mei / No. Resit</th>
            <th width="10%">Jun / No. Resit</th>
            <th width="10%" rowspan="2">Jumlah</th>
        </tr>
        <tr>
            <th width="10%">Jul / No. Resit</th>
            <th width="10%">Ogo / No. Resit</th>
            <th width="10%">Sep / No. Resit</th>
            <th width="10%">Okt / No. Resit</th>
            <th width="10%">Nov / No. Resit</th>
            <th width="10%">Dis / No. Resit</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $i = 1;
        while($i <= 15) {
        ?>
        <tr>
            <!-- start loop -->
            <td rowspan="2" class="no"><?= $i; ?></td>
            <td rowspan="2">MUHAMMAD FIKRI ASHRAF BIN MOHD BASRI (1 IBNU SINA)</td>
            <td>RM 15.00 - YSBBB00001</td>
            <td>RM 15.00 - YSBBB00002</td>
            <td>RM 15.00 - YSBBB00003</td>
            <td>RM 15.00 - YSBBB00001</td>
            <td>RM 15.00 - YSBBB00002</td>
            <td>none</td>
            <td rowspan="2" class="total">RM 180.00</td>
        </tr>
        <tr>
            <td>RM 15.00 - YSBBB00004</td>
            <td>RM 15.00 - YSBBB00005</td>
            <td>RM 15.00 - YSBBB00006</td>
            <td>RM 15.00 - YSBBB00001</td>
            <td>RM 15.00 - YSBBB00002</td>
            <td>none</td>
        </tr>
        <!-- end loop -->
        <?php  
        $i++ ;
        }
        ?>
        <tr>
            <td colspan="2" rowspan="2" style="text-align:right; font-weight:bold;">Jumlah</td>
            <td>Jan - RM 400.00</td>
            <td>Feb - RM 400.00</td>
            <td>Mac - RM 400.00</td>
            <td>Apr - RM 400.00</td>
            <td>Mei - RM 400.00</td>
            <td>Jun - RM 0.00</td>
            <td colspan="2" rowspan="2" class="total">RM 1800.00</td>
        </tr>
        <tr>
            <td>Jul - RM 400.00</td>
            <td>Ogo - RM 400.00</td>
            <td>Sep - RM 400.00</td>
            <td>Okt - RM 400.00</td>
            <td>Nov - RM 400.00</td>
            <td>Dis - RM 0.00</td>
        </tr>
    </tbody>   
    </table>
</body>
</html>
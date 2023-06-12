<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resit</title>

    <style>

    @media print {
        @page {
            size: A3 landscape;
        }

        body {
            margin: 10px 8px 10px 8px;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .container {
            position: relative;
        }
        
        .table-wrapper {
            width: 50%;
            box-sizing: border-box;
            padding: 10px;
            float: left;
        }
        
        /* .table-wrapper:first-child {
            border-right: 1px solid #000;
        } */

        .separator {
            position: absolute;
            top: 0;
            left: 50%;
            height: 95vh;
            border-right: 0.5px dashed grey;
            transform: translateX(-50%);
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
        }
    }    

    body {
        margin: 10px 8px 10px 8px;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .container {
        position: relative;
    }
    
    .table-wrapper {
        width: 50%;
        box-sizing: border-box;
        padding: 10px;
        float: left;
    }
    
    /* .table-wrapper:first-child {
            border-right: 1px solid #000;
        } */

    .separator {
        position: absolute;
        top: 0;
        left: 50%;
        height: 95vh;
        border-right: 0.5px dashed grey;
        transform: translateX(-50%);
    }
    
    table {
        width: 98%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 8px;
        border: 1px solid #ddd;
    }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <table>
                <tr>
                    <th>Header 1</th>
                    <th>Header 2</th>
                </tr>
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                </tr>
                <!-- ... more rows ... -->
            </table>
        </div>
        <div class="table-wrapper">
            <table>
                <tr>
                    <th>Header 1</th>
                    <th>Header 2</th>
                </tr>
                <tr>
                    <td>Data 1</td>
                    <td>Data 2</td>
                </tr>
                <!-- ... more rows ... -->
            </table>
        </div>
        <div class="separator"></div>
    </div>
</body>
</html>

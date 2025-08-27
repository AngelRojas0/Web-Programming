<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            color: lightblue;
            margin-bottom: 0;
        }
        h2 {
            margin-top: 5px;
            font-weight: normal;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 70%;
            background-color: #f9f9f9;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        }
        table th {
            background-color: lightblue;
            padding: 10px;
        }
        table td {
            text-align: center;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #eeeeee;
        }
        .low-stock {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Dynamic Table</h2>

<?php
    $products = array(
        array("Product Name" => "Product A", "Price" => 10.5, "Stock" => 12),
        array("Product Name" => "Product B", "Price" => 5.60, "Stock" => 7),
        array("Product Name" => "Product C", "Price" => 7.00, "Stock" => 5),
        array("Product Name" => "Product D", "Price" => 12.75, "Stock" => 15),
        array("Product Name" => "Product E", "Price" => 8.25, "Stock" => 9),
        array("Product Name" => "Product F", "Price" => 20.00, "Stock" => 25)
    );
?>
    <table border="0">
        <tr>
            <th>No.</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <tr class="<?= (12 < 10) ? 'low-stock' : '' ?>">
            <td>1</td>
            <td>Product A</td>
            <td>10.5</td>
            <td>12</td>
        </tr>
        <tr class="<?= (7 < 10) ? 'low-stock' : '' ?>">
            <td>2</td>
            <td>Product B</td>
            <td>5.60</td>
            <td>7</td>
        </tr>
        <tr class="<?= (5 < 10) ? 'low-stock' : '' ?>">
            <td>3</td>
            <td>Product C</td>
            <td>7.00</td>
            <td>5</td>
        </tr>
        <tr class="<?= (15 < 10) ? 'low-stock' : '' ?>">
            <td>4</td>
            <td>Product D</td>
            <td>12.75</td>
            <td>15</td>
        </tr>
        <tr class="<?= (9 < 10) ? 'low-stock' : '' ?>">
            <td>5</td>
            <td>Product E</td>
            <td>8.25</td>
            <td>9</td>
        </tr>
        <tr class="<?= (25 < 10) ? 'low-stock' : '' ?>">
            <td>6</td>
            <td>Product F</td>
            <td>20.00</td>
            <td>25</td>
        </tr>

        <?php
        $no = 4;
        foreach ($products as $p) {
            if (in_array($p["Product Name"], ["Product A", "Product B", "Product C", "Product D" , "Product E", "Product F"])) {
                continue;
            }
            $rowClass = ($p["Stock"] < 10) ? "low-stock" : "";
            ?>
                <tr class="<?= $rowClass ?>">
                    <td><?= $no++; ?></td>
                    <td><?= $p["Product Name"]; ?></td>
                    <td><?= $p["Price"]; ?></td>
                    <td><?= $p["Stock"]; ?></td>
                </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .low-stock {
            color: red;
        }
        table {
            background-color: lightgray;
            width: 70%;
        }
        table th {
            background-color: gray;
            padding: 10px;
            border: 1px solid black;
        }
        table td {
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>

<body>
<h2>Dynamic Table</h2>
<?php
    $products = array(
        array("Product Name" => "Product A", "Price" => 10.5, "Stock" => 12),
        array("Product Name" => "Product B", "Price" => 5.60, "Stock" => 7),
        array("Product Name" => "Product C", "Price" => 7.00, "Stock" => 5)
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

        <?php
        $no = 4;
        foreach ($products as $p) {
            if (in_array($p["Product Name"], ["Product A", "Product B", "Product C"])) {
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

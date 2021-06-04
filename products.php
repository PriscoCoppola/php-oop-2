<?php 

require_once __DIR__ . '/classes/Products.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
            <h1>e-Commerce</h1>
            <h3>Prodotti</h3>
        </header>
        <main>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Prezzo</th>
                        <th>Prezzo Vip</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td><?php echo $product1->name; ?></td>
                        <td><?php echo $product1->description; ?></td>
                        <td><?php echo $product1->price; ?>€</td>
                        <td><?php echo $product1->get_vip_price(); ?>€</td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $product2->name; ?></td>
                        <td><?php echo $product2->description; ?></td>
                        <td><?php echo $product2->price; ?>€</td>
                        <td><?php echo $product2->get_vip_price(); ?>€</td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $product3->name; ?></td>
                        <td><?php echo $product3->description; ?></td>
                        <td><?php echo $product3->price; ?>€</td>
                        <td><?php echo $product3->get_vip_price(); ?>€</td>
                    </tr>
                </tbody>
            </table>

            <a href="/php-oop-2/">Torna agli utenti</a>
        </main>
    </div>
</body>
</html>
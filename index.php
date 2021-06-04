<?php 

require_once __DIR__ . '/classes/User.php';

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
            <h3>Utenti</h3>
        </header>
        <main>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Eta'</th>
                        <th>Email</th>
                        <th>Vip</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <td><?php echo $user1->name; ?></td>
                        <td><?php echo $user1->lastName; ?></td>
                        <td><?php echo $user1->age; ?></td>
                        <td><?php echo $user1->email; ?></td>
                        <td><?php echo $user1->get_vips(); ?></td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $user2->name; ?></td>
                        <td><?php echo $user2->lastName; ?></td>
                        <td><?php echo $user2->age; ?></td>
                        <td><?php echo $user2->email; ?></td>
                        <td><?php echo $user2->get_vips(); ?></td>
                    </tr>
                    <tr class="table-info">
                        <td><?php echo $user3->name; ?></td>
                        <td><?php echo $user3->lastName; ?></td>
                        <td><?php echo $user3->age; ?></td>
                        <td><?php echo $user3->email; ?></td>
                        <td><?php echo $user3->get_vips(); ?></td>
                    </tr>
                </tbody>
            </table>

            <a href="/php-oop-2/products.php">Prodotti</a>
        </main>
    </div>
</body>
</html>
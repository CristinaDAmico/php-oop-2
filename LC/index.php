<?php // Import classes
    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/Employee.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>
        <h1>OOP EREDITARIETA'</h1>
    </header>

    <main>
        <section>
            <?php // Istanza utente
                $user1 = new User('Mario', 'Rossi', 43);
            ?>
            <h2><?php echo $user1->getFullName(); ?></h2>

            <div>Site discount: <?php echo $user1->getSale(); ?>%</div>
        </section>

        <section>
            <?php // Istanza employee
                $employ1 = new Employee('Luca', 'Verdi', 38, 4);
            ?>
            <h2><?php echo $employ1->getFullName(); ?></h2>

            <div>Site discount: <?php echo $employ1->getSale(); ?>%</div>
        </section>
    </main>
    
</body>
</html>
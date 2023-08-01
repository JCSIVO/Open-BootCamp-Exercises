<!DOCTYPE html>
<html>

<body>

    <?php include 'intro.php'; ?>

    <h2>4. Nuevo operador: Null coalescing assignment operator</h2>
    <p><em>fusión de null</em> <code>$a ?? $b</code>
    <p>
    <pre>
    // antes
    $someArray['key'] = $someArray['key'] ?? 'foo';
    var_dump($someArray);

    // ahora
    $someArray['key'] ??= 'foo';
    var_dump($someArray);
    </pre>
    <?php
    // antes
    $someArray['key'] = $someArray['key'] ?? 'foo';
    var_dump($someArray);

    // ahora
    $someArray['key'] ??= 'foo';
    var_dump($someArray);

    ?>
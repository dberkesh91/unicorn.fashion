<?php foreach ($errorDocuments as $error) : ?>
    <div style="background:red">
        <p>Severity: <?= $error['severity']; ?></p>
        <p><?= $error['name']; ?></p>
        <p><?= $error['message']; ?></p>
        <p>Line: <?= $error['line']; ?></p>

        <div style="background:grey">
            <?php foreach ($error['backtrace'] as $backtrace): ?>
                <div><?= $backtrace['file'] ?></div>
                <div><?= $backtrace['line'] ?></div>
                <div><?= $backtrace['function'] ?></div>
            <?php endforeach ?>
        </div>
        
    </div>
<?php endforeach ?>
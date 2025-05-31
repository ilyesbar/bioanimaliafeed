<?php
/*
function updateFiles($dir) {
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $path = $dir . DIRECTORY_SEPARATOR . $file;

        if (is_dir($path)) {
            updateFiles($path); // Recurse into subdirectory
        } elseif (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            $content = file_get_contents($path);

            $pattern = '/(<div id="page-wrapper" class="page-wrapper">
    <?php include('structure/_navbar.php'); ?>
<main class="main-wrapper">)/s';

            $replacement = '$1' . "\n    <?php include('structure/_navbar.php'); ?>\n" . '$3';

            // Replace only if pattern exists
            if (preg_match($pattern, $content)) {
                $newContent = preg_replace($pattern, $replacement, $content);
                file_put_contents($path, $newContent);
                echo "✔️ Updated: $path\n";
            } else {
                echo "⚠️ Pattern not found in: $path\n";
            }
        }
    }
}

// Replace with the root path of your PHP files
$rootDir = __DIR__ . ''; // <- change this

updateFiles($rootDir);

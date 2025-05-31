<?php

function updateFiles($dir) {
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;

        $path = $dir . DIRECTORY_SEPARATOR . $file;

        if (is_dir($path)) {
            updateFiles($path); // Recurse into subdirectory
        } elseif (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            $content = file_get_contents($path);

            // === 1. Replace entire <nav ... Donate Now...</nav> with include ===
            $patternNavbar = '/<nav id="NavBar" data-w-.*?Donate Now<\/div><\/div><div class="button-full-background"><\/div><\/a><\/div><\/nav>/s';

            if (preg_match($patternNavbar, $content)) {
                $content = preg_replace(
                    $patternNavbar,
                    "<?php include('structure/_navbar.php'); ?>",
                    $content
                );
                echo "✔️ Navbar replaced in: $path\n";
            } else {
                echo "⚠️ Navbar pattern not found in: $path\n";
            }

            // === 2. Optional: Also replace wrapper section if not already replaced ===
            $patternWrapper = '/(<div id="page-wrapper" class="page-wrapper">
    <?php include('structure/_navbar.php'); ?>
<main class="main-wrapper">)/s';

            if (preg_match($patternWrapper, $content)) {
                $content = preg_replace(
                    $patternWrapper,
                    '$1' . "\n    <?php include('structure/_navbar.php'); ?>\n" . '$3',
                    $content
                );
                echo "✔️ Page-wrapper updated in: $path\n";
            }

            // Save file
            file_put_contents($path, $content);
        }
    }
}

// Replace with your real path
$rootDir = __DIR__ . ''; // 🔁 change to your folder

updateFiles($rootDir);

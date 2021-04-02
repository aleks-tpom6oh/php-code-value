<?php
    // Sorry for using camel case
    echo "Where is your php code?" . PHP_EOL;
    $filePath = trim(readline(""));
    
    $worthEstimation = howMuchIsTheCode($filePath);

    if ($worthEstimation) {
        echo "File located at " . $filePath . PHP_EOL;
        echo "Your PHP code is worth " . $worthEstimation . "$" . PHP_EOL;
        if ($worthEstimation == 0) {
            echo "Is it even PHP code?";
        }
    } else {
        echo "File not found" . PHP_EOL;
        echo "This script is worth " . howMuchIsTheCode("phpValueEstimator.php") . "$" . PHP_EOL;
    }

    function howMuchIsTheCode($filePath): ?int {
        $code = file_get_contents($filePath, FILE_USE_INCLUDE_PATH);
        if ($code) {
            return substr_count($code, '$');
        } else {
            return null;
        }
    }
?>

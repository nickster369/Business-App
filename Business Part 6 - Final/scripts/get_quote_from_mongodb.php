<?php
function create_quote_today()
{
    $resourcesDir = __DIR__ . '/../resources';
    $quoteFile = $resourcesDir . '/quote_today.txt';

    // Ensure resources directory exists
    if (!is_dir($resourcesDir)) {
        @mkdir($resourcesDir, 0755, true);
    }

    $quote_today = "";

    // 1. Try connecting to MongoDB if the school library/config exists
    $autoloadPath = '/var/shared/vendor/autoload.php';
    $mongoConfig = $_SERVER["DOCUMENT_ROOT"] . '/../htpasswd/mongodb.inc';

    if (file_exists($autoloadPath) && file_exists($mongoConfig)) {
        try {
            require_once $autoloadPath;
            require_once $mongoConfig;
            $client = new MongoDB\Client("mongodb://$username:$password@localhost/u31");
            $collection = $client->u31->quotes_mongo;
            $quote_number = rand(1, $collection->count());
            $entry = $collection->findOne(['_id' => $quote_number]);

            if ($entry) {
                $quote_today = "Today's " . $entry['adjective'] . " quote, from " . $entry['author'] . ":\n" . $entry['text'];
            }
        } catch (Exception $e) {
            // Silently fall back if MongoDB fails
        }
    }

    // 2. Fallback quotes if MongoDB isn't available on Render
    if (empty($quote_today)) {
        $fallbackQuotes = [
            [
                'adjective' => 'inspiring',
                'author' => 'Steve Jobs',
                'text' => 'The only way to do great work is to love what you do.'
            ],
            [
                'adjective' => 'motivating',
                'author' => 'Bill Gates',
                'text' => 'Patience is a key element of success.'
            ],
            [
                'adjective' => 'thoughtful',
                'author' => 'Alan Turing',
                'text' => 'Those who can imagine anything, can create the impossible.'
            ]
        ];

        $entry = $fallbackQuotes[array_rand($fallbackQuotes)];
        $quote_today = "Today's " . $entry['adjective'] . " quote, from " . $entry['author'] . ":\n" . $entry['text'];
    }

    // Save to local cache file
    $f = @fopen($quoteFile, "w");
    if ($f) {
        fwrite($f, date("l, F jS") . "\n");
        fwrite($f, $quote_today);
        fclose($f);
    }

    return $quote_today;
}

// Check cache file logic
$quoteFile = __DIR__ . '/../resources/quote_today.txt';

if (file_exists($quoteFile)) {
    $f = @fopen($quoteFile, "r");
    if ($f) {
        $date = trim(fgets($f));
        if ($date == date("l, F jS")) {
            $quote = fgets($f, 2000);
            $quote .= fgets($f, 2000);
            fclose($f);
            echo nl2br(htmlspecialchars($quote));
        } else {
            fclose($f);
            @unlink($quoteFile);
            echo nl2br(htmlspecialchars(create_quote_today()));
        }
    } else {
        echo nl2br(htmlspecialchars(create_quote_today()));
    }
} else {
    echo nl2br(htmlspecialchars(create_quote_today()));
}
?>

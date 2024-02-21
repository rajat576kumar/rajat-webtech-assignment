<?php
$articleTitle = "This is a sample article title that exceeds the 50-character limit.";
if (strlen($articleTitle) > 50) {
    $truncatedTitle = substr($articleTitle, 0, 50);
    echo "Truncated Article Title: " . $truncatedTitle . "...";
} else {
    echo "Article Title: " . $articleTitle;
}

?>
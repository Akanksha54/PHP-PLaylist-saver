<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if playlist URL is provided
    if (isset($_POST['playlist_url']) && !empty($_POST['playlist_url'])) {
        $playlistUrl = escapeshellarg($_POST['playlist_url']);
        
        // Call yt-dlp to fetch playlist information
        $command = "yt-dlp -J " . $playlistUrl;
        $output = shell_exec($command);

        // Log the command and output for debugging purposes
        error_log("Command: " . $command);
        error_log("Output: " . $output);

        if ($output === null) {
            // Log the error
            error_log("Failed to fetch playlist: Command returned null output");
            echo "Failed to fetch playlist: null";
        } else {
            echo $output;
        }
    } else {
        // Log the error
        error_log("Failed to fetch playlist: No URL provided");
        echo "Failed to fetch playlist: No URL provided";
    }
} else {
    // Log the error
    error_log("Invalid request method");
    echo "Invalid request method";
}
?>

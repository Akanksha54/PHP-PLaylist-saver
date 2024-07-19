```markdown
# YouTube Playlist Downloader

A simple web application to download YouTube playlists using `yt-dlp`.

## Features

- Download YouTube playlists as JSON using `yt-dlp`.
- Simple and user-friendly web interface.
- Easily configurable and extendable.

## Requirements

- XAMPP or any other web server with PHP support.
- `yt-dlp` installed and added to the system's PATH.

## Installation

1. **Clone the Repository**

   ```sh
   git clone <https://github.com/yourusername/youtube-playlist-downloader.git>
   cd youtube-playlist-downloader

```

1. **Install `yt-dlp`**
    
    Follow the instructions on the [yt-dlp GitHub page](https://github.com/yt-dlp/yt-dlp#installation) to install `yt-dlp`.
    
2. **Add `yt-dlp` to the PATH**
    
    Make sure `yt-dlp` is added to your system's PATH. You can check this by running `yt-dlp --version` in your command line.
    
3. **Set Up the Web Server**
    
    Copy the project files to your web server's root directory. For XAMPP, this is usually `C:\\xampp\\htdocs\\`.
    
    ```
    cp -r * C:\\xampp\\htdocs\\youtube-downloader
    
    ```
    
4. **Configure PHP**
    
    If your script requires more execution time, increase the `max_execution_time` in your `php.ini` file. You can also set this in your script.
    
    ```php
    set_time_limit(300); // Increase the maximum execution time to 300 seconds
    
    ```
    
5. **Start the Web Server**
    
    Start the Apache server from the XAMPP control panel.
    

## Usage

1. **Open the Web Application**
    
    Open your web browser and navigate to `http://localhost/youtube-downloader`.
    
2. **Enter the Playlist URL**
    
    Enter the YouTube playlist URL you want to download and click the "Download Playlist" button.
    
3. **Download the Playlist**
    
    The playlist information will be fetched and displayed.
    

## Troubleshooting

- **Maximum Execution Time Exceeded**
    
    If you encounter a "Maximum execution time exceeded" error, increase the execution time limit in your PHP script or `php.ini` file as described in the installation steps.
    
- **yt-dlp Not Found**
    
    Ensure `yt-dlp` is installed and added to the system's PATH. Verify by running `yt-dlp --version` in your command line.
    

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request or open an Issue to improve the project.

## License

This project is licensed under the MIT License. See the [LICENSE](https://www.notion.so/LICENSE) file for details.

## Acknowledgements

- [yt-dlp](https://github.com/yt-dlp/yt-dlp) for the awesome tool to download videos from YouTube and other sites.
- [XAMPP](https://www.apachefriends.org/) for providing an easy-to-use web server solution.

```

Replace `"<https://github.com/yourusername/youtube-playlist-downloader.git>"` with the actual URL of your GitHub repository. Also, make sure to update any other placeholders with the actual information relevant to your project.
```

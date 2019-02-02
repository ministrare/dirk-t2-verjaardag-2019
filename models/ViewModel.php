<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 2/02/2019
 * Time: 9:57
 */

namespace Models;


class ViewModel
{
    // Variable for the character set of the web page
    protected $sCharset = 'UTF-8';
    // Variable for the language of the web page
    protected $sLanguage = 'nl-NL';
    // Variable for the title of the web page
    private $sPageTitle = 'Dirk Vrancken, Verjaardags playlist';

    public function __construct($titel = NULL)
    {
        // Adjust the page title if necessary
        if (isset($titel)) {
            $this->sPageTitle = trim($titel);
        }

        // Enabling HTTP compression
        ob_start('ob_gzhandler');
        // HTTP header for the language of the content
        header('Content-Language: ' . $this->sLanguage);
        // HTTP header for HTML plus the character set
        header('Content-Type: text/html; charset=' . $this->sCharset);

        // Start of the HTML code
        echo '<!DOCTYPE html>',"\r\n";
        echo '<html lang="' . $this->sLanguage . '">',"\r\n";
        // Container <head>...</head>
        echo '<head>',"\r\n";
        echo '<meta http-equiv="Content-Language" content="' . $this->sLanguage . '">',"\r\n";
        echo '<meta http-equiv="Content-Type" content="text/html; charset=' . $this->sCharset . '">',"\r\n";
        echo '<meta charset="' . $this->sCharset . '">',"\r\n";
        echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">',"\r\n";
        echo '<meta name="viewport" content="width=device-width,initial-scale=1">',"\r\n";
        echo '<title>' . $this->sPageTitle . '</title>',"\r\n";
        echo '<meta name="robots" content="noindex,nofollow">',"\r\n";
        echo '<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">',"\r\n";
        echo '<link href="css/main.css" rel="stylesheet" type="text/css">',"\r\n";
        echo '</head>',"\r\n";
        // Start of the container <body>...</body>
        echo '<body lang="' . $this->sLanguage . '">',"\r\n";
        // Flush response buffers
        ob_flush();
        flush();
    }

    public function __destruct()
    {
        echo '<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>';
        echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>',"\r\n";
        echo '<script src="scripts/main.js" type="text/javascript"></script>',"\r\n";
        // End of the HTML code
        echo '</body>',"\r\n";
        echo '</html>',"\r\n";
        // Flush response buffers
        ob_flush();
        flush();
    }
}
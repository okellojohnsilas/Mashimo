<?php
//import the database connection.
include "dbConnect.html";

// Authentication Verfication
function isAuthenticated($redirect)
{
    if (!isset($_SESSION["control"])) {
        header("Location: " . $redirect);
        exit();
    }
}

// Delete files form folder
function deleteFiles($target)
{
    // If a folder
    if (is_dir($target)) {
        $files = glob($target . '*', GLOB_MARK); //GLOB_MARK adds a slash to directories returned
        foreach ($files as $file) {
            deleteFiles($file);
        }
        rmdir($target);
    }
    // If a file
    elseif (is_file($target)) {
        unlink($target);
    }
}

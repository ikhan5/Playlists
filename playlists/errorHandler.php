<?php
/* Author: Imzan Khan
 * Feature: Playlists
 * Description: Displays errors that occur within the
 *              Playlist feature.         
 * Date Created: March 20th, 2019
 * Last Modified: April 15th, 2019
 * Recent Changes: Refactored Code, added comments
 */
include($_SERVER['DOCUMENT_ROOT'] . '/loggedin_header.php');

echo "<div class='container error'>";
echo "<h2>Error</h2>";
echo $error . "</div>";

include($_SERVER['DOCUMENT_ROOT'] . '/loggedin_footer.php');

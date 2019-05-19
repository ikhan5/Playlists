<?php
/* Author:          Bibek Shrestha
 * Feature:         Events
 * Description:     View page for adding events.
 * Date Created:    March 4th, 2019
 * Last Modified:   April 17th, 2019
 * Recent Changes:  form to add an event
 */
$pagetitle = 'Create Event';
include($_SERVER['DOCUMENT_ROOT'].'/loggedin_header.php');
?>

<main class="events__container">
    <header class="container">
        <h1 class="display-4 text-center"><span class="heading-style">Create a new event</span></h1>
    </header>
    <form action="index.php" method="post" class="container py-5" id="form-add-event">
        <input type="hidden" name="action" value="add_event">
        <div class="form-group">
            <label for="event-title">Title</label>
            <input type="text" class="form-control" id="event-title" name="title">
        </div>
        <div class="form-group">
            <label for="event-description">Detail</label>
            <textarea name="description" id="event-description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="event-location">Location</label>
            <input type="text" class="form-control" id="event-location" name="location">
        </div>
        <div class="form-group">
            <label for="event-date">Date</label>
            <input type="date" class="form-control" id="event-date" name="date">
        </div>
        <div class="form-group">
          <label for="event-start-time">Start Time</label>
          <input type="time" name="start-time" id="event-start-time" class="form-control">
        </div>
        <div class="form-group">
          <label for="event-end-time">End Time</label>
          <input type="time" name="end-time" id="event-end-time" class="form-control">
        </div>
        <div class="row container">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="." class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</main>

<?php include($_SERVER['DOCUMENT_ROOT'].'/loggedin_footer.php'); ?>
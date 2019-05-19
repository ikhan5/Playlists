<?php
/* Author:          Bibek Shrestha
 * Feature:         Events
 * Description:     View page for listing all events. Admins can view all events in the db
 *                  Users can only view events they are related to.
 * Date Created:    March 4th, 2019
 * Last Modified:   April 17th, 2019
 * Recent Changes:  changed the view when a user doesn't have any event
 */
$pagetitle = 'Events';
include($_SERVER['DOCUMENT_ROOT'].'/loggedin_header.php');
?>

<main class="events__container">
    <header class="container">
        <h1 class="display-4 text-center"><span class="heading-style">Events</span></h1>
    </header>
    <?php if(isset($events)): ?>
      <div class="container">
          <a href="?action=show_add_form" class="btn btn-outline-secondary btn-sm float-right event-action-btn">Add new event</a>
      </div>
      <div class="container pt-5 my-5">
        <table class="table container">
            <thead class="event-thead">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($events as $event) : ?>
                <tr>
                    <td>
                        <a href="?action=show_event&id=<?= $event->getId() ?>">
                            <?php echo $event->getTitle() ?>
                        </a>
                    </td>
                    <td><?= $event->getLocation() ?></td>
                    <td><?= $event->getDate() ?></td>
                    <td><?= $event->getStartTimeDisp() ?></td>
                    <td><?= $event->getEndTimeDisp() ?></td>
                    <td>
                        <a href=".?action=show_update_form&id=<?= $event->getId() ?>" class="event-action-link">Edit</a>
                        <a href=".?action=confirm_delete&id=<?= $event->getId() ?>&title=<?= $event->getTitle() ?>" class="event-action-link">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    <?php else: ?>
    <div class="container text-center">
      <p>Hey, you do not have events yet.</p>
      <a href="?action=show_add_form" class="btn btn-outline-secondary btn-sm event-action-btn">Create new event</a>
      <p>and Experience how easy it is to manage a party.</p>
    </div>
    <?php endif; ?>
</main>

<?php include($_SERVER['DOCUMENT_ROOT'].'/loggedin_footer.php'); ?>
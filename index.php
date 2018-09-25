<?php session_start();
require_once 'init.php';
require_once LNBPATH.'/layout/header.php';  
require_once LNBPATH.'/layout/nav.php'; ?>

  <section class="lnbwelcome" id="lnbwelcome">
    <h1>Welcome Friends!</h1>
    <h2>Thanks for dowloading this repository!</h2>
  </section>
  <section class="lnbmain" id="lnbmain">
    <h3>Modularity and reusability.</h3>
    <p>This is a modular collection of files that can easily be used "<em>like</em>" a framework, without being one. 
    </p>
    <h3>What's included...</h3>
    <p>The employees module which includes an employee class. The insert and update functions are completely dynamic and only the table name needs to be changed. The delete is a soft delete, overcoming any <em>accidental</em> deletes.
    </p>
    <p>By duplicating the employee directory you have a new module with full database access and you only have 1 form to edit.
    </p>
  </section>
  <section class="lnbaside" id="lnbaside">
    <h3>The Files</h3>
      <ul>
        <li>
          <em>index.php</em> This is the primary display page.
        </li>
        <li><em>add.php</em> This contains the logic to add employees, contact, blog posts, etc.</li>
        <li><em>edit.php</em> This contains the logic to edit employees, contact, blog posts, etc.</li>
        <li><em>delete.php</em> This contains the logic to delete employees, contact, posts, etc.</li>
        <li><em>creadd.php</em> This is the form that by using ternary operators is used by both the add and edit pages.</li>
      </ul>
  </section>
  <footer class="lnbfooter">
    <p>
    </p>
  </footer>

<?php require_once LNBPATH.'/layout/footer.php'; 

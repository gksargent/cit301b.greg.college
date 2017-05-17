<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>CIT301b | Greg Sargent - UX/UI Designer</title>
    <?php // This php pulls in head.php to create the meta and links
    include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
  </head>

  <body>

    <?php // This php pulls in header.php to create the header content
    include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>

    <div id="pageBanner">
      <h1>CIT301b Advanced CSS</h1>
      <h6>BYU-I</h6><h6>Spring 2017</h6>
      <p>This class provides a deeper dive into topics in CSS. Topics of study include: advanced CSS layout and positioning techniques, complex CSS selectors, CSS transitions and animations, CSS Preprocessing, an introduction to CSS libraries, and using svg with html and css.</p>
    </div><!--end pageBanner -->

    <main>
      <?php // This php pulls in assignments.php to populate content
      include $_SERVER['DOCUMENT_ROOT'].'/modules/assignments-content.php'; ?>
    </main>

    <?php // This php pulls in footer.php to create the footer content
	  include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>

  </body>
</html>

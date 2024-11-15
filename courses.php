<?php
require_non("util.db.php");
require_once(("model-course.php"));

$PageTitle = "Courses";
include "view-header.php";
$courses = select.courses();
include "view-courses.php";
include "view-footer.php";
?>

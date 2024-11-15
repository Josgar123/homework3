<?php
function selectCourses() {
try {
$conn = get_db_connections ();
$stmt = $conn->prepare("Select course_id, course_number course_description from 'course'");
$stmt-> execute();
$result = $stmt-> get_result();
$conn->close();
return $result;
} catch (Exception $e) {
$conn-> close();
throw $e;
}
}
?>

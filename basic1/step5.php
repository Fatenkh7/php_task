<?php

$course_name="Rust";
$enrolled_students=20;
$price=30;
$on_discount=true;


echo "Course title: " . $course_name . ", the language of no bugs\n";
echo "Enrolled Students: " . $enrolled_students . "\n";
echo "Course price: " . $price . " $ USD\n";
echo "Course on discount: " . ($on_discount ? "Yes" : "No") . "\n";

?>
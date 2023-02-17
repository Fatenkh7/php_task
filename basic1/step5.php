<?php

$course_name = "Rust, the language of no bugs";
$enrolled_students = 20;
$price = 30.0;
$on_discount = true;

echo "Course title: \"$course_name\"\n";
echo "Enrolled Students: $enrolled_students\n";
echo "Course price: $price $ USD\n";

if ($on_discount) {
    echo "Course on discount: Yes\n";
} else {
    echo "Course on discount: No\n";
}
?>
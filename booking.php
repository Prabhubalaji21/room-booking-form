<?php
$booking_person_name = $_POST['booking_person_name'];
$booking_person_district = $_POST['booking_person_district'];
$booking_person_name_1 = $_POST['booking_person_name_1'];
$booking_person_name_2 = $_POST['booking_person_name_2'];
$booking_person_name_3 = $_POST['booking_person_name_3'];
$booking_person_name_4 = $_POST['booking_person_name_4'];
$check_in_date = $_POST['check_in_date'];
$check_in_time = $_POST['check_in_time'];
$room_type = $_POST['room_type'];
$guest_count = $_POST['guest_count'];
$aadhar_no = $_POST['aadhar_no'];
$taluk = $_POST['taluk'];
$additional_persons_cot_charge = $_POST['additional_persons_cot_charge'];
$mobile_number_1 = $_POST['mobile_number_1'];

$booking_data = "Name: $booking_person_name\nDistrict: $booking_person_district\nName 1: $booking_person_name_1\nName 2: $booking_person_name_2\nName 3: $booking_person_name_3\nName 4: $booking_person_name_4\nCheck in date: $check_in_date\nCheck in time: $check_in_time\nRoom type: $room_type\nGuest count: $guest_count\nAadhar no: $aadhar_no\nTaluk: $taluk\nAdditional persons/cot charge: $additional_persons_cot_charge\nMobile number 1: $mobile_number_1\n\n";

file_put_contents('bookings.txt', $booking_data, FILE_APPEND);

header('Location: booking_success.html');
?>
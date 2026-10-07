<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/books', function () {
    return response()->json([
        [
        'id' => '1', 
        'title' => 'Introduction to PHP', 
        'author' => 'JesIvyn P. Madjos', 
        'category' => 'Computers and Technology',
        'status' => 'available'
        ],
        [
        'id' => '2', 
        'title' => 'Introduction to JAVA', 
        'author' => 'Jevyn John P. Madjos', 
        'category' => 'Computers and Technology',
        'status' => 'borrowed'
        ],
        [
        'id' => '3', 
        'title' => 'The First Days of School', 
        'author' => 'Harry K. Wong & Rosemary T. Wong', 
        'category' => 'Classroom Management',
        'status' => 'borrowed'
        ],
        [
        'id' => '4', 
        'title' => 'Why Dont Student Like School', 
        'author' => 'Daniel T. Willingham', 
        'category' => 'Educational Psychology',
        'status' => 'available'
        ],
        [
        'id' => '5', 
        'title' => 'The Personal MBA: Master the Art of Business', 
        'author' => 'Josh Kaufman', 
        'category' => 'General Business',
        'status' => 'available'
        ],
        [
        'id' => '6', 
        'title' => 'Rich Dad Poor Dad', 
        'author' => 'Robert T. Kiyosaki', 
        'category' => 'Personal Finance',
        'status' => 'borrowed'
        ],
        [
        'id' => '7', 
        'title' => 'How to Win Friends and Influence People', 
        'author' => 'Dale Carnegie', 
        'category' => 'Professional Communication',
        'status' => 'borrowed'
        ],
        [
        'id' => '8', 
        'title' => 'Grokking Algorithms: An Illustrated Guide for Programmers and Other Curious People', 
        'author' => 'Aditya Bhargava', 
        'category' => 'Computational Logic',
        'status' => 'available'
        ],
        [
        'id' => '9', 
        'title' => 'Code: The Hidden Language of Computer Hardware and Software', 
        'author' => 'Charles Petzold', 
        'category' => 'Computer Architecture',
        'status' => 'borrowed'
        ],
        [
        'id' => '10', 
        'title' => 'The Phoenix Project: A Novel About IT, DevOps, and Helping Your Business Win', 
        'author' => 'Gene Kim, Kevin Behr, and George Spafford', 
        'category' => 'IT Operations Management',
        'status' => 'borrowed'
        ],
    ]);
});

Route::get('/borrowed', function () {
    return response()->json([
        [
        'id' => '1', 
        'title' => 'Introduction to JAVA', 
        'borrower' => 'Angelou Damasing',
        'borrow_date' => '09-05-2026',
        'due_date' => '09-15-2026',
        'penalty' => '₱500'
        ],
        [
        'id' => '2', 
        'title' => 'The First Days of School', 
        'borrower' => 'Cristian Raagas',
        'borrow_date' => '09-10-2026',
        'due_date' => '09-20-2026',
        'penalty' => '₱400'
        ],
        [
        'id' => '3', 
        'title' => 'Rich Dad Poor Dad', 
        'borrower' => 'Richard Copat',
        'borrow_date' => '09-20-2026',
        'due_date' => '09-30-2026',
        'penalty' => '₱200'
        ],
        [
        'id' => '4', 
        'title' => 'How to Win Friends and Influence People', 
        'borrower' => 'Janna Pardilla',
        'borrow_date' => '10-1-2026',
        'due_date' => '10-11-2026',
        'penalty' => '₱00.00'
        ],
        [
        'id' => '5', 
        'title' => 'Code: The Hidden Language of Computer Hardware and Software', 
        'borrower' => 'Voujan Jampit',
        'borrow_date' => '10-1-2026',
        'due_date' => '10-11-2026',
        'penalty' => '₱00.00'
        ],
        [
        'id' => '6', 
        'title' => 'The Phoenix Project: A Novel About IT, DevOps, and Helping Your Business Win',
        'borrower' => 'Kyla Piore', 
        'borrow_date' => '10-3-2026',
        'due_date' => '10-13-2026',
        'penalty' => '₱00.00'
        ],
    ]);
});

Route::get('/study-rooms', function () {
    return response()->json([
        [
        'room_number' => 'A-1', 
        'capacity' => '1', 
        'price' => '₱20/hr',
        'equipment' => 'none',
        'status' => 'Occupied',
        'time_slot' => '8:00AM - 10:00AM'
        ],
        [
        'room_number' => 'A-2', 
        'capacity' => '2', 
        'price' => '₱30/hr',
        'equipment' => 'none',
        'status' => 'Available',
        'time_slot' => 'Available'
        ],
        [
        'room_number' => 'A-3', 
        'capacity' => '4', 
        'price' => '₱40/hr',
        'equipment' => 'none',
        'status' => 'Available',
        'time_slot' => 'Available'
        ],
        [
        'room_number' => 'A-4', 
        'capacity' => '6', 
        'price' => '₱50/hr',
        'equipment' => 'none',
        'status' => 'Occupied',
        'time_slot' => '7:00AM - 3:00PM'
        ],
        [
        'room_number' => 'B-1', 
        'capacity' => '1', 
        'price' => '₱35/hr',
        'equipment' => 'Electric Fan',
        'status' => 'Occupied',
        'time_slot' => '1:00PM - 2:00PM'
        ],
        [
        'room_number' => 'B-2', 
        'capacity' => '2', 
        'price' => '₱45/hr',
        'equipment' => 'Electric Fan',
        'status' => 'Occupied',
        'time_slot' => '9:30PM - 2:30PM'
        ],
        [
        'room_number' => 'B-3', 
        'capacity' => '4', 
        'price' => '₱55/hr',
        'equipment' => 'Electric Fan',
        'status' => 'Available',
        'time_slot' => 'Available'
        ],
        [
        'room_number' => 'B-4', 
        'capacity' => '6', 
        'price' => '₱65/hr',
        'equipment' => 'Electric Fan',
        'status' => 'Available',
        'time_slot' => 'Available'
        ],
        [
        'room_number' => 'C-1', 
        'capacity' => '1', 
        'price' => '₱50/hr',
        'equipment' => 'air-conditioner',
        'status' => 'Occupied',
        'time_slot' => '8:00AM - 5:00PM'
        ],
        [
        'room_number' => 'C-2', 
        'capacity' => '2', 
        'price' => '₱60/hr',
        'equipment' => 'air-conditioner',
        'status' => 'Occupied',
        'time_slot' => '10:45AM - 3:45PM'
        ],
        [
        'room_number' => 'C-3', 
        'capacity' => '4', 
        'price' => '₱70/hr',
        'equipment' => 'air-conditioner',
        'status' => 'Available',
        'time_slot' => 'Available'
        ],
        [
        'room_number' => 'C-4', 
        'capacity' => '6', 
        'price' => '₱80/hr',
        'equipment' => 'air-conditioner',
        'status' => 'Available',
        'time_slot' => 'Available'
        ],
    ]);
});

Route::get('/announcements', function () {
    return response()->json([
        [
        'id' => '1',
        'title' => 'Level Up Your Reading: The Semester Challenge Begins!',
        'date' => 'September 14, 2026',
        'details' => 'The Semester Reading Challenge starts this Monday. Pick up a reading log at the front desk, read 5 books this month, and win exclusive library merch and prizes!'
        ],
        [
        'id' => '2',
        'title' => 'Need more time? We’ve Got You Covered!',
        'date' => 'September 28, 2026',
        'details' => 'Prepare for upcoming exams with our extended hours! The library is now open until 8:30 PM, Monday through Saturday'
        ],
        [
        'id' => '3',
        'title' => 'Lock In Your Focus: Study Rooms Now 50% Off!',
        'date' => 'September 28, 2026',
        'details' => 'Ace your upcoming exams without breaking the bank! Enjoy 50% off all private study room rentals starting this week through finals. Distraction-free space for you and your study group.'
        ],
        [
        'id' => '4',
        'title' => ' Research from Home: Unlock Our Digital Library!',
        'date' => 'October 1, 2026',
        'details' => 'Access thousands of e-books and research journals 24/7 from home. Just log into the school portal and click Library Hub using your student ID.'
        ],
        [
        'id' => '5',
        'title' => 'Join the Crew: Become a Library Assistant!',
        'date' => 'October 12, 2026',
        'details' => 'Want to earn community service hours? We are looking for student volunteers to help with shelving and tech support. Pick up an application at the front desk by Friday.'
        ],
        [
        'id' => '6',
        'title' => 'Bring ’Em Back! Library Book Amnesty Week',
        'date' => 'October 12, 2026',
        'details' => 'Return any overdue books to the box at the entrance next week and all fines will be completely cleared. No questions asked, just help us refill our shelves!'
        ],
    ]);
});

Route::get('/staff', function () {
    return response()->json([
        [
        'id' => '1',
        'position' => 'Head School Librarian',
        'name' => 'Michelle Abueme',
        'email' => 'michelle@gmail.com',
        'number' => '0917 123 4567'
        ],
        [
        'id' => '2',
        'position' => 'Assistant Librarian',
        'name' => 'Angelica Jacalan',
        'email' => 'angelica@gmail.com',
        'number' => '0918 132 4767'
        ],
        [
        'id' => '3',
        'position' => 'Assistant Librarian',
        'name' => 'Sheryn Samson',
        'email' => 'sheryn@gmail.com',
        'number' => '0918 654 8732'
        ],
        [
        'id' => '4',
        'position' => 'Student Volunteer',
        'name' => 'Gelle Sario',
        'email' => 'gelle@gmail.com',
        'number' => '0916 732 9638'
        ],
        [
        'id' => '5',
        'position' => 'Student Volunteer',
        'name' => 'Karen Jao-jao',
        'email' => 'karen@gmail.com',
        'number' => '0916 853 1268'
        ],
    ]);
});

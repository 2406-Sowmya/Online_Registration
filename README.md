Student Registration System
This is a simple PHP + MySQL based Student Registration System with a clean interface. The project allows users to register students, confirm successful registration, and view all registered students.

Prerequisites
Before running the project, ensure you have:

XAMPP installed (includes Apache & MySQL)
Visual Studio Code or any text editor
Step-by-Step Setup
1. Start XAMPP
Open XAMPP Control Panel
Start Apache and MySQL
2. Create the Database
Go to your browser → open http://localhost/phpmyadmin

Click New and create a database named:

studentdb
Inside it, create a table named students with the following structure:

Column Name	Type	Length	Attributes
id	INT	11	AUTO_INCREMENT, PRIMARY KEY
name	VARCHAR	100	
email	VARCHAR	100	
phone	VARCHAR	20	
course	VARCHAR	100	
3. Place the Project Folder
Move the entire student_registration folder to:

C:\xampp\htdocs\
4. Run the Project
Open your browser and go to:

http://localhost/student_registration/
The first page allows you to register a student.

Upon submission, it redirects to a “Registration Successful” page with a button.

Clicking the button opens the third page, displaying all registered students.

Technologies Used
HTML5
CSS3
JavaScript (ES6)
PHP (MySQLi)
MySQL Database
Features
Simple and elegant UI
Form validation (HTML required attributes)
Confirmation page after registration
Display of all registered students dynamically from the database
Responsive beige-brown theme
Future Enhancements
Add update/delete functionality for student records
Include form validation using JavaScript
Export registered student list to CSV

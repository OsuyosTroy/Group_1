Skip to main content
Google Classroom
Classroom
CC 105 (Information Management)
2C
Home
Calendar
Enrolled
To-do
E
ERP 101
3A
A
ADV 03 IT Audit and Controls
3A
E
ETHICS
1C
C
CC 105 (Information Management)
2C
E
ERP101
3B
A
ADV 02 Human Computer Interaction (IS Elective)
3B
Archived classes
Settings
Stream
Classwork
People
Stream
CC 105 (Information Management)
2C
Upcoming
Woohoo, no work due soon!
assignment
Assignment: "GitHub Written Activity"
Reneille Clark Nam-ay posted a new assignment: GitHub Written Activity
Created Apr 24Apr 24 (Edited Apr 24)
assignment
Assignment: "A Self-Reflection on Your CRUD System Journey"
Reneille Clark Nam-ay posted a new assignment: A Self-Reflection on Your CRUD System Journey
Created Apr 17Apr 17
assignment
Assignment: "GitHub Account"
Reneille Clark Nam-ay posted a new assignment: GitHub Account
Created Apr 10Apr 10

Post by Reneille Clark Nam-ay
Reneille Clark Nam-ay
Created Mar 11Mar 11
CRUD Operations
MIDTERM Lesson 1.docx
Microsoft Word

create.php
PHP

db.php
PHP

delete.php
PHP

edit.php
PHP

index.php
PHP


Post by Reneille Clark Nam-ay
Reneille Clark Nam-ay
Created Mar 8Mar 8
SQL Syntax
SQL Syntax
https://www.w3schools.com/sql/sql_syntax.asp

assignment
Assignment: "MIDTERM 1st Activity"
Reneille Clark Nam-ay posted a new assignment: MIDTERM 1st Activity
Created Mar 2Mar 2 (Edited Mar 3)
assignment
Assignment: "SQL Certificate"
Reneille Clark Nam-ay posted a new assignment: SQL Certificate
Created Feb 23Feb 23

Post by Reneille Clark Nam-ay
Reneille Clark Nam-ay
Created Feb 9Feb 9
SQL Queries Examples
Basic SQL Queries Examples.pptx
Microsoft PowerPoint

Basic Terms of Database System.pptx
Microsoft PowerPoint


Post by Reneille Clark Nam-ay
Reneille Clark Nam-ay
Created Feb 4Feb 4
Database System
Database System PPT - Copy.pptx
Microsoft PowerPoint

assignment
Assignment: "Sololearn Activity"
Reneille Clark Nam-ay posted a new assignment: Sololearn Activity
Created Jan 30Jan 30 (Edited Jan 30)
assignment
Assignment: "Introduction to SQL"
Reneille Clark Nam-ay posted a new assignment: Introduction to SQL
Created Jan 27Jan 27
assignment
Assignment: "Group Activity"
Reneille Clark Nam-ay posted a new assignment: Group Activity
Created Jan 21Jan 21

Post by Reneille Clark Nam-ay
Reneille Clark Nam-ay
Created Jan 21Jan 21
Introduction of Information Management
Introduction of Information Management.pdf
PDF


Post by Reneille Clark Nam-ay
Reneille Clark Nam-ay
Created Jan 19Jan 19
Syllabus for this Subject
CC 105-SYLLABUS_INFORMATION MANAGEMENT_RENEILLE CLARK NAM-AY.doc
Microsoft Word

<?php
include 'db.php';

$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Students CRUD</title>
</head>

<body>

    <h2>Student List</h2>

    <a href="create.php">Add New Student</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>

        <?php } ?>

    </table>

</body>

</html>

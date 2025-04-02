# Database_Systems-

URL: https://ysjcs.net/~elise.gill/StartingPage.html

Implementation Report:

Introduction: 
The objectives of this project are to design and implement a payroll system for the efficient management of employee information and employee requests. The system aims to ensure accuracy, timeliness, and adhere to regulatory requirements such as: 
Employee Data Management: I have created a database to store and manage employee details such as contacts, holiday requests, salary and much more. 

Goals: 
The main goal for my system was to make sure it was efficient and organised to improve data management. More specific goals include: 
Security: I implemented security measures by having logins with specific passwords and the admin login can only be accessed by management displayed in the position table. 

Overview of design:
The design I completed in part one of this assignment laid the foundation for the system detailing the structure, relationships and the entities that were necessary for its successful implementation. 


Implementation process:

Database Implementation:

I created my database based on my finished logical design data model.
Then I implemented my tables for Employees, Salary, Attendance, Department, Job, Position, Tax, Benefits & Reductions and Time off requests. I also applied normalisation which split up the tables making sure data is stored efficiently. 
To translate the logical and physical database design into my actual database I just followed what ideas I had already laid out. So the tables were straightforward to make and the relationships were probably the hardest part as implementing some of them was changed. 

Backend Development:
For the backend development, I chose HTML, CSS and PHP due to the knowledge I already had of these codes. 

So, HTML I used to design my website where the databases were edited, viewed, and changed. 
PHP was used to access the database and make the changes that HTML set up. 
And CSS was to make everything look organised and in the right place.


Frontend Development 
User interactions were implemented by them having control over the databases such as employees can edit their information and use the form to request holiday time off and Admin logins can do everything to the tables except deleting.


Conclusion: 
I believe my implementation process was quite successful and followed my design well. The system empowers users allowing employees to manage their information and request time off, while admin logins facilitate compressive control over database functions. 

I think the only negatives and what I would add, or change is making the normalisation process more thorough in the design I laid out the relationships, I would include but while I was creating these relationships I had to make changes and lastly I would have added a delete option to the admin options for the tables if I was to update it any further. 

















User Manual:
Introduction:

Welcome to the Payroll Pro User Guide. This guide is designed to help you navigate and utilize the features of our payroll management system efficiently. There are two ways to login you can use the employee login or the admin login as usernames and passwords are shown below, to access each part of the web server.
To view the databases this can be done in SQL workbench or PHP my admin.


Employee Guide: 

1.	Go to Employee Login in the Navigation Bar 
2.	Enter an Employee ID & Password (Employee ID - 1231722, Password - 9X7#pF!5Zt) 
3.	Select the Submit Button 
4.	Then a page will be loaded with two options ‘Employee Information’ and ‘Time Off Requests’ 
5.	The Employee Information button allows data to be updated as long as a password is provided and verified for that specific employee. 
6.	The Time Off request button allows the employee to submit a request for holiday time off. Which will update the Time Off request table for admin to view. 


Admin Guide:

1.	Go to Admin Login in the Navigation Bar 
2.	Enter a Management Employee ID and password (Employee ID – 1231775, Password - B#5zH@2qWn)
3.	Select the Submit button.
4.	Then a page will be loaded with 8 options for all the tables which all can be viewed and updated by selecting the ‘Edit’ button in the last column.
5.	Also, admins can add employees and data to each table individually by selecting the ‘Add Employee’ button in the navigation bar. 
6.	This can be done to all tables and every employee. 



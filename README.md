# WAD2---Assignments
BSIS2 - Web Application Development 2

### ASSIGNMENT

This assignment is all about the basic commands in laravel, including the CRUD used in database.
This is a very simple application with CRUD functionality, linking the app to a database and acquiring its data to be processed.

This application is like a simple illustration of how the data are being sent and taken by the database and the application, through their connection using the laravel framework.

![alt text](https://github.com/allysonmaetubtub/WAD2---Assignments/blob/master/home.jpg "HOME")

**_HOME_**
-shows the overall record of a group
-shows student ID, name, course, address, contact person, and contact number
-for easy browsing and reference
-contains buttons - **ADD STUDENT**(upper right of the table), **VIEW, EDIT, DELETE**

![alt text](https://github.com/allysonmaetubtub/WAD2---Assignments/blob/master/create.jpg "ADD")
**_ADD_**
-generates a form for the additional student
-authenticates inputted values and informs the user for invalidity through a **flash message**
-automatically adds the student to the list after pressing the **SUBMIT** button

![alt text](https://github.com/allysonmaetubtub/WAD2---Assignments/blob/master/read.jpg "VIEW")
**_VIEW_**
-shows the data of the selected row
-shows in a separate page individually

![alt text](https://github.com/allysonmaetubtub/WAD2---Assignments/blob/master/edit.jpg "EDIT")
**_EDIT_**
-generates a form
-authenticates inputted values and informs the user for invalidity through a static **flash message**
-automatically updates the list of the edited student record

**_DELETE_**
-red-colored to indicate warning to the user
-soft delete function which provides a back up on the database

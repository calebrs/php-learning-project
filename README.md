# php-learning-project

Project for getting to know PHP. This project includes a simple form that logs data into a database.

# Requirements:

Create an HTML form that uses jQuery to submit the results to a PHP function which uses a SQL query to insert the form results into a fictitious database table.

# Project Contents

- Index.php: Entry point for the PHP web app. Directs requests to the correct resource.
- Assets: Contains JavaScript and CSS resources. testForm.js adds a submit event listener to the form using JQuery.
- Templates: contains "Views" that are served to the client.
- config.php contains db/server info
- getMessages.php: Retreives the messages from the database to display.
- processForm.php: Adds form data to the database.

# Presentation

This section describes my methodology of

1. Break down requirments for MVP

- HTML form
- JQuery/Javascript
- PHP function which uses SQL
- Database

2. Learning

- Project/file structure
- PHP basics
- Quick Jquery Reresher
- Have ChatGPT explain all code that I don't understand.

3. Implementation

- Create entry point and all relevent files
- Create project in a way that can facilitate more pages
- Create new DB tables and users
- Generate Basic stying for form

4. Testing

- Add data to the database
- Test different inputs

5. Retrospective/Future work

- Get code into a "MVC" format
- Add validation to the form on the frontend, server, and DB for better security
- Better styling
- Learn PHP a lot better
- Automated tests?

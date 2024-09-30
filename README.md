# QUOTE GENERATOR
#### Video Demo:  https://www.youtube.com/watch?v=tMf9Xbg2UQw
#### Description:
This is a quote generator webpage done with PHP, HTML, CSS, JS, SQL using the quotable API to generate the quote and author, displaying it on the html page. the webpage also provides another opnion to save the quote to a SQL database, there is also a seperate webpage to view the saved quotes from the SQL database.I've used quotable.io API to get random quote https://api.quotable.io/random. I dedicates this webpage just for myself to use so there was no need to create a seperate table to store users and a register and login function for the webpage. For this project I decided to learn PHP as a new method to connect to SQL rather than using python flask which I learnt in week 9. PHP was incorporated to create the connection from the webpage to the SQL database, javascript was used to create functionality for HTML buttons to initiate the PHP file action. And finally HTML and CSS was used to the creation and presentation of the webpage.

#### index.html
index.html is the home pageof the webpage, serves as the page that shows the randomly generated quotes, the user can choose to generate a new quote or decide to save the quote into the sql database. 

#### saved.php
is the second webpage which displays the saved quotes in the database. The file creates a connection with the databse and sends a sql query to the database and retrieves all the values from the database and displays into HTML

#### saveQuote.php
saveQuote.php is the file which function is the connection to the sql databse that I have created and inserts the quote into the table 

#### style.css 
the CSS styling for the HTML code in inddex.html and saved.php

#### script.js
the java script file for index.html to send a fetch request to the API server when the user clicks the button to generate a new quote. It receives the JSON file from the API and changes the DOM of index.html to display the quote along with the author.
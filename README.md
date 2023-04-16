# web-contact-form
"Simple web contact form" task from codementor.io

There is MVP for task mentioned above.

On the first page you can see input fields for Name, Email, Message and radio for type of issue.
The form posts to a second page which displays the information in an easy to read format. There is an "Edit" button, which sends the data back to the form, and autofill the data back into the fields. Also there is an "Submit" button which saves the response to a database table.
Database consists of 5 columns: id [int primary key auto_increment], issue [varchar(10)], name[varchar(255)], email[varchar(255)], message[text].
Used: PHP 8.2, MySQL, Ubuntu 22.04, PHPStorm, Git.

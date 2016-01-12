# Sky Betting & Gaming Solution

## Installation

* Clone it from git: [https://github.com/adamgajzlerowicz/tech-test.git](https://github.com/adamgajzlerowicz/tech-test.git)

* run `composer install`

* make storage directory writable `chmod 777 -R storage`

* run the server with `php -S localhost:8888` from inside of public folder

## Functionality

Application supports: 

* viewing all data 

* updating data

* adding rows

* displaying single record

## Technologies used

* JSON file type - for data storage
 
* Pimple - as dependency injection container

* Twig - as template engine

* Klein - for simple routing

* PHPunit - for unit testing

* JQuery - for simple DOM manipulation

## Application architecture

Application has two entry points: index.php and index_dev.php where index_dev.php can be only used only from localhost, for debugging purposes. 
In app.php file, the application builds a DI container, by providing it with services and is fulfilling their requirements. 
Application is built using MVC pattern.
DataController has injectable storage service. If application's requirements have changed, this service can be replaced with a different one. For example service providing a database connection. 
App.php contains a simple routing mechanism that responds to the requests, by queering an adequate Controller.
 
From main page of the application, users may view all stored data. They can also update any selected rows and save modified data to the database. 
To add an additional row, user presses a button provided on the page. This uses a prototype method and adds an additional row in the table.
Next to each row is a link to display a single record. As the application is small, the main data table remains on the screen on all routes.

## Valued principles included: 

* security: data, when shown on the front end, is escaped by twig, making application secure. As there is no database present, data doesn't have to be checked for sql injection. Data is stored in JSON file, in its original form. Source folder of the application (src) is moved outside of public folder, adding an additional security layer. 

* performance: application has really small footprint. Pimple is a great tool that allow each class to be shared wherever required in the application, saving memory.

* readability and simplicity: application been build based on MVC pattern is separating the concerns between different application parts. A correct structure of folders is retained, making it easy to find classes, and helping to understand what they do.

* testability: application is PHPUnit testable.

* scalability: application is based on composer dependency manager, which allows addition any required packages. Also, having separation of concerns allows to add more classes to meet any new requirements. Application uses dependency injection, which allows components swapping with different ones.

## Testing

To run tests make sure that the application is running on localhost on port 8888 then, from the root directory run `php vendor/bin/phpunit tests`
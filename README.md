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

* dynamic rows adding

* displaying single record (along with all data)

## Technologies used

* JSON file type for data storage
 
* Pimple - as dependency injection container

* Twig - as template engine

* Klein - for simple routing

* PHPunit - for unit testing

* JQuery - for simple DOM manipulation

## Application architecture

Application has two entry points: index.php and index_dev.php where index_dev.php can be only used from localhost for debugging purposes. 
In app.php file, the application builds DI container, by providing it with services and is fulfilling their requirements. 
Application is build using MVC pattern, where M is not present as database is not present and data is simple. 
DataController has injectable storage service. If application's requirements have changed, this service can be replaced with something different. For example database connection. 
App.php contains a simple routing mechanism that responds to the requests, by queering an adequate Controller.
 
From main page of the application, users may preview all of the data. They can also update any selected rows and save data to the database. 
To add an additional row can be added using a button provided on the page. This will use the prototype method and add an additional row to the table.
From the table there is also a link to display a single record. As the application is small, the main data table remains on the screen on all routes.

## Valued principles included: 

* security: as there is no database present, data doesn't have to be checked from the sql injection angle. Data is stored in the JSON file in its original form. When shown on the front end, Twig shows all data escaped, making the application secure. 

* performance: application has really small footprint. Pimple is a great tool that allow each class to be shared wherever required in the application, saving memory.

* readability and simplicity: application been build based no MVC pattern is separating the concerns between different application parts. A correct structure of folders is retained, making it easy to find classes, and helping to understand what they do.

* testability: application is PHPUnit testable.

* scalability: application is based on composer, which allows an ability to add any required packages. Having separation of concerns allows to add more classes to meet any new requirements. Application uses dependency injection, which allows swapping components with differnt ones.

## Testing

To run tests make sure that the application is running on localhost on port 8888 then run from the root directory of application run `php vendor/bin/phpunit tests`
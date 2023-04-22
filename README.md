# Project Title

Archives of Ontario: Website Redesign Project

## Description

The purpose of the revamped website is to improve the usability of the website by designing a responsive version of the website so that its users can access it through any device, and by improving the existing user interface of the website. The target audience of the website includes students, researchers, educators, as well as the general public as the archives offers a number of resources, workshops as well as a means for people to trace their family history by researching the archives' holdings.

## Getting Started

### Dependencies

* Bootstrap 5.3.0
* HTML 5
* PHP version 7.4.33
* MySQL version 5.7.39

### Installing

* The files for the project can be downloaded from the following github repository: https://github.com/vaishali-03/INFS634_W23_Archives-of-Ontario

### Executing program

PHP code for connecting to the database:

```
<?php
$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'archives_of_ontario';


try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}

?>
```

## Authors

Contributor-

Name: Vaishali Mishra
E-mail address: vaishali.mishra@mail.mcgill.ca
Course: INFS 634 - Web System Design and Management

## Version History

* 1.0
    * Initial Release


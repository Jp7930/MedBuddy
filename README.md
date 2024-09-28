![MedBuddy Logo](./assets/medbuddy_logo.png)

## Table of Contents
- [Description](#description)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Features](#features)

## Description
MedBuddy helps users keep track of their health records, doctors, documents, and medicines. The platform is designed to integrate seamlessly with existing healthcare systems and provides a secure and easy-to-use interface for managing personal health information.

## Tech Stack
- **Frontend:** HTML, CSS, JS
- **Backend:** PHP, JS
- **Database:** MySQL
- **Server:** Apache
- **Version Control:** Git, GitHub

## Installation
Follow these steps to set up the project locally:


### Prerequisites:
1. **Web Server with PHP support**: Ensure you have a web server like Apache or another server with PHP support installed.

2. **MySQL Server**: Make sure you have a MySQL server installed on the machine intended for local setup.


### Setup:
1. **Clone the repository:**

   ```bash
   git clone https://github.com/RadiantQuark/MedBuddy.git
   ```
  
2.  **Move Project files to the Server's Root Directory:**  
    Copy all files from the cloned repository into your installed web server's root directory. For example, if XAMPP is used, copy all files from the cloned repo to the *htdocs* folder residing inside XAMPP's installation directory.

3. **Start Database Server:**  
    Start the MySQL service according to the installed server. Make sure the service starts on the port *3306*.

4. **Import the Database:**  
    From your database service control panel, import the pre-constructed database schema into the local database server by importing the file *database_structure.sql* from the root directory of the repository.

5. **Start the webserver:**  
    After completing all the above steps, start the webserver service to host the project on the local machine. *XAMPP* is the recommended software package to host this project as it contains both, *Apache* Server and the *MySQL* database required to host this project as a single package.

## Features
- **Medical Record Management:** Allows users to effectively and efficiently manage the past/present medical records. Implemented via saving predefined fields in the database.

- **Medicine Management:** It is similar to the record management functionality, but this saves medicinal data that the user is currently prescribed.

- **Medical Record Management:** Allows users to upload past and present medical records. The records are saved into the */uploads* directory by default.

- **Doctor Management:** Allows users to manage the doctors currently treating them or have been treatened by.
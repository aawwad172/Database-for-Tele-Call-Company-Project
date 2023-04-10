# Database-for-Tele-Call-Company-Project
This repository contains a database project for a tele call company. It includes SQL scripts to create tables, insert data, and perform some sample queries.

Tables
The database includes the following tables:

`CUSTOMERS`: contains customer information such as ID, social security number (SSN), phone number, address, first name, last name, and full name.

`BILL`: contains information about customer bills, including the bill ID, price, subscription type, and customer ID.

`SUBSCRIPTION`: contains information about customer subscriptions, including the subscription description, supplier name, date of purchase, subscription price, customer ID, and bill ID.

`DEPARTMENT`: contains information about the company's departments, including the department name and department ID.

`EMPLOYEE`: contains information about the company's employees, including employee ID, birth date, email, salary, social security number (SSN), first name, last name, full name, and department ID.

`PROJECT`: contains information about the company's projects, including project ID, project name, budget, and department ID.

`HAS_A`: a linking table between CUSTOMERS and other tables, allowing a customer to have multiple entries in one of the other tables.

## SQL Scripts
The following `SQL scripts` are included in this repository:

create_tables.sql: creates the database tables and constraints.
insert_data.sql: inserts sample data into the tables.
sample_queries.sql: includes sample queries to retrieve data from the tables.

## Sample Queries
The sample_queries.sql script includes the following sample queries:

Retrieve the `first name`, `last name`, and `price` of bills for `customers` who have bills with a price greater than 55.
Retrieve the department name and number of employees in each department.
Update the address of a customer with a specific ID.
Delete subscriptions from a specific supplier.
Conclusion
This database project provides a basic structure for a tele call company's database. Feel free to use this as a starting point for your own database project or to build upon it further.

# iLabs-PHP-Service-Broker
New PHP based service broker software for NI instrument based labs

## To enable this run on your local host, 
Clone and change the config file to be alligned to your database settings.
Then create a database called ilabs and export the sql file in the root directory called ilabs.sql
Within the config file in the config directory, edit the base URL to match your local host directory of the project.

To configure the email address for verification, go to the controllers directory and open the students php file.

## Scheduling
This is a separate platform
To access it, the folder with the code is called appointment and all you have to do is edit the config file in the appointment root directory to the correct Base URL and database names respectively.
Create a database called  alert and import the alert sql file in the appointment directory.

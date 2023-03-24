# clubHub
A hub for clubs. School project.
To run this on a local server, change the database information in header.php, and structure the database as specified below.
Written in procedural PHP and MySQLi, with a MySQL database. Most of the styling is done with Bootstrap.

## Site Explanation

The index.php page is a placeholder for the user profiles that are pending when each student gets an account to save/join clubs etc. 

browse.php currently only sorts by the 4 broad groups of Competitive Teams, Service Groups, Affinity Groups and Recreational Clubs, though later we can implement a tagging system where people can sort through the groups with keyword searches. 

schedule.php is an adhoc schedule, and can be easily expanded to include before and after school time slots in which many teams meet through the addition of another column

The captain's portal is where the bulk of the work was. The sign-up form does not immediately create a club, and instead are sent to "quarantine", where the club request can be accepted or denied through the Administrator Portal. The meeting booking widget only allows meetings to be booked if that room is not already booked for that day. Login data is stored in $_SESSION variables until one logs out. 

The Administrator's Portal can be accessed through a link at the bottom of the login page for the club captain's portal. 


##Database Structure

- There are 4 tables in the database, all "id" columns are primary keys, are "int" types and auto-increment, all other data types are "text" unless otherwise specified:

- club has columns id, name, password, category, bio, meet

- clubs_quar has columns id, name, password, category, bio, meet (same as club)

- meet has columns id, date (data type "date"), club and room

- posts has columns id, timestamp (data type "timestamp", default value is CURRENT_TIMESTAMP), title, info, user.

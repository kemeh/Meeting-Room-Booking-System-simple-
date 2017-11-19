Offices
Add a new Office 
There should be an option to be add new offices in the system. The necessary information for each office that should be filled is:
    • Name of the office
    • Address
    • Phone
    • Timezone
    • isActive - when we adding a new office the default value of this field should be “active”. We will use it to check is the selected office is operational or not.
Edit the Office information 
We need and the option to correct the filled information about the offices which were add in the system. All the information about the office should be editable from here. There should be one additional field - “isActive”.  The users with permissions to change this status to active or inactive, depending if the selected office is operational or not.  

Meeting Rooms
Add a new Meeting Room
User should select first for which office would like to add a new meeting room. The form with the room information should look something like this:
    • Office - in which office is this meeting room;
    • Name of the meeting room
    • Capacity - how many people could sit there;
    • Multimedia - is the room has a multimedia?
    • Workstations - is the room has setup workstations there?
    • Whiteboard - is the room has a whiteboard?
    • Status

Edit a Meeting Room information
All the information about meeting rooms should be editable. So we need a view where this would be possible. From this view users should be able to change the value of the isActive field, regarding inactivate a current room.

Reservations
Make a reservation
Users should be able to make a reservation for a specific room for a selected time frame. To do so they first need to select the office they are and for which room they would like to make a reservation. 
One room should not be able to be reserved from more that one person at the same time. 
This means that if one person reserves the room from 15:20 to 15:45. Second person should not be able to reserve the same room from 15:40 to 16:00. But second person should be able to reserve it from 15:45 to 16:00. The only time overlapping that is allowed is if the minute of the end of reservation1 is the same as the time of the start of reservation2.

Edit a reservation
Users should be able to edit only the reservations they’ve made. When a reservation is edited. The rule for the time overlapping should be followed. For example if a person decides to expands his current reservation of the room from 30 min to 45 min. If this expansion covers the time of the reservation after that. User should be alert that such action can not be done. 
Example:
Reservation 1 - Monday from 14:30 to 15:00
Reservation 2 - Monday from 15:10 to 15:30
If the user who made a “Reservations 1” decides to make the meeting from 30min to 45min (from 14:30 to 15:15), this user should see alert like this:
Warning: Changes you’ve requested could not be applied. There is another reservation from 15:10 to 15:30!

Preview a reservation
Users should be able to preview the an existing reservation no matter if the reservation is made from them or not. They should be able to see the time for which the room is reserved and by whom. 

Users
User Roles
There should have different roles of the users.
    • Administrator - full access to the system
    • User - some of the functionalities won’t be available to the users with role.

Users Permissions
Since we have different user roles we need to say what are the limitations of each user role.
Administrator has full access to the system.
User should have access to:
    • Add new reservations
    • Edit reservation made by them
    • Preview all the reservations 
    • Change his profiles password
    • Change his profile information

Add Users
When a new users is added into the system this is the required information:
    • Username
    • Email address
    • Password
    • First name
    • Last name
    • Role
    • Timezone
    • Office
    • isActive - default: active, this field should not be displayed in “add user form”.
Edit Users
All of the user information should be editable. The field isActive should be displayed here, so if any users should be stopped, the value of this field should be changed to “inactive”

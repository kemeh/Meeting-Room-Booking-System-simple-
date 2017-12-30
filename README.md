Offices<br />
Add a new Office <br />
There should be an option to be add new offices in the system. The necessary information for each office that should be filled is:<br />
    • Name of the office<br />
    • Address<br />
    • Phone<br />
    • Timezone<br />
    • isActive - when we adding a new office the default value of this field should be “active”. We will use it to check is the selected office is operational or not.<br />
Edit the Office information <br />
We need and the option to correct the filled information about the offices which were add in the system. All the information about the office should be editable from here. There should be one additional field - “isActive”.  The users with permissions to change this status to active or inactive, depending if the selected office is operational or not.  <br />

Meeting Rooms<br />
Add a new Meeting Room<br />
User should select first for which office would like to add a new meeting room. The form with the room information should look something like this:<br />
    • Office - in which office is this meeting room;<br />
    • Name of the meeting room<br />
    • Capacity - how many people could sit there;<br />
    • Multimedia - is the room has a multimedia?<br />
    • Workstations - is the room has setup workstations there?<br />
    • Whiteboard - is the room has a whiteboard?<br />
    • Status<br />

Edit a Meeting Room information<br />
All the information about meeting rooms should be editable. So we need a view where this would be possible. From this view users should be able to change the value of the isActive field, regarding inactivate a current room.<br />

Reservations<br />
Make a reservation<br />
Users should be able to make a reservation for a specific room for a selected time frame. To do so they first need to select the office they are and for which room they would like to make a reservation. <br />
One room should not be able to be reserved from more that one person at the same time. 
This means that if one person reserves the room from 15:20 to 15:45. Second person should not be able to reserve the same room from 15:40 to 16:00. But second person should be able to reserve it from 15:45 to 16:00. The only time overlapping that is allowed is if the minute of the end of reservation1 is the same as the time of the start of reservation2.
<br />
Edit a reservation<br />
Users should be able to edit only the reservations they’ve made. When a reservation is edited. The rule for the time overlapping should be followed. For example if a person decides to expands his current reservation of the room from 30 min to 45 min. If this expansion covers the time of the reservation after that. User should be alert that such action can not be done. <br />
Example:<br />
Reservation 1 - Monday from 14:30 to 15:00<br />
Reservation 2 - Monday from 15:10 to 15:30<br />
If the user who made a “Reservations 1” decides to make the meeting from 30min to 45min (from 14:30 to 15:15), this user should see alert like this:<br />
Warning: Changes you’ve requested could not be applied. There is another reservation from 15:10 to 15:30!<br /><br />

Preview a reservation<br />
Users should be able to preview the an existing reservation no matter if the reservation is made from them or not. They should be able to see the time for which the room is reserved and by whom. <br /><br />

Users<br />
User Roles<br />
There should have different roles of the users.<br />
    • Administrator - full access to the system<br />
    • User - some of the functionalities won’t be available to the users with role.<br /><br />

Users Permissions<br />
Since we have different user roles we need to say what are the limitations of each user role.<br />
Administrator has full access to the system.<br />
User should have access to:<br />
    • Add new reservations<br />
    • Edit reservation made by them<br />
    • Preview all the reservations <br />
    • Change his profiles password<br />
    • Change his profile information<br /><br />

Add Users<br />
When a new users is added into the system this is the required information:<br />
    • Username<br />
    • Email address<br />
    • Password<br />
    • First name<br />
    • Last name<br />
    • Role<br />
    • Timezone<br />
    • Office<br />
    • isActive - default: active, this field should not be displayed in “add user form”.<br />
Edit Users<br />
All of the user information should be editable. The field isActive should be displayed here, so if any users should be stopped, the value of this field should be changed to “inactive”

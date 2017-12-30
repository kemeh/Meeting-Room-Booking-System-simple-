Offices<br />
Add a new Office <br />
Each office has:<br />
    • Name of the office<br />
    • Address<br />
    • Phone<br />
    • Timezone<br />
    • isActive - default is active<br />
Edit the Office information <br />
<br />

Meeting Rooms<br />
Add a new Meeting Room<br />
Each meeting room holds information for:<br />
    • Office - in which office is this meeting room;<br />
    • Name of the meeting room<br />
    • Capacity - how many people could sit there;<br />
    • Multimedia - is the room has a multimedia?<br />
    • Workstations - is the room has setup workstations there?<br />
    • Whiteboard - is the room has a whiteboard?<br />
    • Status<br />

Edit a Meeting Room information<br />
<br />

Reservations<br />
Make a reservation<br />
Users can make a reservation for a specific room and a selected time frame.<br />
One room is not available to be reserved from more that one person at the same time. 
This means that if one person reserves the room from 15:20 to 15:45. Second person should is not able to reserve the same room from 15:40 to 16:00. But second person is able to reserve it from 15:45 to 16:00. The only time overlapping that is allowed is if the minute of the end of reservation1 is the same as the time of the start of reservation2.
<br />
Edit a reservation<br />
Users are able to edit only the reservations they’ve made. When a reservation is edited. The rule for the time overlapping is followed. For example if a person decides to expands his current reservation of the room from 30 min to 45 min. If this expansion covers the time of the reservation after that user is getting alert that such action can not be done. <br />
Example:<br />
Reservation 1 - Monday from 14:30 to 15:00<br />
Reservation 2 - Monday from 15:10 to 15:30<br />
If the user who made a “Reservations 1” decides to make the meeting from 30min to 45min (from 14:30 to 15:15), this user sees alert like this:<br />
Warning: Changes you’ve requested could not be applied. There is another reservation from 15:10 to 15:30!<br /><br />

Preview a reservation<br />
Users are able to preview the existing reservation no matter if the reservation is made from them or not.<br /><br />

Users<br />
User Roles<br />
There are two different roles of the users.<br />
    • Administrator - full access to the system<br />
    • User - some of the functionalities won’t be available to the users with role.<br /><br />

Users Permissions<br />
Since we have different user roles we need to say what are the limitations of each user role.<br />
Administrator has full access to the system.<br />
User have access to:<br />
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

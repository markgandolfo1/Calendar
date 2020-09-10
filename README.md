# Calendar

View the website here: http://ec2-3-15-199-50.us-east-2.compute.amazonaws.com/~markgandolfo/calendar.html

This website, which was constructed on an AWS server, features a digital calendar that allows users to add and remove events dynamically. I used JavaScript to process user interactions at the web browser, without ever requiring the browser to refresh after the initial web page load. I utilized AJAX to run server-side scripts that query a MySQL database to save and retrieve information, such as user accounts and events.

Features:
  - A month-by-month view of the calendar that has no limit on how forward or backwards it can go
  - Users can register and log in to the website, supported by a MySQL database
  - Unregistered users cannot see events on the calendar
  - Registered users can add events, consisting of a date, time and title
  - Registered users can delete their events, but not the events of others, supported by AJAX requests
  - All actions are performed over AJAX, without ever needing to reload the page
  - Event can be tagged as 'important'
  - Group events can be created which appear on the current users calendar as well as another users calendar
  - There are three different pre-made themes that to select from to change the color scheme of the calendar, as well as the option to make a custom theme





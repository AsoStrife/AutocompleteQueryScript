Welcome to Autocomplete Query Script!
-

Files

- /application/controller/welcome 
- /application/view/welcome_message 
- /js/autocomplete.js 
- /sql/cities.sql

Libraries
- /js/jquery-1.12.3.min.js 
- /js/bootstrap.min.js
- /js/autocomplete.js 


How it work
--

When user type in the textbox, a keyup event is triggered from autocomplete.js.

autocomplete.js launch an ajax request to Welcome/getCity in order to execute a query to get all cities that start with the input text given.

getCity() method return a json format data in order to be parsed by autocomplete.js an added into a textbox.

Demo:  [Click here](http://autocompletequeryscript.andreacorriga.com/)
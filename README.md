# socialyou

For this test I have setup a Laravel project. 

The source code for test 1 can be found at socialyou/app/Http/Controllers/MoviesController.php and a copy at php.php
The source code for test 2 can be found at socialyou/resources/views/welcome.blade.php and a copy at html_css_jquery.html
The source code for test 3 can be found at javascript.js

1) PHP test

Movies can be added to the database using the addmovie/title/releaseYear API call. If later you try to add the same movie title an error message will appear. This check is case insensitive avoiding duplicate movie names as "titanic" and "Titanic".

Movies can be deleted using the removemovie/title API call. This check is again case insensitive. If you try to delete a movie that does not exist, an error message will be displayed.

The API calls are located at www.testsocialyou.com/api/addmovie/title/releaseYear and www.testsocialyou.com/api/removemovie/title.

The problem with this is that some movies have the same title, a first easy solution could be to identify a movie based on its title and releaseYear.

---------------------------------------------------------------------------------------------------------------------

2) HTML/CSS/JQuery test

Students can inscribe for 4 courses, the default selected course will be "Javascript". Students should fill in a first name and last name, otherwise an alert message will appear. 

The result is live on www.testsocialyou.com

---------------------------------------------------------------------------------------------------------------------

3) JavaScript test

The database variable is declared outside of the model function, otherwise it would be instantiated every time the function would be called. For now only objects get added (action "add"), that have a least one property that is part of the schema. 

An improvement would be to always force an id to be part of the object that will be added, and furthermore it should only be possible to add each id once.

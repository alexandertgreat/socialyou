<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
                font-size: 18px;
            }

            .form-container {
                width: 300px;
                border: 1px solid grey;
                padding: 15px;
            }

            .margin-top-50 {
                margin-top: 50px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .d-block {
                display: block;
            }

            .bold {
                font-weight: bold;
            }

            .title {
                font-size: 24px;
            }

            select, input {
                width: 100%;
                height: 34px;
                box-sizing:border-box;
                padding: 5px;
            }

            .form-group {
                margin: 10px 0px;
            }

            label {
                margin-bottom: 5px;
            }

            .grid-container {
              display: grid;
              grid-template-columns: auto auto auto;
              padding: 10px;
              margin-top: 30px;
            }

            .grid-item {
              background-color: rgba(255, 255, 255, 0.8);
              outline: 1px solid rgba(0, 0, 0, 0.8);
              padding: 10px;
              text-align: center;
            }

            button {
                background-color: #008CBA;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                margin-top: 15px;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center margin-top-50">
            <div class="content">
                <div class="form-container">
                    <div class="title bold">
                        Sign up
                    </div>
                    <div class="form-group">
                        <label class="d-block" for="male">Course</label>
                        <select id="course">
                            <option value="JavaScript">JavaScript</option>
                            <option value="PHP">PHP</option>
                            <option value="JAVA">JAVA</option>
                            <option value="C">C++</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="d-block" for="male">First name</label>
                        <input class="d-block" type="text" id="firstName" required>
                    </div>
                    <div class="form-group">
                        <label class="d-block" for="male">Last name</label>
                        <input class="d-block" type="text" id="lastName" required>
                    </div>
                    <div class="form-group">
                        <button type="button" onclick="inscribeStudent()">Inscribe</button>
                    </div>
                </div>
                <div class="grid-container" id="grid">
                </div>
            </div>
        </div>
    </body>

        <script>
            add_to_grid('<b>firstName<b>');
            add_to_grid('<b>lastName<b>');
            add_to_grid('<b>course<b>');

            function inscribeStudent() {
                var firstName = $("#firstName").val();
                var lastName = $('#lastName').val();
                var course = $('#course').val();
                if(firstName.length < 1 || lastName.length < 1) {
                    alert('Please fill in a first and last name!');
                } else {
                    add_to_grid(firstName);
                    add_to_grid(lastName);
                    add_to_grid(course);
                    $('#firstName').val('');
                    $('#lastName').val('');
                    $('#course').val("JavaScript");
                }
            }

            function add_to_grid(text) {
                $('#grid').append('<div class="grid-item">'+text+'</div>');    
            }

        </script>
    </body>
</html>

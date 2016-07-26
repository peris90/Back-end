<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <form role="form" method="post" action="">
             <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{$student->name}}" />
            </div>
             <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" value="{{$student->email}}"/>
            </div>
             <div class="form-group">
            <label for="course">Course</label>
            <input class="form-control" type="text" name="course" value="{{$student->course}}" />
            </div>
            <input type="hidden" name="_token" value = "{{csrf_token()}}"/>
            <input class="form-control" type="submit" value="Submit"/>
        </form>
    </body>
</html>
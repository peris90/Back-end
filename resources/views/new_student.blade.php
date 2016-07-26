 <form method="post" action="/students/add">
            <label for="name">Name</label>
            <input type="text" name="name"/>
            <label for="email">Email</label>
            <input type="text" name="email"/>
            <label for="course">Course</label>
            <input type="text" name="course"/>
            <input type="hidden" name="_token" value = "{{csrf_token()}}"/>
            <input type="submit" value="Submit"/>
        </form>
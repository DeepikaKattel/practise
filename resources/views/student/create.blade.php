<!Doctype html>
<head>Student Form</head>
<body>
    <form method="post" action="{{route('store')}}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control"><br><br>

        <label for="name">Roll</label>
        <input type="text" name="roll" class="form-control"><br><br>

        <label for="name">Class</label>
        <input type="text" name="class" class="form-control"><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
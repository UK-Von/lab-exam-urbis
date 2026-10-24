
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"
                   value="{{ old('name') }}" required>
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"
                   value="{{ old('email') }}" required>
        </div>

        <br>

        <div>
            <label for="course_id">Course:</label>
            <select id="course_id" name="course_id" required>
                <option value="">Select a course</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}"
                        {{ old('course_id') == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <button type="submit">Save Student</button>
    </form>

    <br>

    <a href="{{ route('students.index') }}">Back to Students</a>
</body>
</html>

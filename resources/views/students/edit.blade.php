
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"
                   value="{{ old('name', $student->name) }}" required>
        </div>

        <br>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"
                   value="{{ old('email', $student->email) }}" required>
        </div>

        <br>

        <div>
            <label for="course_id">Course:</label>
            <select id="course_id" name="course_id" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}"
                        {{ old('course_id', $student->course_id) == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <button type="submit">Update Student</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Cancel</a>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Manager</title>
</head>
<body>
    <h1>Student Manager</h1>

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}">Add Student</a>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->course->name }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}">View</a>

                        @can('update', $student)
                            | <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                        @endcan

                        @can('delete', $student)
                            |
                            <form action="{{ route('students.destroy', $student->id) }}"
                                  method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this student?')">
                                    Delete
                                </button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>

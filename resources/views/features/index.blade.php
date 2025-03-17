<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tests.css') }}">
</head>
<body>
    <div class="container mt-4">
        <div class="table-responsive" role="region" tabindex="0">
            <table class="table table-striped table-bordered">
            <h1>Laravel Features</h1>
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Feature Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feature as $feature)
                       <tr>
                            <td>{{ $feature->id }}</td>
                            <td>{{ $feature->name }}</td>
                            <td>{{ $feature->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <caption>©2025 Web Development Technologies - Midterm Exam</caption>
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
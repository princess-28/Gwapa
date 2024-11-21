<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubuntu Server - PHP Deployment</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: white;
            border-radius: 10px;
            padding: 20px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-submit {
            display: block;
            width: 100%;
            background-color: #0d6efd;
            color: white;
        }
        .btn-submit:hover {
            background-color: #084298;
        }
        .btn-view-table {
            display: block;
            width: 100%;
            background-color: #198754;
            color: white;
            margin-top: 10px;
        }
        .btn-view-table:hover {
            background-color: #145d38;
        }
    </style>
</head>
<body>
    <div class="form-container col-md-6">
        <p class="form-title">Ubuntu Server - PHP Deployment</p>
        <form action="submit_form.php" method="POST">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" id="firstname" name="Firstname" class="form-control" placeholder="Enter your first name" required>
            </div>
            <div class="mb-3">
                <label for="middle" class="form-label">Middle Name:</label>
                <input type="text" id="middle" name="Middle" class="form-control" placeholder="Enter your middle name">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" id="lastname" name="Lastname" class="form-control" placeholder="Enter your last name" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age:</label>
                <input type="number" id="age" name="Age" class="form-control" placeholder="Enter your age" min="1" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" id="address" name="Address" class="form-control" placeholder="Enter your address" required>
            </div>
            <div class="mb-3">
                <label for="course-section" class="form-label">Course and Section:</label>
                <input type="text" id="course-section" name="CourseAndSection" class="form-control" placeholder="Enter your course and section" required>
            </div>
            <button type="submit" name="submit" class="btn btn-submit">Submit</button>
        </form>
        <!-- Button to view the table -->
        <a href="table.php" class="btn btn-view-table">View Submitted Data</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
</body>
</html>

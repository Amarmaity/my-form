<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Enter your Details</h2>
    <form method='post'  action="{{ route('insert') }}">
    @csrf

        <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" name="firstName" placeholder="Enter your first name" required>
        </div>
        <div class="form-group">
            <label for="middleName">Midle Name:</label>
            <input type="text" class="form-control" name="middleName" placeholder="Enter your middle name">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" name="lastName" placeholder="Enter your last name" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
            <label for="email">Email ID:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" name="address" rows="3" placeholder="Enter your address" required></textarea>
        </div>
        <div class="form-group">
            <label for="pin">PIN:</label>
            <input type="text" class="form-control" name="pin" placeholder="Enter your PIN" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" onclick="resetForm()">Cancel</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function resetForm() {
        document.querySelector("form").reset();
    }
</script>
</body>
</html>
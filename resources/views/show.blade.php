<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Bootstrap Scrollable Table</title>
    <style>
        .table-container {
            max-height: 400px; /* Set desired height */
            overflow-y: auto; /* Enable vertical scrolling */
            position: relative; /* To position the dropdown relative to the table */
        }
        
        /* Dropdown menu to position it at the top right of the table */
        .dropdown-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        #three-dot {
            color: black; /* Set the ellipsis color to black */
            font-size: 20px; /* Optional: Adjust the size of the icon */
        }
        
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Data Table</h2>
    
    <!-- Table container with dropdown at top-right -->
    <div class="table-container">
        <!-- Three-dot menu (ellipsis) -->
        <div class="dropdown-container">
            <div class="dropdown">
                <button class="btn btn-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v" id="three-dot"></i> <!-- FontAwesome icon for three dots -->
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{route('')}} ">Modify</a></li>
                    <li><a class="dropdown-item" href="#">Delete </a></li>
                </ul>
            </div>
        </div>
        
        <!-- Your table content goes here -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Pin</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add your data rows here -->
                @foreach($data as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Firstname}}</td>
                    <td>{{$item->Middlename}}</td>
                    <td>{{$item->Lastname}}</td>
                    <td>{{$item->phonenumber}}</td>
                    <td>{{$item->emailid}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->pin}}</td>
                </tr> 
               @endforeach  
            </tbody>
        </table>
    </div>
</div>

<!-- FontAwesome script for the three-dot icon -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

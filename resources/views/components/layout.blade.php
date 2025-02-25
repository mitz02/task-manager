<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$heading}}</title>
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- jQuery & jQuery UI for Drag & Drop -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .button-group a{
        text-decoration: none;
         margin: 20px;
         color:rgb(9, 73, 23);
        margin-bottom: 10px;
        }

        h1 {
            color: #218838;
            
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        input, select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            flex: 1;
        }

        button {
            padding: 8px 15px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #218838;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: white;
            margin: 5px 0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: grab;
            flex-wrap: wrap;
        }

        .task-info {
            flex-grow: 1;
            text-align: left;
            margin-left: 10px;
        }

        .task-title {
            font-weight: bold;
        }

        .project-name {
            font-size: 12px;
            color: #666;
        }

        .delete-btn {
            background: #dc3545;
            padding: 5px 10px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .delete-btn:hover {
            background: #c82333;
        }

        .drag-handle {
            cursor: grab;
            color: #777;
            font-size: 1.2em;
            margin-right: 10px;
        }
        .project-list li{
            border:none;
            background: #f4f4f4;
        }

        /* Responsive Styling */
        @media (max-width: 480px) {
            form {
                flex-direction: column;
                gap: 5px;
            }

            input, select, button {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    {{$slot}}

</body>
</html>

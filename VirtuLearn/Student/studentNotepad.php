<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'Notepad');
define('PAGE', 'studentNotepad');
include('./stuInclude/header.php'); 
include_once('../dbConnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Notepad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        textarea {
            width: 100%;
            height: 300px; /* Increased height of the notepad */
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: vertical;
            font-size: 16px;
            line-height: 1.5;
            box-sizing: border-box;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #1c0909;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Personal Notepad</h1>
        <textarea id="noteArea" placeholder="Write your notes here..." rows="10" cols="50"></textarea>
        <button onclick="saveNote()">Save Note</button>
    </div>

    <script>
        // Function to save note in local storage
        function saveNote() {
            var note = document.getElementById("noteArea").value;
            localStorage.setItem("personalNote", note);
            alert("Note saved successfully!");
        }

        // Function to load note from local storage
        window.onload = function() {
            var savedNote = localStorage.getItem("personalNote");
            if (savedNote !== null) {
                document.getElementById("noteArea").value = savedNote;
            }
        };
    </script>
</body>
</html>



<?php
include('./stuInclude/footer.php'); 
?>

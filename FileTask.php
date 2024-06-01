<!DOCTYPE html>
<html>
<head>
    <title>File Task</title>
</head>
<body>
    <form action="FileTask.php" method="post">
        <label for="filename">File Name:</label><br>
        <input type="text" id="filename" name="filename"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br>
        <label for="task">Task:</label><br>
        <select id="task" name="task">
            <option value="create">Create Task</option>
            <option value="read">Read</option>
            <option value="append">Append</option>
        </select><br>
        <input type="submit" name="done" value="Done">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filename = $_POST["filename"];
        $message = $_POST["message"];
        $task = $_POST["task"];

        if ($task == "create") {
            if (!file_exists("data/$filename")) {
                file_put_contents("data/$filename", $message);
                echo "File created successfully.";
            } else {
                echo "File doesn't exist.";
            }
        } else if ($task == "read") {
            if (file_exists("data/$filename")) {
                $contents = file_get_contents("data/$filename");
                echo "File contents: $contents";
            } else {
                echo "File doesn't exist.";
            }
        } else if ($task == "append") {
            if (file_exists("data/$filename")) {
                file_put_contents("data/$filename", $message, FILE_APPEND);
                echo "File appended successfully.";
            } else {
                echo "File doesn't exist.";
            }
        }
    }
?>
</body>
</html>
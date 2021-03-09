<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border='1'>
        <tr>
            <th>
                <h1>REGISTER ACCOUNT</h1>
            </th>

        </tr>

        <tr>
            <td>
                <form action="handle.php" method="post">
                    <h2>Fill the Form</h2>
                    <label for="">Username</label>
                    <input type="text" name="user" id="" required><br>
                    <label for="">User name</label>
                    <input type="text" name="name" id="" required><br>
                    <label for="">Password:</label>
                    <input type="password" name="pass" id="" required><br>
                    <label for="">Password confirm</label>
                    <input type="password" name="conpass" id="" required><br>
                    <hr>
                    <label for="">Select image</label>
                    <input type="file" name="img" id="" size='50'><br>
                    <label for="">Type</label>
                    <select name="type" id="">
                        <option value="0">user</option>
                        <option value="1">admin</option>
                    </select><br>
                    <button Type="submit">ตกลง</button>
                    <button type="reset">รีเซ็ต</button>
                    <a href="home.php">back to main</a>
                </form>

            </td>

        </tr>
        <tr>


    </table>
</body>

</html>
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <form action="student.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Name :</td>
                    <td>
                        <input type="text" name="name" placeholder="Enter your name">
                    </td>
                </tr>
                <tr>
                    <td>Email : </td>
                    <td>
                        <input type="email" name="email" placeholder="Enter your Email id">
                    </td>
                </tr>
                <tr>
                    <td>Phone Number : </td>
                    <td>
                        <input type="phone" name="phone" placeholder="Enter your phone number">
                    </td>
                </tr>
                <tr>
                    <td>Gender : </td>
                    <td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                </tr>
                <tr>
                    <td>Stream : </td>
                    <td>
                        <input type="radio" name="stream" value="arts">
                        <label for="arts">Arts</label><br>
                        <input type="radio" name="stream" value="science">
                        <label for="science">Science</label><br>
                        <input type="radio" name="stream" value="commerce">
                        <label for="commerce">Commerce</label><br>
                    </td>
                </tr>
                <tr>
                    <td>Remark : </td>
                    <td>
                        <input type="textarea" name="remark" >
                    </td>
                </tr>
                <tr>
                    <td>State : </td>   
                     <td>
                        <select name="state">
                        <label for="state"></label> 
                        <option value="choose yours">Select</option>
                        <option value="Andhra Pradesh" name="state">Andhra Pradesh</option>
                        <option value="Bihar" name="state">Bihar</option>
                        <option value="Odisha" name="state">Odisha</option>
                       </select>
                    </td>
                </tr>
                <tr>
                    <td>Image: </td>
                    <td> <input type="file" name="uploadfile"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit">
                    </td>
                </tr>
            </table>
        </form>

    </body>
   
</html>
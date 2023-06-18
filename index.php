<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <form name="myForm" action="student3.php" onSubmit="return validate()" method="post">
        <table>
            <tr>
                <td>Name :</td>
                <td>
                    <input type="text" name="name" placeholder="Enter your name" maxlength="30" />
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
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
                </td>
            </tr>

            <tr>
                <td>State : </td>
                <td>
                    <select name="state">
                        <label for="state"></label>
                        <option value="Select">Select</option>
                        <option value="Andhra Pradesh" name="state">Andhra Pradesh</option>
                        <option value="Bihar" name="state">Bihar</option>
                        <option value="Odisha" name="state">Odisha</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Comment : </td>
                <td>
                    <input type="textarea" name="comment" placeholder="Enter your message here...">
                </td>
            </tr>


            <tr>
                <td>
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
    <script type="text/javascript">
        function validate() {
            let x = document.forms["myForm"]["name"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
            let y = document.forms["myForm"]["email"].value;
            if (y == "") {
                alert("Email must be filled out");
                return false;
            }
            var phone = document.myForm.phone;
            if (phone.value.length <= 0) {
                alert("Enter phone number");
                return false;
            }
            var state = document.myForm.state;
            if (state.value == "Select") {
                alert("Choose your State");
                return false;
            }

        }
    </script>

</body>

</html>
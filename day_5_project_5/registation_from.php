<form action="" method="POST" id="registrationFrom">
    <table>
        <tr>
            <td>First name:</td>
            <td>
                <input type="text" name="first_name" id="first_name">
                <span id="fn_error"></span>
            </td>
        </tr>
        <tr>
            <td>Last name:</td>
            <td>
                <input type="text" name="last_name" id="last_name">
                <span id="ln_error"></span>
            </td>
        </tr>
        <tr>
            <td>Email Adrees:</td>
            <td>
                <input type="email" name="email" id="email">
                <span id="email_error"></span>
            </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td>
                <input type="password" name="password" id="password">
                <span id="pw_error"></span>
            </td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td>
                <input type="password" name="confirm_password" id="confirm_password">
                <span id="cm_pw_error"></span>
            </td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gender" id="male" value="Male">Male
                <input type="radio" name="gender" id="female" value="Female">Female
            </td>
        </tr>
        <tr>
            <td>Skills:</td>
            <td>
                <input type="checkbox" name="html" id="html">HTML
                <input type="checkbox" name="css" id="css">CSS
                <input type="checkbox" name="php" id="PHP">CSS
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btn" id="submit_btn">
            </td>
        </tr>
    </table>
</form>
<script src="assets/front/js/jquery-3.5.1.js"></script>
<script src="script.js"></script>
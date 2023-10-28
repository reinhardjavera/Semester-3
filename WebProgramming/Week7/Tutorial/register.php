<h1>Register</h1>
<br />
<form action="register_process.php" method="post">
    <input type="text" name="username" placeholder="Username" />
    <br />
    <input type="password" name="password" placeholder="Password" />
    <br />
    <select name="role" required>
        <option value="">-- Role --</option>
        <option value="student">Student</option>
        <option value="lecturer">Lecturer</option>
    </select>
    <br />
    <button type="submit">Register</button>
</form>
<h1>Register</h1>
<form action="../php/register.php" method="post">
    Voornaam:<br>
    <input type="text" name="vn" value="">
    <br><br>
    Achternaam: <br>
    <input type="text" name="an" value="">
    <br><br>
    Afdeling: <br>
    <select name="afd">
        <option value=1>Inkoop</option>
        <option value=21>Verkoop</option>
        <option value=3>Management</option>
        <option value=4>Personeelszaken</option>
        <option value=5>IT</option>
    </select>
    <br><br>
    Username:<br />
    <input type="text" name="username" value="" />
    <br /><br />
    E-Mail:<br />
    <input type="text" name="email" value="" />
    <br /><br />
    Password:<br />
    <input type="password" name="password" value="" />
    <br /><br />
    Admin: <br>
    <input type="checkbox" name="status">
    <br><br>
    <input type="submit" value="Register" />
</form>
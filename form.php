<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="thanks.php" method="POST">
        <div>
            <label for="lastname">Lastname :</label>
            <input type="text" id="lastname" name="user_lastname" required>
        </div>
        <div>
            <label for="firstname">Firstname :</label>
            <input type="text" id="firstname" name="user_firstname" required>
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email" required>
        </div>
        <div>
            <label for="telephone">Telephone :</label>
            <input type="telephone" id="telephone" name="user_phone" required>
        </div>
        <div>
            <label for="object">Object :</label>
            <select id="object" name="user_object" required>
                <option value="#1">#1</option>
                <option value="#2">#2</option>
                <option value="#3">#3</option>
                <option value="#4">#4</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>

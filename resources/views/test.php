<html>
<body>
<h3>this is for tests</h3>
<h2>Contact List (<?php echo $contactCount; ?> contacts)</h2>
<ul>
    <?php foreach ($contactList as $contact): ?>
        <li>
            <strong><?php echo $contact->name ?></strong>
            <a href="mailto:<?php echo $contact->email; ?>"><?php echo $contact->email; ?></a>
            <a href="?id=<?php echo $contact->id; ?>">编辑</a>
        </li>
    <?php endforeach; ?>
</ul>

<form action="test/store" method="post">
    <label>name:</label>
    <input type="text" name="name"/>
    <label>email:</label>
    <input type="text" name="email" />
    <input type="submit" />
</form>
</body>
</html>
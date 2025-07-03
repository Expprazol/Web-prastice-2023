<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>exp75.contact.np.com</title>
</head>
<body>
    <div id="header">
        <nav>
            <div class="logo-container">
                <a href="index.html"><img src="logo.png" alt="Logo" class="logo"></a>
            </div>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="galary.html">Galary</a></li>
            <li><a href="signin.html">Sign in</a></li>
            </ul>
            <div id="search-bar">
                <input type="text" placeholder="Search...">
                <button type="button">Search</button>
            </div>
        </nav>
    </div>

    <div id="main-content">
        <h2>Contact Form</h2>
        <form action="#" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

    <div id="footer">
        <p>&copy; 2024 Prazol Sapkota | Designed by Prazol</p>
    </div>
</body>
</html>

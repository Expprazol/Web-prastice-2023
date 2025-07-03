<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cover-styles.css">
    <title>EXP75</title>
</head>
<body>
    <div id="cover-page">
        <div class="cover-content">
            <h1>WELCOME <br> TO<br>EXP75 WEBSITE</h1>
            <br>
            <div class="cover-buttons">
                <button onclick="enterWeb()">Enter into web</button>
                <button onclick="exitWeb()">Exit the web</button>
            </div>
        </div>
    </div>

<style>
 body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background: url('bb.avif');
    background-size: cover;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

#cover-page {
    text-align: center;
    background: rgba(0, 0, 0, 0.5); 
    padding: 50px;
    border-radius: 10px;
}

.cover-content h1 {
    font-size: 50px;
    margin-bottom: 30px;
}

.cover-buttons {
    display: flex;
    justify-content: center;
    gap: 50px;
}

.cover-buttons button {
    padding: 10px 20px;
    font-size: 19px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    background-color: #3498db;
    color: #fff;
    transition: background-color 0.3s;
}

.cover-buttons button:hover {
    background-color: #0c2231;
}

</style>
    <script>
        function enterWeb() {
            window.location.href = 'about.html'; 
        }

        function exitWeb() {
            window.close();
        }
    </script>
</body>
</html>

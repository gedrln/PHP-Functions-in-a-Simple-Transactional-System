<!DOCTYPE html>
<html>
<head>
    <title>Transaction Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4e73df;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2e59d9;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Simple Transaction System</h2>

    <form method="POST" action="process.php">
        <label>Item Name:</label>
        <input type="text" name="item_name" required>

        <label>Price:</label>
        <input type="number" name="price" step="0.01" required>

        <label>Quantity:</label>
        <input type="number" name="quantity" required>

        <button type="submit">Process Transaction</button>
    </form>
</div>

</body>
</html>
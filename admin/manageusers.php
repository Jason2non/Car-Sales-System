<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            margin: 20px;
        }

        /* User List Styling */
        .user-list {
            list-style-type: none;
            padding: 0;
        }

        .user-item {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-actions {
            display: flex;
        }

        .user-actions button {
            margin-left: 10px;
            cursor: pointer;
            background-color: #333;
            color: white;
            border: none;
            padding: 8px;
            border-radius: 3px;
        }

        /* Form Styling */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        form label {
            display: block;
            margin-bottom: 8px;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        form button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <h1><strong>USER MANAGEMENT BOARD</strong></h1>
</header>

<div class="container">
    <ul class="user-list" id="userList">
        <!-- User items will be dynamically added here -->
    </ul>

    <form id="addUserForm">
        <h2>Add User</h2>
        <label for="userName">User Name:</label>
        <input type="text" id="userName" name="userName" required>

        <label for="userEmail">User Email:</label>
        <input type="email" id="userEmail" name="userEmail" required>

        <button type="button" onclick="addUser()">Add User</button>
        <button onclick="window.open('admin.php','_SELF')">Back</button>
    </form>
</div>

<script>
    // Sample data (replace with your backend logic)
    let users = [
        { name: "User 1", email: "user1@example.com" },
        { name: "User 2", email: "user2@example.com" },
        { name: "User 3", email: "user3@example.com" },
    ];

    // Function to render the user list
    function renderUserList() {
        const userList = document.getElementById("userList");
        userList.innerHTML = "";

        users.forEach((user, index) => {
            const listItem = document.createElement("li");
            listItem.classList.add("user-item");

            const userInfo = document.createElement("div");
            userInfo.textContent = `${user.name} - ${user.email}`;
            listItem.appendChild(userInfo);

            const actions = document.createElement("div");
            actions.classList.add("user-actions");

            const removeButton = document.createElement("button");
            removeButton.textContent = "Remove";
            removeButton.onclick = () => removeUser(index);
            actions.appendChild(removeButton);

            listItem.appendChild(actions);

            userList.appendChild(listItem);
        });
    }

    // Function to add a user
    function addUser() {
        const userName = document.getElementById("userName").value;
        const userEmail = document.getElementById("userEmail").value;

        if (userName && userEmail) {
            const newUser = { name: userName, email: userEmail };
            users.push(newUser);
            renderUserList();
            clearForm();
        }
    }

    // Function to remove a user
    function removeUser(index) {
        users.splice(index, 1);
        renderUserList();
    }

    // Function to clear the form
    function clearForm() {
        document.getElementById("userName").value = "";
        document.getElementById("userEmail").value = "";
    }

    // Initial rendering of the user list
    renderUserList();
</script>

</body>
</html>

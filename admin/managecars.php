<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management</title>
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

        /* Car List Styling */
        .car-list {
            list-style-type: none;
            padding: 0;
        }

        .car-item {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .car-actions {
            display: flex;
        }

        .car-actions button {
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
    h1{
            text_transform:uppercase;
        }
    </style>
</head>
<body>

<header>
    <h1>Car Management System</h1>
</header>

<div class="container">
    <ul class="car-list" id="carList">
        <!-- Car items will be dynamically added here -->
    </ul>

    <form id="addCarForm">
        <h2>Add Car</h2>
        <label for="carName">Car Name:</label>
        <input type="text" id="carName" name="carName" required>

        <label for="carModel">Car Model:</label>
        <input type="text" id="carModel" name="carModel" required>

        <button type="button" onclick="addCar()">Add Car</button>
        <button onclick="window.open('admin.php','_SELF')">Back</button>
    </form>
</div>

<script>
    // Sample data (replace with your backend logic)
    let cars = [
        { name: "Car 1", model: "Model 1" },
        { name: "Car 2", model: "Model 2" },
        { name: "Car 3", model: "Model 3" },
    ];

    // Function to render the car list
    function renderCarList() {
        const carList = document.getElementById("carList");
        carList.innerHTML = "";

        cars.forEach((car, index) => {
            const listItem = document.createElement("li");
            listItem.classList.add("car-item");

            const carInfo = document.createElement("div");
            carInfo.textContent = `${car.name} - ${car.model}`;
            listItem.appendChild(carInfo);

            const actions = document.createElement("div");
            actions.classList.add("car-actions");

            const removeButton = document.createElement("button");
            removeButton.textContent = "Remove";
            removeButton.onclick = () => removeCar(index);
            actions.appendChild(removeButton);

            listItem.appendChild(actions);

            carList.appendChild(listItem);
        });
    }

    // Function to add a car
    function addCar() {
        const carName = document.getElementById("carName").value;
        const carModel = document.getElementById("carModel").value;

        if (carName && carModel) {
            const newCar = { name: carName, model: carModel };
            cars.push(newCar);
            renderCarList();
            clearForm();
        }
    }

    // Function to remove a car
    function removeCar(index) {
        cars.splice(index, 1);
        renderCarList();
    }

    // Function to clear the form
    function clearForm() {
        document.getElementById("carName").value = "";
        document.getElementById("carModel").value = "";
    }

    // Initial rendering of the car list
    renderCarList();
</script>

</body>
</html>

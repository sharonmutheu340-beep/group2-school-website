
/* GREENFIELD ACADEMY
   JavaScript Practical Assessment
*/

// 1. Function to display a welcome message
function greet() {
    alert("Welcome to Greenfield Academy!");
}

// 2. Function to change text on the webpage
function changeMessage() {
    document.getElementById("message").innerHTML =
        "Welcome to Greenfield Academy. Education is the key to success!";
}

// 3. Function to calculate the sum of two numbers
function addNumbers() {
    let num1 = Number(document.getElementById("num1").value);
    let num2 = Number(document.getElementById("num2").value);

    document.getElementById("answer").innerHTML =
        "The sum is: " + (num1 + num2);
}

// 4. Function to calculate the average of three marks
function calculateAverage() {
    let mark1 = Number(document.getElementById("mark1").value);
    let mark2 = Number(document.getElementById("mark2").value);
    let mark3 = Number(document.getElementById("mark3").value);

    let average = (mark1 + mark2 + mark3) / 3;

    document.getElementById("average").innerHTML =
        "Average marks: " + average.toFixed(2);
}

// 5. Function to check student performance
function checkMarks() {
    let marks = Number(document.getElementById("marks").value);

    if (document.getElementById("marks").value === "") {
        document.getElementById("result").innerHTML =
            "Please enter your marks.";
    } else if (marks < 0 || marks > 100) {
        document.getElementById("result").innerHTML =
            "Enter marks between 0 and 100.";
    } else if (marks >= 50) {
        document.getElementById("result").innerHTML =
            "Congratulations! You have passed.";
    } else {
        document.getElementById("result").innerHTML =
            "You have failed. Keep working hard.";
    }
}

// 6. Function to clear the calculator
function clearCalculator() {
    document.getElementById("num1").value = "";
    document.getElementById("num2").value = "";
    document.getElementById("answer").innerHTML =
        "Answer will appear here.";
}

// 7. Function to display the current date
function showDate() {
    let today = new Date();

    document.getElementById("date").innerHTML =
        today.toLocaleDateString();
}

// 8. Function to validate a contact form
function validateForm() {
    let name = document.getElementById("studentName").value.trim();

    if (name === "") {
        alert("Please enter your name.");
        return false;
    }

    alert("Thank you, " + name + "! Your form has been checked.");
    return true;
}

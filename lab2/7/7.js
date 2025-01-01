function performCalculations() {
    const num1 = parseFloat(document.getElementById('num1').value);
    const num2 = parseFloat(document.getElementById('num2').value);

    if (isNaN(num1) || isNaN(num2)) {
        document.getElementById('results').innerHTML = "Please enter valid numbers.";
        return;
    }

    const addition = num1 + num2;
    const subtraction = num1 - num2;
    const multiplication = num1 * num2;
    const division = num2 !== 0 ? (num1 / num2).toFixed(2) : "Division by zero is not allowed.";

    document.getElementById('results').innerHTML = `
        Addition: ${addition} <br>
        Subtraction: ${subtraction} <br>
        Multiplication: ${multiplication} <br>
        Division: ${division}
    `;
}
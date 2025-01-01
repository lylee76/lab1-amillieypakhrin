function compareNumbers() {
    const num1 = parseInt(document.getElementById('num1').value);
    const num2 = parseInt(document.getElementById('num2').value);
    const num3 = parseInt(document.getElementById('num3').value);

    if (isNaN(num1) || isNaN(num2) || isNaN(num3)) {
        document.getElementById('result').innerHTML = "Please enter valid integers.";
        return;
    }

    const largest = Math.max(num1, num2, num3);
    const smallest = Math.min(num1, num2, num3);

    document.getElementById('result').innerHTML = `
        Largest Number: ${largest} <br>
        Smallest Number: ${smallest}
    `;
}
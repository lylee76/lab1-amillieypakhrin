function compareNumbers() {
    const num1 = parseInt(document.getElementById('num1').value);
    const num2 = parseInt(document.getElementById('num2').value);

    if (isNaN(num1) || isNaN(num2)) {
        document.getElementById('result').innerHTML = "Please enter valid integers.";
        return;
    }

    if (num1 > num2) {
        document.getElementById('result').innerHTML = `
            Larger Number: ${num1} <br>
            Smaller Number: ${num2}
        `;
    } else if (num1 < num2) {
        document.getElementById('result').innerHTML = `
            Larger Number: ${num2} <br>
            Smaller Number: ${num1}
        `;
    } else {
        document.getElementById('result').innerHTML = "Both numbers are equal.";
    }
}
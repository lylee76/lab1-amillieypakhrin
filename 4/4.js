function capitalizeFirstLetterEachWord(str) {
    return str
        .split(" ")
        .map(word => word.charAt(0).toUpperCase() + word.slice(1))
        .join(" ");
}
console.log(capitalizeFirstLetterEachWord(" i am amylee"));
console.log(capitalizeFirstLetterEachWord("student in pkmc")); 
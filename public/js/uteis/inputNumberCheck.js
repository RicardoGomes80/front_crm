$("input[type=number]").on("keydown", function(e) {
    var invalidChars = ["-", "+", "e", "E"];
    if (invalidChars.includes(e.key)) {
        e.preventDefault();
    }
});
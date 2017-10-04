function addQuestion() {
    $.get("/scripts/createQuestion.php",{'questionText': $('#question').val() },function(json) {
        console.log(json);
    })
}
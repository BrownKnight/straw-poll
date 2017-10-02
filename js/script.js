function addQuestion() {
    $.get("/createQuestion.php",{'questionText': $('#question').val() },function(json) {
        console.log(json);
    })
}
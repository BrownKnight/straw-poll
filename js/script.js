function addQuestion() {
    $.get("/createQuestion.php",{'questionText': $('#question').text() },function(json) {
        console.log(json);
    })
}
function addQuestion() {
    $.get("/scripts/createQuestion.php",{'questionText': $('#question').val() },function(json) {
        console.log(json);
    })
}

function getQuestionList() {
    $.get("/scripts/getQuestions.php", null , function(json) {
        console.log(json);
    }, 'json');
}
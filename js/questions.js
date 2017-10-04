var questionList = {};
var questionNum = 0;

$(document).ready(function() {
    getQuestionList();
});

function getQuestionList() {
    $.get("/scripts/getQuestions.php", null , function(json) {
        console.log(json);
        questionList = json;
        showQuestion();
    }, 'json');
}

function showQuestion() {
    if (questionNum > questionList.length) questionNum = 0;
    $("#questionText").html(questionList[questionNum].question);
}

function nextQuestion() {
    questionNum++;
    showQuestion();
}
function previousQuestion() {
    questionNum--;
    showQuestion();
}
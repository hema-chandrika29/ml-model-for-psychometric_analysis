document.getElementById('quiz-form').addEventListener('submit Quiz', function (e) {
    e.preventDefault();

    // Replace these with the correct answers for your quiz
    const correctAnswers = ['a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'];

    const userAnswers = [];
    for (let i = 1; i <= 15; i++) {
        const answer = document.querySelector(input[name=q${i}]:checked);
        if (answer) {
            userAnswers.push(answer.value);
        }
    }   

    // Calculate the score
    let score = 0;
    for (let i = 0; i < correctAnswers.length; i++) {
        if (userAnswers[i] === correctAnswers[i]) {
            score++;
        }
    }

    // Send the score to the server
    fetch('submit_quiz.php', {
        method: 'POST',
        body: JSON.stringify({ score: score }),
        headers: { 'Content-Type': 'application/json' }
    })
    .then(response => response.text())
    .then(data => {
        alert('Quiz submitted successfully');
    });
});
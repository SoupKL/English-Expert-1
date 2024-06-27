const questions = [
    {
      question: "What is your name?",
      answers: [
        "I am fine.",
        "My name is John.",
        "I live in London.",
        "I am a teacher."
      ],
      correctAnswer: "My name is John."
    },
    {
      question: "How old are you?",
      answers: [
        "I am fine.",
        "I am 25 years old.",
        "I live in London.",
        "I am a teacher."
      ],
      correctAnswer: "I am 25 years old."
    },
    {
      question: "Where do you live?",
      answers: [
        "I am fine.",
        "I live in London.",
        "I am 25 years old.",
        "I am a teacher."
      ],
      correctAnswer: "I live in London."
    },
    {
      question: "What is the color of the sky?",
      answers: [
        "Blue",
        "Red",
        "Green",
        "Yellow"
      ],
      correctAnswer: "Blue"
    },
    {
      question: "What time is it?",
      answers: [
        "It's a book.",
        "It's raining.",
        "It's 3 o'clock.",
        "It's on the table."
      ],
      correctAnswer: "It's 3 o'clock."
    },
    {
      question: "Can you play the guitar?",
      answers: [
        "Yes, I can.",
        "No, I can't.",
        "I don't like music.",
        "It's a beautiful day."
      ],
      correctAnswer: "Yes, I can."
    },
    {
      question: "What did you do yesterday?",
      answers: [
        "I will go to school.",
        "I went to the park.",
        "I am going to the market.",
        "I have a dog."
      ],
      correctAnswer: "I went to the park."
    },
    {
      question: "Which is correct?",
      answers: [
        "She cans swim.",
        "She can swim.",
        "She can swims.",
        "She can swimming."
      ],
      correctAnswer: "She can swim."
    },
    {
      question: "If it rains, I ___ at home.",
      answers: [
        "stay",
        "stayed",
        "will stay",
        "staying"
      ],
      correctAnswer: "will stay"
    },
    {
      question: "I have lived in this city ___ 10 years.",
      answers: [
        "since",
        "for",
        "during",
        "by"
      ],
      correctAnswer: "for"
    },
    {
      question: "He speaks English very well, ___?",
      answers: [
        "isn't he",
        "doesn't he",
        "does he",
        "is he"
      ],
      correctAnswer: "doesn't he"
    },
    {
      question: "I was ___ surprised to see him at the party.",
      answers: [
        "completely",
        "absolutely",
        "totally",
        "all of the above"
      ],
      correctAnswer: "all of the above"
    },
    {
      question: "She wishes she ___ to the meeting yesterday.",
      answers: [
        "goes",
        "went",
        "had gone",
        "going"
      ],
      correctAnswer: "had gone"
    },
    {
      question: "They ___ their homework before they went out.",
      answers: [
        "finished",
        "have finished",
        "had finished",
        "finishes"
      ],
      correctAnswer: "had finished"
    },
    {
      question: "The more you practice, ___ you get.",
      answers: [
        "better",
        "the better",
        "best",
        "the best"
      ],
      correctAnswer: "the better"
    },
    {
      question: "I regret ___ you that your application has been rejected.",
      answers: [
        "to inform",
        "informing",
        "inform",
        "informed"
      ],
      correctAnswer: "to inform"
    },
    {
      question: "Despite ___ a headache, he managed to finish the project on time.",
      answers: [
        "to have",
        "having",
        "had",
        "has"
      ],
      correctAnswer: "having"
    },
    {
      question: "By the time we arrive, the movie ___ already started.",
      answers: [
        "will",
        "will have",
        "has",
        "will has"
      ],
      correctAnswer: "will have"
    },
    {
      question: "Hardly had I reached the station ___ the train left.",
      answers: [
        "than",
        "when",
        "then",
        "as"
      ],
      correctAnswer: "when"
    },
    {
      question: "No sooner had she finished her speech ___ the audience stood up and applauded.",
      answers: [
        "than",
        "when",
        "then",
        "as"
      ],
      correctAnswer: "than"
    }
];

const questionContainer = document.getElementById('questionText');
const answersContainer = document.getElementById('answersContainer');
const nextButton = document.getElementById('nextButton');
const progressText = document.getElementById('progress');
const resultContainer = document.getElementById('result-container');
const resultText = document.getElementById('result-text');

let currentQuestionIndex = 0;
let score = 0;

function loadQuestion(question) {
    questionContainer.textContent = question.question;
    answersContainer.innerHTML = '';
    question.answers.forEach((answer, index) => {
        const answerElement = document.createElement('div');
        answerElement.classList.add('answer');
        answerElement.innerHTML = `
            <input type="radio" class="radio-input" id="answer${index}" name="answer" value="${answer}">
            <label class="radio-label" for="answer${index}">${answer}</label>
        `;
        answersContainer.appendChild(answerElement);
    });
    progressText.textContent = `Вопрос ${currentQuestionIndex + 1}/${questions.length}`;
}

function loadNextQuestion() {
    const selectedAnswer = document.querySelector('input[name="answer"]:checked');
    if (selectedAnswer) {
        const correctAnswer = questions[currentQuestionIndex].correctAnswer;
        if (selectedAnswer.value === correctAnswer) {
            score++;
        }
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            loadQuestion(questions[currentQuestionIndex]);
        } else {
            showResult();
        }
    } else {
        alert('Пожалуйста, выберите ответ.');
    }
}

function showResult() {
    // Скрыть контейнер с вопросами и показать контейнер с результатом
    document.getElementById('quiz-container').style.display = 'none';
    resultContainer.classList.remove('hide');

    let level;
    if (score >= 16) {
        level = "C2";
    } else if (score >= 13) {
        level = "C1";
    } else if (score >= 10) {
        level = "B2";
    } else if (score >= 7) {
        level = "B1";
    } else if (score >= 4) {
        level = "A2";
    } else {
        level = "A1";
    }

    resultText.textContent = `${level}`;
}

// Начать тест с первого вопроса
loadQuestion(questions[currentQuestionIndex]);

// Обработчик формы ответа
const answerForm = document.getElementById('answerForm');
answerForm.addEventListener('submit', function(event) {
    event.preventDefault();
    loadNextQuestion();
});

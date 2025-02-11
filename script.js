const QUOTES = [
    "The quick brown fox jumps over the lazy dog.",
    "A journey of a thousand miles begins with a single step.",
    "To be or not to be, that is the question.",
    "All that glitters is not gold.",
    "The only thing we have to fear is fear itself."
];

let quoteDisplay = document.getElementById('quoteDisplay');
let quoteInput = document.getElementById('quoteInput');
let timerElement = document.getElementById('timer');
let accuracyElement = document.getElementById('accuracy');
let wpmElement = document.getElementById('wpm');
let startButton = document.getElementById('startButton');

let currentQuote = '';
let startTime;
let timerInterval;

startButton.addEventListener('click', startGame);

quoteInput.addEventListener('input', () => {
    let quote = currentQuote.split('');
    let input = quoteInput.value.split('');
    let correctChars = input.filter((char, index) => char === quote[index]).length;
    let accuracy = (correctChars / quote.length) * 100;
    let timeElapsed = (Date.now() - startTime) / 1000;
    let wordsTyped = quoteInput.value.split(' ').length;
    let wpm = (wordsTyped / timeElapsed) * 60;

    accuracyElement.textContent = `Accuracy: ${Math.round(accuracy)}%`;
    wpmElement.textContent = `WPM: ${Math.round(wpm)}`;
});

function startGame() {
    resetGame();
    currentQuote = QUOTES[Math.floor(Math.random() * QUOTES.length)];
    quoteDisplay.textContent = currentQuote;
    quoteInput.value = '';
    quoteInput.disabled = false;
    quoteInput.focus();
    startTime = Date.now();
    timerInterval = setInterval(updateTimer, 1000);
}

function resetGame() {
    clearInterval(timerInterval);
    timerElement.textContent = 'Time: 0s';
    accuracyElement.textContent = 'Accuracy: 100%';
    wpmElement.textContent = 'WPM: 0';
    quoteInput.disabled = true;
}

function updateTimer() {
    let timeElapsed = (Date.now() - startTime) / 1000;
    timerElement.textContent = `Time: ${Math.round(timeElapsed)}s`;
}

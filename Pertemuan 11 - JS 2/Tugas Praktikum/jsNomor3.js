const calculator = {
    displayValue: '0',
    firstOperand: null,
    waitingForSecondOperand: false,
    operator: null,
};

function inputAngka(angka) {
    const { displayValue, waitingForSecondOperand } = calculator;
    if (waitingForSecondOperand === true) {
        calculator.displayValue = angka;
        calculator.waitingForSecondOperand = false;
    } else {
        calculator.displayValue = displayValue === '0' ? angka : displayValue + angka;
    }
}

function inputAngkaDesimal(titik) {
    if (!calculator.displayValue.includes(titik)) {
        calculator.displayValue += titik;
    }
}

function handleOperator(nextOperator) {
    const { firstOperand, displayValue, operator } = calculator;
    const inputValue = parseFloat(displayValue);
    if (operator && calculator.waitingForSecondOperand) {
        calculator.operator = nextOperator;
        return;
    }
    if (firstOperand == null) {
        calculator.firstOperand = inputValue;
    } else if (operator) {
        const currentValue = firstOperand || 0;
        const result = hitung[operator](currentValue, inputValue);
        calculator.displayValue = String(result);
        calculator.firstOperand = result;
    }
    calculator.waitingForSecondOperand = true;
    calculator.operator = nextOperator;
}

const hitung = {
    '/': (firstOperand, secondOperand) => firstOperand / secondOperand,
    '*': (firstOperand, secondOperand) => firstOperand * secondOperand,
    '+': (firstOperand, secondOperand) => firstOperand + secondOperand,
    '-': (firstOperand, secondOperand) => firstOperand - secondOperand,
    '=': (firstOperand, secondOperand) => secondOperand
};

function resetPerhitungan() {
    calculator.displayValue = '0';
    calculator.firstOperand = null;
    calculator.waitingForSecondOperand = false;
    calculator.operator = null;
}

function perbaruiTampilan() {
    const display = document.querySelector('.calculator-screen');
    display.value = calculator.displayValue;
}

perbaruiTampilan();

const keys = document.querySelector('.calculator-keys');
keys.addEventListener('click', (event) => {
    const { target } = event;
    if (!target.matches('button')) {
        return;
    }
    if (target.classList.contains('operator')) {
        handleOperator(target.value);
        perbaruiTampilan();
        return;
    }
    if (target.classList.contains('decimal')) {
        inputAngkaDesimal(target.value);
        perbaruiTampilan();
        return;
    }
    if (target.classList.contains('all-clear')) {
        resetPerhitungan();
        perbaruiTampilan();
        return;
    }
    inputAngka(target.value);
    perbaruiTampilan();
});
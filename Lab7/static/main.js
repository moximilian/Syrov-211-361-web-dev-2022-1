// Функция priority позволяет получить 
// значение приоритета для оператора.
// Возможные операторы: +, -, *, /.
function priority(operation) {
    if (operation == '+' || operation == '-') {
        return 1;
    } else {
        return 2;
    }
}

function IsDelimeter(c)
{
    if ((" =".indexOf(c) != -1))
        return true;
    return false;
}
// Проверка, является ли строка str числом.
function isNumeric(str) {
    return /^\d+(.\d+){0,1}$/.test(str);
}

// Проверка, является ли строка str цифрой.
function isDigit(str) {
    return /^\d{1}$/.test(str);
}

// Проверка, является ли строка str оператором.
function isOperation(str) {
    return /^[\+\-\*\/]{1}$/.test(str);
}

// Функция tokenize принимает один аргумент -- строку
// с арифметическим выражением и делит его на токены 
// (числа, операторы, скобки). Возвращаемое значение --
// массив токенов.

function tokenize(str) {
    let tokens = [];
    let lastNumber = '';
    for (char of str) {
        if (isDigit(char) || char == '.') {
            lastNumber += char;
        } else {
            if(lastNumber.length > 0) {
                tokens.push(lastNumber);
                lastNumber = '';
            }
        } 
        if (isOperation(char) || char == '(' || char == ')') {
            tokens.push(char);
        } 
    }
    if (lastNumber.length > 0) {
        tokens.push(lastNumber);
    }
    return tokens;
}

// Функция compile принимает один аргумент -- строку
// с арифметическим выражением, записанным в инфиксной 
// нотации, и преобразует это выражение в обратную 
// польскую нотацию (ОПН). Возвращаемое значение -- 
// результат преобразования в виде строки, в которой 
// операторы и операнды отделены друг от друга пробелами. 
// Выражение может включать действительные числа, операторы 
// +, -, *, /, а также скобки. Все операторы бинарны и левоассоциативны.
// Функция реализует алгоритм сортировочной станции 
// (https://ru.wikipedia.org/wiki/Алгоритм_сортировочной_станции).

function compile(str) {
    let out = [];
    let stack = [];

    for (token of tokenize(str)) {
        if (isNumeric(token)) {
            out.push(token);
        } else if (isOperation(token)) {
            while (stack.length > 0 && isOperation(stack[stack.length - 1]) && priority(stack[stack.length - 1]) >= priority(token)) {
                out.push(stack.pop());
            }
            stack.push(token);
        } else if (token == '(') {
            stack.push(token);
        } else if (token == ')') {
            while (stack.length > 0 && stack[stack.length-1] != '(') {
                out.push(stack.pop());
            }
            stack.pop();
        }
    }11111`ы`
    while (stack.length > 0) {
        out.push(stack.pop());
    }
    return out.join(' ');
}

// Функция evaluate принимает один аргумент -- строку 
// с арифметическим выражением, записанным в обратной 
// польской нотации. Возвращаемое значение -- результат 
// вычисления выражения. Выражение может включать 
// действительные числа и операторы +, -, *, /.
// Вам нужно реализовать эту функцию
// (https://ru.wikipedia.org/wiki/Обратная_польская_запись#Вычисления_на_стеке).

function evaluate( input)
{
    input = compile(input);
    let result = 0; //Результат
    let temp = [] // стек для решения

    for (let i = 0; i < input.length; i++) //Для каждого символа в строке
    {
        //Если символ - цифра, то читаем все число и записываем на вершину стека
        if (isDigit(input[i])) 
        {
            let a = "";

            while (!IsDelimeter(input[i]) && !isOperation(input[i])) //Пока не разделитель
            {
                a += input[i]; //Добавляем
                i++;
                if (i == input.length) break;
            }
            temp.push(parseFloat(a)); //Записываем в стек
            i--;
        }
        else if (isOperation(input[i])) //Если символ - оператор
        {
            //Берем два последних значения из стека
            let a = temp.pop(); 
            let b = temp.pop();

            switch (input[i]) //И производим над ними действие, согласно оператору
            { 
                case '+': result = b + a; break;
                case '-': result = b - a; break;
                case '*': result = b * a; break;
                case '/': result = b / a; break;
            }
            temp.push(result); //Результат вычисления записываем обратно в стек
        }
    }
    return temp[temp.length-1]; //Забираем результат всех вычислений из стека и возвращаем его
}




// Функция clickHandler предназначена для обработки 
// событий клика по кнопкам калькулятора. 
// По нажатию на кнопки с классами digit, operation и bracket
// на экране (элемент с классом screen) должны появляться 
// соответствующие нажатой кнопке символы.
// По нажатию на кнопку с классом clear содержимое экрана 
// должно очищаться.
// По нажатию на кнопку с классом result на экране 
// должен появиться результат вычисления введённого выражения 
// с точностью до двух знаков после десятичного разделителя (точки).
// Реализуйте эту функцию. Воспользуйтесь механизмом делегирования 
// событий (https://learn.javascript.ru/event-delegation), чтобы 
// не назначать обработчик для каждой кнопки в отдельности.
let str ="";
let selectedBt;
function printt(vall){
    document.getElementById('screen').textContent = vall;
}
    class Menu{
        constructor(elem){
            this._elem = elem;
            elem.onclick = this.onClick.bind(this);
        }
        bteq(){
            let d = evaluate(str);
            str = d;
            printt(d);
            
        }
        digitp(){
            if (str[str.length -1] != '.')str+='.';
            printt(str);
        }
        btr(){
            str+='(';
            printt(str);
        }
        btl(){
            str+=')';
            printt(str);
        }
        btdel() {
            if (str[str.length -1] != '/')str+='/';
            printt(str);
        }
        btmin() {
            if (str[str.length -1] != '-')str+='-';
            printt(str);
        }
        btmul(){
            if (str[str.length -1] != '*')str+='*';
            printt(str);
        }
        btpl() {
            if (str[str.length -1] != '+')
                str+='+';
            
            printt(str);
        }
        digit0() {
            str+=0;
             
            printt(str);
        }
        digit1() {
            str+=1;
             
            printt(str);
        }
        digit2() {
            str+=2;
             
            printt(str);
        }
        digit3() {
            str+=3;
             
            printt(str);
        }
        digit4() {
            str+=4;
             
            printt(str);
        }
        digit5() {
            str+=5;
             
            printt(str);
        }
        digit6() {
            str+=6;
             
            printt(str);
        }
        digit7() {
            str+=7;
             
            printt(str);
        }
        digit8(){
            str+=8;
            printt(str);
        }
        digit9(){
            str+=9;
            printt(str);
        }
        btC(){
            str = "";
            printt(str);
        }

        onClick(event){
            let action = event.target.dataset.action;
            if(action){
                this[action]();
            }
        }
    }
    new Menu(buttons);
   



// Назначьте нужные обработчики событий.
window.onload = function () {
    // your code here
}

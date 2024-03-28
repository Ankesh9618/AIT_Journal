const http = require('http');
const url = require('url');

function calculate(operator, num1, num2) {
    switch (operator) {
        case 'add':
            return num1 + num2;
        case 'subtract':
            return num1 - num2;
        case 'multiply':
            return num1 * num2;
        case 'divide':
            return num2 !== 0 ? num1 / num2 : 'Error: Division by zero';
        default:
            return 'Invalid operator';
    }
}

const server = http.createServer((req, res) => {
    const query = url.parse(req.url, true).query;

    const operator = query.operator;
    const num1 = parseFloat(query.num1);
    const num2 = parseFloat(query.num2);

    const result = calculate(operator, num1, num2);

    res.writeHead(200, {'Content-Type': 'text/plain'});

    res.end(`Result: ${result}`);
});

const port = 3000;

server.listen(port, () => {
    console.log(`Server running at http://localhost:${port}/`);
});

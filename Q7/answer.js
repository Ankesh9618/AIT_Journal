const query = require('querystring');

const queryString = 'name=John&age=30&city=New+York';

const parsedQuery = query.parse(queryString);

console.log(parsedQuery);
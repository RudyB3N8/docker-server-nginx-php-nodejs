const http = require('http');

// Constants
const PORT = process.env.NODE_PORT;
const HOST = '0.0.0.0';

const app = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('<h1>NodeJS - APP 1</h1>');
});

app.listen(PORT, HOST, () => {
    console.log(`Running on http://${HOST}:${PORT}`);
});
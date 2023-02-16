// middleware
// it is a function
// it works under the hood of the request and response object
// it controls the request, response life cycle i.e, it breaks the request down to provides additional data needed for the request to be completed successfully. The same is true for the response
// it uses the next() to ensure the smooth processing of the request and response cycle to keep the application from hanging
// middleware can be custom made


const log = require('./logger');
const { auth } = require('./authenticate');
const express = require('express');
const app = express();

// in-built middleware function
app.use(express.json());

// custom middleware
app.use(log);
app.use(auth);

app.get('/', (req, res) => {
    res.send('Greatest muhfucka!');
});

const port = process.env.PORT || 3000;
app.listen(port, () => { console.log(`Listening on port ${port}`) });



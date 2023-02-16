// middleware
// it is a function
// it works under the hood of the request and response object, processing data either converting data for client or server consumption (e.g form submission) or pulling files needed by some resource to function properly (e.g css files, images)
// it controls the request, response life cycle i.e, it provides additional data needed for the request to be completed successfully. The same is true for the response
// it uses the next() to ensure the smooth processing of the request and response cycle to keep the application from hanging. This means that the middleware keeps passing processed data to the next middleware (using the next()) until the request gets to the server and the server sends a response back
// middleware can be custom made


const log = require('./logger'); // custom middleware
const { auth } = require('./authenticate'); // custom middleware
const path = require('path');
const pathDir = path.join(__dirname, 'index.html');
const express = require('express');
const app = express();

// in-built middleware functions
app.use(express.json()); // used to read request body objects
app.use(express.urlencoded({ extended: true })); // used to handle form submission
app.use(express.static('public')); // used to serve static contents(static contents are contents that are not requested directly from the server) like css, images etc.


// custom middleware
app.use(log);
app.use(auth);


// using the static middleware to pull static files from the server
app.get('/', (req, res) => {
    res.sendFile(pathDir);
});


// app.get('/', (req, res) => {
//     res.send('Greatest muhfucka!');
// });

const port = process.env.PORT || 3000;
app.listen(port, () => { console.log(`Listening on port ${port}`) });



// there are third party middlewares available in node. it is important to note that middleware can affect the speed of applications. so middlewares should be used based on the necessity

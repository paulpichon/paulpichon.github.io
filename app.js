//importat express
const express = require('express');
//handlebars.js
//partials
const hbs = require('hbs');
// dotenv
require('dotenv').config();


const app = express();
//definir puerto
const port = process.env.PORT;

//handlebars.js
//tambien se puede usar con html
//app.set('view engine', 'html');
//app.engine('html', require('hbs').__express);
app.set('view engine', 'hbs');
//partials
hbs.registerPartials(__dirname + '/views/partials');

//hacer publico archivos --> https://expressjs.com/en/starter/static-files.html
//uso de middleware .use()
//hacemos publico la carpeta 'public', esto hace que se muestre la pagina web dentro de la carpeta public
//si tuvueramos la capreta en un path diferente lo debemos especificar
app.use( express.static('public') );


//Index
app.get('/', (req, res) => {
    //renderizar la pagina
    res.render('home');
});
//Contacto
app.get('/contacto', (req, res) => {
    // res.sendFile( __dirname + '/public/contacto.html');
    res.render('contacto');//handlebars
});
//
app.get('/sobre-mi', (req, res) => {
    //ruta absoluta ---> __dirname
    // res.sendFile( __dirname + '/public/sobre-mi.html');
    res.render('sobre-mi');//handlebars
});

/*****************PORTAFOLIO*********/
//FrontEnd
app.get('/front-end', (req, res) => {
    // res.sendFile(__dirname + '/public/front-end.html');
    res.render('front-end');//handlebars
});
//BackEnd
app.get('/back-end', (req, res) => {
    // res.sendFile(__dirname + '/public/back-end.html');
    res.render('back-end');//handlebars
});

//pagina de error
app.get('*', (req, res) => {
    //ruta absoluta ---> __dirname
    res.render('404');//handlebars
});

app.listen(port, () => {
    console.log(`Escuchando el puerto: ${ port }`);
});
//importat express
const express = require('express');
const app = express();
//definir puerto
const port = 8080;

//hacer publico archivos --> https://expressjs.com/en/starter/static-files.html
//uso de middleware .use()
//hacemos publico la carpeta 'public', esto hace que se muestre la pagina web dentro de la carpeta public
//si tuvueramos la capreta en un path diferente lo debemos especificar
app.use( express.static('public') );//index.html


//Contacto
app.get('/contacto', (req, res) => {
    res.sendFile( __dirname + '/public/contacto.html');
});
//
app.get('/sobre-mi', (req, res) => {
    //ruta absoluta ---> __dirname
    res.sendFile( __dirname + '/public/sobre-mi.html');
});

/*****************PORTAFOLIO*********/
//FrontEnd
app.get('/front-end', (req, res) => {
    res.sendFile(__dirname + '/public/front-end.html');
});
//BackEnd
app.get('/back-end', (req, res) => {
    res.sendFile(__dirname + '/public/back-end.html');
});

//pagina de error
app.get('*', (req, res) => {
    //ruta absoluta ---> __dirname
    res.sendFile( __dirname + '/public/404.html');
});

app.listen(port, () => {
    console.log(`Escuchando el puerto: ${ port }`);
});
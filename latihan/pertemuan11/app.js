// import express
const express = require("express");
// buat object express
const app = express();

// definisikan port
app.listen(3000);

// import router
const router = require("./routes/api");

// pasang router
app.use(router);


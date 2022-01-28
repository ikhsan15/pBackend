// import express
const express = require("express");
// import express from "express";

// create objek express
const app = express();

// definition port
app.listen(3000);

// parsing
app.use(express.json());

// import router
const router = require("./routes/api");
// import router from "./routes/api";

// pasang router
app.use(router);
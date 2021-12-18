// import express
const express = require("express");
// buat object express
const app = express();

// definisikan app
app.listen(3000);

app.get("/", function(req, res){
  res.send("hello express");
})

app.get("/students", function(req, res){
  res.send("menampilkan data student");
})
app.post("/students", function(req, res){
  res.send("menambahkan data student");
})
app.put("/students", function(req, res){
  res.send("mengedit data student");
})
app.delete("/students", function(req, res){
  res.send("menghapus data student");
})
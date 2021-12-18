// import express
const express = require("express");

// buat object express
const router = express.Router();

router.get("/", function(req, res){
  res.send("hello express");
})

// routing untuk students
router.get("/students", function(req, res){
  res.send("menampilkan data student");
})
router.post("/students", function(req, res){
  res.send("menambahkan data student");
})
router.put("/students", function(req, res){
  res.send("mengedit data student" + req.params.id);
})
router.delete("/students", function(req, res){
  res.send("menghapus data student" + req.params.id);
})

// export
module.exports = router;
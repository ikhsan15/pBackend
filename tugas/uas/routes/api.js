// import express
const {
  Router
} = require("express");
const express = require("express");
// import express from "express";

//create object
const router = express.Router();

// routing
// routing method get yg menerima 2 parameter, / dan callback (fungsi yd dikirimkan ke dalam sebuah parameter)
router.get("/", function (req, res) {
  // mengembalikan respon ke user
  res.send("kjhlkjlkjl")
});

// routing untuk students
// import StudentController
const StudentController = require("../controllers/StudentController");
// router.get("/students", function (req, res) {
//   StudentController.index(req, res);
// });
// router.post("/students", function (req, res) {
//   StudentController.store(req, res);
// });
// router.put("/students/:id", function (req, res) {
//   StudentController.update(req, res);
// });
// router.delete("/students/:id", function (req, res) {
//   StudentController.destroy(req, res);
// });

router.get("/students", StudentController.index);
router.post("/students", StudentController.store);
router.put("/students/:id", StudentController.update);
router.delete("/students/:id", StudentController.destroy);


// export
module.exports = router;
// module
// default router;
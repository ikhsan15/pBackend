// create class name
// class StudentController {
//   index(req, res) {
//     res.send("menampilkan data student");
//   }
//   store(req, res) {
//     const {
//       nama
//     } = req.body;
//     res.send("menambahkan data student " + nama);
//   }
//   update(req, res) {
//     // destructing
//     const {
//       id
//     } = req.params;
//     res.send("mengedit data student " + id);
//   }
//   destroy(req, res) {
//     const {
//       id
//     } = req.params;
//     res.send("menghapus data student " + id);
//   }
// }

class StudentController {
  index(req, res) {
    const data = {
      message: "menampilkan data student",
      data: [],
    }
    res.json(data);
  }
  store(req, res) {
    const {
      nama
    } = req.body;

    // push arrray
    students.push(nama);
    const data = {
      message: `Menambah data ${ nama }`,
      data: students,
    };
    res.json(data);
  }
  update(req, res) {
    const {
      id
    } = req.params;
    const {
      nama
    } = req.body;

    const data = {
      message: `mengedit data students ${ id }, nama ${ nama }`,
      data: [],
    };
    res.json(data);
  }
  destroy(req, res) {
    const {
      id
    } = req.params;

    // sorting by id
    students.splice(id);

    const data = {
      message: `menghapus data students ${ id }`,
      data: students,
    };
    res.json(data);
  }
}

// create objek
const students = require("../data/students");
const object = new StudentController();

// export
module.exports = object;
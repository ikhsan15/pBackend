// import model
const Student = require("../models/student");

// create class name
class StudentController {
  async index(req, res) {
    // async await
    const students = await Student.all();

    const data = {
      message: "Menampilkan data student",
      data: students,
    };
    res.status(200).json(data);
  }

  async store(req, res) {
    const students = await Student.create(req.body);

    const data = {
      message: "Menambahkan data student",
      data: students,
    };
    res.status(200).json(data);
  }

  async update(req, res) {
    const {
      id
    } = req.params;

    const students = await Student.find(id);

    if (students) {
      //Update data
      const studentUpdated = await Student.update(id, req.body);

      const data = {
        message: `Merubah data student id ${id}`,
        data: studentUpdated,
      };

      res.status(200).json(data);
    } else {
      const data = {
        message: `Data tidak ada`,
      }

      res.status(404).json(data);
    }
  }

  async destroy(req, res) {
    const {
      id
    } = req.params;

    const student = await Student.find(id);

    if (student) {
      //Hapus data 
      await Student.delete(id);

      const data = {
        message: "Menghapus data student",
      };

      res.status(200).json(data)
    } else {
      const data = {
        message: `Data tidak ada`,
      }

      res.status(404).json(data);
    }
  }

  async show(req, res) {
    const {
      id
    } = req.params;

    const student = await Student.find(id);

    if (student) {
      const data = {
        message: "Detail data student",
        data: student,
      };

      res.status(200).json(data)
    } else {
      const data = {
        message: `Data tidak ada`,
      }

      res.status(404).json(data);
    }
  }
}

//Object Student Controller
const object = new StudentController();

// export
module.exports = object;
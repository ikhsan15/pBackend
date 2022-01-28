// students = ["ikhsan", "nur", "sannur"];

// module.exports = students;

const db = require("../config/database.js")

class Student {
  static all() {
    return new Promise((resolve, reject) => {
      const sql = "select * from students";

      db.query(sql, (err, results) => {
        resolve(results);
      });
    });
  }

  static async create(data) {
    const id = await new Promise((resolve, reject) => {
      //query insert ke database
      const sql = "insert into students set ?";

      db.query(sql, data, (err, results) => {
        resolve(results.insertId);
      });
    });

    return new Promise((resolve, reject) => {
      //query select by id
      const sql = "select * from students where id = ?";

      db.query(sql, id, (err, results) => {
        resolve(results);
      });
    });
  }

  static find(id) {
    //Lakukan promise SELECT BY ID
    return new Promise((resolve, reject) => {
      //query select by id
      const sql = "select * from students where id = ?";

      db.query(sql, id, (err, results) => {
        resolve(results[0]);
      });
    });
  }

  static async update(id, data) {
    //Update data
    await new Promise((resolve, reject) => {
      //Query untuk update data
      const sql = "update students set ? where id = ?";

      db.query(sql, [data, id], (err, results) => {
        (resolve(results));
      });
    });

    //SELECT data by id 
    const student = await this.find(id);
    return student;
  }

  static delete(id) {
    // Query delete 
    return new Promise((resolve, reject) => {
      const sql = "delete from students where id = ?";

      db.query(sql, id, (err, results) => {
        resolve(results);
      });
    });
  }
}

module.exports = Student;
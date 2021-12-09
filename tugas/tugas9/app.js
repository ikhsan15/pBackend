const {
  index,
  store,
  update,
  destroy
} = require("./FruitController.js")

const main = () => {
  console.log("Method index - Menampilkan Buah");
  index();

  console.log("\nMethod Store - Menambahkan buah Pisang");
  store("Pisang");

  console.log("\nMethod Update - Update data 0 menjadi Kelapa");
  update(0, "Kelapa");

  console.log("\nMethod Destroy - Menghapus data 1");
  destroy(3);
}

main()
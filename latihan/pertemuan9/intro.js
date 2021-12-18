const age = 23;
const name = "ikhsan nur";

console.log("hi, nama saya " + name + " berusia " + age + " tahun");
// console.log(typeof age);
// console.log(typeof name);

console.log(`hi, nama saya $(name) berusia $(age) tahun`);

// if(age >= 20){
//   console.log("sudah berumur");
// }
// else{
//   console.log("masih muda");
// }

const message = (age >= 20) ? "sudah berumur" : "masih muda";
console.log(message);

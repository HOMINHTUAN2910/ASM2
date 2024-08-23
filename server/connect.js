import mysql from "mysql"

export const db = mysql.createConnection({
  host:"facebook-app",
  user:"root",
  password:"tuanvip12358",
  database:"facebook"
})
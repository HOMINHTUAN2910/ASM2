const express = require("express");
const cors = require("cors");
const useRoute = require("./router/user.js")

const app = express();

app.use(cors());

app.get("/", (req, res) => {
  res.send("welcome from cors");
});

app.use("/", useRoute);

app.listen(8000, () => {
  console.log("server is listening ...");
});

// let allowed = ["http://localhost:3000", "some-other-link.com"];

// function options(req, res) {
//     let tmp;
//     let origin = req.header("Origin");
//     if (allowed.indexOf(origin) > -1) {
//         tmp = {
//             origin: true,
//             optionsSuccessStatus: 200
//         };
//     } else {
//         tmp = {
//             origin: "stupid"
//         };
//     }
//     res(null, tmp);
// }

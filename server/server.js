import express from "express"
import cors from "cors"
import userRouter from "./router/users.js"

const app = express();

const PORT = 8080;

app.use(cors())

app.get("/api/home", (req, res) => {
    res.json({message: "Hello"})
})

app.get("/api/users", userRouter)

app.listen(PORT, () => {
    console.log(`Running on ${PORT}`);
})

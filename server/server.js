import express from "express"
import cors from "cors"

const app = express();

const PORT = 8080;

app.use(cors())

app.get("/api/home", (req, res) => {
    res.json({message: "Hello"})
})

app.listen(PORT, () => {
    console.log(`Running on ${PORT}`);
})

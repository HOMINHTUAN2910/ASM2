import express from "express"
import cors from "cors"
import userRouter from "./router/users.js"
import authRoutes from "./router/auth.js"

const app = express();

const PORT = 8080;

//middlewares
app.use(express.json());
app.use(cors())


app.use("/api/users", userRouter)
app.use("/api/auth", authRoutes);

app.listen(PORT, () => {
    console.log(`Running on ${PORT}`);
})

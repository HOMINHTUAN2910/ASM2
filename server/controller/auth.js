import {db} from "../connect,js"
export const register = (req, res) => {
    const query = "SELECT * FROM users WHERE username = ?"
    db.query(query, [req.body.username])
}

export const login = (req, res) => {
    
}

export const logout = (req, res) => {
    
}

import Client from "pg";

const db = new Client({
    user: "username",
    host: "localhost",
    database: "myDatabase",
    password: "password",
    port: 5432
});

db.connect();

db.query("SELECT * FROM users", (err, res) => {
    if (err) {
        console.error("Error creating query:", err.stack);
    } else {
        console.log("User data:", res.rows);
    }
    db.end();
});
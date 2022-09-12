const winston = require("winston");

const funcionError = winston.createLogger({
    level: "debug",
    format: winston.format.json(),
    transports: [
        new winston.transports.File({filename: "errores.log", level: "debug"}),
    ],
});

function mostrarError(){
    throw new Error("Tienes un error en la función ");
}

try {
    mostrarError();
}catch (e) {
    funcionError.log("debug", e.toString())
}
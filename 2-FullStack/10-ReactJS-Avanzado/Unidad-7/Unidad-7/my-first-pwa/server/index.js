const express = require("express");
const cors = require("cors");
const webpush = require("web-push");

// Middlewares
const app = express();

app.use(cors());
app.use(express.urlencoded({ extended: false }));
app.use(express.json());

// Constantes
const pushSubscription = {
    endpoint: 'https://fcm.googleapis.com/fcm/send/cmRvVFu80Xg:APA91bGtoXjH1ocnxQumD1jamzpoY7wFHM7nfnMWDJVGdtR2I1L4AjYDXoSGUijVR08wdgG3rDiXD4jEMwItpdJkneGL_htNTkyHYPEJb9dvW1t0soXlWa1l0xJI596gu74cJBUGv61R',
    expirationTime: null,
    keys: {
    p256dh: 'BKxlfiqjzXrTYqNKiT-_9c0XSyQUQo9ie2YnpConIkgLy_Z0a2nqVA5CdCLrIeXRK-2KOL6gJlCiF12mUErLe9M',
    auth: 'RkzeNo6RMqXu_aFtPU78dA'
    }
    }

    const vapidKeys = {
        publicKey: "BCx4IURCs_nC9nTsIowHQqPYwf9iXkqVbqOdmFLNDtixUg1id_Onh1QhRg7ea-ZNqURxfrStEXj6YLBint5NRY0",
        privateKey: "ZdsNMMYoEiwxDs3ET2qJZ1fDfkj1Seyu-lsjjzuVgx4"
    }
    webpush.setVapidDetails(
        'mailto:jcsivo@mail.com',
        vapidKeys.publicKey,
        vapidKeys.privateKey
    );

// Routes
app.get('/', async (req, res) => {
    // res.sendStatus(200).json();
    const payload = JSON.stringify({ title: "Título de Notificación", message: "Mensaje de la notificación" });
    try {
        await webpush.sendNotification(pushSubscription, payload);
        await res.send('Enviado');
    } catch (e) {
        console.log(e);
    }
    
    });

app.post('/subscription', (req, res) => {
    console.log(req.body);
    res.sendStatus(200).json()
});

app.listen(8000, () => console.log("Server listening on port 8000"));
const express = require("express");
const cors = require("cors");
const webpush = require("web-push");

const app = express();

app.use(cors());
app.use(express.urlencoded({ extended: false }));
app.use(express.json());

const vapidKeys = {
    "publicKey": "BBCnzR4TowEEmrxbGJXexm3urQYMtKIUo0mKYioCrwyKfdIZoL-75KuhJUwYxTdFUZSS09Owe4WRc9-ojrWK2-4",
    "privateKey": "qfDAmF0k1lon7brNrF7oos9uKsXpvO6ieHDSVA0222s"
    };

    webpush.setVapidDetails(
            'mailto:jcsivo@example.es', 
            vapidKeys.publicKey, 
            vapidKeys.privateKey);

const subscription = {
    endpoint: 'https://fcm.googleapis.com/fcm/send/cfJmFaThPRs:APA91bEOzjp3roFkg0YZ7XqdbcJZWOzulfpuygcuGlCKZcOKO9CK1SlABCCCY0-lBoOqS_7ObjZFSu-mjycSaQtiYKIDWW5zeHpzRWqNfW0sEHpEyEXxwxnkaTIrMy5YJdNwPi4B6cAz',
    expirationTime: null,
    keys: {
    p256dh: 'BGaiuL8ucF-7yat5-bhZ-4mYUaVppnN5NPLsT6xGEk4vykNFj-AA_0FLknCxEjPNYG3WqNHYMRkPqQ16fqurVb8',
    auth: 'jcex4Dbejvg4TQCOnkzpGQ'
    }
    }

app.get('/', (req, res) => {
    res.send("Todo ok, funcionando correctamente");
    const payload = JSON.stringify (
        { 
            title: "Server notification", 
            message: "Esta es una notificación que nos llega desde el servidor"  
        }
        );
    webpush.sendNotification(subscription, payload)
})

app.post('/custom-notification', (req, res) => {
    const {title, message} = req.body;
    const payload = JSON.stringify({ title, message });
    webpush.sendNotification(subscription, payload);
    res.send("Todo ok, custom notification enviada")
})

app.post('/subscription', (req, res) => {
    // const pushSubscription = req.body.pushSubscription;
    const { pushSubscription } = req.body;
    console.log(pushSubscription)
    res.sendStatus(200);
})


const port = 8000;

app.listen(port, () => console.log(`Server listening on port ${port}`))
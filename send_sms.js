// Download the helper library from https://www.twilio.com/docs/node/install
// Your Account Sid and Auth Token from twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
const accountSid = 'ACbfc52d7c414ab9b38b3fbec6f9b5aa11';
const authToken = 'bc872650ff1a8f37a12ca4993120890f';
const client = require('twilio')(accountSid, authToken);

client.messages
  .create({
     body: 'This is the ship that made the Kessel Run in fourteen parsecs?',
     from: '+18595442087',
     to: '+18592004141'
   })
  .then(message => console.log(message.sid));

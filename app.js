import express from 'express';

const app = express();

app.listen(3000, () => console.log('app is running on port 3000'));

export default app;
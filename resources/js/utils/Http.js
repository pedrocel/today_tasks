import axios from 'axios';

const client = axios.create({
    baseURL: 'http://sistemaacademico.tjal.jus.br/',
});

export default client;

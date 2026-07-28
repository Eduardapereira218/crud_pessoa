// Importa o núcleo do Vue.js
import { createApp } from 'vue';
 
// Importa o componente principal criado para o CRUD
import Pessoa from './components/Pessoa.vue';
 
// Importa o CSS do Bootstrap
import 'bootstrap/dist/css/bootstrap.min.css';
 
// Importa o JS do Bootstrap
// (necessário para componentes como modais, dropdowns, etc.)
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
 
// Cria a aplicação Vue e "monta" o componente Pessoa
// dentro do elemento com id="app" no HTML
createApp(Pessoa).mount('#app');

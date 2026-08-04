<template>
    <div class="container mt-4"> 
        <h1>Cadastro pessoa</h1>

        <div>
            <input
            v-model="nome"
            type="text"
            placeholder="Digite seu nome"
            class="form-control"
            />
            <button @click="salvar" class="btn btn-primary">Cadastrar</button>
        </div>

        <h2>Lista pessoas</h2>

        <ul class="list-group">
            <li v v-for="pessoa in pessoas"
            :key="pessoa.id"
            class="list-group-item d-flex justify-content-between align-items-center"
            >
                

            </li>
        </ul>
    </div>
</template>

<template>
    <div>
        <section>
            <p>Oi sou Ivan, Engenheiro de Software Junior, e eu ficaria feliz em trabalhar com você</p>
        </section>

        <section>
            <h2>Habilidades</h2>
        </section>

        <section>
            Projetos
        </section>

        <section>
            <p>&copy Ivan Teotonio, todos os direitos reservados.</p>
            <div>
                GitHub
                Twitter
                Stackoverflow
            </div>
        </section>
    </div>
</template>


<script setup>
import { defineComponent } from 'vue';

defineComponent({

})

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,

});
</script>



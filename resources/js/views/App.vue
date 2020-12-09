<template>
    <div>
        <
        Bem vindo! {{ user.name }}
    </div>
</template>
<script>
const default_layout = "default";


export default {
    computed: {},
    data() {
        return {
            user:{
                name: 'Hello World'
            }
        }
    }
};
</script>
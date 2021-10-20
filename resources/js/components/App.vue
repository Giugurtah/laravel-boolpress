<template>
    <div class="content">
        Sorry, we're still working on it 
    </div>
</template>

<script>
    export default {
        name: 'App',
        data() {
            return {
                data: [],
            }
        },
        methods: {

        },
        created: function(){
            axios.get('http://127.0.0.1:8000/api/posts').then(res => {
                console.log(res);
                this.data = res.data;
            })
        }
    }
</script>

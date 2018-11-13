<template>
    <div class="watcher-example" v-bind:class="{active: isActive}">
        <h3>Watcher example</h3>
        <p>{{question}}</p>
        <p>
            Ask a yes/no question
            <input v-model="question">
        </p>
        <p>{{answer}}</p>
        ---------------------------------------------------------
    </div>
</template>

<script>
    export default {
        name: "WatcherExampleComponent",
        data: function() {
            return {
                answer: 'I can not give you answer until you ask a question',
                question: '',
                isActive: true
            }
        },
        methods: {

        },
        computed: {
            getQuestion: function() {
                return this.question + ' ' + this.answer
            }
        },
        watch: {
            question: function(newQuestion, oldQuestion) {
                console.log("question bi thay doi: " + newQuestion);
            },
            getQuestion: function() {
                console.log('ham question thay doi');
            }
        }
    }
</script>

<style lang="scss" scoped>
    .watcher-exmaple {
        color: #2d995b;
    }
</style>
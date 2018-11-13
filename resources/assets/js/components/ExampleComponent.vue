<template>
    <div>
        <alert-box-component></alert-box-component>
        <div>{{post.stt}}</div>
        <div>{{post.author}}</div>
        <div v-if="isPublished">{{post.title}}</div>
        <!--<div>{{postTest}}</div>-->
        <div>
            <button v-on:click="$emit('enlarger-text', 3)">click here</button>
        </div>
    </div>
</template>

<script>
    /**
     * Local Registration Component
     */
    import AlertBoxComponent from './AlertBoxComponent.vue';

    export default {
        data: function() {
            return {
                // postTest: {stt: 1, author: 'nguyen thi duy', title: 'bai so 1'}
            }
        },
        components: {
            'alert-box-component': AlertBoxComponent
        },
        props: {
            post: Object,
            postTest: String,
            isPublished: Boolean
        },
        methods: {

        }
    }
</script>

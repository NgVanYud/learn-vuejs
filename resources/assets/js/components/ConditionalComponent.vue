<template>
    <div>
        <h3>v-for in Vuejs</h3>
        <ol>
            <li v-for="(student, index) of students" v-if="student.seen" v-bind:key="student.index">
                {{student.name}}
            </li>
        </ol>
    ----------------------------------------------------
    </div>
</template>

<script>
    export default {
        name: "ConditionalComponent",
        data: function () {
            return {
                students: [
                    {name : 'nguyen van a', seen : true},
                    {name : 'nguyen van b', seen : true},
                    {name : 'nguyen van c', seen : false},
                    {name : 'nguyen van d', seen : true},
                ]
            }
        }
    }
</script>

<style scoped>

</style>
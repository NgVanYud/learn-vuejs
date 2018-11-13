<template>
    <div id="header" class="row">
        <div class="col-md-6">
            {{message}} {{count}}
        </div>
        <div class="col-md-6">
            <span v-bind:title="message">
                Hover me to show title
            </span>
            <span class="seen" v-if="seen">
                Have you seen me?
            </span>
        </div>
        <div class="col-md-6 bg-info">
            <p>Your name: {{fullname}}</p>
        </div>
        <button v-on:click="changeCount">Click me</button>
        <button v-on:click="seenMessage">Click me to seen</button>
        <button v-on:click="changeFirstName">Click me to change first name</button>
        <div>
            ----------------------------------------------------
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                message: this.getMessage(),
                count: 1,
                seen: true,
                firstName:  "Duy",
                lastName: "Nguyen"
            }

        },
        methods : {
            getMessage() {
                return "Header của tôi. Now, is " + new Date().toLocaleString();
            },
            changeCount() {
                this.count = this.count + 1;
            },
            seenMessage() {
                if(this.seen) {
                    this.seen = false;
                } else  {
                    this.seen = true;
                }
                return this.seen;
            },
            changeFirstName() {
                this.firstName = "Van";
            }
        },
        computed: {
            fullname: function() {
                return this.firstName + " " + this.lastName;
            }
        },
        watch: {
            firstName: function(value) {
                this.lastName = "New LastName";
                console.log("FirstName change");
            }
        }
    }
</script>

<style scoped>
    .seen {
        color: red;
    }
</style>
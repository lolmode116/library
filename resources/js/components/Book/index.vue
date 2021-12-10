<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Забронирована</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="book in books">
                <th scope="row">{{ book.id }}</th>
                <td>{{ book.name }}</td>
                <td>{{ book.is_booked }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import api from "../../api";
    export default {
        name: "Index",
        data() {
            return {
                books:null,
            }
        },

        mounted() {
            this.getBooks()
        },

        methods:{
            getBooks() {
                api.get('/api/auth/books')
                .then( res => {
                    this.books = res.data.data
                })
            },

        }
    }
</script>

<style scoped>

</style>

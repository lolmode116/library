<template>
    <div>
        <div v-if="admin">
            <router-link :to="{ name:'user.index'}">
                Список пользователей
            </router-link>
        </div>
        <div v-if="libr">Библиотекарь</div>
        <div v-if="user">Пользователь</div>
    </div>
</template>

<script>
import api from "../../api";
export default {
    name: "Personal",
    data() {
        return {
            role:null,
            admin:null,
            libr: null,
            user:null,

        }
    },

    mounted() {
        this.getRole()
    },

    methods: {
        getRole() {
            api.post('/api/auth/me')
            .then(res => {
                this.role = res.data.role
                switch (this.role){
                    case 'admin':
                        this.admin = true;
                        break;
                    case 'libr':
                        this.libr = true;
                        break;
                    case 'user':
                        this.user = true;
                        break;
                    default:
                        throw 'error';
                }
            })
        }
    }
}
</script>

<style scoped>

</style>

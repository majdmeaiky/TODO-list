<style>
.button {
    background-color: #4fdd54;
    /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 1000px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    padding-right: 100px;
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 20px 80px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.tmp {
    background-color: #f3f3f3;
}



.button-2 {
    background-color: rgba(219, 111, 111, 0.05);
    border-radius: 8px;
    border-width: 0;
    color: #333333;
    cursor: pointer;
    display: inline-block;
    font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 20px;
    list-style: none;
    margin: 0;
    padding: 10px 42px;
    text-align: center;
    transition: all 200ms;
    vertical-align: baseline;
    white-space: nowrap;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    margin-left: 30px;
}
</style>
<script setup>

//import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';


defineProps({
    tasks: Array,
});
const trueValue = false;


</script>
<template class="tmp">
    <h1 style="font-size: 50px; font-style: italic;">TODO List</h1>
    <br><br>
    <Link href="tasks/create" as="button" type="button" class="button-2" style="background-color:#90EE90">Add Task
    </Link>
    <Link href="/dashboard" as="button" type="button" class="button-2" style="background-color:#90EE90">Back</Link>
    <br>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Completed</th>
                <th>Operations</th>

            </tr>
        </thead>
        <tbody>
            <tr v-for="task in tasks" v-bind:key="task.id">
                <td>{{task.TaskName}}</td>
                <td>{{task.Description}}</td>
                <td>{{task.created_at}}</td>
                <td>{{task.updated_at}}</td>
                <td><input :id="option" v-model="task.active" type="checkbox" :value="option"
                        v-on:change="onChange"><span v-if="task.active">Completed!</span></td>
                <td>
                    <Link :disabled="task.active" :href="route('tasks.edit',task.id)" as="button" type="button"
                        class="button-2 " style="background-color:#00CED1">Edit</Link>
                    <Link :href="route('tasks.delete',task.id)" method="delete" as="button" type="button"
                        class="button-2 " style="background-color:red">Delete</Link>
                </td>
            </tr>

        </tbody>
    </table>
</template>


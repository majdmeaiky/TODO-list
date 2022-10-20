<style>


.contact-form {
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
}

.contact-form .form-control {
    border-radius: 1rem;
}

.contact-image {
    text-align: center;
}

.contact-image img {
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}

.contact-form form {
    padding: 14%;
}

.contact-form form .row {
    margin-bottom: -7%;
}

.contact-form h3 {
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}

.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}

.btnContactSubmit {
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
</style>

<script>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { Method } from '@inertiajs/inertia';

export default {
    props: {
        errors: Object
    },
    setup() {
        const form = useForm({
            TaskName: '',
            Description: ''
        })

        return { form }
    },
   
        methods: {
            submitbtn(){
                if(this.form.TaskName==''||this.form.Description=='')
                alert('Please fill the fields!');
                else{
                    alert('task added succefully');
                }
            }
        },
    
}


    

// import route from 'vendor/tightenco/ziggy/src/js';





</script>
<template>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->

    <div class="container contact-form">
        <div class="contact-image">
            <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
        </div>


        <form @submit.prevent="form.post(route('tasks.store'))">
           
            <h3>Drop Us a Task</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input v-model="form.TaskName" type="text" name="txtName" class="form-control"
                            placeholder="Task Name *" />
                    </div>

                    <div class="form-group">
                        <input v-on:click="submitbtn" type="submit" name="btnSubmit" class="btnContact" value="Send Task" />

                    </div>
            
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="txtMsg" class="form-control" v-model="form.Description"
                            placeholder="Description *" style="width: 100%; height: 150px;"></textarea>
                            
                    </div>
                </div>
            </div>

        </form>
    </div>
</template>


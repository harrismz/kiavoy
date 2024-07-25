<template>
    <v-app>
        <v-main>
            <v-container>
                <v-stepper v-model="step">
                    <v-stepper-header>
                        <v-stepper-step :complete="step > 1" step="1">Account Details</v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step :complete="step > 2" step="2">Personal Details</v-stepper-step>
                        <v-divider></v-divider>
                        <v-stepper-step step="3">Confirmation</v-stepper-step>
                    </v-stepper-header>

                    <v-stepper-items>
                        <v-stepper-content step="1">
                            <v-form ref="form1" v-model="valid1">
                                <v-text-field v-model="username" :rules="usernameRules" label="Username"
                                    required></v-text-field>
                                <v-text-field v-model="email" :rules="emailRules" label="E-mail"
                                    required></v-text-field>
                                <v-text-field v-model="password" :rules="passwordRules" label="Password" type="password"
                                    required></v-text-field>
                                <v-btn :disabled="!valid1" @click="nextStep">Next</v-btn>
                            </v-form>
                        </v-stepper-content>

                        <v-stepper-content step="2">
                            <v-form ref="form2" v-model="valid2">
                                <v-text-field v-model="firstName" :rules="nameRules" label="First Name"
                                    required></v-text-field>
                                <v-text-field v-model="lastName" :rules="nameRules" label="Last Name"
                                    required></v-text-field>
                                <v-btn @click="prevStep">Back</v-btn>
                                <v-btn :disabled="!valid2" @click="nextStep">Next</v-btn>
                            </v-form>
                        </v-stepper-content>

                        <v-stepper-content step="3">
                            <p>Username: {{ username }}</p>
                            <p>Email: {{ email }}</p>
                            <p>First Name: {{ firstName }}</p>
                            <p>Last Name: {{ lastName }}</p>
                            <v-btn @click="prevStep">Back</v-btn>
                            <v-btn @click="submit">Submit</v-btn>
                        </v-stepper-content>
                    </v-stepper-items>
                </v-stepper>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
import { ref } from 'vue';

export default {
    data() {
        return {
            step: 1,
            valid1: false,
            valid2: false,
            username: '',
            email: '',
            password: '',
            firstName: '',
            lastName: '',
            usernameRules: [v => !!v || 'Username is required'],
            emailRules: [v => !!v || 'E-mail is required', v => /.+@.+/.test(v) || 'E-mail must be valid'],
            passwordRules: [v => !!v || 'Password is required', v => v.length >= 6 || 'Password must be at least 6 characters'],
            nameRules: [v => !!v || 'This field is required']
        };
    },
    methods: {
        nextStep() {
            this.step++;
        },
        prevStep() {
            this.step--;
        },
        async submit() {
            const response = await fetch('/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: JSON.stringify({
                    username: this.username,
                    email: this.email,
                    password: this.password,
                    firstName: this.firstName,
                    lastName: this.lastName,
                }),
            });
            const data = await response.json();
            if (data.success) {
                alert('Registration complete!');
            } else {
                alert('Registration failed: ' + data.message);
            }
        },
    },
};
</script>

<style scoped>
.v-main {
    padding: 20px;
}
</style>

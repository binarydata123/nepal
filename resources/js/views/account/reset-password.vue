<script>
/**
 * Forgot Password component
 */
export default {
    data() {
        return {
            isResetError: false
        };
    },
    mounted() {
        this.isResetError = !!this.error;
    },
    props: {
        submitUrl: {
            type: String,
            required: true
        },
        email: {
            type: String,
            required: false,
            default: () => null
        },
        error: {
            type: String,
            required: false,
            default: () => null
        }
    }
};
</script>

<template>
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card overflow-hidden">
            <div class="bg-soft bg-primary">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-4">
                            <h5 class="text-primary">Reset Password</h5>
                            <p>Re-Password with Skote.</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="/images/profile-img.png" alt class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div>
                    <a href="/">
                        <div class="avatar-md profile-user-wid mb-4">
                            <span class="avatar-title rounded-circle bg-light">
                                <img src="/images/logo.svg" alt height="34" />
                            </span>
                        </div>
                    </a>
                </div>
                <div class="p-2">
                    <b-alert v-model="isResetError" class="mb-4" variant="danger" dismissible>{{error}}</b-alert>
                    <form :action="submitUrl" method="POST">
                      <slot />
                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input type="email" name="email" :value="email" class="form-control" id="useremail" placeholder="Enter email" />
                        </div>
                        <b-form-group id="password-group" label="Password" label-for="password">
                            <b-form-input
                                id="password"
                                name="password"
                                type="password"
                                placeholder="Enter password"
                            ></b-form-input>
                            </b-form-group>
                            <b-form-group label="Confirm Password" label-for="password-confirm">
                            <b-form-input
                                id="password-confirm"
                                name="password_confirmation"
                                type="password"
                                placeholder="Confirm password"
                            ></b-form-input>
                            </b-form-group>
                        <div class="form-group row mb-0">
                            <div class="col-12 text-end">
                                <button class="btn btn-primary w-md" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->

        <div class="mt-5 text-center">
            <p>
                Remember It ?
                <a href="/login" class="fw-medium text-primary">Sign In here</a>
            </p>
            <p>
                © {{ new Date().getFullYear() }} Skote. Crafted with
                <i class="mdi mdi-heart text-danger"></i> by Themesbrand
            </p>
        </div>
    </div>
    <!-- end col -->
</div>
</template>
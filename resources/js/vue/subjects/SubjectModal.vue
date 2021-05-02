<template>
<div>

    <!-- overlay -->
    <div id="modal_overlay" class="hidden absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

        <!-- modal -->
        <div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-1/2 md:h-3/4 bg-white rounded shadow-lg transition-opacity transition-transform duration-300">

            <!-- button close -->
            <button v-on:click="openModal(false)" class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
                &cross;
            </button>

            <!-- header -->
            <div class="px-4 py-3 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-600"></h2>
            </div>

            <!-- body -->
            <div class="">
                <div class="mx-auto  px-8 py-4 ">
                    <form id="form" novalidate @submit.prevent="">
                        <div class="relative z-0 w-full mb-5">
                            <input type="text" placeholder=" " required class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" v-model="subjectName " />
                            <label for="name" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter Subject</label>
                            <span class="text-sm text-red-600 hidden" id="error">Name is required</span>
                        </div>

                        <!-- <div class="relative z-0 w-full mb-5">
                            <input type="email" name="email" placeholder=" " class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                            <label for="email" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Enter email address</label>
                            <span class="text-sm text-red-600 hidden" id="error">Email address is required</span>
                        </div> -->

                    </form>
                </div>
            </div>
            <!-- footer -->
            <div class="absolute bottom-0 left-0 px-4 py-3 border-t border-gray-200 w-full flex justify-end items-center gap-3">
                <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none" v-on:click="saveModal" >Save</button>
                <button v-on:click="openModal(false)" class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white focus:outline-none">Close</button>
            </div>
        </div>

    </div>

</div>
</template>

<script>
export default {

    mounted(){
        this.openModal(true);
    },

    data() {
        return {
            subjectName: '',
            showMessage: false,
            status: '',
        }
    },


    methods: {

        openModal: function (value) {
            const modal_overlay = document.querySelector('#modal_overlay');
            const modal = document.querySelector('#modal');

            const modalCl = modal.classList
            const overlayCl = modal_overlay
            if (value) {
                overlayCl.classList.remove('hidden')
                setTimeout(() => {
                    modalCl.remove('opacity-0')
                    modalCl.remove('-translate-y-full')
                    modalCl.remove('scale-150')
                }, 100);
            } else {
                modalCl.add('-translate-y-full')
                setTimeout(() => {
                    modalCl.add('opacity-0')
                    modalCl.add('scale-150')
                }, 100);
                setTimeout(() => overlayCl.classList.add('hidden'), 300);
            }
        },

        saveModal: function () {
            const that = this;
            if (this.subjectName != '' && this.subjectName != null) {
                axios.post('/api/subjects', {
                        name: this.subjectName
                    })
                    .then(function (response) {
                         that.$emit('resToParent', response.data);

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                  this.openModal(false);

            }
        },


    },

}
</script>

<style>
.-z-1 {
    z-index: -1;
}

.origin-0 {
    transform-origin: 0%;
}

input:focus~label,
input:not(:placeholder-shown)~label,
textarea:focus~label,
textarea:not(:placeholder-shown)~label,
select:focus~label,
select:not([value='']):valid~label {
    /* @apply transform; scale-75; -translate-y-6; */
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
    --tw-translate-y: -1.5rem;
}

input:focus~label,
select:focus~label {
    /* @apply text-black; left-0; */
    --tw-text-opacity: 1;
    color: rgba(0, 0, 0, var(--tw-text-opacity));
    left: 0px;
}
</style>

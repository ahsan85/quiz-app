<template>
<div>

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex">
                <div class="flex-1">
                    Subjects
                </div>
                <div class="flex-2">
                    <div class="inline-block mr-2 ">
                        <button
                        v-on:click="showModal=true"
                        type="button" class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 rounded-md hover:bg-blue-100 cursor-pointer">Add
                            New</button>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="  dark:bg-gray-900 py-6 flex flex-col justify-center sm:py-12" style="min-height: 10vh">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 px-4">
            <div v-for="subject in subjectList" :key="subject.id">
                <show-subject :subject=subject ></show-subject>
            </div>
        </div>

    </div>

    <div v-if="showModal">
        <SubjectModal v-on:resToParent="createNewSubject"></SubjectModal>
    </div>

</div>
</template>

<script>
const default_layout = "default";

import SubjectModal from './SubjectModal.vue'
import ShowSubject from './ShowSubject.vue'
export default {
    components: {
        SubjectModal,
        ShowSubject,
    },
    props: ['subjects'],

    data() {
        return {
            subjectList: this.subjects,
            showModal: false,
        }
    },

    methods: {
        createNewSubject: function (subject) {
            this.subjectList.push(subject);
        },

    }

}
</script>

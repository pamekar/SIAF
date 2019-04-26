<template>
    <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Apps</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-speedometer fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            CRM
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-rocket fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Products
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-plane fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Sales
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-wallet fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Payments
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import {mapState, mapActions} from 'vuex';
    import CKEditor from '@ckeditor/ckeditor5-vue';
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import InlineEditor from '@ckeditor/ckeditor5-build-inline';
    import InputTag from 'vue-input-tag';
    import Multiselect from 'vue-multiselect';
    import swal from 'sweetalert';

    export default {
        data() {
            return {
                classicEditor:   ClassicEditor,
                inlineEditor:    InlineEditor,
                question_image:  '',
                disabledOptions: true,
                addOptions:      true
            }
        },
        created() {
            
        },
        components: {
            'ckeditor':    CKEditor.component,
            'input-tags':  InputTag,
            'multiselect': Multiselect
        },
        computed:   {
            ...mapState(
                {
                    option:   state => state.questions.option,
                    question: state => state.questions.question,
                    quiz:     state => state.quizes.quiz,
                    tests:    state => state.questions.tests,
                }),
            question_id() {
                return this.question.id;
            }
        },
        methods:    {
            addOption(option) {
                option.question_id = this.question_id;
                this.$store.dispatch('questions/add_option', option);
            },
            create_updateQuestion() {
                // drg >> check if we're creating a new question
                this.question.origin_id = this.$route.params.id
                this.question.is_new ?
                    this.$store.dispatch('questions/add', this.question)
                    :
                    this.$store.dispatch('questions/edit', this.question, this.$route.params.id);
                jQuery(".modal").modal("hide");

            },
            createImage(file) {
                let reader = new FileReader();
                this.media_title = file.name;
                
                reader.onload = (e) => {
                    this.question_image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            deleteOption(id) {
                this.$store.dispatch('questions/delete_option', id);
            },
            editOption(option) {
                this.$store.dispatch('questions/edit_option', option);
            },
            questionImageChanged(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.question.question_image = files[0];
                this.createImage(files[0]);
            },
            addTag(newTag) {
                const tag = {
                    name: newTag,
                    code: newTag.substring(0, 2) + Math.floor((Math.random() * 10000000))
                };
                this.options.push(tag);
                this.value.push(tag);
            },
        }
    }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style>
    .dropdown-menu, .ck.ck-balloon-panel {
        z-index: 1060 !important;
    }
</style>
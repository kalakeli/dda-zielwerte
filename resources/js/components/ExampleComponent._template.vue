<template>
    <div>
        <div class="row">
          <div class="col-12">
            <h5>List der eingetragenen Module</h5>
          </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12" v-if="!loading">
                <transition name="fade" mode="out-in" appear>

                </transition>
            </div>
            <div class="col-2" style="margin-top:15px;" v-else>
              <i class="fas fa-spinner fa-pulse fa-3x text text-primary"></i>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'ProjectModuleList',
        data() {
          return {
            moduleList: {},
            loading: true,
          }
        },
        methods: {
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

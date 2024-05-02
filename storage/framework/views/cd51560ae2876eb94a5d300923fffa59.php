
<div
    x-data="{
        notifications: [],
        add(e) {
            this.notifications.push({
                id: e.timeStamp,
                type: e.detail.type,
                content: e.detail.content,
            })
        },
        remove(notification) {
            this.notifications = this.notifications.filter(i => i.id !== notification.id)
        },
    }"
    @notify.window="add($event)"
    class="fixed bottom-0 right-0 flex w-full max-w-xs flex-col space-y-4 pr-4 pb-4 sm:justify-start"
    role="status"
    aria-live="polite"
>
    <!-- Notification -->
    <template x-for="notification in notifications" :key="notification.id">
        <div
            x-data="{
                show: false,
                init() {
                    this.$nextTick(() => this.show = true)

                    setTimeout(() => this.transitionOut(), 2000)
                },
                transitionOut() {
                    this.show = false

                    setTimeout(() => this.remove(this.notification), 500)
                },
            }"
            x-show="show"
            x-transition.duration.500ms

        >




            <div x-show="notification.type === 'success'" class="flex-shrink-0 bg-blue-400">
                <span aria-hidden="true" class="inline-flex h-6 w-6 items-center justify-center bg-blue-400 rounded-full border-2
                border-gray-400 text-xl font-bold text-gray-400">!</span>
                <p x-text="notification.content" class="text-sm font-medium leading-5 text-gray-900 bg-blue-400"></p>
            </div>






































        </div>
    </template>
</div>
<?php /**PATH D:\web-app\aaran-soft\resources\views/components/notify.blade.php ENDPATH**/ ?>
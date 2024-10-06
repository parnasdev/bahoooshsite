<div class="modal-alert pos-fixed-top-right" x-data="{
    alert: [],
    width: 100,
    timer: null,
    showToast(e) {
        let { message , icon } = e.detail;
        this.width = 100;
        this.timer = null;
        this.alert.push({message: message , icon: icon});

    },
    start(index) {
     this.timer = setInterval(() => {
            this.width -= 6;

            if (this.width <= 0) {
                $('.alert_' + index).hide();
            }
        }, 400);
    }
}" @toast-message.window="showToast">
    <div class="p-alert">
        <!-- info alert -->
        <template x-for="(item , index) in alert">
            <div class="wrapper-alert" :class="'alert_' + index"  x-init="start(index)" @mouseenter="clearInterval(timer)" @mouseleave="start(index)">
                <div class="-card p-0 flex-direction-column align-items-start">
                    <div class="subject m-left-auto pr-10 pl-10 pt-8">
                        {{-- <h5>پیام شما با موفقیت ثبت شد</h5> --}}
                        <p class="f-14" x-text="item.message"></p>
                    </div>
                    <div class="progress-bar m-left-auto" :style="{width : width + '%'}" :class="'bg-' + item.icon"></div>
                </div>
            </div>
        </template>
    </div>
</div>

<script>
    document.addEventListener('deleteMessage', evt => {
        let {
            eventName,
            id
        } = evt.detail;
        Swal.fire({
            title: 'اطمینان دارید؟',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'بله، حذف کن!',
            cancelButtonText: 'نه، لغو کن!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch(eventName, {id: id , type: 'action'})
            }
        })
    });

    document.addEventListener('restoreMessage', evt => {
        let {
            eventName,
            id
        } = evt.detail;
        Swal.fire({
            title: 'اطمینان دارید؟',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'بله، بازگردانی کن!',
            cancelButtonText: 'نه، لغو کن!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch(eventName, {id: id , type: 'action'})
            }
        })
    });

    document.addEventListener('message', evt => {
        let {
            message,
            icon,
            title,
            btnCText,
            btnCAText,
            eventName,
            event2,
            data
        } = evt.detail;

        Swal.fire({
            title: title,
            text: message,
            icon: icon,
            showCancelButton: true,
            confirmButtonText: btnCText,
            cancelButtonText: btnCAText,
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch(eventName, {data: data})
            } else {
                if(event2 !== undefined)
                    Livewire.dispatch(event2, {data: data})
            }
        });
    });
</script>

<div>
    <main>
        <article class="article-controller">
            <section class="s-container">
                <div class="container-fluid">
                    <!-- parent data -->
                    <div class="p-container d-flex p-0">
                        <div class="bg-pattern d-flex align-items-center justify-content-center">
                            <div
                                class="p-login flex-100 d-flex flex-direction-column align-items-center justify-content-center h-100">
                                <!-- logo -->
                                <div class="logo-comy mb-25">
                                    <div class="d-flex justify-content-center image logo">
                                        <img src="/img/admin/png/Parnas-Company.png" width="70px" height="70px"
                                            alt="parnas-logo" />
                                    </div>
                                    <div class="text">
                                        <span class="text-dark f-14 f-bold">پنل مدیریت</span>
                                    </div>
                                </div>
                                <div class="content-login m-flex-90 bg-white radius-8">
                                    <div class="data-topBorder"></div>
                                    <!--! title  -->
                                    <div class="rx-title pr-10 py-10">
                                        <div class="title d-flex align-items-center pb-10">
                                            <div class="text">
                                                <h6>ورود به پنل کاربری</h6>
                                            </div>
                                            <div class="p-rx">
                                                <div class="rx-border-rectangle"></div>
                                                <div class="rx-border-rectangle-after"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--! detail -->
                                    <form wire:submit="submit" class="main-login px-10">
                                        <x-inputs.panel.text label="نام کاربری"
                                                             placeholder="نام کاربری را به صورت انگلیسی"
                                                             wire:model="username"
                                                             class="align-items-end flex-95 mr-9 m-mr-0"/>

                                        <x-inputs.panel.password label="رمز عبور"
                                                             placeholder="رمز عبور خود را وارد کنید"
                                                             wire:model="password"
                                                             class="align-items-end flex-95 mr-9 m-mr-0"/>

                                        <x-inputs.panel.checkbox label="مرا به خاطر بسپار"
                                                                 wire:model="remember"
                                                                 value="1"
                                                                 class="flex-40 justify-content-start"
                                        />
                                        <!--? btn -->
                                        <div class="d-flex justify-content-end">
                                            <x-buttons.panel.button target="submit" class="p-8 ml-2">
                                                ورود به پنل
                                            </x-buttons.panel.button>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-center mt-20">
                                    <a href="/" target="_target" class="text-dark border-bottom-solid-2 pb-4 px-10">برگشت به سایت</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
</div>

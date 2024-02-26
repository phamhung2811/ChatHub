<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatHub</title>
    <script src="https://kit.fontawesome.com/fdb36d9438.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>

<body class="relative">
    <header class=" fixed top-0 left-0 right-0 p-5 flex justify-center  ">
        <nav>
            <div class="flex h-full max-h-24">
                <div class="flex flex-row">
                    <img src="https://chungxe.vn/assets/images/logo.svg" alt="">
                </div>
                <div>
                    <ul class="flex flex-row justify-between items-center">
                        <li class="nav-item m-5">
                            <a href="">Trang chủ</a>
                        </li>
                        <li class="nav-item m-5 ">
                            <a href="">Giới thiệu</a>
                        </li>
                        <li class="nav-item m-5 ">
                            <a href="">Sản Phẩm</a>
                        </li>
                        <li class="nav-item m-5">
                            <a href="">Tin tức</a>
                        </li>
                        <li class="nav-item m-5">
                            <a href="">Cửa hàng</a>
                        </li>
                        <li class="nav-item m-5">
                            <a href="">Tuyển dụng</a>
                        </li>
                        <li class="nav-item m-5">
                            <button
                                class="bg-transparent hover:bg-green-500 text-green-500 font-semibold h-10 hover:text-white px-4 border border-green-500 hover:border-transparent rounded">Đăng
                                nhập</button>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>
    <main class="z-0 relative">
        <section class="banner">
            <div class="">
                <img class=" w-screen h-screen"
                    src="https://bizweb.dktcdn.net/100/487/455/themes/917232/assets/slider_3.jpg?1706861561642" alt="">
            </div>
        </section>
        <section class="product-hot flex flex-col justify-between items-center mt-3">
            <div class="section-title flex flex-col justify-between items-center">
                <div class="text-1  font-extrabold text-green-500 text-xl">HungBrew Menu</div>
                <div class="text-2 font-semibold  text-2xl">SẢN PHẨM NỔI BẬT</div>
            </div>
            <div class="section-content container grid grid-cols-4 gap-4">
                <div class="flex justify-center items-center">
                    <div class="hot-content w-[250px] h-[400px] justify-center items-center">
                        <div class="img-wrap ">
                            <img class="transition ease-in-out delay-150"
                                src="https://tocotocotea.com/wp-content/uploads/2024/01/kem-ly-dau-sua-TEA.png" alt="">
                        </div>
                        <div class="product-card-content flex flex-col justify-between items-center">
                            <div class="product-name">
                                <h3>Name</h3>
                            </div>
                            <div class="product-price flex flex-row font-semibold">
                                <div class="product-origin-price mr-4 line-through text-slate-500 ">25,500</div>
                                <div class="product-sale-price text-red-500">20,500</div>
                            </div>
                            <div class="submit"><button
                                    class=" bg-green-500 hover:bg-white text-white font-semibold h-7 hover:text-green-500 px-2 border border-green-500 ">Đặt
                                    Hàng</button></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-submit">
                <button
                    class=" bg-green-500 hover:bg-white text-white font-semibold h-10 hover:text-green-500 px-4 border border-green-500 ">Xem
                    tất cả</button>
            </div>
        </section>
        <section class="about-us flex flex-col justify-between items-center mt-3">
            <div class="container relative">
                <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/about_us_new.png" alt="">
                <div
                    class="about-content absolute bottom-[250px] right-[40px] flex flex-col justify-between items-center w-1/3 text-center">
                    <div class="about-title">
                        <div class="text-1  font-extrabold text-green-500 text-xl">HungBrew</div>
                        <div class="text-2 font-semibold  text-2xl">Về chúng tôi</div>
                    </div>
                    <div class="about-content flex flex-row font-semibold text-slate-500">
                        Bên cạnh niềm tự hào về những ly trà sữa ngon – sạch – tươi, chúng tôi luôn tự tin
                        mang đến khách hàng những trải nghiệm tốt nhất về dịch vụ và không gian.
                    </div>
                    <div class="submit"><button
                            class=" bg-green-500 hover:bg-transparent text-white font-semibold h-7 hover:text-green-500 px-2 border border-green-500 ">Xem
                            thêm</button></div>
                </div>
            </div>

        </section>
        <section class="new flex flex-col justify-between items-center mt-3">
            <div class="section-title flex flex-col justify-between items-center">
                <div class="text-1  font-extrabold text-green-500 text-xl">Tin Tức</div>
                <div class="text-2 font-semibold  text-2xl">Khám phá HungBrew nhận ngay ưu đãi</div>
            </div>
            <div class="section-content flex flex-row ">
                <div class="content-left basis-1/2 grid grid-cols-2 ">
                    <a class="card-new col-span-2" href="">
                        <div class="image-news">
                            <img src="https://tocotocotea.com/wp-content/uploads/2024/02/thumb.png" alt="">
                        </div>
                        <div class="info-news">
                            <div class="product-name">
                                <h3>Name</h3>
                            </div>
                        </div>
                    </a>
                    <a class="card-new " href="">
                        <div class="image-news">
                            <img src="https://tocotocotea.com/wp-content/uploads/2024/02/thumb.png" alt="">
                        </div>
                        <div class="info-news">
                            <div class="product-name">
                                <h3>Name</h3>
                            </div>
                        </div>
                    </a>
                    <a class="card-new " href="">
                        <div class="image-news">
                            <img src="https://tocotocotea.com/wp-content/uploads/2024/02/thumb.png" alt="">
                        </div>
                        <div class="info-news">
                            <div class="product-name">
                                <h3>Name</h3>
                            </div>
                        </div>
                    </a>
                    <a class="card-new " href="">
                        <div class="image-news">
                            <img src="https://tocotocotea.com/wp-content/uploads/2024/02/thumb.png" alt="">
                        </div>
                        <div class="info-news">
                            <div class="product-name">
                                <h3>Name</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="content-right basis-1/2">
                    <div>
                        123
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>
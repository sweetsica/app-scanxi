@extends('front-end.template.master')
<style>
    #main-result {
        background-image: url('frontend/assets/img/ft.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        /* height: 100vh; */
        width: 100%;
    }
</style>
@section('content-page')
    <main id="main-result">
        <div class="container">
            <div class="text-center" id="arrow-down">
                <i class="fa-solid fa-chevron-down icon-down"></i>
            </div>
            <article id="info-content">
                <div class="card card-register">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="content-info">
                                    <div class="text-title">BẢNG KẾT QUẢ</div>
                                    <ul class="list-info">
                                        <li class="info-item">Họ và tên:</li>
                                        <li class="info-item">Giới tính: Nam</li>
                                        <li class="info-item">Độ tuổi: 19</li>
                                        <li class="info-item">Chiều cao: 1m73</li>
                                        <li class="info-item">Cân nặng: 60kg</li>
                                        <li class="info-item">Thông số đo đạc:</li>
                                        <li class="info-item">BQI:</li>
                                        <li class="info-item">T-Score:</li>
                                        <li class="info-item">Z-Score:</li>
                                        <li class="info-item">SOS:</li>
                                        <li class="info-item">BUA:</li>
                                    </ul>

                                    <div class="d-flex flex-column">
                                        <button class="button-info active">
                                            Bạn đang bị loãng xương
                                        </button>
                                        <button class="button-info">
                                            Bạn đang tiền loãng xương
                                        </button>
                                        <button class="button-info">Bạn đang bình thường</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="text-title text-center">HÀM LƯỢNG BỔ SUNG</div>
                                <div class="list-info">
                                    <div class="additional-supplement-info">
                                        Sử dụng Magnesium + Calcium + D3 6 tháng liên tục sau đó
                                        nghỉ 1 tháng, mỗi năm dùng 2 đợt
                                        <div class="item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="38" height="47"
                                                viewBox="0 0 38 47">
                                                <image id="Vector_Smart_Object" data-name="Vector Smart Object"
                                                    width="38" height="47"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAvCAYAAACPMrhmAAADyUlEQVRYhb2YX4hVVRTGfzNNlFo2kA7VYEp/SERUSMHICUMfQiF8ESJL7CGKJAh9ER9KEUHRIEKC/qtNLyWhhBaVQkhEJTGgwcBQRlqUMmj+GZ1x8ott38HT4dxzz9x79l2wOfeutc/e31nf2muvvdsk0QJpA5YCjwDjgF7gu6JpWwEsgDoMPJzR9wPzgAt5L7XHRgVsN6h3gQeBB4DngUnAGWBq7lvBYxHbHfpP3s6Z4yFJVyVdkvSepAlpe2xgbxjY9Br2VyT9LOkf93u8VcB6PeGkgj43SNql6/JM0MeOsX4/F2f0A7YdAL4GVgJ9wCCw6dqCieyxuyWNSPotE0MHTeGI/fS5pIkpz93VEdlj54Ahr8DxwEXrF/kZGOsCTgFXgRHrh2N7bKc98FKJvp2S/pJ0PHbwLzWow5Lac+y3O/DD72nuF2RKTGBh0j8kDUm6P8c+2/lryPGXpIvnkj6xgH1YQOGNkvqcXL+R9KOkjyQ9lu4XA9SyOhRusP21onFiUPhnAYVzJF2RNCBpfCuBJRSuz7HdJOmoKeypN1aVmX858KR/j+bYXwZmAq+7DCqWijw1WdJpScP22B6ni0VOCXMljUrql3RzmTGrAvaxAa2WdF7/l+8l/eSUML/smFWAWm4YX0m60zF0UtJaZ/4kR20by7jNguoyhee8Ya8xiJW29xhoaQqrArbXQJ71/2+dDjqdDgbGSmEVwFYY1BeS2qz7zLoFTqBBtjQyfqOgQi0/mKIw0c81db/4ecz5q2XAshSmW1LsjRpoQ3M0Q+H+GvYdtm9uIkzGDCyh8Kyk7hx7T7MUNgpsv72xKseWrMKmKGwEWABTRGGyCjc0C2oswLpNXz0K+1wItgxYQuHTBRRecb3VNKjQyhzfVgFLgH3AB9Z1uMSZAswA7gM2+tBajZSkcNArMuju9daTlsooLKIynJhnujT+0pOvsO0FSRese981V6hW76kSVBZYu7P2cMYbe21/IqU7XmU81QP2qSc94o33Heu6bA/PHd4H5VW4ODawBZ7s1VSlUKvdIul3e7bWvVdlwE779qWjxEtv+iPWxaZygifaXeKF29x3qOpVmG3h+HYJuOx8VE/+Bt7ylfiyynJWnhjpHntiSYmv6Xbf3pgeS+75O4ETvpPfChwEjgLna3xPuJv/AXg0tsdwzBxI5apfJd2a8zXTUys4avBn29TUpr0rc2MTFsoh2wovRaqiMiuB0t3AU8AR4BPfoYb/0xz4+6LRSP1NfGFmiwqnohdjeqqex9ISvDfLpc6xazfKsQX4FyY59yl8o823AAAAAElFTkSuQmCC" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="additional-supplement-info active">
                                        Sử dụng Magnesium + Calcium + D3 3 tháng liên tục sau đó
                                        nghỉ 1 tháng, mỗi năm dùng 2-3 đợt
                                        <div class="item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="43" height="45"
                                                viewBox="0 0 43 45">
                                                <image id="Vector_Smart_Object" data-name="Vector Smart Object"
                                                    width="43" height="45"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAtCAYAAAA3BJLdAAAErElEQVRYhe1YbYhWRRR+9sN11TIzUAsrDTMyFlJKDcrtV9aCHxhtEVZYuK2WaETQGklQQb+KJUKyLYwgIiq/KFMpw4hC+2GSmNuHu7hqrWWmaGXqE+ftuTQOc+97567bW9CB4bx3zjkzzzv33DPPDEjGtttJniB5XSBuJckDJAcXGLdsq0a8XANgAIBJgcirAYwCMKLAuGWlCNgBnv7HpAjYisn/YPtLXLD2+z4AV/wXwDYA6ADwVAXxZIoLtkb6ZJmY0xXAWZJaAG2qmW8BmAlgL4AXAQwB8DSAXV7MkQphLYF9TMCskDcCmAGgRfZtAbAVEwN7FYCxALoBrAXwOoCpSott/xagENhutWlaVcvJ2Rkxg6VPBGyUrgnY+izuB/YtgF8B7C4D9Cb93hOwJ31z+gOsz3TqM5hPNcmN/Es6SdYFfKbLforkbWebdcU4zxOQvSTHZfgtkN/PJIek+Nii1PYn2DUCcWsO3w3ybQrYBpL8ieTq/uSz50rvy+Gb+JwTsA0CMBzAmIi5SxID9gvpO73+sU6FgIA06fcOp380gBv1B15Vm6gqVJ8LQcRrsDw9rtf7pnLzJZInSXaTbCP5MMmv5bPOi9+p/h49T+Df8lweDFWlxM0vywG05vS2VdvuPM/Tyn6qMvkjgLv0Jl7IswHFgt2gOtuu5/0AVgO4TK+zRoAmq9auCoxhaXAUwFYAU2Imr41xBjBSeqW3ap0A3ndsBvbClDGqpKOJfyzYH6SNpJ8C0CM+cblWtlpcw+RAyhhHteo9sWBj02AFgPk5ff2cTZPh4iRTVHEsdXqDvhHVYDzJ3/T9vkbyfpIdqgZdJB8h+SDJXfJ5L2OsUSRbSW4i+QfPFNuqt5BcRPKSojtYu4Zs9/ovJjnIeR5Gcr98r3T6R5J8iOTHJE878I6QfIPkAyRf1jbtymckHyU5Ogbshxrg2hy+r8jXJTM7HAC/6O3M0Pbrb8dNAn7IiemKAfu2gppz+H4g35udvi713RMAmNZqNIalWhSRuFuT7SvDuhbK76B3QZeAHRY5r7XDlssxAdX6IEz2eHmatFscPjvHsyVgi9wwGtjDsUHGT3dr0lkB+yrZFgdsCdjYOROwx2J3kWMAlgD4CsB3Aful0usjxy0nA43Zxe5gCZA0MMmfDx0m+yL1yNif68RJQzzT7mVv6MOlXtG442mBRrDfBbAgYFsIYAuA5sjJfpe+IDLuPOlDaWlQ52lX1uum8aPISW2/H6/jzMGIuITp9foXc4sBPA7gc10rbQKwTP0J8E6t7veRYJMjzrTIuOuld7rlocHZ2p5X35NOX6P6LiK5lOT5gRKzXb5jMmqwEZ2qiLL1ieLm+gYr5PeSnEhyhXhAi2pqMkGbglsjwdo9wTeyt+QE2iz/XtuE0pwWyWlZwPaEbEsiwVqbLbsdPKeWAdogwmMynxn3Br2ePlti57VndXdg38MdKeNOB7AZwFAd2TtKvRn/bEJKbvVlZaExn3G+hc0kZ4ozNIrbJrJczKsUW2SfzgK7NQfYpNklXsIzfDGi5BOhQruJnZOswLu3LYnYmctSJ0/62LHeDpdznbPalzrjWR1/5wxvAH8Ct/qnMWxhLnQAAAAASUVORK5CYII=" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="additional-supplement-info">
                                        Dự phòng loãng xương, sử dụng Vitamin D3 + K2 hoặc
                                        Magnesium + Calcium + D3 3 tháng liên tục.
                                        <div class="item-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="52"
                                                viewBox="0 0 48 52">
                                                <image id="Vector_Smart_Object_copy_2"
                                                    data-name="Vector Smart Object copy 2" width="48" height="52"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAA0CAYAAADMk7uRAAAE3UlEQVRogcWZW4iVVRTHf6lZ2pRlDJJdjDDyglBY2OUhELFCKIggLJEwH8KyiCIoMkQkoYikHoKM0qcu6kNU9GBJBQXTdbpohLcopjTvjY6emdF/LPsfOH5855xvztmfs2Bzzrf23muvtfd/rb323mdJok1aCPwFfNKuoFYohQFHgVHAOcNhwIgEMkL5A8CjCWQNmVIYMBJYBawExgBzgfFnyoAUEBoAzgO6gKnAIFABLk6jYmMalUBGKHwNcF0Nr1KGsnmUAkLHgNuAjcCn5vUbSqVTCgg9DTwLbAMmAR8A04HdwLzSLQgDEpZZko5LWilpb2LZuSUFhGqpy/jvAy5KLDuXUhsQ9BLwhP+PK0F+lSJ8z0/hA3nU77IMeLkE+aH8ngjVZaxA0Jfe1G5PJC8CxR/AXZb7D3DoVBpTknN16n/6LYGsCAyDkl6TdExSv6QvHCRWlRkh3pJ0dwI5ofSqDG+2pMop+J+JUCfpSkkvSJowxH5fS9rh/rskPWd+j6Q3z5QBMyQNSNop6YSkhQX7LTZcZvv3I8/6rursl23Aei//SUld5i0xnudKGtmgb4eVXmHjqzM/TtKHkmaWbcBoKxAD3ippTgYWsnEVO2e2/++Stlj5xxuNlVrxmLl9HvhApi6gcNRKLzav098dNe1WGGoDReCWUvmAxW5JP+XUrbFS7+TU/SBpU833gGE3r8i4qZRf7pkMeFyVqfvKqzGlTt+qk1e/35B0c9Gxaz+i00bjr09Sr6RpBQUFXlfn8CN+H8nwlkn6M8OLDPaGViYvUomdzh7fByYC64HrgR7gsYJb/XZgTg7/Ct9axPa/FNgHPAVcCsyoafczsKSVHCMMOB4HG6ADmGZhW33cPFxQzjpgSg7/fit92Bnqg8D5HvPdjB7TWzEguySLvJzx/xWHwn8ldUt6UdLVdZZytENjnpNWy0zvoN0eY7/h1Wun3dwKhPKYxzPfEf7WSdpu36g4HG7JbEaDNjgb+qLNUkl/G/sbHT6j7nKnFwclPZTKgB4r2e/Qd8LKVWxcxTOWjd+9Dn19juVV/g5Hme/r7L53ZKLQkEqRA00ncMS3D41os+sWAFuAs32oGeE7ohN1+kZevwFYnMIH2ikTPZMdNTPbbCdd5JSi5XFTHym/9UzPKtg+VvYRYG3LIyZcAWqSuNkF2obTZvOlIZfUZ+LA/PPAewXaBuY/bnfAMg71y70JjmnSbgKwyf+XOhMY8q12WbcSPQWiSuz8v/p/+MydwF5gRx0fett3TqdRWQYcrpNa1FLc7fT5e4HvVOUg8BlwsObRZKUNfBj45TQpiZ24Wj73jtuoTaQoMzK8exwEtvn4uc8b5qADw3inH1urfcpagf0t9ttg34kMdjXwJDDZbw+bncVOdZb7DYkeOPKoyOYSDyNjc/gBoWuBB4DXgW7gJme897nfEbfZVNYKFKFQZHKDdmt9OVxNv+cDl3mF1rj/LcNpQFzDT2rS5pghc6Phs8f8Z2zI2LIgdLJAhIsINLGgvO/qVZS1AnsKtIks9JJ2BxpOCMVRs7NdIWUacGGT+lilth/EyzSgmX/Fg8UF7Q4ynBCK65y8fWBIVKYBzWRHIndu2YO0Q81eKH9MkQkMJ4Ti8NM2lWXAoYLtIh1oi8raiV+tOW01onvbGgX4D5hfpxGau4AhAAAAAElFTkSuQmCC" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="barChart"> </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <article id="list-product">
            <div class="container">
                <div class="list-img-product">
                    <div class="title-product text-center mb-4">
                        <h3 class="title-product">BỘ SẢN PHẨM DÀNH CHO XƯƠNG KHỚP</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-center position-relative list-product">
                        <img src="{{ asset('frontend/assets/img/img-1.png') }}" alt="Img Product"
                            class="item-img img-product1" />
                        <img src="{{ asset('frontend/assets/img/img-2.png') }}" alt="Img Product"
                            class="item-img img-product2" />
                        <img src="{{ asset('frontend/assets/img/img-3.png') }}" alt="Img Product"
                            class="item-img img-product3" />
                        <img src="{{ asset('frontend/assets/img/img-4.png') }}" alt="Img Product"
                            class="item-img img-product4" />
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection

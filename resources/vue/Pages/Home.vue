<script setup>
import { ref } from 'vue'
import { Head, useForm } from '@inertiajs/vue3'

</script>

<template>
  <Head>
  <title>Jasanya.Tech</title>
  <meta name="description" content="Your page description">
</Head>
<div class="grow shrink-0">
<header class="!absolute w-full">
      <div class="gradient-5 !text-white font-bold !text-[.75rem] !mb-2 !relative" style="z-index: 1;">
        <div class="container py-2 !text-center">
          <p class="!mb-0">✨ Sandbox is part of Envato's Biggest Sale to date, be quick and grab a <a href="#" class="!text-white hover inline-flex items-center">copy <i class="uil uil-arrow-right text-[0.8rem] before:content-['\e94c']"></i></a></p>
        </div>
        <!-- /.container -->
      </div>
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container xl:!flex-row lg:!flex-row !flex-nowrap items-center">
          <div class="navbar-brand w-full">
            <a href="./index.html">
              <img src="@/assets/img/logo-dark.png" srcset="@/assets/img/logo-dark@2x.png 2x" alt="image">
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header xl:!hidden lg:!hidden flex items-center justify-between flex-row p-6">
              <h3 class="!text-white xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Sandbox</h3>
              <button type="button" class="btn-close btn-close-white !mr-[-0.75rem] m-0 p-0 leading-none !text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:text-white before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:!flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)]  " data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle  font-bold !tracking-[-0.01rem] hover:!text-[#605dba] after:!text-[#605dba]" href="#" data-bs-toggle="dropdown">Demos</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content mega-menu-scroll">
                      <ul class="grid grid-cols-1 xl:grid-cols-6 lg:grid-cols-6 mx-0 xl:mx-[-10px] lg:mx-[-10px] xl:!mt-[-10px] lg:!mt-[-10px] !pl-0 list-none">
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo1.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi1.jpg" srcset="@/assets/img/demos/mi1@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 1</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo2.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi2.jpg" srcset="@/assets/img/demos/mi2@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 2</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo3.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi3.jpg" srcset="@/assets/img/demos/mi3@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 3</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo4.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi4.jpg" srcset="@/assets/img/demos/mi4@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 4</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo5.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi5.jpg" srcset="@/assets/img/demos/mi5@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 5</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo6.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi6.jpg" srcset="@/assets/img/demos/mi6@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 6</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo7.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi7.jpg" srcset="@/assets/img/demos/mi7@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 7</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo8.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi8.jpg" srcset="@/assets/img/demos/mi8@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 8</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo9.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi9.jpg" srcset="@/assets/img/demos/mi9@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 9</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo10.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi10.jpg" srcset="@/assets/img/demos/mi10@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 10</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo11.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi11.jpg" srcset="@/assets/img/demos/mi11@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 11</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo12.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi12.jpg" srcset="@/assets/img/demos/mi12@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 12</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo13.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi13.jpg" srcset="@/assets/img/demos/mi13@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 13</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo14.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi14.jpg" srcset="@/assets/img/demos/mi14@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 14</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo15.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi15.jpg" srcset="@/assets/img/demos/mi15@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 15</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo16.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi16.jpg" srcset="@/assets/img/demos/mi16@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 16</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo17.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi17.jpg" srcset="@/assets/img/demos/mi17@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 17</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo18.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi18.jpg" srcset="@/assets/img/demos/mi18@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 18</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo19.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi19.jpg" srcset="@/assets/img/demos/mi19@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 19</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo20.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi20.jpg" srcset="@/assets/img/demos/mi20@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 20</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo21.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi21.jpg" srcset="@/assets/img/demos/mi21@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 21</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo22.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi22.jpg" srcset="@/assets/img/demos/mi22@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 22</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo23.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi23.jpg" srcset="@/assets/img/demos/mi23@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 23</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo24.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi24.jpg" srcset="@/assets/img/demos/mi24@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 24</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo25.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi25.jpg" srcset="@/assets/img/demos/mi25@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 25</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo26.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi26.jpg" srcset="@/assets/img/demos/mi26@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 26</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo27.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi27.jpg" srcset="@/assets/img/demos/mi27@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 27</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo28.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi28.jpg" srcset="@/assets/img/demos/mi28@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 28</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo29.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi29.jpg" srcset="@/assets/img/demos/mi29@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 29</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo30.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi30.jpg" srcset="@/assets/img/demos/mi30@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 30</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo31.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi31.jpg" srcset="@/assets/img/demos/mi31@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 31</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo32.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi32.jpg" srcset="@/assets/img/demos/mi32@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 32</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo33.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi33.jpg" srcset="@/assets/img/demos/mi33@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 33</span>
                          </a>
                        </li>
                        <li class="xl:!px-[10px] xl:!mt-[10px] lg:!px-[10px] lg:!mt-[10px]">
                          <a class="dropdown-item" href="./demo34.html">
                            <figure class="!rounded-[.4rem] lift hidden xl:block lg:block"><img class="!rounded-[.4rem]" src="@/assets/img/demos/mi34.jpg" srcset="@/assets/img/demos/mi34@2x.jpg 2x" alt="image"></figure>
                            <span class="xl:!hidden lg:!hidden">Demo 34</span>
                          </a>
                        </li>
                      </ul>
                      <!--/.row -->
                      <span class="hidden xl:!flex lg:!flex"><i class="uil uil-direction before:content-['\ea93']"></i><strong>Scroll to view more</strong></span>
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle  font-bold !tracking-[-0.01rem] hover:!text-[#605dba] after:!text-[#605dba]" href="#" data-bs-toggle="dropdown">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./services.html">Services I</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./services2.html">Services II</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./about.html">About I</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./about2.html">About II</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./shop.html">Shop I</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./shop2.html">Shop II</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./shop-product.html">Product Page</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./shop-cart.html">Shopping Cart</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./shop-checkout.html">Checkout</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./contact.html">Contact I</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./contact2.html">Contact II</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./contact3.html">Contact III</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Career</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./career.html">Job Listing I</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./career2.html">Job Listing II</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./career-job.html">Job Description</a></li>
                      </ul>
                    </li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Utility</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./404.html">404 Not Found</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./page-loader.html">Page Loader</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./signin.html">Sign In I</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./signin2.html">Sign In II</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./signup.html">Sign Up I</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./signup2.html">Sign Up II</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./terms.html">Terms</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./pricing.html">Pricing</a></li>
                    <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./onepage.html">One Page</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle  font-bold !tracking-[-0.01rem] hover:!text-[#605dba] after:!text-[#605dba]" href="#" data-bs-toggle="dropdown">Projects</a>
                  <div class="dropdown-menu dropdown-lg">
                    <div class="dropdown-lg-content">
                      <div>
                        <h6 class="dropdown-header !text-[#605dba]">Project Pages</h6>
                        <ul class="pl-0 list-none">
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="./projects.html">Projects I</a></li>
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="./projects2.html">Projects II</a></li>
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="./projects3.html">Projects III</a></li>
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="./projects4.html">Projects IV</a></li>
                        </ul>
                      </div>
                      <!-- /.column -->
                      <div>
                        <h6 class="dropdown-header !text-[#605dba]">Single Projects</h6>
                        <ul class="pl-0 list-none">
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="./single-project.html">Single Project I</a></li>
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="./single-project2.html">Single Project II</a></li>
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="./single-project3.html">Single Project III</a></li>
                          <li><a class="dropdown-item hover:!text-[#605dba]" href="./single-project4.html">Single Project IV</a></li>
                        </ul>
                      </div>
                      <!-- /.column -->
                    </div>
                    <!-- /auto-column -->
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle  font-bold !tracking-[-0.01rem] hover:!text-[#605dba] after:!text-[#605dba]" href="#" data-bs-toggle="dropdown">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./blog.html">Blog without Sidebar</a></li>
                    <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./blog2.html">Blog with Sidebar</a></li>
                    <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./blog3.html">Blog with Left Sidebar</a></li>
                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item hover:!text-[#605dba] dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Posts</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./blog-post.html">Post without Sidebar</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./blog-post2.html">Post with Sidebar</a></li>
                        <li class="nav-item"><a class="dropdown-item hover:!text-[#605dba]" href="./blog-post3.html">Post with Left Sidebar</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle  font-bold !tracking-[-0.01rem] hover:!text-[#605dba] after:!text-[#605dba]" href="#" data-bs-toggle="dropdown">Blocks</a>
                  <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                    <li class="mega-menu-content">
                      <ul class="grid grid-cols-1 xl:grid-cols-6 lg:grid-cols-6 mx-0 xl:mx-[-15px] lg:mx-[-15px] xl:!mt-[-20px] lg:!mt-[-20px] !pl-0 list-none">
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/about.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block1.svg" alt="image"></div>
                            <span>About</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/blog.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block2.svg" alt="image"></div>
                            <span>Blog</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/call-to-action.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block3.svg" alt="image"></div>
                            <span>Call to Action</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/clients.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block4.svg" alt="image"></div>
                            <span>Clients</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/contact.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block5.svg" alt="image"></div>
                            <span>Contact</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/facts.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block6.svg" alt="image"></div>
                            <span>Facts</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/faq.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block7.svg" alt="image"></div>
                            <span>FAQ</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/features.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block8.svg" alt="image"></div>
                            <span>Features</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/footer.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block9.svg" alt="image"></div>
                            <span>Footer</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/hero.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block10.svg" alt="image"></div>
                            <span>Hero</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/misc.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block17.svg" alt="image"></div>
                            <span>Misc</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/navbar.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block11.svg" alt="image"></div>
                            <span>Navbar</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/portfolio.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block12.svg" alt="image"></div>
                            <span>Portfolio</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/pricing.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block13.svg" alt="image"></div>
                            <span>Pricing</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/process.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block14.svg" alt="image"></div>
                            <span>Process</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/team.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block15.svg" alt="image"></div>
                            <span>Team</span>
                          </a>
                        </li>
                        <li class="xl:!px-[15px] xl:!mt-[20px] lg:!px-[15px] lg:!mt-[20px]"><a class="dropdown-item" href="./docs/blocks/testimonials.html">
                            <div class="rounded img-svg hidden xl:block lg:block p-4 xl:!mb-2 lg:!mb-2"><img class="rounded-none" src="@/assets/img/demos/block16.svg" alt="image"></div>
                            <span>Testimonials</span>
                          </a>
                        </li>
                      </ul>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link dropdown-toggle  font-bold !tracking-[-0.01rem] hover:!text-[#605dba] after:!text-[#605dba]" href="#" data-bs-toggle="dropdown">Documentation</a>
                  <ul class="dropdown-menu mega-menu">
                    <li class="mega-menu-content">
                      <div class="flex flex-wrap mx-0 xl:mx-[-7.5px] lg:mx-[-7.5px]">
                        <div class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] max-w-full">
                          <h6 class="dropdown-header !text-[#605dba]">Usage</h6>
                          <ul class="pl-0 list-none  xl:columns-2 lg:columns-2  xl:pb-1 lg:pb-1">
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/index.html">Get Started</a></li>
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/forms.html">Forms</a></li>
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/faq.html">FAQ</a></li>
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/changelog.html">Changelog</a></li>
      <li class="xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/credits.html">Credits</a></li>
                          </ul>
                          <h6 class="dropdown-header !text-[#605dba] xl:!mt-6 lg:!mt-6">Styleguide</h6>
                          <ul class="pl-0 list-none  xl:columns-2 lg:columns-2 ">
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/styleguide/colors.html">Colors</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/styleguide/fonts.html">Fonts</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/styleguide/icons-svg.html">SVG Icons</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/styleguide/icons-font.html">Font Icons</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/styleguide/illustrations.html">Illustrations</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/styleguide/backgrounds.html">Backgrounds</a></li>
    <li class=" xl:inline-block xl:w-full lg:inline-block lg:w-full"><a class="dropdown-item hover:!text-[#605dba]" href="./docs/styleguide/misc.html">Misc</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                        <div class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] max-w-full xl:border-l-[rgba(164,174,198,0.2)] xl:border-l xl:border-solid lg:border-l-[rgba(164,174,198,0.2)] lg:border-l lg:border-solid">
                          <h6 class="dropdown-header !text-[#605dba]">Elements</h6>
                          <ul class="pl-0 list-none  xl:columns-3 lg:columns-3 ">
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/accordion.html">Accordion</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/alerts.html">Alerts</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/animations.html">Animations</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/avatars.html">Avatars</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/background.html">Background</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/badges.html">Badges</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/buttons.html">Buttons</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/card.html">Card</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/carousel.html">Carousel</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/dividers.html">Dividers</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/form-elements.html">Form Elements</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/image-hover.html">Image Hover</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/image-mask.html">Image Mask</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/lightbox.html">Lightbox</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/player.html">Media Player</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/modal.html">Modal</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/pagination.html">Pagination</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/progressbar.html">Progressbar</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/shadows.html">Shadows</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/shapes.html">Shapes</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/tables.html">Tables</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/tabs.html">Tabs</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/text-animations.html">Text Animations</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/text-highlight.html">Text Highlight</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/tiles.html">Tiles</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/tooltips-popovers.html">Tooltips & Popovers</a></li>
                            <li><a class="dropdown-item hover:!text-[#605dba]" href="./docs/elements/typography.html">Typography</a></li>
                          </ul>
                        </div>
                        <!--/column -->
                      </div>
                      <!--/.row -->
                    </li>
                    <!--/.mega-menu-content-->
                  </ul>
                  <!--/.dropdown-menu -->
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer xl:!hidden lg:!hidden">
                <div>
                  <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                  <br> 00 (123) 456 78 90 <br>
                  <nav class="nav social social-white !mt-4">
                  <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                  <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                  <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                  <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                  <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]" href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-full !flex !ml-auto">
            <ul class="navbar-nav !flex-row !items-center !ml-auto">
              <li class="nav-item">
                <nav class="nav social social-muted justify-end text-right">
                  <a class="m-[0_0_0_.7rem] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]" href="#"><i class="uil uil-twitter before:content-['\ed59'] text-[1rem] !text-[#5daed5]"></i></a>
                  <a class="m-[0_0_0_.7rem] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]" href="#"><i class="uil uil-facebook-f before:content-['\eae2'] text-[1rem] !text-[#4470cf]"></i></a>
                  <a class="m-[0_0_0_.7rem] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]" href="#"><i class="uil uil-dribbble before:content-['\eaa2'] text-[1rem] !text-[#e94d88]"></i></a>
                  <a class="m-[0_0_0_.7rem] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 hover:translate-y-[-0.15rem]" href="#"><i class="uil uil-instagram before:content-['\eb9c'] text-[1rem] !text-[#d53581]"></i></a>
                </nav>
                <!-- /.social -->
              </li>
              <li class="nav-item xl:!hidden lg:!hidden">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>

    <section class="wrapper overflow-hidden">
      <div class="container pt-36 xl:pt-[12.5rem] lg:pt-[12.5rem] md:pt-[12.5rem] !text-center !relative">
        <div class="absolute" style="top: -15%; left: 50%; transform: translateX(-50%);" data-cue="fadeIn"><img class="!rounded-[0.8rem]" src="@/assets/img/photos/blurry.png" alt="image"></div>
        <div class="flex flex-wrap mx-[-15px] !relative">
          <div class="lg:w-8/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto !relative">
            <div class="absolute shape grape w-5 hidden xl:block lg:block" style="top: -5%; left: -15%;" data-cue="fadeIn" data-delay="1500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 219.5 219.5" data-inject-url="https://sandbox-tailwind-template.netlify.app/assets/img/svg/pie.svg" class="svg-inject icon-svg !w-full !h-full"><path class="svg-fill" d="M219.5 219.5H0c0-58.19 23.14-114.06 64.29-155.21A219.561 219.561 0 01219.5 0v219.5z"></path></svg></div>
            <div class="absolute shape violet !w-[2.5rem] hidden xl:block lg:block" style="bottom: 30%; left: -20%;" data-cue="fadeIn" data-delay="1500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 457.71 446.45" data-inject-url="https://sandbox-tailwind-template.netlify.app/assets/img/svg/scribble.svg" class="svg-inject icon-svg !w-full !h-full"><path class="svg-fill" d="M205.62 442.54c-.51-.41-.99-.84-1.46-1.31-10.4-10.39-3.61-27.12 11.63-52.5 11.72-19.51 28.48-43.74 46.22-69.39 17.53-25.34 35.66-51.54 49.01-73.47 14.73-24.19 18.57-35.01 19.51-39.48-3.86-.28-13.15.3-33.78 6.52-19.71 5.94-43.09 14.92-65.7 23.6-63.8 24.49-85.35 31.41-96.51 19.5-3.21-3.43-7.62-11.04-1.12-23.54 2.49-4.79 6.64-10.51 12.68-17.5 10.4-12.03 25.04-26.34 40.55-41.49 14.02-13.7 28.53-27.87 39.53-40.11 9.93-11.04 14.15-17.43 15.94-20.82-3.43-.75-10.24-1.51-23.25-.92-14.99.68-33.44 2.89-51.28 5.02-46.92 5.61-74.09 8.33-86.81-.99-4.78-3.5-7.67-8.42-8.41-14.24-1.97-15.58 12.45-33.15 29.14-53.5 5.31-6.47 13.31-16.22 17.36-22.68-4.51-.38-12.43-.4-25.97 1.1-16.54 1.82-35.62 5.22-50.95 7.96-12.62 2.25-22.6 4.03-28.48 4.49C6.6 39.3.58 34.17.04 27.28c-.54-6.88 4.6-12.9 11.48-13.44 4.66-.37 14.58-2.13 26.06-4.18C54.56 6.63 75.7 2.86 94 1.07c26.41-2.6 40.16-.54 47.48 7.13 7.01 7.34 6.45 17.66-1.68 30.66-4.72 7.55-11.63 15.98-18.95 24.9-6.18 7.53-12.57 15.31-17.24 22.19-3.35 4.92-4.95 8.13-5.71 10.07 3 .54 9.09 1.08 20.87.43 13.21-.73 29.07-2.63 45.86-4.64 59.99-7.17 94.33-10.22 102.49 10.62 7.4 18.93-16.51 43.51-62.99 88.92-12.69 12.4-24.68 24.11-34.04 34.28-3.17 3.45-5.68 6.34-7.67 8.75 15.88-4.42 41.18-14.13 59.67-21.22 62.4-23.96 101.69-37.87 121.09-29.14 5.38 2.42 9.26 6.47 11.23 11.72 7.48 19.95-16.15 57.31-71.83 137.82-15.49 22.39-30.12 43.55-41.18 61.25-7.13 11.4-11.3 19.11-13.75 24.25 8.97-3.3 25.58-11 55.73-28.8 32.68-19.29 70.61-44.04 101.09-63.94 24.62-16.07 44.07-28.76 54.65-34.68 6.03-3.37 13.64-1.22 17.01 4.81 3.37 6.03 1.22 13.64-4.81 17.01-9.83 5.5-29.92 18.61-53.18 33.79-33.46 21.84-75.1 49.01-110.05 69.21-49.35 28.51-70.85 35.44-82.46 26.07z"></path></svg></div>
            <div class="absolute shape fuchsia w-6 hidden xl:block lg:block" style="top: 0%; right: -25%; transform: rotate(70deg);" data-cue="fadeIn" data-delay="1500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 411.42 329.24" data-inject-url="https://sandbox-tailwind-template.netlify.app/assets/img/svg/tri.svg" class="svg-inject icon-svg !w-full !h-full"><g data-name="Layer 2"><path class="svg-fill" d="M164.34 21.92L8.72 251.15c-22.54 33.2 1.24 78.09 41.37 78.09h311.24c40.13 0 63.91-44.89 41.37-78.09L247.08 21.92a50 50 0 00-82.74 0z" data-name="Layer 1"></path></g></svg></div>
            <div class="absolute shape yellow w-6 hidden xl:block lg:block" style="bottom: 25%; right: -17%;" data-cue="fadeIn" data-delay="1500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" data-inject-url="https://sandbox-tailwind-template.netlify.app/assets/img/svg/circle.svg" class="svg-inject icon-svg !w-full !h-full"><g data-name="Layer 2"><path class="svg-fill" d="M250 0C111.93 0 0 111.93 0 250s111.93 250 250 250 250-111.93 250-250S388.07 0 250 0zm0 425a175 175 0 11175-175 175 175 0 01-175 175z" data-name="Layer 1"></path></g></svg></div>
            <div data-cues="slideInDown" data-group="page-title">
              <h1 class="xl:!text-[3.2rem] !text-[calc(1.445rem_+_2.34vw)] font-semibold !leading-[1.15] !mb-5 md:mx-10 lg:mx-0 xl:mx-0">We are a digital web agency specializing on <br><span class="rotator-fade !text-[#605dba] ">web design.,SEO services.,e-commerce.,Google Adwords.</span></h1>
              <p class="lead !text-[1.2rem] !leading-[1.6] !mb-8">We are an award winning digital web agency that strongly believes in the power of creative ideas.</p>
            </div>
            <div class="flex justify-center" data-cues="slideInDown" data-delay="600">
              <span><a class="btn btn-lg btn-grape !text-white !bg-[#605dba] border-[#605dba] hover:text-white hover:bg-[#605dba] hover:!border-[#605dba]   active:text-white active:bg-[#605dba] active:border-[#605dba] disabled:text-white disabled:bg-[#605dba] disabled:border-[#605dba] !rounded-[0.8rem] mx-1">See Projects</a></span>
              <span><a class="btn btn-lg btn-fuchsia !text-white !bg-[#e668b3] border-[#e668b3] hover:text-white hover:bg-[#e668b3] hover:!border-[#e668b3]   active:text-white active:bg-[#e668b3] active:border-[#e668b3] disabled:text-white disabled:bg-[#e668b3] disabled:border-[#e668b3] !rounded-[0.8rem] mx-1">Contact Us</a></span>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
  
</template>

<style scoped>
.swiper-container.nav-color .swiper-button, .swiper-container.nav-color .swiper-slide figure .item-link {
    background: #605dbae6 !important;
    color: #fff !important;
}
.swiper-container.nav-color .swiper-button:hover, .swiper-container.nav-color .swiper-slide figure .item-link:hover {
    background: #605dba !important;
}
@media (max-width: 991.98px){
      .navbar-expand-lg .navbar-collapse .dropdown-toggle:after {
        color: #ffffff !important;
      }
  }
</style>


<x-master>

    <div class="p-2 position-relative d-flex">
        <img class="z-0" style="width: 100%;" src="{{ asset('img/Background_Homepage.svg') }}" alt="">

        <div class="z-10 position-absolute top-50 start-50 translate-middle text-center">
            <h1 class="text-orenpalette montserrat-bold" style="letter-spacing: 0.3vw;  font-size:2vw">HOMETORY</h1>
            <h1 class="text-white montserrat-bold text-6xl" style="letter-spacing: 0.3vw">TRACK SMARTER</h1>
            <h1 class="text-white montserrat-bold text-6xl" style="letter-spacing: 0.3vw">WASTE NO MORE!</h1>
            <p class="text-white nunito-medium">A flexible and structured inventory system allows users to record and organize household items with ease. It helps streamline daily management, minimize waste, and maintain clarity over available supplies at home.</p>

            <button type="button" class="btn montserrat-bold text-white mt-3 btn-orange-gelap">
                GET STARTED
            </button>
        </div>
    </div>

    {{-- Judul Our Feature --}}
    <div>
        <p class="d-flex justify-content-center align-items-center mt-4 montserrat-bold text-5xl mb-0">Our<span class="ms-3 text-orenyedija">Feature</span></p>

        <p class="text-center nunito-regular mb-0">Discover smart tools to organize your inventory with ease!</p>

        <div class=" bg-orenyedija mx-auto mt-3" style="width: 7vw; height: 0.5vh;"></div>
    </div>

    {{-- Isi Our Feature --}}

    <div class="d-flex m-5 justify-content-center align-self-center text-center pb-5">

        <div class=" shadow p-3 d-flex flex-column col m-3 align-items-center rounded-4">
            <img src="{{ asset('img/Inventory Icon Home.svg') }}" alt="">
            <p class="nunito-bold m-3">My Inventory</p>
            <p class="mb-0 nunito-regular"> This feature serves as the core of the system, allowing users to input, update, and monitor all item details, such as quantity, category, and location, ensuring accurate stock control</p>
        </div>

        <div class=" shadow p-3 d-flex flex-column col m-3 align-items-center rounded-4">
            <img src="{{ asset('img/Calendar Icon Home.svg') }}" alt="">
            <p class="nunito-bold m-3">Calendar</p>
            <p class="mb-0 nunito-regular">  This feature helps users keep track of important inventory-related activities by scheduling restock dates, tracking item inflows and outflows, and setting reminders for timely actions</p>
        </div>

        <div class=" shadow p-3 d-flex flex-column col m-3 align-items-center rounded-4">
            <img src="{{ asset('img/Statistic Icon Home.svg') }}" alt="">
            <p class="nunito-bold m-3">Statistic</p>
            <p class="mb-0 nunito-regular">  With this feature, users can visualize their inventory data with charts and graphs, making it easier to identify trends, evaluate stock performance, and make data-driven decisions.</p>
        </div>

        <div class=" shadow p-3 d-flex flex-column col m-3 align-items-center rounded-4">
            <img src="{{ asset('img/Wishlist Icon Home.svg') }}" alt="">
            <p class="nunito-bold m-3">Wishlist</p>
            <p class="mb-0 nunito-regular">  This feature enables users to create a personalized list of items they intend to purchase or add to their inventory in the future, supporting better planning and budgeting.</p>
        </div>
        
        <div class=" shadow p-3 d-flex flex-column col m-3 align-items-center rounded-4">
            <img src="{{ asset('img/Article Icon Home.svg') }}" alt="">
            <p class="nunito-bold m-3">Article</p>
            <p class="mb-0 nunito-regular"> This  section offers informative content, practical tips, and user guides about inventory management to enhance user knowledge and help them maximize the platform’s capabilities.</p>
        </div>

    </div>

    {{-- About Hometory --}}

    <div class="py-5" style="box-shadow: inset 0 0.5vh 1vh rgba(0, 0, 0, 0.2); background-color:#F3F3F3">

        {{-- judul --}}

        <div>
            <p class="d-flex justify-content-center align-items-center montserrat-bold text-5xl mb-0">About<span class="ms-3 text-orenyedija">Hometory</span></p>

            <p class="text-center nunito-regular mb-0">Get to know about <span class="nunito-bold">Hometory</span></p>

            <div class=" bg-orenyedija mx-auto mt-3" style="width: 7vw; height: 0.5vh;"></div>
        </div>

        <p class="text-center text-1xl pt-4" style="padding-inline: 10vw">Hometory is A web-based platform that helps families and individuals efficiently and responsibly record, manage, and control household necessities. Embracing the spirit of Sustainable Development Goal (SDG) 12, Hometory aims to promote mindful consumption behavior, reduce waste, and raise awareness about resource usage at home.</p>

    </div>

    {{-- Review Aplikasi --}}

    <div class=" d-flex flex-row justify-content-center mt-5 align-items-center" style="gap: 7vw">

        <button class=" border-0 bg-transparent">
            <i class="bi bi-caret-left-fill rounded-circle d-flex justify-content-center align-items-center p-2 shadow"></i>
        </button>

        <div class="d-flex flex-row gap-5 row" style="width:70%">
            
            <div class="shadow p-3 rounded-3 col">
                {{-- Untuk foto profil dan username --}}
                <div class="d-flex flex-row"> 
                    <img src="{{ asset('img/Profil Dummy.svg') }}" alt="">

                    <div class="ms-2" style=""> {{-- Untuk username dan waktu upload --}}
                        <p class="mb-0 poppins-medium text-orenyedija" style="font-size: 1.5vw">Christina</p>
                        <p class="mb-0 poppins-medium opacity-75" style="font-size: 0.8vw">1 day ago</p>
                    </div>
                </div>

                {{-- Untuk Commentnya --}}
                <p class="mb-0 mt-3 poppins-medium" style="font-size: 0.9vw">
                    Website buatan oe memang sangat mantap o, bisa bantu olang banyak juga lo, so proud of my team.
                </p>
            </div>

            <div class="shadow p-3 rounded-3 col">
                {{-- Untuk foto profil dan username --}}
                <div class="d-flex flex-row"> 
                    <img src="{{ asset('img/Profil Dummy.svg') }}" alt="">

                    <div class="ms-2" style=""> {{-- Untuk username dan waktu upload --}}
                        <p class="mb-0 poppins-medium text-orenyedija" style="font-size: 1.5vw">Sutara</p>
                        <p class="mb-0 poppins-medium opacity-75" style="font-size: 0.8vw">2 day ago</p>
                    </div>
                </div>

                {{-- Untuk Commentnya --}}
                <p class="mb-0 mt-3 poppins-medium" style="font-size: 0.9vw">
                    Oe bingung mau tulis apa lo, tapi ini buat contoh aja la.
                </p>
            </div>

            <div class="shadow p-3 rounded-3 col" >
                {{-- Untuk foto profil dan username --}}
                <div class="d-flex flex-row"> 
                    <img src="{{ asset('img/Profil Dummy.svg') }}" alt="">

                    <div class="ms-2" style=""> {{-- Untuk username dan waktu upload --}}
                        <p class="mb-0 poppins-medium text-orenyedija" style="font-size: 1.5vw">Alfheim - 18</p>
                        <p class="mb-0 poppins-medium opacity-75" style="font-size: 0.8vw">1 day ago</p>
                    </div>
                </div>

                {{-- Untuk Commentnya --}}
                <p class="mb-0 mt-3 poppins-medium" style="font-size: 0.9vw">
                    Wah ini website sangat membantu o, oe jadi tau kapan kapan aja expired dari barang oe, oe juga jadi inget punya barang apa aja o
                </p>
            </div>
        
        </div>

        <button class=" border-0 bg-transparent">
            <i class="bi bi-caret-right-fill rounded-circle d-flex justify-content-center align-items-center p-2 shadow"></i>
        </button>
        
    </div>

</x-master>
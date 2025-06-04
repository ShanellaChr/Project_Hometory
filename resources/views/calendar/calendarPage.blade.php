<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul My Calendar --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">My<span class="ms-3 text-orenyedija">Calendar</span></div>

    {{-- Slogan My Calendar --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-5 nunito-regular text-lg">Track your expires, track smarter!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- Div ini untuk nampung semuanya; calendar, items to expire, edit item expiration date button --}}
    <div class="d-flex">
        {{-- Div ini untuk nampung bagian kiri dari container, isinya Kalender dan Button --}}
        <div class="col-6 d-flex flex-column justify-content-center align-items-center mt-5">
            {{-- Kalender --}}
            <div class="container rounded-3 bg-orenpalette mb-5 col-10 p-4">
                {{-- Ini khusus untuk header kalendernya --}}
                {{-- Header Kalender --}}
                <div class="d-flex align-items-center justify-content-center mb-3 mt-3 calendar-line">
                    {{-- Bulan sebelumnya --}}
                    <div class="me-5 mb-3">
                        {{-- buttonnya dibuat link, tapi dia cuma bakal berubah jadi bulan sblmnya --}}
                        <a href="{{ route('calendar.show', ['month' => $prevMonth, 'year' => $prevYear]) }}">
                            <img src="{{ asset('img/White Back Button.svg') }}" alt="Previous Month" />
                        </a>
                    </div>
                    {{-- Bulan dan Tahun --}}
                    <div class="ms-5 me-5 mb-3">
                        <div class="text-center montserrat-bold text-2xl text-white">
                            {{-- utk print Full nama bulan dan Tahun --}}
                            {{ $date->format('F Y') }}
                        </div>
                    </div>
                    {{-- Bulan setelahnya --}}
                    <div class="ms-5 mb-3">
                        {{-- versi next month aja --}}
                        <a href="{{ route('calendar.show', ['month' => $nextMonth, 'year' => $nextYear]) }}">
                            <img src="{{ asset('img/White Back Button.svg') }}" alt="Next Month" class="rotate-180"/>
                        </a>
                    </div>
                </div>
                {{-- Ini khusus untuk penamaan hari harinya --}}
                <div class="d-flex justify-content-between w-100 mb-2 px-4">
                    <div class="nunito-bold text-white">Su</div>
                    <div class="nunito-bold text-white">Mo</div>
                    <div class="nunito-bold text-white">Tu</div>
                    <div class="nunito-bold text-white">We</div>
                    <div class="nunito-bold text-white">Th</div>
                    <div class="nunito-bold text-white">Fr</div>
                    <div class="nunito-bold text-white">Sa</div>
                </div>
                {{-- Tanggal dari kalender--}}
                <table class="table table-bordered text-center">
                    <tbody>
                        <?php 
                        
                        // variable yang bakal bertambah utk print tanggal sesuai bulan tahun tsb
                        $day = 1;
                        $position = 0;
                        // sama seperti di Controller, bikin variable DateTime utk bulan lalu.
                        $prevMonthDays = (new DateTime ("$prevYear-$prevMonth-01"))->format('t');
                        // utk tgl stlh bulan ini selesai
                        $nextMonthDay = 1;

                        ?>
                        {{-- ngeloop baris, di kalender ini max 6 baris (sama kyk kalender bawaan windows di bawah kanan) --}}
                        @for ($i = 0; $i < 6; $i++)
                            <tr>
                                {{-- loop kolom, utk tanggalnya --}}
                                @for ($j = 0; $j < 7; $j++)
                                    {{-- kondisi tanggal sblm tanggal 1 nya bulan tahun disaat user buka kalender --}}
                                    @if ($position < $firstDay)
                                        <?php
                                            $prevMonthDay = $prevMonthDays - ($firstDay - $position - 1);
                                        ?>
                                        <td class="prev-month">{{ $prevMonthDay }}</td>
                                    {{-- kondisi udah masuk dalam tanggal dari bulan tahun disaat user buka kalender --}}
                                    @elseif ($day <= $daysInMonth)
                                        <td class="calendar-day">
                                            {{ $day }}
                                            {{-- di tanggal, kalo ada item yg expire, bikin ada titik dibawah tanggalnya --}}
                                            {{-- to be implemented after db exists --}}
                                        </td>
                                        <?php $day++; ?>
                                    {{-- kondisi tanggal utk bulan setelahnya --}}
                                    @else
                                        <td class="next-month">{{ $nextMonthDay }}</td>
                                        <?php $nextMonthDay++; ?> 
                                    @endif
                                @endfor
                                <?php $position++; ?>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            {{-- Edit Item Expiration Date Button --}}
            <div class="d-flex mt-5">
                {{-- INI CARA NGE LINKNYA KAYAKNYA HARUS BERUBAH SESUAI LOKASI MYINVENTORYPAGE DI ROUTE, TUNGGU ROUTENYA ADA--}}
                {{-- harus customize margin left dan margin right nya. kurang panjang bro --}}
                <a href="../myInventory/myInventoryPage.blade.php" class="nunito-bold btn-dark-blue text-2xl text-center rounded-3" style="width:41vw; padding-left: 5vw; padding-right: 5vw; padding-top: 2.5vh; padding-bottom: 2.5vh;">
                    Edit Item's Expiration Date
                    {{-- gambar masih harus di resize woi --}}
                    <img src="{{ asset('img/editButton.svg') }}" alt="Edit Button" class="pencil-icon mb-1 ms-0 pe-3">
                </a>
            </div>
        </div>
        {{-- Items to Expire --}}
        <div class="col-6 border">
            
        </div>

    </div>

</x-master>
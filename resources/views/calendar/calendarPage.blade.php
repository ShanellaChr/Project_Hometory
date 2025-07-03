@section('title', 'Hometory - My Calendar')
<x-master>
    {{-- START OF SECTION JUDUL PAGE --}}
    {{-- Judul My Calendar --}}
    <div class="d-flex justify-content-center align-items-center pt-7 montserrat-bold text-5xl">My<span class="ms-3 text-orenyedija">Calendar</span></div>

    {{-- Slogan My Calendar --}}
    <div class="d-flex justify-content-center align-items-center mt-1 mb-3 nunito-regular text-lg">Track your expires, track smarter!</div>
    {{-- END OF SECTION JUDUL PAGE --}}

    {{-- Div ini untuk nampung semuanya; calendar, items to expire, edit item expiration date button --}}
    <div class="d-flex mb-5">
        {{-- Div ini untuk nampung bagian kiri dari container, isinya Kalender dan Button --}}
        <div class="col-6 d-flex flex-column justify-content-center align-items-center">
            {{-- Kalender --}}
            <div class="container rounded-3 bg-orenpalette mb-4 col-10 p-4 calendar-shadow overflow-hidden">
                {{-- Ini khusus untuk header kalendernya --}}
                {{-- Header Kalender --}}
                <div class="d-flex align-items-center justify-content-center mb-3 mt-3 calendar-line">
                    {{-- Bulan sebelumnya --}}
                    <div class="me-5 mb-3">
                        <a href="{{ route('calendar.show', ['month' => $prevMonth, 'year' => $prevYear]) }}">
                            <img src="{{ asset('img/White Back Button.svg') }}" alt="Previous Month" />
                        </a>
                    </div>
                    {{-- Bulan dan Tahun --}}
                    <div class="ms-5 me-5 mb-3">
                        <div class="text-center montserrat-bold text-3xl text-white">
                            {{ $date->format('F Y') }}
                        </div>
                    </div>
                    {{-- Bulan setelahnya --}}
                    <div class="ms-5 mb-3">
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
                <table class="w-100 calendar-table">
                    <tbody>
                        <?php
                        // variable yang bakal bertambah utk print tanggal sesuai bulan tahun tsb
                        $day = 1;
                        $position = 0;
                        // sama seperti di Controller, bikin variable DateTime utk bulan lalu.
                        $prevMonthDays = (new DateTime("$prevYear-$prevMonth-01"))->format('t');
                        // utk tgl stlh bulan ini selesai
                        $nextMonthDay = 1;

                        // Calculate current date for selected date comparison
                        $currentYear = $date->format('Y');
                        $currentMonth = $date->format('m');
                        ?>
                        {{-- ngeloop baris, di kalender ini max 6 baris (sama kyk kalender bawaan windows di bawah kanan) --}}
                        @for ($i = 0; $i < 5; $i++)
                            <tr>
                                {{-- loop kolom, utk tanggalnya --}}
                                @for ($j = 0; $j < 7; $j++)
                                    {{-- kondisi tanggal sblm tanggal 1 nya bulan tahun disaat user buka kalender --}}
                                    @if ($position < $firstDay)
                                        <?php
                                            $prevMonthDay = $prevMonthDays - ($firstDay - $position - 1);
                                        ?>
                                        <td class="prev-month bg-transparent text-center text-xl align-middle poppins-bold text-birupalette py-3">{{ $prevMonthDay }}</td>
                                    {{-- kondisi udah masuk dalam tanggal dari bulan tahun disaat user buka kalender --}}
                                    @elseif ($day <= $daysInMonth)
                                        <?php
                                            $currentDate = sprintf('%04d-%02d-%02d', $currentYear, $currentMonth, $day);
                                        ?>
                                        <td class="calendar-day bg-transparent text-center text-xl align-middle poppins-bold text-putihpalette py-3">
                                            <a href="{{ url('/calendar', ['month' => $currentMonth, 'year' => $currentYear, 'selected_date' => $currentDate]) }}" class="text-decoration-none text-putihpalette">
                                                @if ($selectedDate == $currentDate)
                                                    <span class="selected-date">{{ $day }}</span>
                                                @else
                                                    {{ $day }}
                                                @endif
                                                @if (in_array($day, $expirations))
                                                    <span class="expiration-dot"></span>
                                                @endif
                                            </a>
                                        </td>
                                        <?php $day++; ?>
                                    {{-- kondisi tanggal utk bulan setelahnya --}}
                                    @else
                                        <td class="next-month bg-transparent text-center text-xl align-middle poppins-bold text-birupalette py-3">{{ $nextMonthDay }}</td>
                                        <?php $nextMonthDay++; ?>
                                    @endif
                                    <?php $position++; ?>
                                @endfor
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            {{-- Edit Item Expiration Date Button --}}
            <div class="mt-3 edit-button-shadow">
                <a href="../myInventory" class="nunito-bold btn-dark-blue text-xl text-center rounded-3">
                    Edit Item's Expiration Date
                    <img src="{{ asset('img/editButton.svg') }}" alt="Edit Button" class="pencil-icon mb-1 ms-0 pe-3">
                </a>
            </div>
        </div>
        {{-- Items to Expire --}}
        <div class="col-6 d-flex flex-column">
            <div class="container rounded-3 border shadow-lg col-10 pt-5 right-box">
                <div class="text-2xl montserrat-bold ms-4 mb-2">
                    Items to Expire
                </div>
                @if (!$selectedDate || $selectedItems->isEmpty())
                    <div class="text-center">
                        <img src="{{ asset('img/Calendar for No Items.svg') }}" alt="Calendar Icon" class="bg-transparent">
                        <p class="mt-5 nunito-semibold text-3xl">No Item Expired Today</p>
                    </div>
                @else
                    @foreach ($selectedItems as $item)
                        <div class="d-flex align-items-center p-2 mb-2 bg-light rounded" style="border-left: 10px solid #{{ $item->id % 2 == 0 ? 'd9534f' : '5cb85c' }};">
                            <img src="{{ asset($item->subcategory->img) }}" alt="{{ $item->name }}" style="width: 40px; height: 40px; margin-right: 10px;">
                            <div>
                                <span>{{ $item->name }}</span>
                                <span class="ms-3">{{ $item->expirationDate->qty }} item{{ $item->expirationDate->qty != 1 ? 's' : '' }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

</x-master>

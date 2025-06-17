@extends('layouts.app')

@section('content')
    <div class="page-wrapper">

        <div class="page-header d-print-none" aria-label="Page header">
            {{-- <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">SIoT</div>
                        <h2 class="page-title">Dashboard</h2>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-sm-6 col-lg-3">
                        {{-- <div class="card">
                            <div class="card-body">
                                <div class="subheader">Suhu</div>
                                <div class="d-flex align-items-baseline">
                                    <div class="h1 mb-0 me-2" id="suhu">?⁰C</div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="card">
                            <div class="card-stamp">
                                <div class="card-stamp-icon bg-blue">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-temperature-celsius">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path
                                            d="M20 9a3 3 0 0 0 -3 -3h-1a3 3 0 0 0 -3 3v6a3 3 0 0 0 3 3h1a3 3 0 0 0 3 -3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3 class="subheader">Suhu</h3>
                                <div class="h1 mb-0 me-2" id="suhu">?⁰C</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-stamp">
                                <div class="card-stamp-icon bg-blue">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-temperature-minus">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M8 13.5a4 4 0 1 0 4 0v-8.5a2 2 0 0 0 -4 0v8.5" />
                                        <path d="M8 9l4 0" />
                                        <path d="M16 9l6 0" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="subheader">Kelembaban</div>
                                <div class="d-flex align-items-baseline mb-2">
                                    <div class="h1 mb-0 me-2" id="kelembaban">?%</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-stamp">
                                <div class="card-stamp-icon bg-blue">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">Servo</div>
                                </div>
                                <p class="h1 mb-3" id="servo-text">?⁰</p>
                                <input type="range" class="form-range" min="0" max="180"
                                    name="servo-slider" id="servo-slider">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-stamp">
                                <div class="card-stamp-icon bg-blue">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-badge-4k">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M7 9v2a1 1 0 0 0 1 1h1" />
                                        <path d="M10 9v6" />
                                        <path d="M14 9v6" />
                                        <path d="M17 9l-2 3l2 3" />
                                        <path d="M15 12h-1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="subheader">LCD</div>
                                </div>
                                <div class="h1 mb-3" id="servo-text">LCD</div>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="text-lcd" id="input-lcd"
                                        placeholder="Input" autofocus autocomplete="off">
                                    <button type="button" class="btn btn-primary" id="btn-lcd">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Device Status Table</h3>
                            </div>
                            <div class="card-table table-responsive">
                                <table class="table table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>ID Device</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($devices as $device)
                                            <tr>
                                                <td>
                                                    {{ $device->serial_number }}
                                                </td>
                                                <td id="lab1/serial_number/{{ $device->serial_number }}">
                                                    ?</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Sensor Table</h3>
                            </div>
                            <div class="card-table table-responsive" style="max-height: 200px; overflow-y: auto;">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead class="sticky-top bg-white">
                                        <tr>
                                            <th class="w-4">No</th>
                                            <th class="w-20">Nama Sensor</th>
                                            <th class="w-10">Data</th>
                                            <th class="w-10">Topic</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($sensors as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}
                                                </td>
                                                <td>{{ $item->nama_sensor }}</td>
                                                <td class="text-secondary">{{ $item->data }}</td>
                                                <td class="text-secondary">{{ $item->topic }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="11" class="text-center mb-[-3]">Tidak ada data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
    <script>
        const clientId = Math.random().toString(16).substr(2, 8);
        const host = "wss://laraper.cloud.shiftr.io:443/mqtt";

        const option = {
            keepalive: 30,
            clientId: clientId,
            protocolId: "MQTT",
            protocolVersion: 4,
            username: "laraper",
            password: "laraperweb",
            clean: true,
            reconnectPeriod: 1000,
            connectTimeout: 30 * 100,
        }

        console.log("Connecting to broker...");
        const client = mqtt.connect(host, option);
        client.subscribe("lab1/#", {
            qos: 1
        });

        client.on("connect", () => {
            console.log("Connected to broker!");
        })

        client.on("message", (topic, message) => {
            if (topic === "lab1/suhu") {
                document.getElementById("suhu").innerHTML = message + " °C";
            }
            if (topic === "lab1/kelembaban") {
                document.getElementById("kelembaban").innerHTML = message + " %";
            }
            if (topic === "lab1/lcd") {
                document.getElementById("input-lcd").value = message;
            }
            if (topic === "lab1/servo") {
                document.getElementById("servo-text").innerHTML = message;
                document.getElementById("servo-slider").value = parseInt(message);
            }

            @foreach ($devices as $item)
                if (topic === "lab1/serial_number/{{ $item->serial_number }}") {
                    document.getElementById("lab1/serial_number/{{ $item->serial_number }}").innerHTML = message;
                    if (message.toString() === "Online") {
                        document.getElementById("lab1/serial_number/{{ $item->serial_number }}").style.color =
                            "green";
                    } else {
                        document.getElementById("lab1/serial_number/{{ $item->serial_number }}").style.color =
                            "red";
                    }
                }
            @endforeach
        })
    </script>
    <script>
        const servoSlider = document.getElementById('servo-slider');
        const textServo = document.getElementById('servo-text');

        servoSlider.addEventListener('input', () => {
            textServo.textContent = `${servoSlider.value}⁰`;
        })
        servoSlider.addEventListener('mouseup', () => {
            client.publish("lab1/servo", textServo.innerHTML.toString(), {
                qos: 1,
                retain: true
            });
        })


        const btnLcd = document.getElementById('btn-lcd');
        const inputLcd = document.getElementById('input-lcd');

        btnLcd.addEventListener('click', () => {
            const textValue = inputLcd.value;

            if (!textValue) {
                alert('Input tidak boleh kosong');
            } else {
                alert(`text value ${textValue}`);
                client.publish("lab1/lcd", textValue.toString(), {
                    qos: 1,
                    retain: true
                });
            }
        });
    </script>
@endsection

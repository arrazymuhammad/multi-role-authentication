<a href="{{ url($url) }}" class="box" style="
                        background: {{ $color }};

                        ">
    <span class="title">{{ $title }}</span>
    <span class="subtitle">{{ $subtitle }}</span>
</a>

@once
    <style>
        a.box {
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            padding: 10px;
            color: white;
            transition: .3s all;
        }

        a.box:hover {
            background-color: black !important;
            font-size: 120%;
            border: 2px solid white;
            border-radius: 15px;
        }

        .box .subtitle {
            font-size: 10px;
        }

        .box .title {
            font-size: 14px;
        }

    </style>
@endonce

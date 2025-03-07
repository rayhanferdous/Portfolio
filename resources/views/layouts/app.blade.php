<!doctype html>
<html lang="en">

<head>
    <title>jessica</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!--cdncss link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('import/assets/css/lightbox.min.css') }}" />

    <!--style sheet-->
    <link rel="stylesheet" href="{{ asset('import/assets/css/style.css') }}" />


</head>

<body>

    {{-- <svg>
        <symbol id="skype" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M15.14 11.813a5.076 5.076 0 0 0-1.292-.593c-.28-.085-.59-.168-.91-.247c-.28-.078-.612-.158-1.022-.248a9.315 9.315 0 0 1-1.436-.424a1.496 1.496 0 0 1-.616-.447a.843.843 0 0 1-.16-.566a.967.967 0 0 1 .205-.597a1.598 1.598 0 0 1 .7-.475A4.012 4.012 0 0 1 12.031 8a3.787 3.787 0 0 1 1.106.146a2.083 2.083 0 0 1 .663.322a1.235 1.235 0 0 1 .325.343a1 1 0 1 0 1.761-.948a3.147 3.147 0 0 0-.837-.958a4.006 4.006 0 0 0-1.319-.669A5.768 5.768 0 0 0 12.032 6a5.963 5.963 0 0 0-2.145.35A3.552 3.552 0 0 0 8.31 7.492a2.977 2.977 0 0 0-.604 1.797a2.839 2.839 0 0 0 .58 1.792a3.5 3.5 0 0 0 1.438 1.072a10.582 10.582 0 0 0 1.307.408c.008.003.014.01.022.012c.192.058.498.135.94.23c.173.038.335.079.497.12c.016.004.039.009.054.014l.018.002c.248.064.487.129.706.196a3.023 3.023 0 0 1 .763.344a1.127 1.127 0 0 1 .363.368a1.201 1.201 0 0 1 .118.585a1.152 1.152 0 0 1-.214.732a1.763 1.763 0 0 1-.802.585a3.787 3.787 0 0 1-1.487.252a3.689 3.689 0 0 1-1.703-.344a1.756 1.756 0 0 1-.616-.547a1.016 1.016 0 0 1-.202-.503a1 1 0 0 0-2 0a2.94 2.94 0 0 0 .556 1.64a3.774 3.774 0 0 0 1.342 1.187a5.621 5.621 0 0 0 2.623.567a5.708 5.708 0 0 0 2.254-.405a3.71 3.71 0 0 0 1.665-1.273a3.146 3.146 0 0 0 .584-1.926a3.09 3.09 0 0 0-.375-1.53a3.165 3.165 0 0 0-.997-1.053m7.221 1.878A10.491 10.491 0 0 0 10.31 1.64a6.499 6.499 0 0 0-8.67 8.67a10.491 10.491 0 0 0 12.05 12.05a6.499 6.499 0 0 0 8.67-8.67M16.5 21a4.506 4.506 0 0 1-2.17-.558a1.004 1.004 0 0 0-.677-.106A8.492 8.492 0 0 1 3.5 12a8.583 8.583 0 0 1 .164-1.654a1.003 1.003 0 0 0-.106-.677A4.5 4.5 0 0 1 9.67 3.558a1 1 0 0 0 .678.106A8.492 8.492 0 0 1 20.5 12a8.583 8.583 0 0 1-.164 1.654a1.003 1.003 0 0 0 .106.677A4.499 4.499 0 0 1 16.5 21" />
        </symbol>
        <symbol id="snapchat" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M21.951 15.614a4.724 4.724 0 0 1-2.981-2.173a1 1 0 1 0-1.657 1.121a7.688 7.688 0 0 0 2.403 2.335c-.135.025-.281.05-.442.075a1.367 1.367 0 0 0-1.076 1.207a6.062 6.062 0 0 0-2.014-.004a4.64 4.64 0 0 0-1.958.956a3.484 3.484 0 0 1-2.104.87h-.26a3.485 3.485 0 0 1-2.106-.872a4.627 4.627 0 0 0-1.929-.95a6.39 6.39 0 0 0-2.04.005a1.368 1.368 0 0 0-1.062-1.21a12.74 12.74 0 0 1-.435-.075A6.857 6.857 0 0 0 6.085 15.4a6.714 6.714 0 0 0 .635-.868a1 1 0 0 0-1.696-1.06a4.907 4.907 0 0 1-.448.616a4.252 4.252 0 0 1-2.553 1.528a1.224 1.224 0 0 0-1.032 1.236a1.28 1.28 0 0 0 .115.533c.316.716 1.156 1.168 2.785 1.474l.03.13c.03.118.058.239.093.348a1.289 1.289 0 0 0 1.278.945a2.59 2.59 0 0 0 .603-.087a4.67 4.67 0 0 1 1.588-.046a3.008 3.008 0 0 1 1.123.618a5.413 5.413 0 0 0 3.255 1.235h.261a5.445 5.445 0 0 0 3.274-1.248a2.915 2.915 0 0 1 1.131-.61a3.485 3.485 0 0 1 .624-.052a4.27 4.27 0 0 1 .955.106a3.788 3.788 0 0 0 .616.064a1.256 1.256 0 0 0 1.245-.923c.038-.122.067-.24.094-.355l.032-.124c1.624-.305 2.467-.754 2.767-1.44a1.17 1.17 0 0 0 .127-.48a1.244 1.244 0 0 0-1.036-1.326m-18.15-4.466a1.005 1.005 0 0 0 1.057-.484a3.138 3.138 0 0 0 1.275.338a1.794 1.794 0 0 0 1.265-.499a1 1 0 0 0 .317-.79l-.036-.602a9.902 9.902 0 0 1 .156-3.561a4.26 4.26 0 0 1 3.966-2.544l.388-.004a4.264 4.264 0 0 1 3.96 2.547a9.917 9.917 0 0 1 .156 3.564l-.01.163l-.027.444a1.028 1.028 0 0 0 .312.778a1.795 1.795 0 0 0 1.254.503a3.271 3.271 0 0 0 1.241-.365a1 1 0 0 0 .916.598h.018a1 1 0 0 0 .982-1.017a1.642 1.642 0 0 0-1.185-1.451a1.914 1.914 0 0 0-1.477.01a9.471 9.471 0 0 0-.354-4.042a6.236 6.236 0 0 0-5.796-3.732l-.393.004a6.222 6.222 0 0 0-5.777 3.73a9.586 9.586 0 0 0-.352 4.094l-.111-.052a1.909 1.909 0 0 0-2.537 1.199a1.002 1.002 0 0 0 .793 1.171" />
        </symbol>

        <symbol id="tumblr" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="m17.434 20.508l-.962-2.853a1 1 0 0 0-1.38-.583a3.763 3.763 0 0 1-1.208.249a.937.937 0 0 1-.66-.165a1.2 1.2 0 0 1-.239-.808V12h3.017a1 1 0 0 0 1-1V7.095a1 1 0 0 0-1-1H13V2a1 1 0 0 0-1-1H9.07a1.148 1.148 0 0 0-1.137 1.04a5.093 5.093 0 0 1-3.28 4.558a1 1 0 0 0-.662.94v3.585a1 1 0 0 0 1 1h1.025v4.535a6.411 6.411 0 0 0 1.886 4.478A6.905 6.905 0 0 0 12.877 23h.163c1.546-.026 3.618-.648 4.273-1.608a.998.998 0 0 0 .12-.883m-4.427.49a4.87 4.87 0 0 1-3.702-1.288a4.37 4.37 0 0 1-1.29-3.052v-5.535a1 1 0 0 0-1-1H5.992V8.206A6.954 6.954 0 0 0 9.81 3H11v4.095a1 1 0 0 0 1 1h3.002V10h-3.017a1 1 0 0 0-1 1v5.365a3.077 3.077 0 0 0 .857 2.235a2.767 2.767 0 0 0 2.096.72a5.908 5.908 0 0 0 .947-.113l.425 1.26a5.909 5.909 0 0 1-2.303.531" />
        </symbol>
        <symbol id="twitter" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M22.991 3.95a1 1 0 0 0-1.51-.86a7.48 7.48 0 0 1-1.874.794a5.152 5.152 0 0 0-3.374-1.242a5.232 5.232 0 0 0-5.223 5.063a11.032 11.032 0 0 1-6.814-3.924a1.012 1.012 0 0 0-.857-.365a.999.999 0 0 0-.785.5a5.276 5.276 0 0 0-.242 4.769l-.002.001a1.041 1.041 0 0 0-.496.89a3.042 3.042 0 0 0 .027.439a5.185 5.185 0 0 0 1.568 3.312a.998.998 0 0 0-.066.77a5.204 5.204 0 0 0 2.362 2.922a7.465 7.465 0 0 1-3.59.448A1 1 0 0 0 1.45 19.3a12.942 12.942 0 0 0 7.01 2.061a12.788 12.788 0 0 0 12.465-9.363a12.822 12.822 0 0 0 .535-3.646l-.001-.2a5.77 5.77 0 0 0 1.532-4.202m-3.306 3.212a.995.995 0 0 0-.234.702c.01.165.009.331.009.488a10.824 10.824 0 0 1-.454 3.08a10.685 10.685 0 0 1-10.546 7.93a10.938 10.938 0 0 1-2.55-.301a9.48 9.48 0 0 0 2.942-1.564a1 1 0 0 0-.602-1.786a3.208 3.208 0 0 1-2.214-.935q.224-.042.445-.105a1 1 0 0 0-.08-1.943a3.198 3.198 0 0 1-2.25-1.726a5.3 5.3 0 0 0 .545.046a1.02 1.02 0 0 0 .984-.696a1 1 0 0 0-.4-1.137a3.196 3.196 0 0 1-1.425-2.673c0-.066.002-.133.006-.198a13.014 13.014 0 0 0 8.21 3.48a1.02 1.02 0 0 0 .817-.36a1 1 0 0 0 .206-.867a3.157 3.157 0 0 1-.087-.729a3.23 3.23 0 0 1 3.226-3.226a3.184 3.184 0 0 1 2.345 1.02a.993.993 0 0 0 .921.298a9.27 9.27 0 0 0 1.212-.322a6.681 6.681 0 0 1-1.026 1.524" />
        </symbol>

        <symbol id="github" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M10.07 20.503a1 1 0 0 0-1.18-.983c-1.31.24-2.963.276-3.402-.958a5.708 5.708 0 0 0-1.837-2.415a1.2 1.2 0 0 1-.167-.11a1 1 0 0 0-.93-.645h-.005a1 1 0 0 0-1 .995c-.004.815.81 1.338 1.141 1.514a4.44 4.44 0 0 1 .924 1.36c.365 1.023 1.423 2.576 4.466 2.376l.003.098l.004.268a1 1 0 0 0 2 0l-.005-.318c-.005-.19-.012-.464-.012-1.182M20.737 5.377a5.39 5.39 0 0 0 .09-.42a6.278 6.278 0 0 0-.408-3.293a1.002 1.002 0 0 0-.615-.58c-.356-.12-1.67-.357-4.184 1.25a13.87 13.87 0 0 0-6.354 0C6.762.75 5.455.966 5.102 1.079a.997.997 0 0 0-.631.584a6.3 6.3 0 0 0-.404 3.357c.025.127.051.246.079.354a6.27 6.27 0 0 0-1.256 3.83a8.422 8.422 0 0 0 .043.921c.334 4.603 3.334 5.984 5.424 6.459a4.591 4.591 0 0 0-.118.4a1 1 0 0 0 1.942.479a1.678 1.678 0 0 1 .468-.878a1 1 0 0 0-.546-1.745c-3.454-.395-4.954-1.802-5.18-4.899a6.61 6.61 0 0 1-.033-.738a4.258 4.258 0 0 1 .92-2.713a3.022 3.022 0 0 1 .195-.231a1 1 0 0 0 .188-1.025a3.388 3.388 0 0 1-.155-.555a4.094 4.094 0 0 1 .079-1.616a7.543 7.543 0 0 1 2.415 1.18a1.009 1.009 0 0 0 .827.133a11.777 11.777 0 0 1 6.173.001a1.005 1.005 0 0 0 .83-.138a7.572 7.572 0 0 1 2.406-1.19a4.04 4.04 0 0 1 .087 1.578a3.205 3.205 0 0 1-.169.607a1 1 0 0 0 .188 1.025c.078.087.155.18.224.268A4.122 4.122 0 0 1 20 9.203a7.039 7.039 0 0 1-.038.777c-.22 3.056-1.725 4.464-5.195 4.86a1 1 0 0 0-.546 1.746a1.63 1.63 0 0 1 .466.908a3.06 3.06 0 0 1 .093.82v2.333c-.01.648-.01 1.133-.01 1.356a1 1 0 1 0 2 0c0-.217 0-.692.01-1.34v-2.35a4.882 4.882 0 0 0-.155-1.311a4.256 4.256 0 0 0-.116-.416a6.513 6.513 0 0 0 5.445-6.424A8.697 8.697 0 0 0 22 9.203a6.13 6.13 0 0 0-1.263-3.826" />
        </symbol>

        <symbol id="messenger" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M11.991 1a10.614 10.614 0 0 0-11 10.7a10.461 10.461 0 0 0 3.414 7.866l.052 1.69A1.8 1.8 0 0 0 6.256 23a1.82 1.82 0 0 0 .726-.152L8.903 22a11.895 11.895 0 0 0 3.088.4a10.615 10.615 0 0 0 11.001-10.7a10.615 10.615 0 0 0-11-10.7m0 19.4a9.862 9.862 0 0 1-2.635-.35a1.799 1.799 0 0 0-1.196.092l-1.714.756l-.045-1.493A1.81 1.81 0 0 0 5.8 18.13a8.488 8.488 0 0 1-2.81-6.43a8.66 8.66 0 0 1 9-8.7a8.705 8.705 0 1 1 0 17.4m3.735-11.815l-2.313 2.755l-3.347-2.056a.998.998 0 0 0-1.289.21l-3.05 3.636a1 1 0 1 0 1.53 1.285l2.499-2.975l3.347 2.056a.998.998 0 0 0 1.289-.21l2.866-3.415a1 1 0 1 0-1.531-1.286" />
        </symbol>
        <symbol id="behance" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M20.07 6.35H15v1.41h5.09ZM19 16.05a2.23 2.23 0 0 1-1.3.37a2.23 2.23 0 0 1-1.7-.54a2.49 2.49 0 0 1-.62-1.76H22a6.47 6.47 0 0 0-.17-2a5.08 5.08 0 0 0-.8-1.73a4.17 4.17 0 0 0-1.42-1.21a4.37 4.37 0 0 0-2-.45a4.88 4.88 0 0 0-1.9.37a4.51 4.51 0 0 0-1.47 1a4.4 4.4 0 0 0-.95 1.52a5.4 5.4 0 0 0-.33 1.91a5.52 5.52 0 0 0 .32 1.94a4.46 4.46 0 0 0 .88 1.53a4 4 0 0 0 1.46 1a5.2 5.2 0 0 0 1.94.34a4.77 4.77 0 0 0 2.64-.7a4.21 4.21 0 0 0 1.63-2.35h-2.21a1.54 1.54 0 0 1-.62.76m-3.43-4.12a1.87 1.87 0 0 1 1-1.14a2.28 2.28 0 0 1 1-.2a1.73 1.73 0 0 1 1.36.49a2.91 2.91 0 0 1 .63 1.45h-4.15a3 3 0 0 1 .11-.6Zm-5.29-.48a3.06 3.06 0 0 0 1.28-1a2.72 2.72 0 0 0 .43-1.58a3.28 3.28 0 0 0-.29-1.48a2.4 2.4 0 0 0-.82-1a3.24 3.24 0 0 0-1.27-.52a7.54 7.54 0 0 0-1.64-.16H2v12.58h6.1a6.55 6.55 0 0 0 1.65-.21a4.55 4.55 0 0 0 1.43-.65a3.13 3.13 0 0 0 1-1.14a3.41 3.41 0 0 0 .37-1.65a3.47 3.47 0 0 0-.57-2a3 3 0 0 0-1.75-1.19ZM4.77 7.86h2.59a4.17 4.17 0 0 1 .71.06a1.64 1.64 0 0 1 .61.22a1.05 1.05 0 0 1 .42.44a1.42 1.42 0 0 1 .16.72a1.36 1.36 0 0 1-.47 1.15a2 2 0 0 1-1.22.35h-2.8Zm4.84 7.44a1.28 1.28 0 0 1-.45.5a2 2 0 0 1-.65.26a3.33 3.33 0 0 1-.78.08h-3v-3.45h3a2.4 2.4 0 0 1 1.45.41a1.65 1.65 0 0 1 .54 1.39a1.77 1.77 0 0 1-.11.81" />
        </symbol>
        <symbol id="monitor" viewBox="0 0 24 24">
            <path fill="#4ba1a7"
                d="M19 2H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2.64l-.58 1a2 2 0 0 0 0 2a2 2 0 0 0 1.75 1h6.46A2 2 0 0 0 17 21a2 2 0 0 0 0-2l-.59-1H19a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3M8.77 20L10 18h4l1.2 2ZM20 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-1h16Zm0-3H4V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z" />
        </symbol>
        <symbol id="notes" viewBox="0 0 24 24">
            <path fill="#4ba1a7"
                d="M16 14H8a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2m0-4h-6a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2m4-6h-3V3a1 1 0 0 0-2 0v1h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H4a1 1 0 0 0-1 1v14a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V5a1 1 0 0 0-1-1m-1 15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6h2v1a1 1 0 0 0 2 0V6h2v1a1 1 0 0 0 2 0V6h2v1a1 1 0 0 0 2 0V6h2Z" />
        </symbol>
        <symbol id="laptop" viewBox="0 0 24 24">
            <path fill="#4ba1a7"
                d="M21 14h-1V7a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v7H3a1 1 0 0 0-1 1v2a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-2a1 1 0 0 0-1-1M6 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7H6Zm14 10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-1h16Z" />
        </symbol>
        <symbol id="menu" viewBox="0 0 24 24">
        </symbol>
    </svg> --}}

    <header id="top" class="position-sticky top-0 start-0" style="z-index:10;">
        <nav class="navbar bg-white fixed-top">
            <div class="container-fluid">
                <div class="d-flex align-items-center g-4">
                    <a class="navbar-brand d-flex" href="index.html">
                        <img src="{{ asset($settings?->logo_header) }}" class="img-fluid" id="logo">
                    </a>
                    <div class="icon px-5">
                        <a href="{{ $settings?->fb_url }}" target="_blank" rel="noopener noreferrer">
                            <svg height="24" width="24" viewBox="0 0 24 24">
                                <path fill="black"
                                    d="M15.12 5.32H17V2.14A26.11 26.11 0 0 0 14.26 2c-2.72 0-4.58 1.66-4.58 4.7v2.62H6.61v3.56h3.07V22h3.68v-9.12h3.06l.46-3.56h-3.52V7.05c0-1.05.28-1.73 1.76-1.73" />

                            </svg>
                        </a>
                        <a href="{{ $settings?->skype_url }}" target="_blank" rel="noopener noreferrer">
                            <svg height="24" width="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M15.14 11.813a5.076 5.076 0 0 0-1.292-.593c-.28-.085-.59-.168-.91-.247c-.28-.078-.612-.158-1.022-.248a9.315 9.315 0 0 1-1.436-.424a1.496 1.496 0 0 1-.616-.447a.843.843 0 0 1-.16-.566a.967.967 0 0 1 .205-.597a1.598 1.598 0 0 1 .7-.475A4.012 4.012 0 0 1 12.031 8a3.787 3.787 0 0 1 1.106.146a2.083 2.083 0 0 1 .663.322a1.235 1.235 0 0 1 .325.343a1 1 0 1 0 1.761-.948a3.147 3.147 0 0 0-.837-.958a4.006 4.006 0 0 0-1.319-.669A5.768 5.768 0 0 0 12.032 6a5.963 5.963 0 0 0-2.145.35A3.552 3.552 0 0 0 8.31 7.492a2.977 2.977 0 0 0-.604 1.797a2.839 2.839 0 0 0 .58 1.792a3.5 3.5 0 0 0 1.438 1.072a10.582 10.582 0 0 0 1.307.408c.008.003.014.01.022.012c.192.058.498.135.94.23c.173.038.335.079.497.12c.016.004.039.009.054.014l.018.002c.248.064.487.129.706.196a3.023 3.023 0 0 1 .763.344a1.127 1.127 0 0 1 .363.368a1.201 1.201 0 0 1 .118.585a1.152 1.152 0 0 1-.214.732a1.763 1.763 0 0 1-.802.585a3.787 3.787 0 0 1-1.487.252a3.689 3.689 0 0 1-1.703-.344a1.756 1.756 0 0 1-.616-.547a1.016 1.016 0 0 1-.202-.503a1 1 0 0 0-2 0a2.94 2.94 0 0 0 .556 1.64a3.774 3.774 0 0 0 1.342 1.187a5.621 5.621 0 0 0 2.623.567a5.708 5.708 0 0 0 2.254-.405a3.71 3.71 0 0 0 1.665-1.273a3.146 3.146 0 0 0 .584-1.926a3.09 3.09 0 0 0-.375-1.53a3.165 3.165 0 0 0-.997-1.053m7.221 1.878A10.491 10.491 0 0 0 10.31 1.64a6.499 6.499 0 0 0-8.67 8.67a10.491 10.491 0 0 0 12.05 12.05a6.499 6.499 0 0 0 8.67-8.67M16.5 21a4.506 4.506 0 0 1-2.17-.558a1.004 1.004 0 0 0-.677-.106A8.492 8.492 0 0 1 3.5 12a8.583 8.583 0 0 1 .164-1.654a1.003 1.003 0 0 0-.106-.677A4.5 4.5 0 0 1 9.67 3.558a1 1 0 0 0 .678.106A8.492 8.492 0 0 1 20.5 12a8.583 8.583 0 0 1-.164 1.654a1.003 1.003 0 0 0 .106.677A4.499 4.499 0 0 1 16.5 21" />

                            </svg>
                        </a>
                        <a href="{{ $settings?->linkedin_url }}" target="_blank" rel="noopener noreferrer">
                            <svg height="24" width="24" viewBox="0 0 24 24">

                                <path fill="currentColor"
                                    d="M15.14 11.813a5.076 5.076 0 0 0-1.292-.593c-.28-.085-.59-.168-.91-.247c-.28-.078-.612-.158-1.022-.248a9.315 9.315 0 0 1-1.436-.424a1.496 1.496 0 0 1-.616-.447a.843.843 0 0 1-.16-.566a.967.967 0 0 1 .205-.597a1.598 1.598 0 0 1 .7-.475A4.012 4.012 0 0 1 12.031 8a3.787 3.787 0 0 1 1.106.146a2.083 2.083 0 0 1 .663.322a1.235 1.235 0 0 1 .325.343a1 1 0 1 0 1.761-.948a3.147 3.147 0 0 0-.837-.958a4.006 4.006 0 0 0-1.319-.669A5.768 5.768 0 0 0 12.032 6a5.963 5.963 0 0 0-2.145.35A3.552 3.552 0 0 0 8.31 7.492a2.977 2.977 0 0 0-.604 1.797a2.839 2.839 0 0 0 .58 1.792a3.5 3.5 0 0 0 1.438 1.072a10.582 10.582 0 0 0 1.307.408c.008.003.014.01.022.012c.192.058.498.135.94.23c.173.038.335.079.497.12c.016.004.039.009.054.014l.018.002c.248.064.487.129.706.196a3.023 3.023 0 0 1 .763.344a1.127 1.127 0 0 1 .363.368a1.201 1.201 0 0 1 .118.585a1.152 1.152 0 0 1-.214.732a1.763 1.763 0 0 1-.802.585a3.787 3.787 0 0 1-1.487.252a3.689 3.689 0 0 1-1.703-.344a1.756 1.756 0 0 1-.616-.547a1.016 1.016 0 0 1-.202-.503a1 1 0 0 0-2 0a2.94 2.94 0 0 0 .556 1.64a3.774 3.774 0 0 0 1.342 1.187a5.621 5.621 0 0 0 2.623.567a5.708 5.708 0 0 0 2.254-.405a3.71 3.71 0 0 0 1.665-1.273a3.146 3.146 0 0 0 .584-1.926a3.09 3.09 0 0 0-.375-1.53a3.165 3.165 0 0 0-.997-1.053m7.221 1.878A10.491 10.491 0 0 0 10.31 1.64a6.499 6.499 0 0 0-8.67 8.67a10.491 10.491 0 0 0 12.05 12.05a6.499 6.499 0 0 0 8.67-8.67M16.5 21a4.506 4.506 0 0 1-2.17-.558a1.004 1.004 0 0 0-.677-.106A8.492 8.492 0 0 1 3.5 12a8.583 8.583 0 0 1 .164-1.654a1.003 1.003 0 0 0-.106-.677A4.5 4.5 0 0 1 9.67 3.558a1 1 0 0 0 .678.106A8.492 8.492 0 0 1 20.5 12a8.583 8.583 0 0 1-.164 1.654a1.003 1.003 0 0 0 .106.677A4.499 4.499 0 0 1 16.5 21" />
                            </svg>
                        </a>
                        <a href="{{ $settings?->telegram_url }}" target="_blank" rel="noopener noreferrer">
                            <svg height="24" width="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M22.265 2.428a2.048 2.048 0 0 0-2.078-.324L2.266 9.339a2.043 2.043 0 0 0 .104 3.818l3.625 1.261l2.02 6.682a.998.998 0 0 0 .119.252c.008.012.019.02.027.033a.988.988 0 0 0 .211.215a.972.972 0 0 0 .07.05a.986.986 0 0 0 .31.136l.013.001l.006.003a1.022 1.022 0 0 0 .203.02l.018-.003a.993.993 0 0 0 .301-.052c.023-.008.042-.02.064-.03a.993.993 0 0 0 .205-.114a250.76 250.76 0 0 1 .152-.129l2.702-2.983l4.03 3.122a2.023 2.023 0 0 0 1.241.427a2.054 2.054 0 0 0 2.008-1.633l3.263-16.017a2.03 2.03 0 0 0-.693-1.97M9.37 14.736a.994.994 0 0 0-.272.506l-.31 1.504l-.784-2.593l4.065-2.117Zm8.302 5.304l-4.763-3.69a1.001 1.001 0 0 0-1.353.12l-.866.955l.306-1.487l7.083-7.083a1 1 0 0 0-1.169-1.593L6.745 12.554L3.02 11.191L20.999 4Z" />
                            </svg>
                        </a>
                        <a href="{{ $settings?->whatsapp_url }}" target="_blank" rel="noopener noreferrer">
                            <svg height="24" width="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.6 14c-.2-.1-1.5-.7-1.7-.8c-.2-.1-.4-.1-.6.1c-.2.2-.6.8-.8 1c-.1.2-.3.2-.5.1c-.7-.3-1.4-.7-2-1.2c-.5-.5-1-1.1-1.4-1.7c-.1-.2 0-.4.1-.5c.1-.1.2-.3.4-.4c.1-.1.2-.3.2-.4c.1-.1.1-.3 0-.4c-.1-.1-.6-1.3-.8-1.8c-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3c-.6.6-.9 1.3-.9 2.1c.1.9.4 1.8 1 2.6c1.1 1.6 2.5 2.9 4.2 3.7c.5.2.9.4 1.4.5c.5.2 1 .2 1.6.1c.7-.1 1.3-.6 1.7-1.2c.2-.4.2-.8.1-1.2zm2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2c5.5 0 9.9-4.4 9.9-9.9c.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3c-1.5 0-2.9-.4-4.2-1.1l-.3-.2l-3.1.8l.8-3l-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4" />
                            </svg>
                        </a>
                    </div>
                </div>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navabar-toggler-icon">
                        <svg viewBox="0 0 24 24" class="text-primary menu" width="32" height="32">
                            <path fill="black"
                                d="M4 6a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1m0 12a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1m7-7a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2z" />

                        </svg>
                    </span>
                </button>
                <div class="offcanvas offcanvas-end text-white bg-black" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close btn-close-white ms-3" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 p-4">
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase ls-4 text-white" aria-current="page"
                                    href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase ls-4 text-white" aria-current="page"
                                    href="index.html">Portfolio
                                </a>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase ls-4 text-white" aria-current="page"
                                    href="index.html">Single Portfolio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase ls-4 text-white" aria-current="page"
                                    href="index.html">Single Post
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase ls-4 text-white" aria-current="page"
                                    href="index.html">Styles
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase ls-4 text-white" aria-current="page"
                                    href="index.html">Blog
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase ls-4 text-white" aria-current="page"
                                    href="index.html">Team
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase ls-4 text-white" aria-current="page"
                                    href="index.html">Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer id="footer" class="bg-black text-white py-5">
        <div class="container-sm">
            <div class="row g-md-5 my-5">
                <div class="col-md-4">
                    <div class="info-box">
                        <img src="{{ asset($settings?->logo_footer) }}" class="img-fluid">
                        <p class="py-4">
                            {{ $settings?->footer_logo_text }}
                        </p>
                        <div class="icon px-5">
                            <a href="{{ $settings?->fb_url }}" target="_blank" rel="noopener noreferrer">
                                <svg height="24" width="24" viewBox="0 0 24 24">
                                    <path fill="white"
                                        d="M15.12 5.32H17V2.14A26.11 26.11 0 0 0 14.26 2c-2.72 0-4.58 1.66-4.58 4.7v2.62H6.61v3.56h3.07V22h3.68v-9.12h3.06l.46-3.56h-3.52V7.05c0-1.05.28-1.73 1.76-1.73" />

                                </svg>
                            </a>
                            <a href="{{ $settings?->skype_url }}" target="_blank" rel="noopener noreferrer">
                                <svg height="24" width="24" viewBox="0 0 24 24">
                                    <path fill="white"
                                        d="M15.14 11.813a5.076 5.076 0 0 0-1.292-.593c-.28-.085-.59-.168-.91-.247c-.28-.078-.612-.158-1.022-.248a9.315 9.315 0 0 1-1.436-.424a1.496 1.496 0 0 1-.616-.447a.843.843 0 0 1-.16-.566a.967.967 0 0 1 .205-.597a1.598 1.598 0 0 1 .7-.475A4.012 4.012 0 0 1 12.031 8a3.787 3.787 0 0 1 1.106.146a2.083 2.083 0 0 1 .663.322a1.235 1.235 0 0 1 .325.343a1 1 0 1 0 1.761-.948a3.147 3.147 0 0 0-.837-.958a4.006 4.006 0 0 0-1.319-.669A5.768 5.768 0 0 0 12.032 6a5.963 5.963 0 0 0-2.145.35A3.552 3.552 0 0 0 8.31 7.492a2.977 2.977 0 0 0-.604 1.797a2.839 2.839 0 0 0 .58 1.792a3.5 3.5 0 0 0 1.438 1.072a10.582 10.582 0 0 0 1.307.408c.008.003.014.01.022.012c.192.058.498.135.94.23c.173.038.335.079.497.12c.016.004.039.009.054.014l.018.002c.248.064.487.129.706.196a3.023 3.023 0 0 1 .763.344a1.127 1.127 0 0 1 .363.368a1.201 1.201 0 0 1 .118.585a1.152 1.152 0 0 1-.214.732a1.763 1.763 0 0 1-.802.585a3.787 3.787 0 0 1-1.487.252a3.689 3.689 0 0 1-1.703-.344a1.756 1.756 0 0 1-.616-.547a1.016 1.016 0 0 1-.202-.503a1 1 0 0 0-2 0a2.94 2.94 0 0 0 .556 1.64a3.774 3.774 0 0 0 1.342 1.187a5.621 5.621 0 0 0 2.623.567a5.708 5.708 0 0 0 2.254-.405a3.71 3.71 0 0 0 1.665-1.273a3.146 3.146 0 0 0 .584-1.926a3.09 3.09 0 0 0-.375-1.53a3.165 3.165 0 0 0-.997-1.053m7.221 1.878A10.491 10.491 0 0 0 10.31 1.64a6.499 6.499 0 0 0-8.67 8.67a10.491 10.491 0 0 0 12.05 12.05a6.499 6.499 0 0 0 8.67-8.67M16.5 21a4.506 4.506 0 0 1-2.17-.558a1.004 1.004 0 0 0-.677-.106A8.492 8.492 0 0 1 3.5 12a8.583 8.583 0 0 1 .164-1.654a1.003 1.003 0 0 0-.106-.677A4.5 4.5 0 0 1 9.67 3.558a1 1 0 0 0 .678.106A8.492 8.492 0 0 1 20.5 12a8.583 8.583 0 0 1-.164 1.654a1.003 1.003 0 0 0 .106.677A4.499 4.499 0 0 1 16.5 21" />

                                </svg>
                            </a>
                            <a href="{{ $settings?->linkedin_url }}" target="_blank" rel="noopener noreferrer">
                                <svg height="24" width="24" viewBox="0 0 24 24">

                                    <path fill="white"
                                        d="M15.14 11.813a5.076 5.076 0 0 0-1.292-.593c-.28-.085-.59-.168-.91-.247c-.28-.078-.612-.158-1.022-.248a9.315 9.315 0 0 1-1.436-.424a1.496 1.496 0 0 1-.616-.447a.843.843 0 0 1-.16-.566a.967.967 0 0 1 .205-.597a1.598 1.598 0 0 1 .7-.475A4.012 4.012 0 0 1 12.031 8a3.787 3.787 0 0 1 1.106.146a2.083 2.083 0 0 1 .663.322a1.235 1.235 0 0 1 .325.343a1 1 0 1 0 1.761-.948a3.147 3.147 0 0 0-.837-.958a4.006 4.006 0 0 0-1.319-.669A5.768 5.768 0 0 0 12.032 6a5.963 5.963 0 0 0-2.145.35A3.552 3.552 0 0 0 8.31 7.492a2.977 2.977 0 0 0-.604 1.797a2.839 2.839 0 0 0 .58 1.792a3.5 3.5 0 0 0 1.438 1.072a10.582 10.582 0 0 0 1.307.408c.008.003.014.01.022.012c.192.058.498.135.94.23c.173.038.335.079.497.12c.016.004.039.009.054.014l.018.002c.248.064.487.129.706.196a3.023 3.023 0 0 1 .763.344a1.127 1.127 0 0 1 .363.368a1.201 1.201 0 0 1 .118.585a1.152 1.152 0 0 1-.214.732a1.763 1.763 0 0 1-.802.585a3.787 3.787 0 0 1-1.487.252a3.689 3.689 0 0 1-1.703-.344a1.756 1.756 0 0 1-.616-.547a1.016 1.016 0 0 1-.202-.503a1 1 0 0 0-2 0a2.94 2.94 0 0 0 .556 1.64a3.774 3.774 0 0 0 1.342 1.187a5.621 5.621 0 0 0 2.623.567a5.708 5.708 0 0 0 2.254-.405a3.71 3.71 0 0 0 1.665-1.273a3.146 3.146 0 0 0 .584-1.926a3.09 3.09 0 0 0-.375-1.53a3.165 3.165 0 0 0-.997-1.053m7.221 1.878A10.491 10.491 0 0 0 10.31 1.64a6.499 6.499 0 0 0-8.67 8.67a10.491 10.491 0 0 0 12.05 12.05a6.499 6.499 0 0 0 8.67-8.67M16.5 21a4.506 4.506 0 0 1-2.17-.558a1.004 1.004 0 0 0-.677-.106A8.492 8.492 0 0 1 3.5 12a8.583 8.583 0 0 1 .164-1.654a1.003 1.003 0 0 0-.106-.677A4.5 4.5 0 0 1 9.67 3.558a1 1 0 0 0 .678.106A8.492 8.492 0 0 1 20.5 12a8.583 8.583 0 0 1-.164 1.654a1.003 1.003 0 0 0 .106.677A4.499 4.499 0 0 1 16.5 21" />
                                </svg>
                            </a>
                            <a href="{{ $settings?->telegram_url }}" target="_blank" rel="noopener noreferrer">
                                <svg height="24" width="24" viewBox="0 0 24 24">
                                    <path fill="white"
                                        d="M22.265 2.428a2.048 2.048 0 0 0-2.078-.324L2.266 9.339a2.043 2.043 0 0 0 .104 3.818l3.625 1.261l2.02 6.682a.998.998 0 0 0 .119.252c.008.012.019.02.027.033a.988.988 0 0 0 .211.215a.972.972 0 0 0 .07.05a.986.986 0 0 0 .31.136l.013.001l.006.003a1.022 1.022 0 0 0 .203.02l.018-.003a.993.993 0 0 0 .301-.052c.023-.008.042-.02.064-.03a.993.993 0 0 0 .205-.114a250.76 250.76 0 0 1 .152-.129l2.702-2.983l4.03 3.122a2.023 2.023 0 0 0 1.241.427a2.054 2.054 0 0 0 2.008-1.633l3.263-16.017a2.03 2.03 0 0 0-.693-1.97M9.37 14.736a.994.994 0 0 0-.272.506l-.31 1.504l-.784-2.593l4.065-2.117Zm8.302 5.304l-4.763-3.69a1.001 1.001 0 0 0-1.353.12l-.866.955l.306-1.487l7.083-7.083a1 1 0 0 0-1.169-1.593L6.745 12.554L3.02 11.191L20.999 4Z" />
                                </svg>
                            </a>
                            <a href="{{ $settings?->whatsapp_url }}" target="_blank" rel="noopener noreferrer">
                                <svg height="24" width="24" viewBox="0 0 24 24">
                                    <path fill="white"
                                        d="M16.6 14c-.2-.1-1.5-.7-1.7-.8c-.2-.1-.4-.1-.6.1c-.2.2-.6.8-.8 1c-.1.2-.3.2-.5.1c-.7-.3-1.4-.7-2-1.2c-.5-.5-1-1.1-1.4-1.7c-.1-.2 0-.4.1-.5c.1-.1.2-.3.4-.4c.1-.1.2-.3.2-.4c.1-.1.1-.3 0-.4c-.1-.1-.6-1.3-.8-1.8c-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3c-.6.6-.9 1.3-.9 2.1c.1.9.4 1.8 1 2.6c1.1 1.6 2.5 2.9 4.2 3.7c.5.2.9.4 1.4.5c.5.2 1 .2 1.6.1c.7-.1 1.3-.6 1.7-1.2c.2-.4.2-.8.1-1.2zm2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2c5.5 0 9.9-4.4 9.9-9.9c.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3c-1.5 0-2.9-.4-4.2-1.1l-.3-.2l-3.1.8l.8-3l-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                @foreach ($settings?->menu_link as $menu)
                                    <li>
                                        <a class="text-decoration-none text-white"
                                            href="{{ $menu['link'] }}">{{ $menu['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <p>
                        {{ $settings?->footer_logo_text }}
                    </p>
                    <h3>
                        <a href="mailto:contact@yourwebsite.com"
                            class="text-white text-decoration-none">{{ $settings?->contact_mail }}</a>
                    </h3>
                </div>
            </div>
            <div class="row">
                <p>© {{ Date('Y') }} Jessica.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="{{ asset('import/assets/js/jquery.min.js') }}"></script> <!-- jquery file-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> <!--cdn link-->
    <script type="text/javascript" src="{{ asset('import/assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/plugin.js') }}"></script>

    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="{{ asset('import/assets/js/main.js') }}"></script>
</body>

</html>
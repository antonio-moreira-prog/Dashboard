<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            /* ===== Colors ===== */
            --primary-color: #211859;
            --panel-color: #FFF;
            --panel-color-seach: #000000;
            --text-color: #000;
            --black-light-color: #ffffff;
            --border-color: #e6e5e5;
            --toggle-color: #DDD;
            --box1-color: #491BF2;
            --box2-color: #6D49F2;
            --box3-color: #6F6BF2;
            --title-icon-color: #fff;
            --panel-color-back: #491BF2;

            /* ====== Transition ====== */
            --tran-05: all 0.5s ease;
            --tran-03: all 0.3s ease;
            --tran-03: all 0.2s ease;
        }

        body {
            min-height: 100vh;
            background-color: var(--primary-color);
        }

        body.dark {
            --primary-color: #211859;
            --panel-color: #000000;
            --text-color: #ffffff;
            --black-light-color: #ffffff;
            --border-color: #424242;
            --toggle-color: #FFF;
            --box1-color: #361D59;
            --box2-color: #4D2773;
            --box3-color: #241D48;
            --title-icon-color: #ffffff;
            --panel-color-back: #211859;
            --panel-color-seach: #ffffff;
        }

        /* === Custom Scroll Bar CSS === */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #211859;
        }

        body.dark::-webkit-scrollbar-thumb:hover,
        body.dark .activity-data::-webkit-scrollbar-thumb:hover {
            background: #3A3B3C;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            padding: 10px 14px;
            background-color: var(--panel-color-back);
            border-right: 1px solid var(--border-color);
            transition: var(--tran-05);
        }

        nav.close {
            width: 73px;
        }

        nav .logo-name {
            display: flex;
            align-items: center;
        }

        nav .logo-image {
            display: flex;
            justify-content: center;
            min-width: 45px;
        }

        nav .logo-image img {
            width: 40px;
            object-fit: cover;
            border-radius: 50%;
        }

        nav .logo-name .logo_name {
            font-size: 22px;
            font-weight: 600;
            color: var(--text-color);
            margin-left: 14px;
            transition: var(--tran-05);
        }

        nav.close .logo_name {
            opacity: 0;
            pointer-events: none;
        }

        nav .menu-items {
            margin-top: 40px;
            height: calc(100% - 90px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu-items li {
            list-style: none;
        }

        .menu-items li a {
            display: flex;
            align-items: center;
            height: 50px;
            text-decoration: none;
            position: relative;
        }

        .nav-links li a:hover:before {
            content: "";
            position: absolute;
            left: -7px;
            height: 5px;
            width: 5px;
            border-radius: 50%;
            background-color: var(--primary-color);
        }

        body.dark li a:hover:before {
            background-color: var(--text-color);
        }

        .menu-items li a i {
            font-size: 24px;
            min-width: 45px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--black-light-color);
        }

        .menu-items li a .link-name {
            font-size: 18px;
            font-weight: 400;
            color: var(--black-light-color);
            transition: var(--tran-05);
        }

        nav.close li a .link-name {
            opacity: 0;
            pointer-events: none;
        }

        .nav-links li a:hover i,
        .nav-links li a:hover .link-name {
            color: var(--primary-color);
        }

        body.dark .nav-links li a:hover i,
        body.dark .nav-links li a:hover .link-name {
            color: var(--text-color);
        }

        .menu-items .logout-mode {
            padding-top: 10px;
            border-top: 1px solid var(--border-color);
        }

        .menu-items .mode {
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .menu-items .mode-toggle {
            position: absolute;
            right: 14px;
            height: 50px;
            min-width: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .mode-toggle .switch {
            position: relative;
            display: inline-block;
            height: 22px;
            width: 40px;
            border-radius: 25px;
            background-color: var(--toggle-color);
        }

        .switch:before {
            content: "";
            position: absolute;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            height: 15px;
            width: 15px;
            background-color: var(--panel-color);
            border-radius: 50%;
            transition: var(--tran-03);
        }

        body.dark .switch:before {
            left: 20px;
        }

        .dashboard {
            position: relative;
            left: 250px;
            background-color: var(--panel-color);
            min-height: 100vh;
            width: calc(100% - 250px);
            padding: 10px 14px;
            transition: var(--tran-05);
        }

        nav.close~.dashboard {
            left: 73px;
            width: calc(100% - 73px);
        }

        .dashboard .top {
            position: fixed;
            top: 0;
            left: 250px;
            display: flex;
            width: calc(100% - 250px);
            justify-content: space-between;
            align-items: center;
            padding: 10px 14px;
            background-color: var(--panel-color);
            transition: var(--tran-05);
            z-index: 10;
        }

        nav.close~.dashboard .top {
            left: 73px;
            width: calc(100% - 73px);
        }

        .dashboard .top .sidebar-toggle {
            font-size: 26px;
            color: var(--text-color);
            cursor: pointer;
        }

        .dashboard .top .search-box {
            position: relative;
            height: 45px;
            max-width: 600px;
            width: 100%;
            margin: 0 30px;
        }

        .top .search-box input {
            position: absolute;
            border: 1px solid var(--border-color);
            background-color: var(--panel-color);
            padding: 0 25px 0 50px;
            border-radius: 5px;
            height: 100%;
            width: 100%;
            color: var(--text-color);
            font-size: 15px;
            font-weight: 400;
            outline: none;
        }

        .top .search-box i {
            position: absolute;
            left: 15px;
            font-size: 22px;
            z-index: 10;
            top: 50%;
            transform: translateY(-50%);
            color: var(--panel-color-seach);
        }

        .top img {
            width: 40px;
            border-radius: 50%;
        }

        .dashboard .dash-content {
            padding-top: 50px;
        }

        .dash-content .title {
            display: flex;
            align-items: center;
            margin: 60px 0 30px 0;
        }

        .dash-content .title i {
            position: relative;
            height: 35px;
            width: 35px;
            background-color: var(--primary-color);
            border-radius: 6px;
            color: var(--title-icon-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .dash-content .title .text {
            font-size: 24px;
            font-weight: 500;
            color: var(--text-color);
            margin-left: 10px;
        }

        .dash-content .boxes {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .dash-content .boxes .box {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 12px;
            width: calc(100% / 3 - 15px);
            padding: 15px 20px;
            background-color: var(--box1-color);
            transition: var(--tran-05);
        }

        .boxes .box i {
            font-size: 35px;
            color: var(--text-color);
        }

        .boxes .box .text {
            white-space: nowrap;
            font-size: 18px;
            font-weight: 500;
            color: var(--text-color);
        }

        .boxes .box .number {
            font-size: 40px;
            font-weight: 500;
            color: var(--text-color);
        }

        .boxes .box.box2 {
            background-color: var(--box2-color);
        }

        .boxes .box.box3 {
            background-color: var(--box3-color);
        }

        .dash-content .activity .activity-data {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .activity .activity-data {
            display: flex;
        }

        .activity-data .data {
            display: flex;
            flex-direction: column;
            margin: 0 15px;
        }

        .activity-data .data-title {
            font-size: 20px;
            font-weight: 500;
            color: var(--text-color);
        }


        .activity-data .data .data-list {
            font-size: 18px;
            font-weight: 400;
            margin-top: 20px;
            white-space: nowrap;
            color: var(--text-color);
        }

        .input-nome,
        .input-cpf,
        .input-email {
            width: 33.1%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid var(--border-color);
            padding: 0 10px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .btn-cadastrar {
            width: 100%;
            height: 40px;
            border-radius: 5px;
            border: 1px solid var(--border-color);
            padding: 0 10px;
            font-size: 16px;
            margin-bottom: 10px;
            background-color: var(--panel-color-back);
            color: #fff;
        }

        .btn-cadastrar:hover {
            cursor: pointer;
            background-color: var(--primary-color-hover);
            color: var(--text-color);
        }



        /* a.btn-list:hover {
            cursor: pointer;
            background-color: var(--primary-color-hover);
            color: var(--text-color);
        } */

        .btn-group {
            display: inline;
            background-color: #DDD;
            border-radius: 5px;
            text-align: center;
            color: #fff;
        }
        .btn-group:hover {
            cursor: pointer;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }



        @media (max-width: 1000px) {
            nav {
                width: 73px;
            }

            nav.close {
                width: 250px;
            }

            nav .logo_name {
                opacity: 0;
                pointer-events: none;
            }

            nav.close .logo_name {
                opacity: 1;
                pointer-events: auto;
            }

            nav li a .link-name {
                opacity: 0;
                pointer-events: none;
            }

            nav.close li a .link-name {
                opacity: 1;
                pointer-events: auto;
            }

            nav~.dashboard {
                left: 73px;
                width: calc(100% - 73px);
            }

            nav.close~.dashboard {
                left: 250px;
                width: calc(100% - 250px);
            }

            nav~.dashboard .top {
                left: 73px;
                width: calc(100% - 73px);
            }

            nav.close~.dashboard .top {
                left: 250px;
                width: calc(100% - 250px);
            }

            .activity .activity-data {
                overflow-X: scroll;
            }
        }

        @media (max-width: 780px) {
            .dash-content .boxes .box {
                width: calc(100% / 2 - 15px);
                margin-top: 15px;
            }
        }

        @media (max-width: 560px) {
            .dash-content .boxes .box {
                width: 100%;
            }
        }

        @media (max-width: 400px) {
            nav {
                width: 0px;
            }

            nav.close {
                width: 73px;
            }

            nav .logo_name {
                opacity: 0;
                pointer-events: none;
            }

            nav.close .logo_name {
                opacity: 0;
                pointer-events: none;
            }

            nav li a .link-name {
                opacity: 0;
                pointer-events: none;
            }

            nav.close li a .link-name {
                opacity: 0;
                pointer-events: none;
            }

            nav~.dashboard {
                left: 0;
                width: 100%;
            }

            nav.close~.dashboard {
                left: 73px;
                width: calc(100% - 73px);
            }

            nav~.dashboard .top {
                left: 0;
                width: 100%;
            }

            nav.close~.dashboard .top {
                left: 0;
                width: 100%;
            }
        }
    </style>

    <title>Clientes</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../../public/Images/logo.png">
            </div>

            <span class="logo_name">DashAdm</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="/">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                <li><a href="/detalhes">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Detalhes</span>
                    </a></li>
                <li><a href="mostrar-fornecedores">
                        <i class="uil uil-truck"></i>
                        <span class="link-name">Fornecedores</span>
                    </a></li>
                <li><a href="/mostrar-vendas">
                        <i class="uil uil-shopping-bag"></i>
                        <span class="link-name">Vendas</span>
                    </a></li>
                <li><a href="/mostrar-clientes">
                        <i class="uil uil-users-alt"></i>
                        <span class="link-name">Clientes</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class="uil uil-sign-out-alt"></i>
                        <span class="link-name">Sair</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Modo Dark</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Pesquisar...">
            </div>
            <img src="{{ asset('public/Images/profile.png') }}">

        </div>

        <div class="dash-content">


            <div class="activity">
                <div class="title">
                    <i class="uil uil-user-plus"></i>
                    <span class="text">Cadastro de Clientes</span>
                </div>
                <!-- (ngSubmit)="onSubmit()" #form="ngForm" -->
                <div>
                    <form action="/cadastro-cliente" method="POST">
                        @csrf
                        <input class="input-nome" type="text" name="nome" placeholder="Nome" required minlength="3">
                        <!-- <input type="number" name="cpf" placeholder="CPF" ngModel> -->
                        <input class="input-cpf" type="text" name="cpf" placeholder="CPF" minlength="14" maxlength="14" oninput="formatarCPF(this)" required>
                        <input class="input-email" type="email" name="email" placeholder="Email" required minlength="5"><br>
                        <button class="btn-cadastrar">Cadastrar</button>
                    </form>
                </div>

                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Clientes Cadastrados</span>
                </div>
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Nome</span>
                        <?php
                        foreach ($cliente as $c) {
                            echo '<span class="data-list">' . $c['nome'] . '</span><br>';
                        }
                        ?>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <?php
                        foreach ($cliente as $c) {
                            echo '<span class="data-list">' . $c['email'] . '</span><br>';
                        }
                        ?>
                    </div>
                    <div class="data type">
                        <span class="data-title">CPF</span>
                        <?php
                        foreach ($cliente as $c) {
                            echo '<span class="data-list">' . $c['cpf'] . '</span><br>';
                        }
                        ?>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Cadastrado</span>
                        <?php
                        foreach ($cliente as $c) {
                            echo '<span class="data-list">' . $c['created_at'] . '</span><br>';
                        }
                        ?>
                    </div>
                    <div class="data acao">
                        <span class="data-title">Ação</span>
                        <?php
                        foreach ($cliente as $c) {
                            echo '<div class="btn-group">';
                            echo '<a href="/editar-cliente/' . $c['id'] . ' class="btn-list"><i class="uil uil-pen"></i></a>';
                            echo '<a href="/deletar-cliente/' . $c['id'] . ' class="btn-list"><i class="uil uil-trash-alt"></i></a>';
                            echo '</div><br><br>';
                        }
                        ?>
                    </div>
                </div>
            </div>
    </section>
    <script>
        const body = document.querySelector("body"),
            modeToggle = body.querySelector(".mode-toggle");
        sidebar = body.querySelector("nav");
        sidebarToggle = body.querySelector(".sidebar-toggle");

        let getMode = localStorage.getItem("mode");
        if (getMode && getMode === "dark") {
            body.classList.toggle("dark");
        }

        let getStatus = localStorage.getItem("status");
        if (getStatus && getStatus === "close") {
            sidebar.classList.toggle("close");
        }

        modeToggle.addEventListener("click", () => {
            body.classList.toggle("dark");
            if (body.classList.contains("dark")) {
                localStorage.setItem("mode", "dark");
            } else {
                localStorage.setItem("mode", "light");
            }
        });

        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            if (sidebar.classList.contains("close")) {
                localStorage.setItem("status", "close");
            } else {
                localStorage.setItem("status", "open");
            }
        });

        function formatarCPF(input) {
            let cpf = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); // Insere o primeiro ponto
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); // Insere o segundo ponto
            cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Insere o traço
            input.value = cpf;
        }
    </script>
</body>

</html>

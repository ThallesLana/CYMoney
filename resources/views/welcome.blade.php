<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>
          Cy Money
        </title>
        <meta name="description" content="Simple landind page" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
        <!--Replace with your tailwind.css once created-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
        <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
        <style>
          .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
          }
        </style>
      </head>
      <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
        <!--Nav-->
        <nav id="header" class="fixed w-full z-30 top-0 text-white">
          <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
              <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                <!--Icon from: http://www.potlabicons.com/ -->
                <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                  <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                  <path
                    class="plane-take-off"
                    d="M320 96H192L144.6 24.88C137.5 14.24 145.1 0 157.9 0H354.1C366.9 0 374.5 14.24 367.4 24.88L320 96zM192 128H320C323.8 130.5 328.1 133.3 332.1 136.4C389.7 172.7 512 250.9 512 416C512 469 469 512 416 512H96C42.98 512 0 469 0 416C0 250.9 122.3 172.7 179 136.4C183.9 133.3 188.2 130.5 192 128V128zM276.1 224C276.1 212.9 267.1 203.9 255.1 203.9C244.9 203.9 235.9 212.9 235.9 224V230C230.3 231.2 224.1 232.9 220 235.1C205.1 241.9 192.1 254.5 188.9 272.8C187.1 283 188.1 292.9 192.3 301.8C196.5 310.6 203 316.8 209.6 321.3C221.2 329.2 236.5 333.8 248.2 337.3L250.4 337.9C264.4 342.2 273.8 345.3 279.7 349.6C282.2 351.4 283.1 352.8 283.4 353.7C283.8 354.5 284.4 356.3 283.7 360.3C283.1 363.8 281.2 366.8 275.7 369.1C269.6 371.7 259.7 373 246.9 371C240.9 370 230.2 366.4 220.7 363.2C218.5 362.4 216.3 361.7 214.3 361C203.8 357.5 192.5 363.2 189 373.7C185.5 384.2 191.2 395.5 201.7 398.1C202.9 399.4 204.4 399.9 206.1 400.5C213.1 403.2 226.4 407.4 235.9 409.6V416C235.9 427.1 244.9 436.1 255.1 436.1C267.1 436.1 276.1 427.1 276.1 416V410.5C281.4 409.5 286.6 407.1 291.4 405.9C307.2 399.2 319.8 386.2 323.1 367.2C324.9 356.8 324.1 346.8 320.1 337.7C316.2 328.7 309.9 322.1 303.2 317.3C291.1 308.4 274.9 303.6 262.8 299.9L261.1 299.7C247.8 295.4 238.2 292.4 232.1 288.2C229.5 286.4 228.7 285.2 228.5 284.7C228.3 284.3 227.7 283.1 228.3 279.7C228.7 277.7 230.2 274.4 236.5 271.6C242.1 268.7 252.9 267.1 265.1 268.1C269.5 269.7 283 272.3 286.9 273.3C297.5 276.2 308.5 269.8 311.3 259.1C314.2 248.5 307.8 237.5 297.1 234.7C292.7 233.5 282.7 231.5 276.1 230.3L276.1 224z"
                  />
                </svg>
                Cy Money
              </a>
            </div>
            <div class="block lg:hidden pr-4">
              <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>Menu</title>
                  <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
              </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
              <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                  <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="{{ route('register') }}">Cadastre-se</a>
                </li>
              </ul>
              <a
                id="navAction"
                class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('login') }}">
                Login
              </a>
            </div>
          </div>
          <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
        </nav>
        <!--Hero-->
        <div class="pt-24">
          <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
              <p class="uppercase tracking-loose w-full">Está na hora de salvar seu dinheiro!!!</p>
              <h1 class="my-4 text-5xl font-bold leading-tight">
                Agora é o momento de você controlar seu dinheiro
              </h1>
              <p class="leading-normal text-2xl mb-8">
                Organize seu dinheiro em tempo real em uma solução completa, prática e segura, e garanta o controle total das suas finanças.
              </p>
              <a class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('register') }}">
                Cadastre-se
              </a>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-6 text-center">
              <img class="w-full md:w-4/5 z-50" src="images/Investing-bro.svg" />
          </div>
        </div>
        <div class="relative -mt-12 lg:-mt-24">
          <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                <path
                  d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                  opacity="0.100000001"
                ></path>
                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
              </g>
              <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path
                  d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
                ></path>
              </g>
            </g>
          </svg>
        </div>
        <section class="bg-white border-b py-8">
          <div class="container max-w-5xl mx-auto m-8">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                O guia para o seu
                sucesso financeiro
            </h2>
            <div class="w-full mb-4">
              <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
              <div class="w-5/6 sm:w-1/2 p-6">
                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    Saiba para onde está indo seu dinheiro
                </h3>
                <p class="text-gray-600 mb-8">
                    Realize os lançamentos e visualize de forma ampla\n o destino de cada centavo!
                </p>
              </div>
              <div class="w-full sm:w-1/2 p-6">
                <img class="w-full sm:h-64 mx-auto" src="images/apresentation01.svg" />
              </div>
            </div>
            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
              <div class="w-full sm:w-1/2 p-6 mt-6">
                <img class="w-full sm:h-64 mx-auto" src="images/apresentation02.svg" />
              </div>
              <div class="w-full sm:w-1/2 p-6 mt-6">
                <div class="align-middle">
                  <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                    Utilizei gratuitamente, o CY Money é para todos!
                  </h3>
                  <p class="text-gray-600 mb-8">
                    Com CY Money, você está 100% no controle da sua grana!!!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        {{-- Aprenda sobre finanças --}}
        <section class="bg-white border-b py-8">
          <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
              Aprenda sobre finanças
            </h2>
            <div class="w-full mb-4">
              <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
              <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                  <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                    MAIS ACESSADOS
                  </p>
                  <div class="w-full font-bold text-xl text-gray-800 px-6">
                    7 dicas para ensinar educação financeira para as crianças
                  </div>
                  <p class="text-gray-800 text-base px-6 mb-5">
                    A educação financeira é muito importante para todas as pessoas, por isso deveria começar a ser ensinada logo na primeira etapa de nossas vidas, na infância...
                  </p>
                </a>
              </div>
              <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-start">
                  <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Ler mais
                  </button>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
              <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                  <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                    MAIS ACESSADOS
                  </p>
                  <div class="w-full font-bold text-xl text-gray-800 px-6">
                    É possível tirar os juros de uma dívida?
                  </div>
                  <p class="text-gray-800 text-base px-6 mb-5">
                    A Pesquisa de Endividamento e Inadimplência do Consumidor (Peic), da Confederação Nacional do Comércio (CNC), revelou que 77,7% dos brasileiros estavam endividados em abril de 2022...
                  </p>
                </a>
              </div>
              <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-center">
                  <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Ler mais
                  </button>
                </div>
              </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
              <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                  <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                    MAIS ACESSADOS
                  </p>
                  <div class="w-full font-bold text-xl text-gray-800 px-6">
                    5 formas de ganhar dinheiro em 2022
                  </div>
                  <p class="text-gray-800 text-base px-6 mb-5">
                    Ao encerrar uma conta bancária, você se certificou de que não havia dinheiro para recuperar? Ou, diante de uma necessidade financeira, chegou a considerar a possibilidade de recorrer a benefícios ou opções de créditos mais vantajosas...
                  </p>
                </a>
              </div>
              <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-end">
                  <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Ler mais
                  </button>
                </div>
              </div>
            </div>
          </div>
        </section>
        {{-- Preços --}}
        <section class="bg-gray-100 py-8">
          <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
              Preços
            </h2>
            <div class="w-full mb-4">
              <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
              <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                  <div class="p-8 text-3xl font-bold text-center border-b-4">
                    Grátis
                  </div>
                  <ul class="w-full text-center text-sm">
                    <li class="border-b py-4">Controle de contas</li>
                    <li class="border-b py-4">Limite de gastos</li>
                    <li class="border-b py-4">Alertas</li>
                  </ul>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                  <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                    R$ 0,00
                    <br/>
                    <span class="text-base">Tenha acesso a recursos exclusivos que te ajudam a economizar, planejar e cuidar melhor do seu dinheiro!</span>
                  </div>
                  <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      Cadastre-se
                    </button>
                  </div>
                </div>
              </div>
              <div class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                  <div class="w-full p-8 text-3xl font-bold text-center">Semestral</div>
                  <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                  <ul class="w-full text-center text-base font-bold">
                    <li class="border-b py-4">Controle de contas</li>
                    <li class="border-b py-4">Limite de gastos</li>
                    <li class="border-b py-4">Alertas</li>
                    <li class="border-b py-4">Conciliação bancária</li>
                  </ul>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                  <div class="w-full pt-6 text-4xl font-bold text-center">
                    R$ 72,00
                    <br/>
                    <span class="text-base">Valor cobrado a cada 6 meses<br/> no cartão de crédito ou boleto.<br/> Todos os recursos premium incluídos.</span>
                  </div>
                  <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      Cadastre-se
                    </button>
                  </div>
                </div>
              </div>
              <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                  <div class="p-8 text-3xl font-bold text-center border-b-4">
                    Anual
                  </div>
                  <ul class="w-full text-center text-sm">
                    <li class="border-b py-4">Controle de contas</li>
                    <li class="border-b py-4">Limite de gastos</li>
                    <li class="border-b py-4">Alertas</li>
                    <li class="border-b py-4">Conciliação bancária</li>
                  </ul>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                  <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                    R$ 96,00
                    <br/>
                    <span class="text-base">Valor cobrado 1 vez por ano<br/> no cartão de crédito ou boleto.<br/> Todos os recursos premium incluídos.</span>
                  </div>
                  <div class="flex items-center justify-center">
                    <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                      Cadastre-se
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Change the colour #f8fafc to match the previous section colour -->
        <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
              <g class="wave" fill="#f8fafc">
                <path
                  d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
                ></path>
              </g>
              <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                  <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                  <path
                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                    opacity="0.100000001"
                  ></path>
                  <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                </g>
              </g>
            </g>
          </g>
        </svg>
        <section class="container mx-auto text-center py-6 mb-12">
          <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
            Dúvidas?
          </h2>
          <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
          </div>
          <h3 class="my-4 text-3xl leading-tight">
            Caso tenha ficado com alguma dúvida sobre o uso da plataforma, nossa Central de Ajuda está cheia de dicas incríveis para você aproveitar o CY Money ao máximo!
          </h3>
          <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Central de ajuda
          </button>
        </section>
        <!--Footer-->
        <footer class="bg-white">
          <div class="container mx-auto px-8">
            <div class="w-full flex flex-col md:flex-row py-6 align-middle justify-center">
              <div class="mb-3 text-black">
                <div class="logo">
                  <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                      <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                      <path
                        class="plane-take-off"
                        d="M320 96H192L144.6 24.88C137.5 14.24 145.1 0 157.9 0H354.1C366.9 0 374.5 14.24 367.4 24.88L320 96zM192 128H320C323.8 130.5 328.1 133.3 332.1 136.4C389.7 172.7 512 250.9 512 416C512 469 469 512 416 512H96C42.98 512 0 469 0 416C0 250.9 122.3 172.7 179 136.4C183.9 133.3 188.2 130.5 192 128V128zM276.1 224C276.1 212.9 267.1 203.9 255.1 203.9C244.9 203.9 235.9 212.9 235.9 224V230C230.3 231.2 224.1 232.9 220 235.1C205.1 241.9 192.1 254.5 188.9 272.8C187.1 283 188.1 292.9 192.3 301.8C196.5 310.6 203 316.8 209.6 321.3C221.2 329.2 236.5 333.8 248.2 337.3L250.4 337.9C264.4 342.2 273.8 345.3 279.7 349.6C282.2 351.4 283.1 352.8 283.4 353.7C283.8 354.5 284.4 356.3 283.7 360.3C283.1 363.8 281.2 366.8 275.7 369.1C269.6 371.7 259.7 373 246.9 371C240.9 370 230.2 366.4 220.7 363.2C218.5 362.4 216.3 361.7 214.3 361C203.8 357.5 192.5 363.2 189 373.7C185.5 384.2 191.2 395.5 201.7 398.1C202.9 399.4 204.4 399.9 206.1 400.5C213.1 403.2 226.4 407.4 235.9 409.6V416C235.9 427.1 244.9 436.1 255.1 436.1C267.1 436.1 276.1 427.1 276.1 416V410.5C281.4 409.5 286.6 407.1 291.4 405.9C307.2 399.2 319.8 386.2 323.1 367.2C324.9 356.8 324.1 346.8 320.1 337.7C316.2 328.7 309.9 322.1 303.2 317.3C291.1 308.4 274.9 303.6 262.8 299.9L261.1 299.7C247.8 295.4 238.2 292.4 232.1 288.2C229.5 286.4 228.7 285.2 228.5 284.7C228.3 284.3 227.7 283.1 228.3 279.7C228.7 277.7 230.2 274.4 236.5 271.6C242.1 268.7 252.9 267.1 265.1 268.1C269.5 269.7 283 272.3 286.9 273.3C297.5 276.2 308.5 269.8 311.3 259.1C314.2 248.5 307.8 237.5 297.1 234.7C292.7 233.5 282.7 231.5 276.1 230.3L276.1 224z"
                      />
                    </svg>
                    Cy Money
                  </a>
                </div>
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                  <p class="text-gray-500">Developed by Thalles</p>
                  <p>Stacks for devs</p>
                  Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- jQuery if you need it
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      -->
        <script>
          var scrollpos = window.scrollY;
          var header = document.getElementById("header");
          var navcontent = document.getElementById("nav-content");
          var navaction = document.getElementById("navAction");
          var brandname = document.getElementById("brandname");
          var toToggle = document.querySelectorAll(".toggleColour");

          document.addEventListener("scroll", function () {
            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 10) {
              header.classList.add("bg-white");
              navaction.classList.remove("bg-white");
              navaction.classList.add("gradient");
              navaction.classList.remove("text-gray-800");
              navaction.classList.add("text-white");
              //Use to switch toggleColour colours
              for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-gray-800");
                toToggle[i].classList.remove("text-white");
              }
              header.classList.add("shadow");
              navcontent.classList.remove("bg-gray-100");
              navcontent.classList.add("bg-white");
            } else {
              header.classList.remove("bg-white");
              navaction.classList.remove("gradient");
              navaction.classList.add("bg-white");
              navaction.classList.remove("text-white");
              navaction.classList.add("text-gray-800");
              //Use to switch toggleColour colours
              for (var i = 0; i < toToggle.length; i++) {
                toToggle[i].classList.add("text-white");
                toToggle[i].classList.remove("text-gray-800");
              }

              header.classList.remove("shadow");
              navcontent.classList.remove("bg-white");
              navcontent.classList.add("bg-gray-100");
            }
          });
        </script>
        <script>
          /*Toggle dropdown list*/
          /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

          var navMenuDiv = document.getElementById("nav-content");
          var navMenu = document.getElementById("nav-toggle");

          document.onclick = check;
          function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
              // click NOT on the menu
              if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                  navMenuDiv.classList.remove("hidden");
                } else {
                  navMenuDiv.classList.add("hidden");
                }
              } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
              }
            }
          }
          function checkParent(t, elm) {
            while (t.parentNode) {
              if (t == elm) {
                return true;
              }
              t = t.parentNode;
            }
            return false;
          }
        </script>
      </body>

{{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body> --}}
</html>

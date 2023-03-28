<?php
require "../db_config.php";
session_start();
date_default_timezone_set('America/Sao_Paulo');
ini_set('default_charset', 'utf-8');
if (isset($_SESSION['logado'])) :
else :
  header("Location: login.php");
endif;
error_reporting(~E_ALL);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
  <title>Soft UI Dashboard Tailwind</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link href="./assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />

</head>

<body style="background-color: #0099dc;" class="m-0 font-sans antialiased font-normal text-base leading-default text-slate-500">
  <?php include "./components/sidebar.php" ?>
  <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <?php include "./components/navbar.php" ?>
    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">

      <div class="flex flex-wrap my-6 -mx-3">
        <!-- card 1 -->

        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:flex-none lg:flex-none">
          <div style="height: 85vh !important;" class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-gray-50 bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-gray-50 p-6 pb-0">
              <div class="flex flex-wrap mt-0 mx-3">
                <div class="flex w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                  <div>
                    <h6>Cadastro de Leads</h6>
                  </div>

                </div>
                <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                  <div class="flex items-center justify-end">
                    <div class="w-32 mx-2">
                      <select id="default" class="bg-white w-32 text-left text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded text-sm">
                        <option selected>Filtrar por</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                      </select>
                    </div>
                    <button class="mr-12 flex items-center mx-2 bg-white w-32 text-blue-700 font-semibold py-2 px-4 border border-blue-500 hover:border-transparent rounded text-sm">
                      Adicionar novo cadastro
                      <svg style="margin-left: 5px;" width="12px" height="12px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>action / 1 - action, add, addition, increase, new, plus, positive icon</title>
                        <g id="Free-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                          <g transform="translate(-156.000000, -83.000000)" id="Group" stroke="#303030" stroke-width="2">
                            <g transform="translate(153.000000, 80.000000)" id="Shape">
                              <path d="M12,4 L12,20 M20,12 L4,12">

                              </path>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </button>
                    <div class="relative pr-6 lg:float-right">
                      <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-slate-400"></i>
                      </a>
                      <p class="hidden transform-dropdown-show"></p>
                      <ul dropdown-menu class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                        <li class="relative">
                          <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Action</a>
                        </li>
                        <li class="relative">
                          <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Another action</a>
                        </li>
                        <li class="relative">
                          <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Something else here</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="flex-auto p-6 px-0 pb-2">
              <div class="overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                    <th class="flex items-center w-20 ml-2 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70"><input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 mr-2 dark:bg-gray-700 dark:border-gray-600"> Marcar todos</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Nome</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Endereço</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Email</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Telefone</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Cidade</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Profissão</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Termos</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $stmt = $pdo->prepare("SELECT * from leads order by id desc");
                    $stmt->execute();
                    if ($stmt->rowCount() > 0) {
                      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        extract($row);
                    ?>
                        <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <h6 class="mb-0 ml-4 leading-normal text-sm"><?php echo $name ?></h6>
                          </td>
                          <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                            <h6 class="mb-0 leading-normal text-sm"><?php echo $address ?></h6>
                          </td>
                          <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap">
                            <h6 class="mb-0 leading-normal text-sm"><?php echo $email ?></h6>
                          </td>
                          <td class="p-2 align-middle bg-transparent text-center border-b whitespace-nowrap">
                            <h6 class="mb-0 leading-normal tex-center text-sm"><?php echo $phone ?></h6>
                          </td>
                          <td class="p-2 align-middle bg-transparent text-center border-b whitespace-nowrap">
                            <h6 class="mb-0 leading-normal tex-center text-sm"><?php echo $city ?></h6>
                          </td>
                          <td class="p-2 align-middle bg-transparent text-center border-b whitespace-nowrap">
                            <h6 class="mb-0 leading-normal tex-center text-sm"><?php echo $profession ?></h6>
                          </td>
                          <td class="p-2 align-middle bg-transparent text-center border-b whitespace-nowrap">
                            <div class="flex justify-center">
                              <?php if (!empty($term_wpp)) { ?>
                                <svg style="color:green !important" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-6 h-6">
                                  <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                              <?php } ?>
                              <?php if (!empty($term_email)) { ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-6 h-6">
                                  <path fill="#2962ff" d="M60,28a2,2,0,0,0-2,0L32,42.7,6,28a2,2,0,0,0-3,1.74V47a6,6,0,0,0,6,6H55a6,6,0,0,0,6-6V29.75A2,2,0,0,0,60,28Z" />
                                  <path fill="#2962ff" d="M55,11H9a6,6,0,0,0-6,6v3.75a2,2,0,0,0,1,1.74L31,37.74a2,2,0,0,0,2,0L60,22.49a2,2,0,0,0,1-1.74V17A6,6,0,0,0,55,11Z" />
                                </svg>
                            </div>
                          <?php } ?>
                          </td>
                        </tr>
                    <?php }
                    } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
    <!-- end cards -->
  </main>

</body>
<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4" async></script>

</html>
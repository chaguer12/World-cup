<?php
require_once('includes/dbh.inc.php');
$id = $_GET['id'];
$sql = "select * from teams where team_id = $id";
$req = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($req);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Info</title>
</head>


<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex justify-between w-[100%]">
                <div class="flex-shrink-0">

                    <img class="hidden lg:block h-8 w-auto" src="./images/world-cup.png" alt="Workflow">
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4 ">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">History</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>

                    </div>
                </div>
            </div>

            <div class="-mr-2 flex sm:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">

                    <!--
            Icon when menu is closed.

            Heroicon name: outline/menu

            Menu open: "hidden", Menu closed: "block"
          -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
            Icon when menu is open.

            Heroicon name: outline/x

            Menu open: "block", Menu closed: "hidden"
          -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <div class="sm:hidden" id="mobile-menu">

        <div class="px-2 pt-2 pb-3 space-y-1">

            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">History</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>

        </div>

    </div>
</nav>


<section class="flex justify-center items-center h-full p-32 bg-gray-300">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src=<?php echo $r['pic']; ?> alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $r['team_name']; ?></h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $r['grp']; ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span class="text-white">-Max Players:</span><?php echo $r['max_players']; ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span class="text-white">-Coach:</span><?php echo $r['coach']; ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span class="text-white">-Points:</span><?php echo $r['points']; ?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span class="text-white">-Next Game:</span><?php echo $r['next_game']; ?></p>
            
        </div>
    </div>
</section>

</body>

</html>
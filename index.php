<?php

// PHP側からRestaurantの情報を受け取る
// require_once 'vendor/autoload.php';
$restaurants = null;

?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Restaurant Chain Mock Page</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
      <div class="w-full h-screen flex flex-col items-center py-10">
        <div class="max-w-screen-lg w-full h-full">
          <div class="w-full h-full flex flex-col space-y-5">
            <!-- ここから動的に生成されたレストランの情報が入る -->
            <div class="border h-auto w-full pb-5">
              <div class="py-3 pl-2 bg-gray-400 text-white">
                <p>Restaurant Chain information</p>
              </div>
              <div class="px-5 pt-4">
                <div class="w-full p-2 bg-blue-300/50 rounded-lg border border-blue-300/50 mb-4">
                  <p class="text-blue-500/60 font-semibold text-xl">Saizeriya</p>
                </div>
                <div class="w-full p-2 text-start">
                  <p class="text-sm truncate">Company Name: Saizeriya Address: test adress Zip Code: 3099</p>
                </div>
                <hr class="my-3 border-gray-500">
                <div class="mb-2 text-2xl">
                  <h2>Employees: </h2>
                </div>
                <!-- ここから従業員の情報のリスト -->
                 <div class="p-3 border border-gray-200 font-semibold w-full">
                  <p class="truncate">ID: 9 Job Title: test Job Start Date: 2024-10-10</p>
                 </div>
                 <div class="p-3 border border-gray-200 font-semibold w-full">
                  <p class="truncate">ID: 10 Job Title: test Job Start Date: 2024-12-9</p>
                 </div>
                 <div class="p-3 border border-gray-200 font-semibold w-full">
                  <p class="truncate">ID: 11 Job Title: test Job Start Date: 2024-8-4</p>
                 </div>
                 <div class="p-3 border border-gray-200 font-semibold w-full">
                  <p class="truncate">ID: 12 Job Title: test Job Start Date: 2024-2-22</p>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>